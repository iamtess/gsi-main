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
		'header' => $req->to_header() . ',realm="3743011"'. " \r\n" . "Host: 3743011.restlets.api.netsuite.com\r\n" . "Content-Type: application/json",
		'content' => $json_string
	  )
	);
	$context = stream_context_create($option);
	return $context;

}

//get brands from daisy

	$urlx = "https://3743011.restlets.api.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_brands&deploy=1";

	$ckeyx = "a6a2498b6fdc39fec03309fa44f528173f5d1562a557c617259a59769fb5cc4a";
	$csecretx = "6588ba0f08d0e90cc56a1f3fff5e0efd56571032a2f017c7dbf2c20a7ef2c7aa";
	$tkeyx = "e10c50bfb90f433970c6a1c1cd980231fb0d63474c52557a503638a5339b3735";
	$tsecretx = "836112b0f5c1e35218068b60b287f53ab7fad078e3de0f627316b53480cda9f4";
	$contextx = createContext($urlx, $ckeyx, $csecretx, $tkeyx, $tsecretx);
	$open  = fopen($urlx, 'r', false, $contextx);

	//fpassthru($open);

	$content = stream_get_contents($open); 

	$data = json_decode($content, true);
		
	//echo '<option value="">Please Select a brand</option>';
	
	
	
	$itemCount = 1;
	$currentColumn = 1;
	
	echo '<table cellpadding="10" cellspacing="0" border="0">';
	
	foreach($data as $row) {
		
		
		
		if($currentColumn == 1) {
			echo '<tr>';
		}
		
		echo '<td style="max-width:300px;">';
		echo '<img src="http://www.surfindustries.com/images/'.$row['image'].'" title="brandicon'.$row['id'].'" id="'.$row['id'].'" class="brandicon" />';
		//echo '<input type="checkbox" name="brandcheckbox[]" id="brandcheckbox" value="'.$row['id'].'" hidden>';
		echo '<input type="checkbox" name="brandcheckbox[]" id="brandcheckbox'.$row['id'].'" value="'.$row['id'].'" hidden >';
		echo '</td>';
		
		if($currentColumn == 4 || $itemCount == count($data)) {
			echo '</tr>';
			$currentColumn = 1;
		} else {
			$currentColumn++;			
		}
		$itemCount++;

	}
	
	echo '</table>';
	
	fclose($open)

?>