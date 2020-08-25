<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - CONTACTS</title>
         <?php 
		// reuired for maindrill form submission
		require '../vendor/autoload.php';

		/**
		 * Send a Email confirming the invoice has been sent
		 *
		 * @return int Success: 1
		 *             Error:   0
		 */
		$capthca = "";
     	$enquiry = "";	
		
	  	if(isset($_POST['enquiryType'])) { $enquiryType = $_POST['enquiryType']; }
	  	if(isset($_POST['name'])) { $name = $_POST['name']; }
	  	if(isset($_POST['email'])) { $visitormail = $_POST['email']; }
	  	if(isset($_POST['town'])) { $town = $_POST['town']; }
		if(isset($_POST['state'])) { $state = $_POST['state']; }
	  	if(isset($_POST['country'])) { $country = $_POST['country']; }
		if(isset($_POST['message'])) { $note = $_POST['message']; }
	  	if(isset($_POST['g-recaptcha-response'])) { $captcha=$_POST['g-recaptcha-response']; }
		
		
		//echo $enquiryType.','.$name.','.$visitormail.','.$town.','.$state.','.$country.','.$note;
		
		 if(!$captcha)
						 {
								  echo "Sorry, you didn't check the captcha box.
										  <br><br><a class=\"regular\" href=\"contact.php\">Please try again</a>
										  </div>
										</div>
										<br>
									  </div>
								  </div> <!--end contact container -->
							  </div><!--end content container -->";
							 include HOME . 'includes/footer.inc'; 
							exit;
        				 }
        				 $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcUjQsTAAAAAG2h7TPEqxa0v2Wy8RihDW4hHRlG&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        				if($response.success==false)
        				{
          					echo '<h2>No spammers allowed!</h2>';
        				}else
        				{	
			
			function sendEmail($enquiryType,$name,$visitormail,$town,$state,$country,$note) 
			{


			$message = '<p><strong>ENQUIRY TYPE:</strong> '. $enquiryType.'</p><p><strong>NAME:</strong> '.$name.'<br><strong>EMAIL: </strong> '.$visitormail.'<br><strong>TOWN:</strong>   '.$town.'<br><strong>STATE:</strong> '. $state.'<br><strong>COUNTRY:</strong> '. $country.'<br><strong>FEEDBACK/ENQUIRY:</strong> '. $note.'<br>';

		$email_from = $visitormail; // Who the email is from
		$ccEmail = $email;
				
			if ($enquiry == "International Distributor Enquiry"){
	  			$mailto = "alex@surfindustries.com";
			  }
			  else {
				$mailto = "info@surfindustries.com";
			  }

		$subject = 'GSI Online Enquiry/Feedback';
		$tagDescription = 'GSI Online Enquiry/Feedback';
		$type = 'to';
		$cctype = 'cc';
		$toArray = array(array('email'=>$mailto,
							   'name'=>$mailto,
							   'type'=>$type));

		$ccArray = array(array('email'=>$email,
							   'name'=>$email,
							   'type'=>$cctype));

		//include_once 'mandrill-api-php/src/Mandrill.php';
		try {

			$mandrill = new Mandrill('BZ9oHdJcxIbpksupLUHHOw');
			$message = array(
				'html' => "<p>$message</p>",
				'text' => 'Please view in a HTML-friendly browser',
				'subject' => $subject,
				'from_email' => $email_from,
				'from_name' => 'GSI Online Enquiry/Feedback',
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


		} catch(Mandrill_Error $e) {
			// Mandrill errors are thrown as exceptions

			print("Failed sending email<br/>");
			print(get_class($e) . ' - ' . $e->getMessage());
			die();
			return false;
			//$this->Session->write('submitted', strtotime('now'));
		}
				
		define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		include HOME . 'includes/header-includes.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 

		echo '
        </head>
        <body class="scroll-assist">
        <!-- include header -->';
			include HOME . 'includes/header-nav-items.inc';
			echo'<div class="main-container">
           <section class="page-title page-title-4 image-bg overlay ">
                <div class="background-image-holder">
                    <img src="../images/contacts-header.jpg" class="background-image" alt="Global Surf Industries - Contact Us">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="uppercase mb0">Thanks for your email</h3>
                        </div>
                        
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-10">
    						<p> 
							
							Thanks for contacting us, we will get back to you shortly. <br>If you would like to speak to someone now please
                                click the "CHAT NOW" button at the bottom of the screen to speak directly to a Global Surf Industries representative.

                            </p>
                            
                            
                        </div>
                       
                    </div>
                    <!--end of row-->
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
		
						}

// Get sender email
		//     sender name
		//     feedback
		//     img upload
		//     file upload
		if(isset($enquiryType)
	  		&& isset($name)
	  		&& isset($visitormail)
	  		&& isset($country)
			&& isset($note)
	  		
		) {
			sendEmail($enquiryType,$name,$visitormail,$town,$state,$country,$note);
			echo "Got everything";
			} else {
			echo "<p>Failed getting files</p><br/>";
			print_r($_POST);
			echo "<br/><p>Files end</p><br/>";
			print_r($_FILES);

								}
	?>