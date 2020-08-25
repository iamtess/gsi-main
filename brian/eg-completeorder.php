<?php
session_start();
require_once 'OAuth.php';
if (!isset($_SESSION['basic_is_logged_in'])
    || $_SESSION['basic_is_logged_in'] !== true) {
    // not logged in, move to login page
    header('Location: ../brian/index.php');
    exit;
}


define( "HOME", "../" );  
$tm_name = $_SESSION['tm_name'];
//$jsonOrderObject = $_SESSION["jsonOrderObject"];




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


	$req = new OAuthRequest('POST', $url, $params);
	$req->set_parameter('oauth_signature', $req->build_signature($sig, $consumer, $token));
	$req->set_parameter('realm', "3743011");
	
	$data = array();
	$json_string =  json_encode($data);
	
	

	$option = array(
	  'http'=>array(
		'method'=>"POST",
		'header' => $req->to_header() . ',realm="3743011"'. " \r\n" . "Host: 3743011.restlets.api.netsuite.com \r\n" . "Content-Type: application/json",
		'content' => $_SESSION["jsonOrderObject"]
	  )
	);
	$context = stream_context_create($option);
	return $context;

}



$urlx = "https://3743011.restlets.api.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_createorder&deploy=1";



$ckeyx = "a6a2498b6fdc39fec03309fa44f528173f5d1562a557c617259a59769fb5cc4a";
$csecretx = "6588ba0f08d0e90cc56a1f3fff5e0efd56571032a2f017c7dbf2c20a7ef2c7aa";
$tkeyx = "e10c50bfb90f433970c6a1c1cd980231fb0d63474c52557a503638a5339b3735";
$tsecretx = "836112b0f5c1e35218068b60b287f53ab7fad078e3de0f627316b53480cda9f4";
$contextx = createContext($urlx, $ckeyx, $csecretx, $tkeyx, $tsecretx);
$open  = fopen($urlx, 'rb', false, $contextx);

//echo 'open:'.$open .'<br>';



//fpassthru($open);

$content = stream_get_contents($open); 

//echo '<br>content with RB:'.$content.'<br>';

$data = json_decode($content, true);

//var_dump ($data);


		 echo '<!doctype html>';
		 echo '<html>';
		 echo '<head>';
		 echo '<meta charset="UTF-8">';
		 echo '<title>GSI - Brian - Order Confirmation</title>';
		 echo '<link rel="stylesheet" type="text/css" href="../css/brian-styles.css">';
		 echo '<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans">';
		 echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>';
		 echo '</head>';
		 echo '<body style="background-color:#d9d9d9;">';
		 echo '<div style="background-color:#d9d9d9; width:100%; height:100%;">';
		 
		 include HOME . 'includes/brian-header.inc'; 


	    echo '<div class="wrapperContainer">';
		echo '<div class="contentContainer">';
		echo '<span class="mainHheading"><br>ORDER CONFIRMATION</span>';
		echo '<p class="pageText">Thankyou '. $tm_name .', </p>';
		echo '<p class="pageText">';
		echo 'I have sent your order to Daisy. Your order ID is:'. $data['tranid'].'</p><p class="pageText">Love from Brian x</p>';
		
		
		
		echo '<br><br>';
		echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
		
		

		echo '</div>';

		
			
	fclose($open)

	


?>