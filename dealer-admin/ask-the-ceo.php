<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
         <?php 
		session_start();
		define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		include HOME . 'includes/header-includes.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 

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
		
		$pageName = "";
		$pageName = "askCEO";
		
		//echo 'pagename'. $pageName;
		
	?>
       
    </head>
    <body class="scroll-assist">
         <!-- include header -->
        <?php include HOME . 'includes/header-nav-items.inc'; ?>
        <div class="main-container">
            <section class="page-title page-title-4 image-bg overlay  parallax">
                <div class="background-image-holder">
                    <?php echo "<img src='" . IMAGES_DIR ."tm-portal-header.jpg' class='background-image' alt='Global Surf Industries - Dealer Portal'>"; ?>
                    
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <?php
							if ($userType == 'distributor'){
								echo '<h2 class="uppercase mb0">DISTRIBUTOR PORTAL</h2><h4>Ask the CEO</h4>';
								
							}
                            else {
							 echo '<h2 class="uppercase mb0">DEALER PORTAL</h2><h4>Ask the CEO</h4>';	
								
							}
                         ?> 
                            
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
                            <form action="ask-the-ceo-confirm.php" name="warrantyForm" id="warrantyForm" onsubmit="return validateForm();" enctype="multipart/form-data" method="post">
							
							<div class="container">
							<div class="row">		
								<div class="portalTopText mb8">
									Please fill out ALL fields before submitting this form.
								</div> 
                           <div class="col-md-8 col-sm-10 ">
			       		  		<div class="heading-title">YOUR DETAILS<br><hr></div>
					       </div>
				      		
                               <div class="col-md-6 col-sm-10 ">
								   <input type="text" placeholder="account name" name="accName" required class="validate-required"/>
								   <input type="text" placeholder="contact name" name="contactName" required class="validate-required"/>
								   <input type="text" placeholder="email address" name="contactEmail" required class="validate-required"/>
								   <input type="text" placeholder="phone number" name="contactPhone" required class="validate-required"/>
							   </div>
                            	
                               
								
                               
                                <div class="col-md-8 col-sm-10 ">
									<div class="heading-title">Comment<br><hr></div>
							   </div>
                               <div class="col-md-6 col-sm-10 ">
								   <textarea required class="validate-required" placeholder="please enter you comment/question/feedback here..." name="message" rows="4"></textarea>
							    </div>
                                
                               
							</div> 
							 <!--end of row-->
							</div>
							<div class="container">
							<div class="row">
								<div class="col-md-3 col-sm-10 ">
									<input class="hollow" type="submit" value="Submit Button" />
								</div>
								</form>
							</div> 
							 <!--end of row-->
							</div>
                        </div>
                        <!--end form div-->
                         <!--begin side bar-->
                        <div class="col-md-3 col-md-pull-9 hidden-sm">
                           <?php
							if ($userType == 'distributor'){
								include HOME . 'includes/dist-portal-left-menu.inc';	
								
							}
                            else {
							 include HOME . 'includes/dealer-portal-left-menu.inc';	
								
							}
                         ?> 
                            
                            
                            
                            
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