<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
         <?php 
		session_start();
		
		
		//required fro mandrill form submission
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
		$userType ='';
				
		$_SESSION ['distributorStatus'] = $_GET["distributor"];		
		if ($_SESSION['distributorStatus'] == 'true'){
		
			$_SESSION['user']  = "distributor";
			$userType = $_SESSION['user'];
			echo '<title>GLOBAL SURF INDUSTRIES - DISTRIBUTOR PORTAL</title>';
			
		}
		
		
		//warehouse from daisy sets $warehouseNo variable 
		else {
		
		echo '<title>GLOBAL SURF INDUSTRIES - DEALER PORTAL</title>';
		//warehouse from daisy sets $warehouseNo variable 
		if ( $_SESSION ['warehouse'] == ""){
		$_SESSION ['warehouse'] = $_GET["warehouse"];}

		$warehouseNo = $_SESSION ['warehouse'];
		
		
		if ($warehouseNo == ""){

			 header('Location: https://system.na2.netsuite.com/app/login/secure/privatelogin.nl?c=3743011');
			exit;
		}

		if (($warehouseNo == '13') || ($warehouseNo == '16') || ($warehouseNo == '15')){ $country = 'usDealers'; 	$countryName = 'US Dealer';	}
		if (($warehouseNo == '4') || ($warehouseNo == '3')){ $country = 'ausDealers';  $countryName = 'Australian Dealer';}
		if ($warehouseNo == '12'){ $country = 'nzDealers'; $countryName = 'New Zealand Dealer'; }
		
		}
		
		$accName = $_POST["accName"];
		$contactName = $_POST["contactName"];
		$contactEmail = $_POST["contactEmail"];
		$contactPhone = $_POST["contactPhone"];
		$message = $_POST["message"];

		
		
		
		
		function sendEmail($accName,$contactName,$contactEmail,$contactPhone,$message) 
		{


		$message = "<p><strong>ACCOUNT NAME:</strong> $accName</p><p><strong>CONTACT NAME:</strong> $contactName<br><strong>EMAIL: </strong>$contactEmail<br><strong>PHONE:</strong> $contactPhone</p><p><strong>MESSAGE:</strong> $message";

		$email_from = $contactEmail; // Who the email is from
		$ccEmail = $contactEmail;

		$subject = 'Ask the CEO email from '.$accName;
		$tagDescription = 'GSI Ask the CEO form';
		$type = 'to';
		//$cctype = 'cc';
		$toArray = array(array('email'=>'kel@surfindustries.com',
							   'name'=>'kel@surfindustries.com',
							   'type'=>$type));

		//$ccArray = array(array('email'=>$email,
							  // 'name'=>$accountName,
							  // 'type'=>$cctype));

		//include_once 'mandrill-api-php/src/Mandrill.php';
		try {

			$mandrill = new Mandrill('BZ9oHdJcxIbpksupLUHHOw');
			$message = array(
				'html' => "<p>$message</p>",
				'text' => 'Please view in a HTML-friendly browser',
				'subject' => $subject,
				'from_email' => $email_from,
				'from_name' => $accName,
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
				'attachments' => null,
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


			//begin rendering the page
			define( "HOME", "../" ); 
			define( "IMAGES_DIR",   HOME . "images/" );
			include HOME . 'includes/geo-locator-script.inc'; 
			include HOME . 'includes/header-includes.inc'; 
			include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
			
			$pageName = "";
			$pageName = "askCEO";
			$userType = $_SESSION['user'];

			
			 echo '
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
						<div class="col-md-6">';
			
							if ($userType == 'distributor'){
								echo '<h2 class="uppercase mb0">DISTRIBUTOR PORTAL</h2><h4>Ask the CEO Confirmation</h4>';
								
							}
                            else {
							 echo '<h2 class="uppercase mb0">DEALER PORTAL</h2><h4>Ask the CEO Confirmation</h4>';	
								
							}
                		
				echo '</div>
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
								 Thankyou for submitting your comments.<br>Our CEO, Kel, will be in touch with you shortly.
								</div> 
							</div> 
							<!--end of row-->
						</div>
					<!--end form div-->
					<!--begin side bar-->
					<div class="col-md-3 col-md-pull-9 hidden-sm">';
					    if ($userType == 'distributor'){
								include HOME . 'includes/dist-portal-left-menu.inc';	
								
							}
                            else {
								
							 include HOME . 'includes/dealer-portal-left-menu.inc';	
								
							}
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
		if (isset($accName)
			&& isset($contactName)
		    && isset($contactEmail)
			&& isset($contactPhone)
			&& isset($message)
			
		) {
			sendEmail($accName,$contactName,$contactEmail,$contactPhone,$message);
			//echo "Got everything";
			} else {
			echo "<p>message failed</p><br/>";
			print_r($_POST);
			

								}
	?>
                               
                              
                   
                               
							
                              
                              
                               
							