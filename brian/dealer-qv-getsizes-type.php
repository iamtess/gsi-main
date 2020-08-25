<!-- show / hide trade price -->
	
	
	<script type="text/javascript">
		
		$(document).ready(function(){
        $('.textHide').hide();
        $('.expander').click(function(){
            $('.textHide').slideToggle(200);
});
});
		
		
</script>


	
	
	
	
<?php

require_once 'OAuth.php';

function generateRandomString() {
	$length = 20;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function createContext($url, $ckey, $csecret, $tkey, $tsecret){
	$consumer = new OAuthConsumer($ckey, $csecret);
	$token = new OAuthToken($tkey, $tsecret);
	$sig = new OAuthSignatureMethod_HMAC_SHA1();
	$params = array(
		'oauth_nonce' => generateRandomString(),
		'oauth_timestamp' => idate('U'),
		'oauth_version' => '1.0',
		'oauth_token' => $tkey,
		'oauth_consumer_key' => $ckey,
		'oauth_signature_method' => $sig->get_name()
	);


	$req = new OAuthRequest('GET', $url, $params);
	$req->set_parameter('oauth_signature', $req->build_signature($sig, $consumer, $token));
	$req->set_parameter('realm', "3743011");
	
	$data = array();
	$json_string =  json_encode($data);
	
	

	$option = array(
	  'http'=>array(
		'method'=>"GET",
		'header' => $req->to_header() . ',realm="3743011"'. " \r\n" . "Host: 3743011.restlets.api.netsuite.com \r\n" . "Content-Type: application/json",
		'content' => $json_string
	  )
	);
	$context = stream_context_create($option);
	return $context;

}


//$urlx = "https://rest.na2.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_models&deploy=1";
//$urlx = "https://rest.na2.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_inventory&deploy=1&location=12&models=21";
//$urlx = "https://rest.na2.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_inventory&deploy=1&location=12&models=".$_POST['models'];
//$urlx = "https://rest.na2.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_inventory&deploy=1&location=".$_POST['locations']."&models=".$_POST['models'];
$urlx = "https://3743011.restlets.api.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_inventory&deploy=1&location=".$_POST['locations']."&groupby=type";


$ckeyx = "a6a2498b6fdc39fec03309fa44f528173f5d1562a557c617259a59769fb5cc4a";
$csecretx = "6588ba0f08d0e90cc56a1f3fff5e0efd56571032a2f017c7dbf2c20a7ef2c7aa";
$tkeyx = "e10c50bfb90f433970c6a1c1cd980231fb0d63474c52557a503638a5339b3735";
$tsecretx = "836112b0f5c1e35218068b60b287f53ab7fad078e3de0f627316b53480cda9f4";
$contextx = createContext($urlx, $ckeyx, $csecretx, $tkeyx, $tsecretx);
$open  = fopen($urlx, 'r', false, $contextx);
//fpassthru ($open);

//fpassthru($open);

$content = stream_get_contents($open); 

$data = json_decode($content, true);



		
	//echo '<option value="">Please Select Models</option>';
	
		$count='1';
		$howMany = 'howMany';
		$sizeCount = '0';
		$tPrice = '0';
		$bgcol ='';
		$moreCounter = '1';

	

	echo '
	<div class="container">
		<div class="row mb32">
			<div class="col-md-9 col-sm-12 ">
			<div class="col-md-3 mb8"><a class="TMquickLink" href="dealer-quick-view.php?warehouse='.$_POST['locations'].'"><div class="TMquickLinks">VIEW by BRAND</div></a></div>
			<div class="col-md-3 mb8"><a class="TMquickLink" href="#startClearance"><div class="TMquickLinks">CLEARANCE STOCK</div></a></div>
			<div class="col-md-4 mb8 expander"><a class="TMquickLink" href="#"><div class="TMquickLinks">SHOW / HIDE TRADE PRICE</div></a></div>
			</div>
		</div>
	</div>';
	

	
	echo '<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-12 ">
	
	
	<table cellpadding="10" cellspacing="10" border="0" width="100%">';
		
	foreach($data as $row) {
		//echo '<input type="hidden" value="'.$row['brand_id'].'" name="brandID">';
		
		echo '<tr>'; //display relevant brand logo
		
			echo '<td colspan="6" valign="top" style="min-width:30px;padding-right:10px;">';
			if ($row['item_type_id'] == '9999'){
							echo '<a name="startClearance"></a><br><br>';
							}
			
		
				echo '<div class="lrg-head-no-pad">'.$row['item_type_name'].'<br><hr></div>';
				echo '<br></td></tr>';
				echo '<tr><td valign="top">';
				echo '<table cellpadding="0" cellspacing="0" border="0" width="100%">';
				foreach ($row['models'] as $models){
				echo '<tr>';
					echo '<td valign="top">';
						//table for model name and show more/less button
						echo '<div class="quickViewModels">'.strtoupper($models['model_name']).'</div>';
								
						//div containing size info for each model color 
						
						echo '<table cellpadding="5" cellspacing="5" border="0" width="80%">';
						foreach ($models['colours'] as $model_color){
							echo '<tr class="models">'; //this class is requried for each model colorway
							echo '<td  valign="top" style="width:150px;padding-right:10px;padding-bottom:10px;" class="quickviewItemName">';
							// displays text clearance above board names of clearance products
							if ($row['item_type_id'] == '9999'){
							echo '<span style="color:#f90925">CLEARANCE</span><br>';
							}
							echo'<span class="smallText">'.$model_color['name'].'</span>';
							echo '<br><img src="https://www.surfindustries.com/images//'.$model_color['image'].'" width="88" height="108" alt=""/></td>';
							echo '<td valign="top" style="padding-right:15px;">'; //size information
								echo '<table cellpadding="0" cellspacing="8" border="0" width="100%">';
									echo '<tr>';
										echo '<td class="quickViewTable" valign="top" style="padding-right:15px;"><strong>sku</strong></td>
										<td class="quickViewTable" valign="top" style="min-width:30px;padding-right:15px;"><strong>size</strong></td>
											<td class="quickViewTable" valign="top" style="min-width:25px;padding-right:15px;"><strong>stock</strong></td>
											<td class="quickViewTable" valign="top" style="width: 65px;padding-right:20px;"><strong>retail</strong></td>
											<td class="quickViewTable" valign="top" style="width: 65px;"><span class="textHide"><strong>trade</strong></span></td>
											</tr>';
										
										foreach ($model_color['sizes'] as $size_row){
									echo '<tr>';		
									echo '<td valign="top" style="text-align:left;font-size:10px;font-weight:regular;">'.$size_row['sku'].'</td>';
									echo '<td valign="top" class="sizes" style="text-align:left;">';
			
			
										if ($size_row['size'] == 'Adjustable'){
											echo 'Adj';
										}
										elseif ($size_row['size'] == 'Adjustable 6 Pack'){
											echo 'Adj 6pk';
										}
										elseif ($size_row['size'] == 'Adjustable 10 Pack'){
											echo 'Adj 10pk';
										}
										elseif ($size_row['size'] == 'Lever Lock Single'){
											echo 'Lvr Lck';
										}
										elseif ($size_row['size'] == 'Lever Lock 6 Pack'){
											echo 'Lvr Lck 6pk';
										}
										elseif ($size_row['size'] == 'Lever Lock 10 Pack'){
											echo 'Lvr Lck 10pk';
										}
										else {
											//show sizes	
											echo $size_row['size'];
										}
										echo '</td>';
										echo '<td valign="top" class="sizes" style="text-align:left;">';
											
										//show Stock on hand
											
										if ($size_row['available'] > 10)	{
											echo '10+';
											echo '</td>';
											
										}
										else {	
											
										echo $size_row['available'];
										echo '</td>';
										}
											
										if (strpos($size_row['rrp'],'.') == false)
										   {
										   $rrp = $size_row['rrp']. ".00";


										   }
									   else 
									   {	
										   $rrp = sprintf("%01.2f", $size_row['rrp']);
										   if (number_format($rrp, 2)){
										   $rrp  = number_format($rrp, 2);

										   }


									   }
											

										if (strpos($size_row['trade_price'],'.') == false)
										   {
										   $tradePrice = $size_row['trade_price']. ".00";


										   }
									   else 
									   {	
										   $tradePrice = sprintf("%01.2f", $size_row['trade_price']);
										   if (number_format($tradePrice, 2)){
										   $tradePrice  = number_format($tradePrice, 2);

										   }


									   }
										
										echo '<td valign="top" class="sizes" style="text-align:left;">$'.$rrp.'</td>';	
										echo '<td valign="top" class="sizes" style="text-align:left;"><span  class="textHide">$'.$tradePrice.'</span></td>';
										


										//echo 'count before:' . $count;

										$count = $count + 1;
										//$howMany = 'howMany'.$count;
										//$tPrice = 'tPrice'.$count;

										//echo 'count after:' . $count;

									}
									echo '</tr>';
								echo '</table>';
								
										
							
							echo '</td>'; 
						echo '</tr>'; 
						}
					echo '</table>';

				  echo '</td>'; 
		  	 echo '</tr>'; 
				$moreCounter = $moreCounter +1;	
			}		
			 
			 
			 echo '</table>';
			 echo '</td>';//end model logo td
			 echo '</tr>';
			 echo '<tr>';
			 echo '<td colspan = "2">';
			 
			 echo '</td>';
			 echo '</tr>';
	}
echo '</table></div></div</div>';
			
	fclose($open)

//}

?>