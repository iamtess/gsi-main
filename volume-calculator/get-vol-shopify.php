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

	$urlx = " https://3743011.restlets.api.netsuite.com/app/site/hosting/restlet.nl?script=242&deploy=1&volume=" . $_POST["medVolume"]."&skilllevel=". $_POST["skill"];

	$countryURL = $_POST["country"];
	$country = '';
	$skill = $_POST["skill"];
	$budgetU = $_POST["budget"];
	$budget2 = '';
	$flag = '';

	//echo 'budget'.$budgetU.'<br>';
	//echo 'Volume'. $_POST["medVolume"].'<br>';
	//echo 'country url'. $_POST["country"].'<br>';
	//echo 'skill'. $_POST["skill"].'<br>';
	
	if ($countryURL == 'au.surfindustries.com')
	{
		$country = 'au';
	}
	elseif ($countryURL == 'nz.surfindustries.com')
	{
		$country = 'nz';
	}
	else
	{
		$country = 'us';
	}

	//echo 'skill value:'.$skill.'<br>';

	$ckeyx = "a6a2498b6fdc39fec03309fa44f528173f5d1562a557c617259a59769fb5cc4a";
	$csecretx = "6588ba0f08d0e90cc56a1f3fff5e0efd56571032a2f017c7dbf2c20a7ef2c7aa";
	$tkeyx = "e10c50bfb90f433970c6a1c1cd980231fb0d63474c52557a503638a5339b3735";
	$tsecretx = "836112b0f5c1e35218068b60b287f53ab7fad078e3de0f627316b53480cda9f4";
	$contextx = createContext($urlx, $ckeyx, $csecretx, $tkeyx, $tsecretx);
	$open  = fopen($urlx, 'r', false, $contextx);

	//fpassthru($open);

	$content = stream_get_contents($open); 

	$data = json_decode($content, true);

	//echo $data.'<br>';
   //echo $country.'<br>';
	
	$boardModel = '';
	$price = '';

		if ($_POST["medVolume"] > 0){
			
			if (!empty($data)) {
				
				
			
				
			echo '<section class="pt0">';
            echo '<div class="container p0">';
            echo '<div class="row">';
			echo '<div class="col-md-12">';
			foreach($data as $row) {
				//echo 'boardModel'.$boardModel.'<br>';
				
				if ($row['shopifyurl'] != '') { 
				
				
					
				if ($country == 'au'){
					
					if ($budgetU == 'all'){
						$budget2 = 'all';
						if ($row['rrpau'] < 500.00){
							$budget = '$';
						}	
						elseif ($row['rrpau'] > 500.00 && $row['rrpau'] < 800.00){
							$budget = 'budget: $$';
							
						}
						else {
							$budget = '$$$';
						}	
					}
					else {
						if ($row['rrpau'] < 500.00){
							$budget = '$';
							$budget2 = '$';
						}	
						elseif ($row['rrpau'] > 500.00 && $row['rrpau'] < 800.00){
							$budget = '$$';
							$budget2 = '$$';
						}
						else {
							$budget = '$$$';
							$budget2 = '$$$';
						}	
					}
				}
				elseif  ($country == 'nz'){
					if ($budgetU == 'all'){
						$budget2 = 'all';
						if ($row['rrpnz'] < 600.00){
						$budget = '$';
						}	
						elseif ($row['rrpnz'] > 600.00 && $row['rrpnz'] < 1000.00){
							$budget = '$$';
						}
						else {
							$budget = '$$$';
						}
					}
				else{	
					if ($row['rrpnz'] < 600.00){
						$budget = '$';
						$budget2 = '$';
					}	
					elseif ($row['rrpnz'] > 600.00 && $row['rrpnz'] < 1000.00){
						$budget = '$$';
						$budget2 = '$$';
					}
					else {
						$budget = '$$$';
						$budget2 = '$$$';
					}	
				}
				}
				else {
					if ($budgetU == 'all'){
						$budget2 = 'all';
						if ($row['rrpus'] < 426.00){
						$budget = '$';
					}	
					elseif ($row['rrpus'] > 426.00 && $row['rrpus'] < 650.00){
						$budget = '$$';
					}
					else {
						$budget = '$$$';
					}
					}
				else {
					if ($row['rrpus'] < 426.00){
						$budget = '$';
						$budget2 = '$';
					}	
					elseif ($row['rrpus'] > 426.00 && $row['rrpus'] < 650.00){
						$budget = '$$';
						$budget2 = '$$';
					}
					else {
						$budget = '$$$';
						$budget2 = '$$$';
					}
				}
				}
				
				if ($budgetU == $budget2){
					$flag = '1';
					
					if ($boardModel != $row['boardname']){
					echo '<div class="col-md-4 col-sm-4  p0">';
					echo '<table cellpadding="0" cellspacing="0" border="0">';
					echo '<tr>';
					echo '<td rowspan="3">';
					echo '<a href="'.$countryURL.$row['shopifyurl'].'" target="new"><img src="https://www.surfindustries.com/images/'.$row['image'].'" width="90" height="111" alt=""/></a>';	
					
					echo '</td>';
					echo '<td valign="bottom">';
					echo'<a href="'.$countryURL.$row['shopifyurl'].'" target="new">'.strtoupper($row['brand']).' '.$row['boardname'].'</a>';
					$boardModel = $row['boardname'];
					echo '</td>';	 
					echo '</tr>';
					echo '<tr>';
					echo '<td valign="top" class="volBudget">TYPE: '.$row['itemtype'];
					echo '</td>';	 
					echo '</tr>';
					echo '<tr>';
					//echo '<td valign="top" class="volBudget">BUDGET: '.$budget;
					echo '<td valign="top" class="volBudget">BUDGET: '.$budget;
					echo '</td>';	 
					echo '</tr>';
					echo '</table>';
					echo '</div>';
				}
			}
			
			}//shopfify url
				
			}
			if ($flag == ''){
				
				echo "Sorry there are no boards for the $budgetU budget in your volume range. Please try a different budget or hit the Live Chat button at the bottom of the screen to chat with one of our Customer Service team.";
			}
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</section>';
		
			}
		
		else {
		
		
		echo '<section class="pt0">';
            echo '<div class="container p0">';
            echo '<div class="row">';
			echo '<div class="col-md-12">';
			echo '<p>Sorry there are no boards in this volume range. Please hit the Live Chat button at the bottom of the screen to chat with one of our Customer Service team.</p>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</section>';
	
	
	}
		
		
	}	
	
	fclose($open)


    
		
		
?>