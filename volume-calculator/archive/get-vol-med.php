<?php

session_start();

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
		'header' => $req->to_header() . ',realm="3743011"'. " \r\n" . "Host: rest.na2.netsuite.com \r\n" . "Content-Type: application/json",
		'content' => $json_string
	  )
	);
	$context = stream_context_create($option);
	return $context;

}

//if(isset($_POST["salesrep"]) && !empty($_POST["salesrep"])){

	$urlx = "https://rest.na2.netsuite.com/app/site/hosting/restlet.nl?script=242&deploy=1&volume=" . $_POST["medVolume"];

	$countryURL = $_POST["country"];

	$ckeyx = "a6a2498b6fdc39fec03309fa44f528173f5d1562a557c617259a59769fb5cc4a";
	$csecretx = "6588ba0f08d0e90cc56a1f3fff5e0efd56571032a2f017c7dbf2c20a7ef2c7aa";
	$tkeyx = "e10c50bfb90f433970c6a1c1cd980231fb0d63474c52557a503638a5339b3735";
	$tsecretx = "836112b0f5c1e35218068b60b287f53ab7fad078e3de0f627316b53480cda9f4";
	$contextx = createContext($urlx, $ckeyx, $csecretx, $tkeyx, $tsecretx);
	$open  = fopen($urlx, 'r', false, $contextx);

	//fpassthru($open);

	$content = stream_get_contents($open); 

	$data = json_decode($content, true);
	
	
		if ($_POST["medVolume"] > 0){
			
			if (!empty($data)) {
			echo '<section class="pt0">';
            echo '<div class="container">';
            echo '<div class="row">';
			echo '<div class="col-md-12 col-sm-10">';
			echo '<div class="heading-title">MEDIUM, EVERYDAY CONDITIONS (2 – 6 feet)<br><hr></div>';
			echo '</div>';
			echo '<div class="col-md-12 col-sm-10">';
			echo '<p>For small mushy conditions your recommended volume is '. $_POST["medVolume"].'ltr (+/- 2ltr). These boards should suit you:<p>';
			echo '</div>';
			foreach($data as $row) {
				echo '<div class="col-md-4 col-sm-10">';
				echo '<table cellpadding="10" cellspacing="0" border="0">';
				echo '<tr>';
				echo '<td rowspan="2">';
				echo '<a href="'.$countryURL.$row['shopurl'].'"><img src="https://www.surfindustries.com/images/'.$row['image'].'" width="90" height="111" alt=""/></a>';	
				echo '</td>';
				echo '<td valign="bottom">';
				echo'<a href="'.$countryURL.$row['shopurl'].'">'.$row['modelsize'].' '.strtoupper($row['brand']).' '.$row['boardname'].'</a>';
				echo '</td>';	 
			    echo '</tr>';
				echo '<tr>';
				echo '<td valign="top">VOLUME: '.$row['volume'].'ltr';
				echo '</td>';	 
			    echo '</tr>';
				echo '</table>';
				echo '</div>';
			}
			
			echo '</div>';
			echo '</div>';
			echo '</section>';
		}
		
		
		else {
		
		
		echo '<section class="pt0">';
            echo '<div class="container">';
            echo '<div class="row">';
			echo '<div class="col-md-12 col-sm-10">';
			echo '<div class="heading-title">MEDIUM, EVERYDAY CONDITIONS (2 – 6 feet)<br><hr></div>';
			echo '</div>';
			echo '<div class="col-md-12 col-sm-10">';
			echo '<p>Sorry there are not boards in your volume range to suit these conditions.</p>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</section>';
	
	
	}
		
		
	}	
	
	fclose($open)


    
		
		
?>