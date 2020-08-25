<!doctype html>
<html lang="en"><head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - LIFE IS BETTER WHEN YOU SURF</title>
         <?php 
		session_start();
		require '../vendor/autoload.php';
		
		$vsFile = "";
		$text = "";
		$filename = "";
		
	
		$languagetype = $_POST["languageType"];
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$dob = $_POST["dob"];
		$email = $_POST["email"];
		$pfirstname = $_POST["pfirstname"];
		$plastname = $_POST["plastname"];
		$pcontact = $_POST["pcontact"];
		$pemail = $_POST["pemail"];
		$address1 = $_POST["address1"];
		$address2 = $_POST["address2"];
		$city = $_POST["city"];
		$state = $_POST["state"];
		$pcode = $_POST["pcode"];
		$phone = $_POST["phone"];
		$school = $_POST["school"];
		$surfyears = $_POST["surfyears"];
		$favspot = $_POST["favspot"];
		$instagram = $_POST["instagram"];
		$facebook = $_POST["facebook"];
		$essay = $_POST["essay"];
		$communityhelp = $_POST["communityhelp"];
		$moneyuse = $_POST["moneyuse"];
		$video = $_POST["video"];
		$reference = $_FILES['reference'];
		$selfie = $_FILES['selfie'];
		$appsignature = $_POST["appsignature"];
		$appsignatureagree = $_POST["appsignatureagree"];
		$parentsignature = $_POST["parentsignature"];
		$parentsignatureagree = $_POST["parentsignatureagree"];
		$sigdate = 	$_POST["sigdate"];
		if(isset($_POST['g-recaptcha-response'])) { $captcha=$_POST['g-recaptcha-response']; }
	
		if(!$captcha)
		 {
				  echo "Sorry, you didn't check the captcha box.
						  <br><br><a class=\"regular\" href=\"gsi-scholarship-application.php\">Please try again</a>
						  </div>
						</div>
						<br>
					  </div>
				  </div> <!--end contact container -->
			  </div><!--end content container -->";
			 
			exit;
		 }
		 $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcUjQsTAAAAAG2h7TPEqxa0v2Wy8RihDW4hHRlG&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
		if($response.success==false)
		{
			echo '<h2>No spammers allowed!</h2>';
		}else
		{
		
		
		
		function sendEmail($firstname,$lastname,$email,$dob,$pfirstname,$plastname,$pcontact,$pemail,$address1,$address2,$city,$state,$pcode,$phone,$school,$surfyears,$favspot,$essay,$communityhelp,$moneyuse,$video,$instagram,$facebook,$appsignature,$appsignatureagree,$parentsignature,$parentsignatureagree,$sigdate,$reference,$selfie) 
		{
			
			
			$message = "<strong>Name:</strong> $firstname $lastname<br><strong>Phone Number:</strong> $pcontact<br><strong>Email address:</strong> $email</p><p><strong>Postal Address</strong><br>$address1<br>$address2<br>$city, $state, $pcode<p><strong>Phone number:</strong> $phone</p><p><strong>School attending:</strong> $school</p><p><strong>How long Surfing:</strong> $surfyears</p><p><strong>Favorite Surf Spot:</strong> $favspot</p><p><strong>Instagram handle:</strong> $instagram<br><strong>Facebook:</strong> $facebook</p><p><strong>Short Essay:</strong> $essay</p><p><strong>How I contribute to my Community: </strong>$communityhelp<p><strong>How I will use the money:</strong> $moneyuse</p><p><strong>Video link:</strong> $video</p><p><strong>Applicant Signature:</strong> $appsignature<br><strong>Applicant Agreement:</strong> $appsignatureagree</p><p><strong>Parent Signature:</strong> $parentsignature<br><strong>Parent Agreement:</strong> $parentsignatureagree</p><p><strong>Date signed:</strong> $sigdate</p>";
							
			$header = '"TEXT FOR CSV FILE _____","Applicant Name","DOB","Email Address","Address Line 1","Address Line 2","Town/City","Postcode/Zip","State","Phone No","Parent/Guardian Name","Parent Guardian Phone","Parent Guardian Email","School","Surf Years","Fav Spot","Instagram","Facebook","LIBWYS Essay","How I contribute to my Community","How I will spend the money","Video URL","Reference filename","Selfie filename","Applicant Signature","Applicant Agreement","Parent Signature","Parent Signature agree","Date Signed"' . PHP_EOL;
	
			$cr = "\n";
			
			$string = "\"$firstname $lastname\",\"$dob\",\"$email\",\"$address1\",\"$address2\",\"$city\",\"$pcode\",\"$state\",\"$phone\",\"$pfirstname $plastname\",\"$pcontact\",\"$pemail\",\"$school\",\"$surfyears\",\"$favspot\",\"$instagram\",\"$facebook\",\"$essay\",\"$communityhelp\",\"$moneyuse\",\"$video\",\"$reference\",\"$selfie\",\"$appsignature\",\"$appsignatureagree\",\"$parentsignature\",\"$parentsignatureagree\",\"$sigdate\"" . $cr;
			
			
			$filename = "scholarship-application.csv";
			
			
				
			
			$fp = fopen($filename,'a');
			fwrite($fp,$string);
			fclose($fp);

			
			
			
			//echo $filename . ': ' . filesize($filename) . ' bytes';
			
			
			
			
			
			
			$subject = 'GSI Life is Better When You surf Scholarship program';
			$tagDescription = 'GSI Scholarship Application Form';
			$type = 'to';
			$from = $email;
			$toArray = array(array('email'=>'bridget@surfindustries.com',
								   'name'=>'Bridget Reedman',
								   'type'=>$type));

			
			
			//include_once 'mandrill-api-php/src/Mandrill.php';
			try {

			$mandrill = new Mandrill('BZ9oHdJcxIbpksupLUHHOw');
			$message = array(
				'html' => "<p>$message</p>",
				'text' => 'Please view in a HTML-friendly browser',
				'subject' => $subject,
				'from_email' => $from,
				'from_name' => 'GSI LIBWYS APPLICATION',
				'to' => $toArray,
				'headers' => null,
				'important' => false,
				'track_opens' => true,
				'track_clicks' => true,
				'auto_text' => null,
				'auto_html' => null,
				'inline_css' => null,
				'url_strip_qs' => null,
				'preserve_recipients' => null,
				'view_content_link' => null,
				'bcc_address' => null ,
				'tracking_domain' => null,
				'signing_domain' => null,
				'return_path_domain' => null,
				'merge' => true,
				'merge_language' => 'mailchimp',
				'global_merge_vars' => array(
					array(
						'name' => 'email',
						'content' => 'merge_var content'
					)
				),
				'merge_vars' => null,
				'tags' => array($tagDescription),
				'subaccount' => null,
				'google_analytics_domains' => null,
				'google_analytics_campaign' => null,
				'metadata' => array('website' => 'surfindustries.com'),
				'recipient_metadata' => null,
				'attachments' => array(
					array(
						'type' => $reference['type'],
						'name' => $reference['name'],
						'content' => base64_encode(file_get_contents($reference['tmp_name']))
					),
					array(
						'type' => $selfie['type'],
						'name' => $selfie['name'],
						'content' => base64_encode(file_get_contents($selfie['tmp_name']))
					),
					array(
						'type' => 'text/csv',
						'name' => $filename,
						'content' => base64_encode(file_get_contents($filename))
					)
				),
				'images' => null
			);
			$async = true;
			$ipPool = 'Main Pool';

			$resultEmail = $mandrill->messages->send($message, $async, $ipPool);


		} catch(Mandrill_Error $e) {
			// Mandrill errors are thrown as exceptions

			print("Failed sending email<br/>");
			print(get_class($e) . ' - ' . $e->getMessage());
			die();
			return false;
			//$this->Session->write('submitted', strtotime('now'));
		}
			
			
			//if mail sends begin rendering the page
			define( "HOME", "../" ); 
			define( "IMAGES_DIR",   HOME . "images/" );
			include HOME . 'includes/geo-locator-script.inc'; 

			

			 echo '<meta name="viewport" content="width=device-width, initial-scale=1">
				<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
				<link href="../css/theme-gunmetal.css" rel="stylesheet" type="text/css" media="all" />
				<link href="../css/custom.css" rel="stylesheet" type="text/css" media="all" />
				<link href="../css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
				<link href=\'http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600\' rel=\'stylesheet\' type=\'text/css\'>
			</head>
			<body class="scroll-assist">
			<!-- include header -->';
			include HOME . 'includes/header-nav-items.inc';
			echo'<div class="main-container">
			<section class="page-title page-title-2 image-bg overlay ">
                <div class="background-image-holder">
                 <img src="../images/gsi-scholarship-header-2019.jpg" class="background-image" alt="Global Surf Industries - Life is Better When You Surf">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
							<h2 class="uppercase mb8"><img src="../images/gsi-scholarship-program-logo-white.png" class="background-image" alt="Global Surf Industries - Life is Better When You Surf"></h2>
                            
                        </div>
                        
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
							  <div class="portalTopText">';
			
								if ($languagetype == 'spanish'){
							  
									echo 'Gracias por enviar su solicitud a La Vida es Mejor Cuando Surfeas por el Programa de Becas.<br> Nos comunicaremos con usted en breve.';
									
								}
								else if ($languagetype == 'portuguese'){
									
									
									
							  
									echo 'Obrigado por enviar sua inscrição para o programa Vida é melhor quando você surfa. <br> Estarei em contato com você em breve.';
									
								}
								else {
									
									
									
									
									echo 'Thankyou for submitting your application to the Life is Better When You Surf<sup class="smallText">&#174;</sup> Scholarship Program.<br>We will be in touch with you shortly.';
								}
							  
							  
							echo	 
							  '</div> 
							</div> 
							<!--end of row-->
						</div>
					
				    </div>
				    <!--end of container row-->
			    </div>
				<!--end of container-->
			</section>';
				include HOME . 'includes/footer.inc'; 
			echo ' </div>
				<script src="../js/jquery.min.js"></script>
				<script src="../js/bootstrap.min.js"></script>
				<script src="../js/flickr.js"></script>
				<script src="../js/flexslider.min.js"></script>
				<script src="../js/lightbox.min.js"></script>
				<script src="../js/masonry.min.js"></script>
				<script src="../js/twitterfetcher.min.js"></script>
				<script src="../js/spectragram.min.js"></script>
				<script src="../js/ytplayer.min.js"></script>
				<script src="../js/countdown.min.js"></script>
				<script src="../js/smooth-scroll.min.js"></script>
				<script src="../js/parallax.js"></script>
				<script src="../js/scripts.js"></script>
				</body>
				</html>   ';     
			die();
			return true;
		}

			
	}
		// Get sender email
//     sender name
//     feedback
//     img upload
//     file upload
	

	
	
	
	
if (isset ($_POST['languageType'])
	&&isset($_POST['firstname'])
    && isset($_POST['lastname'])
  	&& isset($_POST["email"])
	&& isset($_POST["dob"])
	&& isset($_POST["pfirstname"])
	&& isset($_POST["plastname"])
	&& isset($_POST["pcontact"])
	&& isset($_POST["pemail"])
	&& isset($_POST["address1"])
	&& isset($_POST["city"])
	&& isset($_POST["state"])
	&& isset($_POST["pcode"])
	&& isset($_POST["phone"])
	&& isset($_POST["school"])
	&& isset($_POST["surfyears"])
	&& isset($_POST["favspot"])
	&& isset($_POST["essay"])
	&& isset($_POST["communityhelp"])
	&& isset($_POST["moneyuse"])
	&& isset($_POST["video"])
	&& isset($_POST["appsignature"])
	&& isset($_POST["appsignatureagree"])
	&& isset($_POST["parentsignature"])
	&& isset($_POST["parentsignatureagree"])
	&& isset($_POST["sigdate"])
    && isset($_FILES['reference'])
    && isset($_FILES['selfie'])
	
	
	
	
) {
    sendEmail($_POST['firstname'],$_POST['lastname'],$_POST["email"],$_POST["dob"],$_POST["pfirstname"],$_POST["plastname"],$_POST["pcontact"],$_POST["pemail"],$_POST["address1"],$_POST["address2"],$_POST["city"],$_POST["state"],$_POST["pcode"],$_POST["phone"],$_POST["school"],$_POST["surfyears"],$_POST["favspot"],$_POST["essay"],$_POST["communityhelp"],$_POST["moneyuse"],$_POST["video"],$_POST["instagram"],$_POST["facebook"],$_POST["appsignature"],$_POST["appsignatureagree"],$_POST["parentsignature"],$_POST["parentsignatureagree"],$_POST["sigdate"],$_FILES['reference'],$_FILES['selfie']);
    echo "Got everything";
} else {
    echo "<p>Failed getting files</p><br/>";
    print_r($_POST);
    echo "<br/><p>Files end</p><br/>";
    print_r($_FILES);
    
}
	?>
       