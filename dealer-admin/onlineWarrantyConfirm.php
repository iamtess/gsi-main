<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
         <?php 
		session_start();
		//required form mandrill form submission
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
				
		
		//echo 'distributor status'. $_SESSION['distributorStatus'];
		
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
		$PhotoPath2 = $_FILES['photo2'];
		$PhotoPath3 = $_FILES['photo3'];
		$PhotoPath4= $_FILES['photo4'];
		

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

			//echo "cc email add: $ccEmail<br>from email_from: $email_from<br>to email:$sendTo";
			
		
		
		function sendEmail($terrioryManager,$tmEmail,$accountName,$contact, $email,$invoiceNo,$requestType,$creditValue,$boardWhereabouts,$GSICode,$boardSerialNo,$problemDesc,$photoSendType,$PhotoPath1,$PhotoPath2,$PhotoPath3,$PhotoPath4) 
		{

		//echo $terrioryManager,$tmEmail,$accountName,$contact,$email,$invoiceNo,$requestType,$creditValue,$boardWhereabouts,$GSICode,$boardSerialNo,$problemDesc,$photoSendType,$PhotoPath1,$PhotoPath2,$PhotoPath3,$PhotoPath4;
			
		$message_AB = "$accountName,$contact,$email,$invoiceNo,$requestType,$creditValue,$boardWhereabouts,$GSICode,$boardSerialNo,$problemDesc";
			
		$message = "<p><strong>FAULTY GOODS CLAIM FROM:</strong> $accountName</p><p><strong>ACCOUNT NAME:</strong> $accountName<br><strong>CONTACT: </strong>$contact<br><strong>EMAIL:</strong> $email</p><p><strong>INVOICE NUMBER:</strong> $invoiceNo<br><strong>REQUEST TYPE:</strong> $requestType<br><strong>CREDIT VALUE:</strong> $creditValue<br><strong>WHERE IS THE BOARD:</strong> $boardWhereabouts</p><p><strong>BOARD INFORMATION</strong><br><strong>GSI CODE:</strong> $GSICode<br><strong>SERIAL NUMBER:</strong> $boardSerialNo<br><strong>DESCRIPTION:</strong> $problemDesc<br><strong>PHOTOS WILL BE SUPPLIED:</strong> $photoSendType";

		$email_from = $email; // Who the email is from
		$ccEmail = $email;

		$subject = 'GSI Faulty Goods claim from '.$accountName.' / '.$boardSerialNo;
		$tagDescription = 'GSI Faulty Goods claim form';
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
				'from_email' => 'onlineWarranty@surfindustries.com',
				'from_name' => 'GSI Faulty Goods claim',
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
						'type' => $PhotoPath1['type'],
						'name' => $PhotoPath1['name'],
						'content' => base64_encode(file_get_contents($PhotoPath1['tmp_name']))
					),
					array(
						'type' => $PhotoPath2['type'],
						'name' => $PhotoPath2['name'],
						'content' => base64_encode(file_get_contents($PhotoPath2['tmp_name']))
					),
				    array(
						'type' => $PhotoPath3['type'],
						'name' => $PhotoPath3['name'],
						'content' => base64_encode(file_get_contents($PhotoPath3['tmp_name']))
					),
				    array(
						'type' => $PhotoPath4['type'],
						'name' => $PhotoPath4['name'],
						'content' => base64_encode(file_get_contents($PhotoPath4['tmp_name']))
					),
					array(
						'type' => $file['type'],
						'name' => $file['name'],
						'content' => base64_encode(file_get_contents($file['tmp_name']))
					)
				),
				'images' => null
			);
			$message_2 = array(
				'html' => "<p>$message_AB</p>",
				'text' => 'Please view in a HTML-friendly browser',
				'subject' => $subject,
				'from_email' => 'onlineWarranty@surfindustries.com',
				'from_name' => 'GSI Faulty Goods claim',
				'to' => $toArray_2,
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
						'type' => $PhotoPath2['type'],
						'name' => $PhotoPath2['name'],
						'content' => base64_encode(file_get_contents($PhotoPath2['tmp_name']))
					),
				    array(
						'type' => $PhotoPath3['type'],
						'name' => $PhotoPath3['name'],
						'content' => base64_encode(file_get_contents($PhotoPath3['tmp_name']))
					),
				    array(
						'type' => $PhotoPath4['type'],
						'name' => $PhotoPath4['name'],
						'content' => base64_encode(file_get_contents($PhotoPath4['tmp_name']))
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
			$resultEmail_2 = $mandrill->messages->send($message_2, $async, $ipPool);


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

			// echo 'user:' . $userType;
		$pageName = "";
		$pageName = "FGoods";
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
						<div class="col-md-8">';
			
			if ($userType == 'distributor'){
								echo '<h2 class="uppercase mb0">DISTRIBUTOR PORTAL</h2><h4>Faulty Goods Claim Form Confirmation</h4>';
								
							}
                            else {
							 echo '<h2 class="uppercase mb0">DEALER PORTAL</h2><h4>Faulty Goods Claim Form Confirmation</h4>';	
								
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
								 Thankyou for submitting your claim.<br>We will be in touch with you shortly.
								
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
				</html>   ';     
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
			sendEmail($terrioryManager,$tmEmail,$accountName,$contact, $email,$invoiceNo,$requestType,$creditValue,$boardWhereabouts,$GSICode,$boardSerialNo,$problemDesc,$photoSendType,$PhotoPath1,$PhotoPath2,$PhotoPath3,$PhotoPath4);
			//echo "Got everything";
			} else {
			echo "<p>Failed getting files</p><br/>";
			print_r($_POST);
			echo "<br/><p>Files end</p><br/>";
			print_r($_FILES);

								}
	?>
                               
                              
                   
                               
							
                              
                              
                               
							