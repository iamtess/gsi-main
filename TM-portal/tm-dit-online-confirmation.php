<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - TM PORTAL</title>
         <?php 
		session_start();
		
		
		//required for Mandrill form submission
		require '../vendor/autoload.php';

		/**
		 * Send a Email confirming the invoice has been sent
		 *
		 * @return int Success: 1
		 *             Error:   0
		 */
		
		
		//declare variables used on this page
		$email_message = '';
		$accountName_1 = '';
		$territoryManager = '';
		//echo "$territoryManager";
		$accountName = '';
		$contact = '';
		$email = '';
		$invoiceNo= '';
		$requestType= '';
		$creditValue= '';
		$boardWhereabouts = '';
		$GSICode= '';
		$boardSerialNo= '';
		$problemDesc_1 = '';
		$problemDesc = '';
		$photoSendType = '';
		$PhotoPath1 = '';
				
		
		
		if (!isset($_SESSION['basic_is_logged_in']) || $_SESSION['basic_is_logged_in'] !== true) {
			
		echo 	$_SESSION['basic_is_logged_in'];
		// not logged in, move to login page
		header('Location: tm-portal-login.php');
		exit;
		}
			
		//echo 	$_SESSION['basic_is_logged_in'];
			
		if(isset($_SESSION['user']))
        {
			$userType = $_SESSION['user'] ;
	    }
		
		$accountName_1 = $_POST["accName"];
		$territoryManager = $_POST["TM"];
		//echo 'TM'.$territoryManager;
		$accountName = stripslashes($accountName_1);
		$contact = $_POST["contactName"];
		$email = $_POST["contactEmail"];

		$invoiceNo= $_POST["invNo"];
		$requestType= $_POST["request"];
		$creditValue= $_POST["creditValue"];
		$boardWhereabouts = $_POST["whereBoard"];
		$GSICode= $_POST["gsiCode"];
		$boardSerialNo= $_POST["serialNo"];
		$problemDesc_1 = $_POST["issue"];
		$problemDesc = stripslashes($problemDesc_1);
		$photoSendType = $_POST["photoSentTxt"];
		$PhotoPath1 = $_FILES['photo1'];
		

		//echo "photo send type: $photoSendType<br>";
		//echo "pickup required: $pickUp<br>";

		//echo "path 4: $PhotoPath4 = $_FILES['photo4']['name'];";

		if ($territoryManager ==  "mk"){
			$tmEmail = "kel@surfindustries.com";
		}
		
		if ($territoryManager ==  "eg"){
			$tmEmail = "ed@surfindustries.com";
		}
		if ($territoryManager ==  "gw"){
			$tmEmail = "garret@surfindustries.com";
		}

		
		if ($territoryManager ==  "ms"){
			$tmEmail = "mikes@surfindustries.com";
		}
		if ($territoryManager ==  "jg"){
			$tmEmail = "jordan@surfindustries.com";
		}

	
			
		
		
		function sendEmail($terrioryManager,$tmEmail,$accountName,$contact, $email,$invoiceNo,$requestType,$creditValue,$boardWhereabouts,$GSICode,$boardSerialNo,$problemDesc,$photoSendType,$PhotoPath1) 
		{

		//$message_AB = "$accountName,$contact,$email,$invoiceNo,$requestType,$creditValue,$boardWhereabouts,$GSICode,$boardSerialNo,$problemDesc";

		$message = "<p><strong>DAMAGE IN TRANSIT CLAIM FROM:</strong> $accountName</p><p><strong>ACCOUNT NAME:</strong> $accountName<br><strong>CONTACT: </strong>$contact<br><strong>EMAIL:</strong> $email</p><p><strong>INVOICE NUMBER:</strong> $invoiceNo<br><strong>REQUEST TYPE:</strong> $requestType<br><strong>CREDIT VALUE:</strong> $creditValue<br><strong>WHERE IS THE BOARD:</strong> $boardWhereabouts</p><p><strong>BOARD INFORMATION</strong><br><strong>GSI CODE:</strong> $GSICode<br><strong>SERIAL NUMBER:</strong> $boardSerialNo<br><strong>DESCRIPTION:</strong> $problemDesc<br><strong>PHOTOS WILL BE SUPPLIED:</strong> $photoSendType";

		$email_from = $email; // Who the email is from
		$ccEmail = $email;

		$subject = 'GSI online DIT claim from '.$accountName.' / '.$boardSerialNo;
		$tagDescription = 'GSI online DIT claim form';
		$type = 'to';
		$cctype = 'cc';
		$toArray = array(
						array('email'=>$tmEmail,
		    				  'name'=>$tmEmail,
							  'type'=>$type),
						 
						array('email'=>$ccEmail,
						      'name'=>$accountName,
						      'type'=>$cctype));
			
		$toArray_2 = array(array('email'=>'andrew@surfindustries.com',
							   'name'=>'Andrew Brady',
							   'type'=>$type));

		//include_once 'mandrill-api-php/src/Mandrill.php';
		try {

			$mandrill = new Mandrill('BZ9oHdJcxIbpksupLUHHOw');
			$message = array(
				'html' => "<p>$message</p>",
				'text' => 'Please view in a HTML-friendly browser',
				'subject' => $subject,
				'from_email' => 'onlineDIT@surfindustries.com',
				'from_name' => 'GSI Online DIT claim',
				'to' => $toArray, $ccArray,
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
						'type' => $PhotoPath1['type'],
						'name' => $PhotoPath1['name'],
						'content' => base64_encode(file_get_contents($PhotoPath1['tmp_name']))
					),
					array(
						'type' => $file['type'],
						'name' => $file['name'],
						'content' => base64_encode(file_get_contents($file['tmp_name']))
					)
				),
				'images' => null
			);
			
			$async = true;
			$ipPool = 'Main Pool';

			$resultEmail = $mandrill->messages->send($message, $async, $ipPool);
			//$resultEmail_2 = $mandrill->messages->send($message_2, $async, $ipPool);


		} catch(Mandrill_Error $e) {
			// Mandrill errors are thrown as exceptions

			print("Failed sending email<br/>");
			print(get_class($e) . ' - ' . $e->getMessage());
			die();
			return false;
			//$this->Session->write('submitted', strtotime('now'));
		}


			//begin rendering the page
			define( "HOME", "../" ); 
			define( "IMAGES_DIR",   HOME . "images/" );
			include HOME . 'includes/geo-locator-script.inc';
			include HOME . 'includes/header-includes.inc'; 
			include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 

			
			$pageName = "";
			$pageName = "DIT";

			
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
			<section class="page-title page-title-4 image-bg overlay  parallax">
				<div class="background-image-holder">
					<img src="../images/tm-portal-header.jpg" class="background-image" alt="Global Surf Industries - Dealer Portal">
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h2 class="uppercase mb0">TM PORTAL</h2><h4>DIT Claim Form Confirmation</h4>
						</div>
					</div>
				<!--end of row-->
				</div>
				<!--end of container-->
			</section>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-9 col-md-push-3">
							<div class="row">
							  <div class="portalTopText">
								 Thankyou for submitting your claim.<br>We will be in touch with you shortly.
								</div> 
							</div> 
							<!--end of row-->
						</div>
					<!--end form div-->
					<!--begin side bar-->
					<div class="col-md-3 col-md-pull-9 hidden-sm">';
					    include HOME . 'includes/tm-portal-left-menu.inc';
				echo '</div>
					    <!--end of sidebar-->
				    </div>
				    <!--end of container row-->
			    </div>
				<!--end of container-->
			</section>';
				include HOME . 'includes/footer.inc'; 
				echo ' </div>';
				include HOME . 'includes/site-scripts.inc'; 
				echo '</body>
				</html>';     
			die();
			return true;
		}

		// Get sender email
		//     sender name
		//     feedback
		//     img upload
		//     file upload
		if (isset($email)
			&& isset($territoryManager)
		    && isset($tmEmail)
			&& isset($contact)
			&& isset($email)
			&& isset($invoiceNo)
			&& isset($requestType)
			&& isset($creditValue)
			&& isset($boardWhereabouts)
			&& isset($GSICode)
			&& isset($boardSerialNo)
			&& isset($problemDesc)
			&& isset($photoSendType)
		) {
			sendEmail($terrioryManager,$tmEmail,$accountName,$contact, $email,$invoiceNo,$requestType,$creditValue,$boardWhereabouts,$GSICode,$boardSerialNo,$problemDesc,$photoSendType,$PhotoPath1);
			//echo "Got everything";
			} else {
			echo "<p>Failed getting files</p><br/>";
			print_r($_POST);
			echo "<br/><p>Files end</p><br/>";
			print_r($_FILES);

								}
	?>
                         
                               
                              
                   
                               
							
                              
                              
                               
							