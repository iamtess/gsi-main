<!-- list open/close -->
	<script type="text/javascript">

	function toggle_visibility(id) {
	    var list = document.getElementsByClassName("alist");
	    
	    var e = document.getElementById(id);
	    if(e.style.display == 'block') {
	        e.style.display = 'none';
	    } else {
	        e.style.display = 'block';
	    }
	}

	</script>
	
	
	 <script language="javascript"> 

     function toggle2(showHideDiv, switchTextDiv) {

    	var ele = document.getElementById(showHideDiv);
    	var text = document.getElementById(switchTextDiv);

    	if(ele.style.display == "block") {
       		ele.style.display = "none";
    		text.innerHTML = "<i class='fa fa-chevron-down'></i>";
      	}
    	else {
    		ele.style.display = "block";
    		text.innerHTML = "<i class='fa fa-chevron-up'></i>";
    	}
    }

    </script>
	
	<!-- show / hide trade pirce -->
	<script type="text/javascript">
		
		$(document).ready(function(){
        $('.text').show();
        $('.expander').click(function(){
            $('.text').slideToggle(200);
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


//$urlx = "https://rest.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_models&deploy=1";
//$urlx = "https://rest.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_inventory&deploy=1&location=12&models=21";
//$urlx = "https://rest.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_inventory&deploy=1&location=12&models=".$_POST['models'];
//$urlx = "https://rest.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_inventory&deploy=1&location=".$_POST['locations']."&models=".$_POST['models'];
$urlx = "https://3743011.restlets.api.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_inventory&deploy=1&location=".$_POST['locations'];


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

	

	
	echo '<span style="font-size:17px; font-weight:bold; font-family: \'Josefin Sans\', serif;color:#000000;">Order now for Delviery August - December 2017. All Orders submitted before 28 April 2017 receive 20% discount.</span><br><br>';
	
	echo '<table cellpadding="10" cellspacing="10" border="0">';
		
	foreach($data as $row) {
		// only these brands are displayed
		if (($row['brand_id'] == '11') || ($row['brand_id'] == '24') || ($row['brand_id'] == '19') || ($row['brand_id'] == '17')){
		echo '<tr>'; //display relevant brand logo
			echo '<td valign="top">';
			
				echo '<img src="http://www.surfindustries.com/images/brian-logo-brand-id-smll-'.$row['brand_id'].'.gif" title="brandlogo" id="brandlogo"/></td>';
			echo '<td valign="top" style="font-size:15px; font-weight:regular; font-family: \'Josefin Sans\', serif;color:#000000;">';
				echo '<table cellpadding="0" cellspacing="0" border="0">';
				foreach ($row['models'] as $models){
					
				// only these models show on the page	
				if (($models['model_name'] == 'Surfica Leashes') || ($models['model_name'] == 'GN - Fatty') || ($models['model_name'] == 'GN - Soft Surfboard') || ($models['model_name'] == 'GN - Flounder Pounder') || ($models['model_name'] == 'GN - Fatty') || ($models['model_name'] == 'GN - Fatty') || ($models['model_name'] == 'Trident - T6 Economy Paddles') || ($models['model_name'] == '3 Palms - Surf') || ($models['model_name'] == '3 Palms - SUP')){
				echo '<tr>';
					echo '<td valign="top" style="font-size:15px; font-weight:regular; font-family: \'Josefin Sans\', serif;color:#000000;">';
						//table for model name and show more/less button
					
						echo '<table cellpadding="0" cellspacing="0" border="0">';
							echo '<tr>';
								echo '<td valign="top">';
									echo '<div style="width:230px;height:48px;background:#ececec;border-radius: 8px;font-size:16px; font-weight:bold; font-family: \'Josefin Sans\', serif;color:#000000;text-align:center;" class="brandicon">';
									echo '<div style="padding-top:13px; ">'.$models['model_name'].'</div>';
									echo '</div>';
								echo '</td>';
								echo '<td style="padding-left:8px;">';
									echo '<div style="width:50px;height:48px;background:#ececec;border-radius: 8px;font-size:16px; font-weight:bold; font-family: \'Josefin Sans\', serif;color:#000000;text-align:center;" class="brandicon">';
									echo '<div style="padding-top:13px; ">';
									echo '<a id="myHeader'.$moreCounter.'" style="color:#000000; class="regular" href="javascript:toggle2(\'myContent'.$moreCounter.'\',\'myHeader'.$moreCounter.'\');" ><i class="fa fa-chevron-down"></i></a></div>';
									echo '</div>';
								echo '</td>';
							echo '</tr>';
						echo '</table><br>';
						//div containing size info for each model color
						echo '<div id="myContent'.$moreCounter.'" style="display:none;">';
						echo '<table cellpadding="10" cellspacing="10" border="0">';
						foreach ($models['colours'] as $model_color){
						
							echo '<tr class="models">'; //this class is requried for each model colorway
							
							echo '<td  valign="top" style="font-size:10px; font-weight:regular; font-family: \'Josefin Sans\', serif;color:#000000; text-align: center; width:20%;">';
							// displays text clearance above board names of clearance products
							if ($row['brand_id'] == '9999'){
								echo '<span style="color:#f90925">CLEARANCE</span><br>';
							}
							
							if  ( $model_color['name'] == "Surfica 5.5mm Leash")
							{
								$model_color['name'] = "Surfica Leashes<br>(Boxes of 10)";
						
							}
							
							echo $model_color['name'].'<br><img src="../images/'.$model_color['image'].'" width="88" height="108" alt=""/></td>';
							echo '<td>'; //size information
								echo '<div style="background:#ececec;padding:10px;border-radius: 8px;">';
							if ($model_color['name'] == "Surfica Leashes<br>(Boxes of 10)" ){
								
								$model_color['name'] = "Surfica Leashes (Boxes of 10)";
								
								echo "<p><strong>NB:</strong> Leashes are only available in Boxes of 10.</p><p><strong>EG</strong>: 1 = 10 Leashes.</p>";
								
							}
								echo '<table cellpadding="0" cellspacing="8" border="0">';
									echo '<tr>';
										echo '<input type="hidden" value="'.$model_color['name'].'" name="modelName[]" id="modelName">';
										echo '<td valign="top" style="font-size:17px; font-weight:bold; font-family: \'Josefin Sans\', serif;color:#000000;">size</td>
											<td valign="top" style="font-size:17px; font-weight:bold; font-family: \'Josefin Sans\', serif;color:#000000;width:65px;text-align:center;">order</td>
											<td valign="top" style="font-size:17px; font-weight:bold; font-family: \'Josefin Sans\', serif;color:#000000;"><span class="text">trade</span></td>
											<td valign="top" style="font-size:17px; font-weight:bold; font-family: \'Josefin Sans\', serif;color:#000000;">total</td>
											</tr>';
										foreach ($model_color['sizes'] as $size_row){
									echo '<tr class="sizes">';		
									echo '<td valign="top"  style="text-align:left;font-size:12px;font-weight:regular; font-family: \'Josefin Sans\', serif;color:#000000;">';
			
			
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
										
											
										
										echo '<input type="hidden" value="'.$size_row['id'].'" name="sizeID[]" id="sizeID'.$count.'">';
										echo '<input type="hidden" value="'.$size_row['size'].'" name="sizeName[]" id="sizeName'.$count.'">';
										echo '<input type="hidden" value="'.$size_row['sku'].'" name="sizeSKU[]" id="sizeSKU'.$count.'">';
										
										
										if ($size_row['available'] =='0'){
											$bgcol = 'background-color: #eed4d4;';
										}
										 elseif (($size_row['available'] == '3') || ($size_row['available'] == '2') || ($size_row['available'] == '1')){
											$bgcol = 'background-color: #f8bd69;';
										}
										else {
											$bgcol = 'background-color: #c4df9b;';
										}
										echo '<td valign="top"  style="text-align:center;font-size:12px;font-weight:regular; font-family: \'Josefin Sans\', serif;color:#000000;">';
										//quantity required inpout box
										echo '<input class="sizeQty"  type="number" min="0" id="qty'. $count.'" name="qty[]" style="width: 28px;"></td>';

											
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
											

										$tradePrice = $size_row['trade_price'];
											
										if  ( $model_color['name'] == "Surfica Leashes (Boxes of 10)")
										{
											$tradePrice = $tradePrice * 10;
											
										}
											

										if (strpos($size_row['trade_price'],'.') == false)
										   {
										   $tradePrice = $tradePrice. ".00";


										   }
									   else 
									   {	
										   $tradePrice = sprintf("%01.2f", $tradePrice);
										   if (number_format($tradePrice, 2)){
										   $tradePrice  = number_format($tradePrice, 2);

										   }


									   }
										
										
										echo '<input type="hidden" value="'.$tradePrice.'" name="tradePrice[]" id="price'.$count.'">';

										//echo '<input class="sizeInput"  type="text" id="price'.$count.'" name="price'.$count.'"  value="'.$tradePrice.'"  disabled style="width: 45px;"><br>';
										echo '<td valign="top"  style="text-align:left;font-size:12px;font-weight:regular; font-family: \'Josefin Sans\', serif;color:#000000;">';
										echo '<span  class="text"><input class="sizeInput"  type="text" id="price'.$count.'" name="price[]"  value="$'.$tradePrice.'"  disabled style="width:65px;" ></span></td>';
											
										echo '<td valign="top"  style="text-align:left;font-size:12px;font-weight:regular; font-family: \'Josefin Sans\', serif;color:#000000;">';
										echo '<input  class="sizeInput" type="text" id="total'. $count.'" name="total"   disabled style="width:65px;"></td>'; 


										//echo 'count before:' . $count;

										$count = $count + 1;
										//$howMany = 'howMany'.$count;
										//$tPrice = 'tPrice'.$count;

										//echo 'count after:' . $count;

									} 
									echo '</tr>';
								echo '</table>';
								echo '</div>';	//end div for color and sizing info	
											
							
							echo '</td>'; 
						echo '</tr>'; 
						} 
					echo '</table>';

				  echo '</td>'; 
		  	 echo '</tr>'; 
				$moreCounter = $moreCounter +1;	
			}		}
			 echo '</div>'; 
			 
			 echo '</table>';
			 echo '</td>';//end model logo td
			 echo '</tr>';
			
	} }
echo '</table>';
			
	fclose($open)

//}

?>