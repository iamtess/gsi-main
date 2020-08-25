<!-- open/close brand-->
<script language="javascript"> 

     function toggle2(showHideDiv, switchTextDiv, switchStyleDiv) {

    	var ele = document.getElementById(showHideDiv);
    	var text = document.getElementById(switchTextDiv);
		var style = document.getElementById(switchStyleDiv);

    	if(ele.style.display == "block") {
       		ele.style.display = "none";
    		text.innerHTML = " SHOW MODELS&nbsp;&nbsp;&nbsp;<i class='far fa-caret-square-down'></i>";
      	}
    	else {
    		ele.style.display = "block";
    		text.innerHTML = "HIDE MODELS&nbsp;&nbsp;&nbsp;<i class='far fa-caret-square-up'></i>";
    	}
    }

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
	
	$option = array(
	  'http'=>array(
		'method'=>"GET",
		'header' => $req->to_header() . ',realm="3743011"'. " \r\n" . "Host: 3743011.restlets.api.netsuite.com \r\n" . "Content-Type: application/json"
	  )
	);
	$context = stream_context_create($option);
	return $context;
}


//$urlx = "https://rest.netsuite.com/app/site/hosting/restlet.nl?script=130&deploy=1";
//$urlx = "https://rest.netsuite.com/app/site/hosting/restlet.nl?script=130&deploy=1&subsidiary=13";
//$urlx = "https://rest.netsuite.com/app/site/hosting/restlet.nl?script=130&deploy=1&subsidiary=[13,5]";



$urlx = "https://3743011.restlets.api.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_doug_inventory&deploy=1&customer=".$_POST['customer']."&manufacturer=".$_POST['manufacturer'];

//echo "dist2". $_POST['customer'];
//echo "manufacturer2". $_POST['manufacturer'];


//$urlx = "https://3743011-rp.restlets.api.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_doug_inventory&deploy=1&customer=3703";




$ckeyx = "a6a2498b6fdc39fec03309fa44f528173f5d1562a557c617259a59769fb5cc4a";
$csecretx = "6588ba0f08d0e90cc56a1f3fff5e0efd56571032a2f017c7dbf2c20a7ef2c7aa";
$tkeyx = "e10c50bfb90f433970c6a1c1cd980231fb0d63474c52557a503638a5339b3735";
$tsecretx = "836112b0f5c1e35218068b60b287f53ab7fad078e3de0f627316b53480cda9f4";
$contextx = createContext($urlx, $ckeyx, $csecretx, $tkeyx, $tsecretx);
$open  = fopen($urlx, 'r', false, $contextx);

//fpassthru($open);

$content = stream_get_contents($open); 

$data = json_decode($content, true);


$manufacturerSelect = $_POST["manufacturer"]
;//used to open/close brands
$count='1';

$howMany = 'howMany';
$sizeCount = '0';
$tPrice = '0';
$bgcol ='';
$moreCounter = '1';
$displayCounter = '1';



		echo '<table border="0" width="100%">';
		foreach($data as $row){
			
			
			
			if ($row['manufacturer_id'] == '1'){
				$bgColor = "#CCDDEE";
			}
			if ($row['manufacturer_id'] == '2'){
				$bgColor = "#cceeed";
			}
			if ($row['manufacturer_id'] == '3'){
				$bgColor = "#e5eecc";
			}
			if ($row['manufacturer_id'] == '4'){
				$bgColor = "#CCDDEE";
			}
			if ($row['manufacturer_id'] == '5'){
				$bgColor = "#cceeed";
			}
			if ($row['manufacturer_id'] == '6'){
				$bgColor = "#e5eecc";
			}
			
			
			
			
			
		echo '<tr>';
			
			echo '<td valign="top" width="20%" style="text-align:center;padding:5px;background-color:'.$bgColor.';font-size:15px;font-weight:600;color:#000000;">';
				  echo strtoupper($row['manufacturer_name']);
			echo '</td>';
			echo '<td valign="top">';
				echo '<table border="0" width="100%">';
					foreach ($row['brands'] as $brand_row){
					echo '<tr >';
						echo '<td valign="top" width="15%" style="padding-top:0px;padding-left:20px;padding-bottom:40px;">';
							//echo $brand['brand_name'];
							echo '<img src="https://www.surfindustries.com/images/brian-logo-brand-id-smll-'.$brand_row['brand_id'].'.gif" title="brandlogo" id="brandlogo"/></td>';
						echo '</td>';
						echo '<td valign="top"  align="left" width="80%">';	
						echo '<div style="width:150px;height:23px;border-radius: 8px;font-size:13px; padding-bottom:20px;padding-top:30px;font-weight:bold; font-family: \'Josefin Sans\', serif;color:#000000;text-align:left; class="brandicon">';
					echo '<a id="myHeader'.$moreCounter.'" style="color:#000000;text-decoration:none;" class="regularLink" href="javascript:toggle2(\'myContent'.$moreCounter.'\',\'myHeader'.$moreCounter.'\');" >SHOW MODELS&nbsp;&nbsp;&nbsp;<i class="far fa-caret-square-down"></i></a>';
					echo '</div>';
						//used to opne/close brand
						echo '<div id="myContent'.$moreCounter.'" style="display:none;padding-top:15px;">';
								echo '<table border="0" width="100%" style="padding-bottom:10px;">';
									foreach ($brand_row['models'] as $model_row){
									echo '<tr>';
										echo '<td valign="top" >';
											//echo $model['model_name'];
											echo	'<table width="100%" border="0">';
											foreach ($model_row['colours'] as $colour_row){
														echo '<tr class="models">';
															echo '<td valign="top" align="center" class="quickViewTable" style="padding-bottom:20px;">';
																echo '<div style="width:150px;padding-right:25px;">';
																echo '<strong>'.$colour_row['name'].'</strong>';
																echo '</div><br>';
																echo '<img src="https://www.surfindustries.com/images/'.$colour_row['image'].'" width="108" height="133" alt=""/>';
																//echo "<br>";
															echo '</td>';
															echo '<td valign="top">';
																echo	'<table border="0" width="100%">';
																echo '<input type="hidden" value="'.$colour_row['name'].'" name="modelName[]" id="modelName">';
																echo '<tr>
																<td class="quickViewTable" valign="top" style="min-width:100px;padding-right:20px;" ><strong>sku</strong></td>
																<td class="quickViewTable" valign="top" style="min-width:20px;padding-right:10px;"><strong>size&nbsp;&nbsp;</strong></td>
																<td class="quickViewTable" valign="top" style="min-width:20px;padding-right:10px;"><strong>price&nbsp;&nbsp;</strong></td>
																<td class="quickViewTable" valign="top" style="min-width:35px;padding-right:15px;"><strong>Qty&nbsp;&nbsp;</strong></td>
																<td class="quickViewTable" valign="top" style="min-width:60px;padding-right:15px;"><strong>CBM&nbsp;&nbsp;</strong></td>
																<td class="quickViewTable" valign="top" style=""><strong>total price</strong></td>
																<td class="quickViewTable" valign="top" align="left"><strong>total CBM</strong></td>';
																echo '</tr>';
																	foreach ($colour_row['sizes'] as $size_row){
																	echo '<tr><td colspan="7"><hr></td></tr>';	
																	echo '<tr class="sizes">';
																		echo '<td valign="top"style="text-align:left;font-size:10px;font-weight:regular;">'.$size_row['sku'].'</td>';
																		echo '<td valign="top" style="font-size:13px;font-weight:regular;">';
																			echo $size_row['size'];
																			echo '<input type="hidden" value="'.$size_row['id'].'" name="sizeID[]" id="sizeID'.$count.'">';
																		echo '<input type="hidden" value="'.$size_row['size'].'" name="sizeName[]" id="sizeName'.$count.'">';
																		echo '</td>';
																		echo '<td valign="top" style="font-size:13px;font-weight:regular;">';
																			echo '$'.$size_row['distributor_price'];
																		   echo '<input type="hidden" value="'.$size_row['distributor_price'].'" name="distPrice[]" id="price'.$count.'">';
																		echo '</td>';
																		echo '<td valign="top" style="font-size:13px;font-weight:regular;">';
																		echo '<input class="sizeQty" style="'.$bgcol.'width:35px;" type="number" min="0" id="qty'. $count.'" name="qty[]" ></td>';
																		echo '</td>';
																		echo '<td valign="top" style="font-size:13px;font-weight:regular;">';
																		echo $size_row['weight'];
																		echo '<input type="hidden" value="'.$size_row['weight'].'" name="cubicVol[]" id="cubicVol'.$count.'">';
																		echo '</td>';
																		echo '<td valign="top" style="font-size:13px;font-weight:regular;">';
																		echo '<input  class="sizeInput" type="text" id="total'. $count.'" name="total"   disabled style="padding-left:0px;height:18px;background-color:#ffffff;">';
																		echo '</td>';
																		echo '<td valign="top" style="font-size:13px;font-weight:regular;">';
																		echo '<input  class="volInput" type="text" id="cubicTotal'. $count.'" name="cubicTotal"   disabled style="padding-left:0px;height:18px;background-color:#ffffff;">';
																		echo '</td>';
																		$count = $count + 1;
																	echo '</tr>';
																		
																		
																}
																echo	'</table>';
													 		echo '<td>';
														echo '</tr>';
													}
											echo'</table>';
										echo '</td>';
									echo'<tr>';
									}
								echo'</table>';
						echo '<br><br>';
						
						 
			 
			// echo '</td>';//end model logo td
			// echo '</tr>';
						//increase counter for open/close div
						$moreCounter = $moreCounter +1;
						//end div for open'close brand
						echo '</div>';
						echo '</td>';
					echo '</tr>';
					}
				echo '</table>';
			echo '</td>';
		echo '</tr>';
		}
		echo '</table>';
		
		fclose($open)
		
			
?>
