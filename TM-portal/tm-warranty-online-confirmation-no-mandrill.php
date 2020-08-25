<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - TM PORTAL</title>
         <?php 
		session_start();
		
		
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
$PhotoPath2 = '';
$PhotoPath3 = '';
$PhotoPath4 = '';
		
		
		define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		
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
		
		// echo 'user:' . $userType;
		$pageName = "";
		$pageName = "FGoods";
		
		//echo 'pagename'. $pageName;
		
		
		
		
		
		
		
		
	?>
       
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/theme-gunmetal.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    </head>
    <body class="scroll-assist">
         <!-- include header -->
        <?php include HOME . 'includes/header-nav-items.inc'; ?>
        <div class="main-container">
            <section class="page-title page-title-4 image-bg overlay parallax">
                <div class="background-image-holder">
                    <?php echo "<img src='" . IMAGES_DIR ."tm-portal-header.jpg' class='background-image' alt='Global Surf Industries - TM Portal'>"; ?>
                    
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="uppercase mb0">TM PORTAL</h3><h4>Faulty Goods Claim Form Confirmation</h4>
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
                              
                              
                              
                              <?php

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
							$PhotoPath1 = $_FILES['photo1']['name'];
							$PhotoPath2 = $_FILES['photo2']['name'];
							$PhotoPath3 = $_FILES['photo3']['name'];
							$PhotoPath4 = $_FILES['photo4']['name'];

							//echo "photo send type: $photoSendType<br>";
							//echo "pickup required: $pickUp<br>";

							//echo "path 4: $PhotoPath4 = $_FILES['photo4']['name'];";
						 
							if ($territoryManager ==  "me"){
								$tmEmail = "marke@surfindustries.com";
							}
							if ($territoryManager ==  "mh"){
								$tmEmail = "matth@surfindustries.com";
							}
							if ($territoryManager ==  "eg"){
								$tmEmail = "ed@surfindustries.com";
							}
							if ($territoryManager ==  "gm"){
								$tmEmail = "golden@surfindustries.com";
							}
							
							if ($territoryManager ==  "jd"){
								$tmEmail = "jeff@surfindustries.com";
							}
							if ($territoryManager ==  "ms"){
								$tmEmail = "mikes@surfindustries.com";
							}
							if ($territoryManager ==  "jg"){
								$tmEmail = "jordan@surfindustries.com";
							}
							
							if ($territoryManager ==  "ap"){
								$tmEmail = "alex@surfindustries.com";
							}
							if ($territoryManager ==  "tb"){
								$tmEmail = "tony@surfindustries.com";
							}
							if ($territoryManager ==  "sw"){
								$tmEmail = "scottw@surfindustries.com";
							}
							

							$email_from = $email; // Who the email is from
							$ccEmail = $email ;

							//echo "cc email add: $ccEmail<br>from email_from: $email_from<br>to email:$sendTo";

							$email_subject = "GSI online DIT claim form - $accountName/$boardSerialNo"; // The Subject of the email
							$message = "<p><strong>DAMAGE IN TRANSIT CLAIM FROM:</strong> $accountName</p><p><strong>ACCOUNT NAME:</strong> $accountName<br><strong>CONTACT: </strong>$contact<br><strong>EMAIL:</strong> $email</p><p><strong>INVOICE NUMBER:</strong> $invoiceNo<br><strong>REQUEST TYPE:</strong> $requestType<br><strong>CREDIT VALUE:</strong> $creditValue<br><strong>WHERE IS THE BOARD:</strong> $boardWhereabouts</p><p><strong>BOARD INFORMATION</strong><br><strong>GSI CODE:</strong> $GSICode<br><strong>SERIAL NUMBER:</strong> $boardSerialNo<br><strong>DESCRIPTION:</strong> $problemDesc<br><strong>PHOTOS WILL BE SUPPLIED:</strong> $photoSendType";
							$message_AB = "$accountName,$contact,$email,$invoiceNo,$requestType,$creditValue,$boardWhereabouts,$GSICode,$boardSerialNo,$problemDesc";



							$email_to = "tess@surfindustries.com"; // Who the email is too
							$eol = "\r\n";
							$dbl = "\n\n";
							$separator = md5(time());
							$email = array();

							$email["headers"] .= "From: onlineDIT@surfindustries.com".$eol;
							//$email["headers"] .= "cc: $ccEmail".$eol;
							$email["headers"] .= "Reply-To: $email_from".$eol;
							$email["headers"] .= "MIME-Version: 1.0" . $eol;
							$email["headers"] .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
							$email["headers"] .= "This is a MIME encoded message." . $eol;

							$email["body"] = "--" . $separator . $eol;
							$email["body"] .= "Content-Type: text/html; charset=\"iso-8859-1\"" . $eol;
							$email["body"] .= "Content-Transfer-Encoding: 8bit;" . $dbl;
							$email["body"] .= $message . $dbl;

									 foreach($_FILES as $userfile){
												// store the file information to variables for easier access
												$tmp_name = $userfile['tmp_name'];
												$type = $userfile['type'];
												$name = $userfile['name'];
												$size = $userfile['size'];

												// if the upload succeded, the file will exist
												if (file_exists($tmp_name)){
													 // check to make sure that it is an uploaded file and not a system file
													 if(is_uploaded_file($tmp_name)){
															// open the file for a binary read
															$file = fopen($tmp_name,'rb');
															// read the file content into a variable
															$data = fread($file,filesize($tmp_name));
															// close the file
															fclose($file);
															// now we encode it and split it into acceptable length lines
															$data = chunk_split(base64_encode($data));
													 }

														 $email["body"] .= "--" . $separator . $eol;
														 $email["body"] .= "Content-Type: $type; name=\"" . $name . "\"" . $eol;
														 $email["body"] .= "Content-Transfer-Encoding: base64" . $eol;
														 $email["body"] .= "Content-Disposition: attachment; filename=\"".$name."\"" . $dbl;
														 $email["body"] .= $data . $dbl;
														 $email["type"][$name] = $type;
												}



										 }
							$email["body"] .= "--" . $separator . "--";


							$email2 = array();

                                $email2["headers"] .= "From: onlineDIT@surfindustries.com".$eol;
                                // $email2["headers"] .= "cc: $ccEmail".$eol;
                                $email2["headers"] .= "Reply-To: $email_from".$eol;
                                $email2["headers"] .= "MIME-Version: 1.0" . $eol;
                                $email2["headers"] .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
                                $email2["headers"] .= "This is a MIME encoded message." . $eol;

                                $email2["body"] = "--" . $separator . $eol;
                                $email2["body"] .= "Content-Type: text/html; charset=\"iso-8859-1\"" . $eol;
                                $email2["body"] .= "Content-Transfer-Encoding: 8bit;" . $dbl;
                                $email2["body"] .= $message_AB . $dbl;

                                     foreach($_FILES as $userfile){
                                          // store the file information to variables for easier access
                                          $tmp_name = $userfile['tmp_name'];
                                          $type = $userfile['type'];
                                          $name = $userfile['name'];
                                          $size = $userfile['size'];

                                          // if the upload succeded, the file will exist
                                          if (file_exists($tmp_name)){
                                             // check to make sure that it is an uploaded file and not a system file
                                             if(is_uploaded_file($tmp_name)){
                                                // open the file for a binary read
                                                $file = fopen($tmp_name,'rb');
                                                // read the file content into a variable
                                                $data = fread($file,filesize($tmp_name));
                                                // close the file
                                                fclose($file);
                                                // now we encode it and split it into acceptable length lines
                                                $data = chunk_split(base64_encode($data));
                                             }

                                               $email2["body"] .= "--" . $separator . $eol;
                                               $email2["body"] .= "Content-Type: $type; name=\"" . $name . "\"" . $eol;
                                               $email2["body"] .= "Content-Transfer-Encoding: base64" . $eol;
                                               $email2["body"] .= "Content-Disposition: attachment; filename=\"".$name."\"" . $dbl;
                                               $email2["body"] .= $data . $dbl;
                                               $email2["type"][$name] = $type;
                                          }



                                       }
                                $email2["body"] .= "--" . $separator . "--";


							$ok = mail($email_to, $email_subject, $email["body"], $email["headers"]);
								//$email_AB = "andrew@surfindustries.com"; //email andrew b
							$ok_AB = mail($email_AB, $email_subject, $email2["body"], $email2["headers"]);
							if($ok) {

								 //echo "<p><strong>country:$country</strong><br>";

							echo '<br><br><br><h5>Thankyou for submitting your Faulty Goods claim.<br>We will be in touch with you shortly.</h5>';
							} else {
							die('Sorry but the email could not be sent. Please go back and try again!');
							}
							?>
                              
                              
                              
                              
                              
                               
							  </div> 
                               
								
                                
							</div> 
                            <!--end of row-->
                            
                        </div>
                        <!--end form div-->
                         <!--begin side bar-->
                        <div class="col-md-3 col-md-pull-9 hidden-sm">
                           <?php include HOME . 'includes/tm-portal-left-menu.inc'; ?>
                            
                            
                            
                            
                        </div>
                        <!--end of sidebar-->
                    </div>
                    <!--end of container row-->
                </div>
                <!--end of container-->
            </section>
            <?php include HOME . 'includes/footer.inc'; ?>
        </div>
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
</html>