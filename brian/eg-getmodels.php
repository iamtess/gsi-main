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
$urlx = "https://3743011.restlets.api.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_models&deploy=1&brands=".$_POST["brands"]."&location=".$_POST["location"];
//$urlx = "https://rest.na2.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_models&deploy=1&brands='. [24,1,13]";

$ckeyx = "a6a2498b6fdc39fec03309fa44f528173f5d1562a557c617259a59769fb5cc4a";
$csecretx = "6588ba0f08d0e90cc56a1f3fff5e0efd56571032a2f017c7dbf2c20a7ef2c7aa";
$tkeyx = "e10c50bfb90f433970c6a1c1cd980231fb0d63474c52557a503638a5339b3735";
$tsecretx = "836112b0f5c1e35218068b60b287f53ab7fad078e3de0f627316b53480cda9f4";
$contextx = createContext($urlx, $ckeyx, $csecretx, $tkeyx, $tsecretx);
$open  = fopen($urlx, 'r', false, $contextx);

//fpassthru($open);

$content = stream_get_contents($open); 

$data = json_decode($content, true);

$rowCounter = "1";

	$gBrand = '';
		
	echo '<table cellpadding="10" cellspacing="0" border="0">';
		
	foreach($data as $row) {
		//echo '<input type="hidden" value="'.$row['brand_id'].'" name="brandID">';
		
		echo '<tr>';
		
		
		echo '<td valign="top"><img src="http://www.surfindustries.com/images/brian-logo-brand-id-smll-'.$row['id'].'.gif" title="brandlogo" id="brandlogo"/></td>';
		
		
		
		
		echo '<td>';
		foreach ($row['models'] as $model_row){
		echo '<div style="width:230px;height:48px;background:#ececec;border-radius: 8px;font-size:16px; font-weight:regular; font-family: \'Josefin Sans\', serif;color:#000000;text-align:center;" class="brandicon" id ='.$rowCounter.'>';
		echo '<div style="padding-top:13px; ">';
		echo '<input type="checkbox" name="modelSelect[]"   id="modelSelect'.$rowCounter.'" value="'.$row['id'].'_'.$model_row['id'].'" hidden>'.$model_row['name'].'</div>';
		echo '</div></br>';
		
		$rowCounter = $rowCounter + 1;
		
		}
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td colspan = "2">';
		echo '<hr>';
		echo '</td>';
		echo '</tr>';
		
		
	}
	echo '</table>';
			
	fclose($open)

//}

?>