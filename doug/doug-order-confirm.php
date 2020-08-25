<?php
session_start();
require_once 'OAuth.php';



define( "HOME", "../" );  
$tm_name = $_SESSION['tm_name'];
$userType = $_SESSION['usertype'];
$dealer_name = $_SESSION['dist_name'];

$_SESSION["jsonOrderObject"] = $_POST["orderObjectJSONstringFinal"];
$jsonOrderObject = $_SESSION["jsonOrderObject"];

//echo 'jsonOrderObject:'.$jsonOrderObject;

?>

<script>
// It works without the History API, but will clutter up the history
var history_api = typeof history.pushState !== 'undefined'

// The previous page asks that it not be returned to
if ( location.hash == '#no-back' ) {
  // Push "#no-back" onto the history, making it the most recent "page"
  if ( history_api ) history.pushState(null, '', '#stay')
  else location.hash = '#stay'

  // When the back button is pressed, it will harmlessly change the url
  // hash from "#stay" to "#no-back", which triggers this function
  window.onhashchange = function() {
    // User tried to go back; warn user, rinse and repeat
    if ( location.hash == '#no-back' ) {
      alert("Sorry you can't go back. Please go to Create Order page to begin a new Order")
      if ( history_api ) history.pushState(null, '', '#stay')
      else location.hash = '#stay'
    }
  }
}
</script>
<?php



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

//echo $jsonOrderObject;


$urlx = "https://3743011.restlets.api.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_doug_createorder&deploy=1";


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


//echo 'data'.$data.'<br>';
//echo '<br>________________________<br>';


//print_r(get_headers($urlx));

//echo '<br>________________________<br>';

//var_dump ($data);


 echo '<!doctype html>';
 echo '<html>';
 echo '<head>';
 echo '<meta charset="UTF-8">';
 echo '<title>GSI - Doug - Order Confirmation</title>';
 include HOME . 'includes/header-includes.inc'; 
 include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
 echo '<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans">';
 echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>';
 echo '</head>';

 echo '<body class="scroll-assist">';
echo '<div class="nav-container">';
echo '	<a id="top"></a>';
echo '<nav class="nav-centered">';
echo '	<div class="nav-utility-prod" style="background-color: #000;">';
echo '		<div class="module left">';
echo '			<img src="../images/brian-gsi-logo.gif" width="218" height="51" alt=""/>';
echo '		</div>';
echo '		<div class="module right">';
echo '			<span class="sub" STYLE="letter-spacing: 1px;"><strong>GSI ONLINE ORDERS</strong></span>';
echo '		</div>';
echo '	</div>';
echo '</nav>';
echo '</div>';
echo '<div class="main-container">';
echo '           <section class="page-title page-title-4 image-bg overlay">';
echo '                <div class="background-image-holder">';
 echo '<img src="../images/tm-portal-header.jpg" class="background-image" alt="Global Surf Industries - Distributor Portal">'; 
                    
echo '                </div>';
echo '                <div class="container">';
echo '                    <div class="row">';
echo '                        <div class="col-md-8">';
echo '                            <h3 class="uppercase mb0">ORDER STATUS</h3>';
echo '                        </div>';
echo '                    </div>';
echo '                    <!--end of row-->';
echo '                </div>';
echo '                <!--end of container-->';
echo '            </section>';
echo '            <section>';
echo '                <div class="container">';
echo '                    <div class="row">';
echo '                        <div class="col-md-9">';

	    echo '<div class="wrapperContainer">';
		echo '<div class="contentContainer">';
		
		
		
		
		   if ($data ['status'] == 'error'){
			   echo '<H3 style="color:red;"><br>ORDER DENIED</H3>';
			   echo '<p>Hi '. $dealer_name .', </p>';
			   echo '<p>We could not process this order because:<span style="color:red;"><strong> '.$data['message'].'</strong></span>';
			   echo '<p>Please try again.</p>';
		   }
		   else {
			   echo '<H3><br>ORDER CONFIRMED</H3>';
			   echo '<p>Thankyou '. $dealer_name  .', </p>';
			   echo '<p>';
			   echo 'Your order ID is: <strong>'. $data['tranid'].'</strong>, it has been submitted for processing.</p><p>You will receive an order confirmation email shortly.</p>';
		   }
		
		echo '<br><br><br>
				<div class="col-md-4 mb8"><form action="doug-create-an-order.php"><input type="submit" value="CREATE ORDER / ACC HISTORY" class="hollow" onsubmit></form></div><div class="col-md-4 mb8">
				
				<br><br><br><br><br><br><br><br>';
		
		
		echo '</div>';

		
			
	fclose($open)

	


?>

</div>  
				</div>
				</div>
	</section>       


 <script src="../js/bootstrap.min.js"></script>
        <script src="../js/smooth-scroll.min.js"></script>
        <script src="../js/parallax.js"></script>
        <script src="../js/scripts.js"></script> 






</body>
</html>

