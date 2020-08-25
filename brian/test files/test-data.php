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
		'header' => $req->to_header() . ',realm="3743011"'. " \r\n" . "Host: rest.netsuite.com \r\n" . "Content-Type: application/json",
		'content' => $json_string
	  )
	);
	$context = stream_context_create($option);
	return $context;

}


//$urlx = "https://rest.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_models&deploy=1";
//$urlx = "https://rest.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_inventory&deploy=1&location=12&models=21";
//$urlx = "https://rest.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_inventory&deploy=1&location=12&models=".$_POST['models'];
$urlx = "https://rest.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_inventory&deploy=1&location=".$_POST['locations']."&models=".$_POST['models'];



$ckeyx = "a6a2498b6fdc39fec03309fa44f528173f5d1562a557c617259a59769fb5cc4a";
$csecretx = "6588ba0f08d0e90cc56a1f3fff5e0efd56571032a2f017c7dbf2c20a7ef2c7aa";
$tkeyx = "e10c50bfb90f433970c6a1c1cd980231fb0d63474c52557a503638a5339b3735";
$tsecretx = "836112b0f5c1e35218068b60b287f53ab7fad078e3de0f627316b53480cda9f4";
$contextx = createContext($urlx, $ckeyx, $csecretx, $tkeyx, $tsecretx);
$open  = fopen($urlx, 'r', false, $contextx);

//fpassthru($open);

$content = stream_get_contents($open); 

$data = json_decode($content, true);
		
	//echo '<option value="">Please Select Models</option>';
	
		$count='1';
		$howMany = 'howMany';
		$sizeCount = '0';
		$tPrice = '0';
	
	
	echo '<table cellpadding="0" cellspacing="o" border="1">
<tr>
<td> image</td>
<td>
	<table >
<tr>
  <td></td>
  <td>Quantity</td>
  <td>Rate</td>
  <td>Sub Total</td>
</tr>
<tr class="sizes">
  <td>Row 1</td>
  <td><input type="number" id="qty1" name="qty1"></td>
  <td><input type="number" id="price1" name="price1" value="100"></td>
  <td><input type="number" id="total1" name="total1" disabled></td>
</tr>
<tr class="sizes">
  <td>Row 2</td>
  <td><input type="number" id="qty2" name="qty2"></td>
  <td><input type="number" id="price2" name="price2" value="100"></td>
  <td><input type="number" id="total2" name="total2" disabled></td>
</tr>
<tr class="sizes">
  <td>Row 3</td>
  <td><input type="number" id="qty3" name="qty3"></td>
  <td><input type="number" id="price3" name="price3" value="100"></td>
  <td><input type="number" id="total3" name="total3" disabled></td>
</tr>
</table>';	
	//echo  'how many: ' . $count .'<br><br>';		
		
			
	fclose($open)

	
//}

?>