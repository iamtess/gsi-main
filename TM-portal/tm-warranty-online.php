<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - TM PORTAL</title>
         <?php 
		session_start();
		define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		
		
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
		include HOME . 'includes/header-includes.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
		
	?>
       
    <script type="text/javascript">
function change()
{
   switch (document.getElementById("select").value)
   {
      case "1":
      document.getElementById("change").innerHTML = "<strong>NB: IMAGES SHOULD BE NO BIGGER 1MB EACH.</strong><br><sup>*</sup>1. damage in detail:<br><input class='formText' type='file' name='photo1' class='warrantySelectText' style='width:270px;'><br>2. damage in detail:<br><input class='formText' type='file' name='photo2' class='warrantySelectText' style='width:270px;'>3. damage in detail:<br><input class='formText' type='file' name='photo3' class='warrantySelectText' style='width:270px;'>4. damage in detail:<br><input class='formText' type='file' name='photo4' class='warrantySelectText' style='width:270px;'></div>"
	  
      break;


   case "2":
   document.getElementById("change").innerHTML = "Please send your images via Email or MMS, within 5 day of submitting this form."
	
	 
      break;
 
   }


	if (document.warrantyForm.select.options[document.warrantyForm.select.options.selectedIndex].value > "0"){
			var mPhotoSendTxt = document.warrantyForm.select.options[document.warrantyForm.select.options.selectedIndex].text;
					document.warrantyForm.photoSentTxt.value = mPhotoSendTxt;
					return true;
			
		
	}


}
</script>
       
    
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
                            <h2 class="uppercase mb0">TM PORTAL</h2><h4>Faulty Goods Claim Form</h4>
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
                            <form action="tm-warranty-online-confirmation.php" name="warrantyForm" id="warrantyForm" onsubmit="return validateForm();" enctype="multipart/form-data" method="post">
							<input type="hidden" value="<?php $_SESSION['country'] ?>" name="country">
							<?php //echo "<p><strong>country:$country</strong><br>";?>
							<input type="hidden" value="" name="photoSentTxt">	
							<div class="container">
							<div class="row">		
								<div class="portalTopText mb8">
									Please fill out ALL required * fields before submitting this form.
								</div> 
                           <div class="col-md-8 col-sm-10 ">
			       		  		<div class="heading-title">TERRITORY MANAGER<br><hr></div>
					       </div>
				      		<div class="col-md-6 col-sm-10 ">
                            		<div class="select-option">
                                		<i class="ti-angle-down"></i>
                                		<select required name="TM">
											<option value="">Select your territory manager</option>
											<option value="eg">Ed Gerbino</option>
											<option value="gw">Garret Wiseth</option>
											<option value="jg">Jordan Gosling</option>
											<option value="mk">Kel</option>
											<option value="ms">Mike Sidani</option>
                                		</select>
                           			 </div>
                                </div>
							<div class="col-md-8 col-sm-10 ">
                                <div class="heading-title">Store Details<br><hr></div>
								</div>
                               <div class="col-md-6 col-sm-10 ">
								   <input type="text" placeholder="account name" name="accName" required />
								   <input type="text" placeholder="contact name" name="contactName" required/>
								   <input type="text" placeholder="email address" name="contactEmail" required/>
							   </div>
                            	<div class="col-md-8 col-sm-10 ">
                                <div class="heading-title">Claim information<br><hr></div>
								</div>
                               <div class="col-md-6 col-sm-10 ">
								   <input type="text" placeholder="invoice number" name="invNo" required />
									<div class="select-option">
										<i class="ti-angle-down"></i>
										<select name="request" required>
											<option value="">what are you requesting?</option>
											<option value="Partial Credit">Partial Credit</option>
											<option value="Total Credit">Total Credit^^</option>
											<option value="Replacement">Replacement ^^</option>
										</select>
									</div>
								   <input class="mb0" type="text" placeholder="credit value" name="creditValue" required/>
								   <div class="mb24">
										^^If you are requesting a total credit or replacement we may ask you to provide evidence that the board has been destroyed prior to our supplying said credit or replacement.
									</div>
									<div class="select-option">
										<i class="ti-angle-down"></i>
										<select name="whereBoard" required>
											<option value="">where is the board now?</option>
											<option value="refused">refused - sent back to warehouse</option>
											<option value="pickedUpTM">picked up by my territory manager</option>
											<option value="needspickup">needs to be picked up</option>
											<option value="keep">partial credit - keeping the board</option>
										</select>
									</div>
								</div>
								<div class="col-md-8 col-sm-10 ">
									<div class="heading-title">Board Information<br><hr></div>
							   </div>
                               <div class="col-md-6 col-sm-10 ">
								  <input type="text" placeholder="GSI Code^"  name="gsiCode" required />
								  <input class="mb0" type="text" placeholder="serial no. ^^" name="serialNo" required/>
								  <div class="mb24">
								     ^found on invoice or stock sheet<br>
								     ^^found on the box of the back og the board
								   </div>
							    </div>
                                <div class="col-md-8 col-sm-10 ">
									<div class="heading-title">Descripiton<br><hr></div>
							   </div>
                               <div class="col-md-6 col-sm-10 ">
                               	  <textarea placeholder="please describe the issue" rows="3" name="issue" required></textarea>
							    </div>
                                <div class="col-md-8 col-sm-10 ">
									<div class="heading-title">PHOTO<br><hr></div>
							   </div>
                               <div class="col-md-6 col-sm-10 ">
									PLEASE NOTE</strong> A Digital Photo <strong>IS</strong> required to process claims for Damage in Transit. The claim can not be processed until the image has been received.
									<div class="select-option">
										<i class="ti-angle-down"></i>
									<select onchange="change()" id="select" name ="select" required>
										<option value="0"> PLEASE SELECT HOW YOU WILL SUPPLY YOUR IMAGES</option>
										<option value="1">attached to this form</option>
										<option value="2">via Email or MMS</option>
									</select>
									</div>
									<div id="change" style="margin:10px;width:469px;padding:5px;background-color:#ffffff;" class="contentText"></div>
								
								 </div>
							</div> 
							 <!--end of row-->
							</div>
							<div class="container">
							<div class="row">
								<div class="col-md-3 col-sm-10 ">
									<input  class="hollow" type="submit" value="Submit Button" />
								</div>
								</form>
							</div> 
							 <!--end of row-->
							</div>
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
        <?php include HOME . 'includes/site-scripts.inc'; ?>
    </body>
</html>