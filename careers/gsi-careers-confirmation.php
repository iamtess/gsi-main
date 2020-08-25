<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - CAREERS</title>
         <?php 
		//required fro mandril form submission
		require '../vendor/autoload.php';

		/**
		 * Send a Email confirming the invoice has been sent
		 *
		 * @return int Success: 1
		 *             Error:   0
		 */
		$capthca = "";
     	$enquiry = "";	
		
	  	if(isset($_POST['firstname'])) { $firstname = $_POST['firstname']; }
	  	if(isset($_POST['lastname'])) { $lastname = $_POST['lastname']; }
	  	if(isset($_POST['email'])) { $email = $_POST['email']; }
	  	if(isset($_POST['phone'])) { $phone = $_POST['phone']; }
		if(isset($_POST['appInterest'])) { $appInterest = $_POST['appInterest']; }
	  	if(isset($_POST['otherInterest'])) { $otherInterest = $_POST['otherInterest']; }
		if(isset($_POST['comments'])) { $comments = $_POST['comments']; }
		if(isset($_FILES['appResume'])) { $resume = $_FILES['appResume']; }
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
			
			function sendEmail($firstname,$lastname,$email,$phone,$appInterest,$otherInterest,$comments,$resume) 
			{


			$message = '<p><strong>NAME:</strong> '. $firstname.' '.$lastname .'</p><p><strong>EMAIL:</strong> '.$email.'<br><strong>PHONE: </strong> '.$phone.'<br><strong>AREA OF INTEREST:</strong>   '.$appInterest.'<br><strong>OTHER AREA OF INTEREST:</strong> '. $otherInterest.'<br><strong>COMMENTS:</strong> '. $comments.'<br>';

		$email_from = $email; // Who the email is from
		$ccEmail = $email;
		
		$upperFirstName = strtoupper($firstname);
		$upperLastName = strtoupper($lastname);
			  
		$mailto = "kel@surfindustries.com";
			  

		$subject = "GSI CAREERS - APPLICATION FROM $upperFirstName $upperLastName";
		$tagDescription = 'GSI CAREERS - APPLICATION';
		$type = 'to';
		$cctype = 'cc';
		$toArray = array(
						array('email'=>$mailto,
							   'name'=>$mailto,
							   'type'=>$type),

						array('email'=>$email,
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
				'from_name' => 'GSI Careers Application',
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
				'bcc_address' => null,
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
						'type' => $resume['type'],
						'name' => $resume['name'],
						'content' => base64_encode(file_get_contents($resume['tmp_name']))
					),
					
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
           <section class="page-title page-title-2 image-bg overlay ">
                <div class="background-image-holder">
                    <img src="../images/careers-page-header.jpg" class="background-image" alt="Global Surf Industries - CAREERS">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="uppercase mb0">CAREERS @ GSI</h2>
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
							
							Thanks your submitting your resume.<p>You will receive an email to confirm this submission.

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
		if(isset($firstname)
	  		&& isset($lastname)
	  		&& isset($email)
	  		&& isset($phone)
			&& isset($appInterest)
		    && isset($resume)
	  		
		) {
			sendEmail($firstname,$lastname,$email,$phone,$appInterest,$otherInterest,$comments,$resume);
			echo "Got everything";
			} else {
			echo "<p>Failed getting all the data</p><br/>";
			print_r($_POST);
			echo "<br/><p>Files end</p><br/>";
			print_r($_FILES);

								}
	?>