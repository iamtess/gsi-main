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

         function toggle3(contentDiv, controlDiv) {

            if (contentDiv.constructor == Array) {

                    for(i=0; i < contentDiv.length; i++) {

                         toggle2(contentDiv[i], controlDiv[i]);

                    }

            }

            else {

                   toggle2(contentDiv, controlDiv);

            }

    }

    </script>
	
	
	 <script language="javascript"> 

     function toggle2(showHideDiv, switchTextDiv, switchStyleDiv) {

    	var ele = document.getElementById(showHideDiv);
    	var text = document.getElementById(switchTextDiv);
		var style = document.getElementById(switchStyleDiv);

    	if(ele.style.display == "block") {
       		ele.style.display = "none";
    		text.innerHTML = " SHOW MODELS&nbsp;&nbsp;&nbsp;<i class='fa fa-chevron-down'></i>";
      	}
    	else {
    		ele.style.display = "block";
    		text.innerHTML = "HIDE MODELS&nbsp;&nbsp;&nbsp;<i class='fa fa-chevron-up'></i>";
    	}
    }

    </script>
	
	<!-- show / hide trade pirce -->
	<script type="text/javascript">
		
		$(document).ready(function(){
        $('.text').hide();
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

//echo " get sizes brand open: ".$_POST['customer'];

//$urlx = "https://rest.na2.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_models&deploy=1";
//$urlx = "https://rest.na2.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_inventory&deploy=1&location=12&models=21";
//$urlx = "https://rest.na2.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_inventory&deploy=1&location=12&models=".$_POST['models'];
//$urlx = "https://rest.na2.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_inventory&deploy=1&location=".$_POST['locations']."&models=".$_POST['models'];
$urlx = "https://3743011.restlets.api.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_inventory&deploy=1&location=".$_POST['locations']."&customer=".$_POST["customer"];


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
		$displayCounter = '1';
		

	


	

	
		
	foreach($data as $row) {
		//echo '<input type="hidden" value="'.$row['brand_id'].'" name="brandID">';
		
		//these variables are used to form a string to feed to the SHOW / HIDE all models link
		$displayContent = '\'myContent'.$moreCounter.'\', ';
		$displayHeader = '\'myHeader'.$moreCounter.'\', ';
		$allContent .= $displayContent;
		$allHeader .= $displayHeader;
		
		$displayAllContent = rtrim($allContent,', ');
		$displayAllHeader = rtrim($allHeader,', ');
		
		
		//display show / hide ALL models link only once. 
		if ($row['brand_id'] == '9999'){
		
		echo '
	<div class="container">
		<div class="row mb32">
		<div class="col-md-9 col-sm-12 ">
			<div class="col-md-4 mb8"><a class="TMquickLink"  href="javascript:toggle3(['.$displayAllContent.'], ['.$displayAllHeader.']);" ><div class="TMquickLinks">SHOW/HIDE ALL MODELS</div></a></div>
			<div class="col-md-3 mb8 "><a class="TMquickLink" href="#startClearance"><div class="TMquickLinks">CLEARANCE STOCK</div></a></div>
			<div class="col-md-4 mb8 expander"><a class="TMquickLink" href="#"><div class="TMquickLinks">SHOW/HIDE TRADE PRICE</div></a></div>
			</div>
		</div>
	</div>';
	
	
			
			
		}
		
		//open table just once at beginning of loop
		if ($moreCounter == 1){
			
			echo '<table cellpadding="0" cellspacing="10" border="0" width="100%" style="width:100%;">';
			
		}
		
		
		echo '<tr>'; //display relevant brand logo
			echo '<td valign="top">';
			if ($row['brand_id'] == '9999'){
							echo '<a name="startClearance"></a>';
							}
				echo '<table cellpadding="0" cellspacing="0" border="0">';
					echo '<td><img src="https://www.surfindustries.com/images/brian-logo-brand-id-smll-'.$row['brand_id'].'.gif" title="brandlogo" id="brandlogo"/></td>';
					echo '<td valign="center" style="padding-top:13px;padding-left:10px;">';
					echo '<div style="width:150px;height:23px;border-radius: 8px;font-size:13px; font-weight:bold; font-family: \'Josefin Sans\', serif;color:#000000;text-align:center;" class="brandicon">';
					echo '<a id="myHeader'.$moreCounter.'" style="color:#000000;text-decoration:none; class="regular" href="javascript:toggle2(\'myContent'.$moreCounter.'\',\'myHeader'.$moreCounter.'\');" >SHOW MODELS&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-down"></i></a>';
					echo '</div>';
					echo '</td>';
				echo '</tr>';
				echo '</table>';
		
		    echo '</td>';
	  echo '</tr><tr>';
			echo '<td valign="top" style="font-size:15px; font-weight:regular; font-family: \'Josefin Sans\', serif;color:#000000;">';
			echo '<div id="myContent'.$moreCounter.'" style="display:none;">';
				echo '<table cellpadding="0" cellspacing="0" border="0" width="100%" style="width:100%;">';
				foreach ($row['models'] as $models){
				echo '<tr>';
					echo '<td valign="top" style="font-size:15px;font-weight:regular; font-family: \'Josefin Sans\', serif;color:#000000;">';
						//table for model name and show more/less button
					
						
									echo '<div style="width:200px;height:48px;font-size:16px; font-weight:bold; font-family: \'Raleway\', serif;color:#000000;text-align:center;" class="brandicon">';
									echo '<div style="padding-top:13px; ">'.$models['model_name'].'<br><hr></div>';
									echo '</div>';
								echo '<br>';
						//div containing size info for each model color
						
						echo '<table cellpadding="10" cellspacing="10" border="0" width="100%">';
						foreach ($models['colours'] as $model_color){
						
							echo '<tr class="models">'; //this class is requried for each model colorway
							
							echo '<td  valign="top" style="font-size:10px; font-weight:regular; font-family: \'Josefin Sans\', serif;color:#000000; text-align: center; width:40%;line-height: 14px !important;">';
							// displays text clearance above board names of clearance products
							if ($row['brand_id'] == '9999'){
							echo '<span style="color:#f90925">CLEARANCE</span><br>';
							}
							echo $model_color['name'].'<br><img src="../images/'.$model_color['image'].'" width="108" height="133" alt=""/></td>';
							echo '<td valign="top">'; //size information
								echo '<div style="padding:10px;">';
								echo '<table cellpadding="0" cellspacing="8" border="0" width="100%">';
									echo '<tr>';
										echo '<input type="hidden" value="'.$model_color['name'].'" name="modelName[]" id="modelName">';
										
							
							
							echo '<td class="quickViewTable" valign="top" style="min-width:100px;padding-right:20px;" ><strong>sku</strong></td>
							<td class="quickViewTable" valign="top" style="min-width:30px;padding-right:15px;" ><strong>size</strong></td>
							   	  <td class="quickViewTable" valign="top" style="min-width:25px;padding-right:15px;"><strong>stock</strong></td>
								  <td class="quickViewTable" valign="top" style="min-width:25px;padding-right:15px;width:65px;text-align:center;"><strong>order</strong></td>
								  <td class="quickViewTable" valign="top" style="min-width: 45px;"><strong>retail</strong></td>
								  <td class="quickViewTable" valign="top" style="min-width: 45px;"><span class="text"><strong>trade</strong></span></td>
								  <td class="quickViewTable" valign="top" ><strong>total</strong></td>
								
								
								
								
								
								
								
								
								</tr>';
										foreach ($model_color['sizes'] as $size_row){
										echo '<tr><td colspan="7"><hr></td></tr>';
											
										//echo 	'<tr><td colspan="6" style="text-align:left;font-size:10px;font-weight:regular;">'.$size_row['sku'].'</td></tr>';
											
											
									echo '<tr class="sizes">';		
									echo '<td valign="top"style="text-align:left;font-size:10px;font-weight:regular;">'.$size_row['sku'].'</td>';
									echo '<td valign="top"  style="text-align:left;font-size:12px;font-weight:regular; ">';
			
			
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
										echo '<td valign="top"  style="text-align:center;font-size:12px;font-weight:regular; ">';
										
										//show Stock on hand
											
										if ($size_row['available'] > 10)	{
											echo '10+';
											echo '</td>';
											
										}
										else {	
											
										echo $size_row['available'];
										echo '</td>';
										}
											
									
										echo '<input type="hidden" value="'.$size_row['id'].'" name="sizeID[]" id="sizeID'.$count.'">';
										echo '<input type="hidden" value="'.$size_row['size'].'" name="sizeName[]" id="sizeName'.$count.'">';
										
										
										//if ($size_row['available'] =='0'){
										//	$bgcol = 'background-color: #eed4d4;';
										//}
										// elseif (($size_row['available'] == '3') || ($size_row['available'] == '2') || ($size_row['available'] == '1')){
										//	$bgcol = 'background-color: #f8bd69;';
										//}
										//else {
										//	$bgcol = 'background-color: #c4df9b;';
										//}
										echo '<td valign="top"  style="text-align:center;font-size:12px;font-weight:regular; ">';
										//quantity required inpout box
										echo '<input class="sizeQty" style="'.$bgcol.'width:35px;" type="number" min="0" id="qty'. $count.'" name="qty[]" ></td>';

											
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
										echo '<td valign="top" style="font-size:12px;font-weight:regular;">';
										echo '<input type="text" id="rrp'.$count.'" name="rrp[]"  value="$'.$rrp.'"  disabled style="padding-left:0px;height:18px;background-color:#ffffff;"></td>';	

										echo '<input type="hidden" value="'.$size_row['trade_price'].'" name="tradePrice[]" id="price'.$count.'">';

										//echo '<input class="sizeInput"  type="text" id="price'.$count.'" name="price'.$count.'"  value="'.$tradePrice.'"  disabled style="width: 45px;"><br>';
										echo '<td valign="top"  style="font-size:12px;font-weight:regular; ">';
										echo '<span  class="text"><input class="sizeInput"  type="text" id="price'.$count.'" name="price[]"  value="$'.$tradePrice.'"  disabled style="padding-left:0px;height:18px;background-color:#ffffff;"></span></td>';
										echo '<td valign="top"  style="font-size:12px;font-weight:regular; ">';
										echo '<input  class="sizeInput" type="text" id="total'. $count.'" name="total"   disabled style="padding-left:0px;height:18px;background-color:#ffffff;font-weight:bold;">';
										echo'</td>'; 


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
			 }
			  
			 echo '</table>';
			  echo '<a style="text-align:left;font-size:12px;font-weight:regular;text-decoration:underline; font-family: \'Raleway\', serif;color:#000000;" href=#orderSummary>VIEW ORDER SUMMARY</a>';
			 echo '<img src="../images/spacer_grey.gif" height="1" width="100%">';
			 echo '</td>';//end model logo td
			 echo '</tr>';
			 
		
		
		
		
			 $moreCounter = $moreCounter +1;	
					
			 echo '</div>'; 
			 
			 	
	}
echo '</table>';
			
	fclose($open)

//}

?>