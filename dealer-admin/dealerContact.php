<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - DEALER PORTAL</title>
         <?php 
		session_start();
		define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		include HOME . 'includes/header-includes.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 

		
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
		
		$warehouse = "";
		$warehouse = $_SESSION ['warehouse'];
		$warehouseName = "";
		$pageName = "";
		$pageName = "dealerContact";
		
		if ($warehouse == '3'){
			$warehouseName = "SYDNEY";
		}
		
		if ($warehouse == '4'){
			$warehouseName = "PERTH";
		}
		
		if ($warehouse == '16'){
			$warehouseName = "LA";
		}
		
		if ($warehouse == '13'){
			$warehouseName = "ATLANTA";
		}
		
		if ($warehouse == '15'){
			$warehouseName = "HAWAII";
		}
		
		if ($warehouse == '12'){
			$warehouseName = "AUCKLAND";
		}
		
		//$warehouseNo = "3";
		//$warehouse = "3";

	  
		
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
                        <div class="col-md-6">
                            <h2 class="uppercase mb0">DEALER PORTAL</h2><h4>Contacts</h4>
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
                           
                           <?php
							if (($warehouseName == 'ATLANTA')|| ($warehouseName == 'LA')|| ($warehouseName == 'HAWAII')){
								
							echo '	
                           
                            <p>	<div class="col"><strong>DEALER SERVICE & OPERATIONAL ENQUIRIES</strong></div>
                             	<div class="col">West Coast - Scott Wyatt</div>
                             	<div class="col"><i class="ti-email">&nbsp;</i> <a class="contactLink" href="scottw@surfindustries.com">scottw@surfindustries.com</a></div>
                                <div class="col"><i class="ti-mobile">&nbsp;</i> 310 651 8218<br /></div>
								<div class="col"><strong>F:</strong> 408 516 5890</div>
                            </p>
                            <p>
								<div class="col">East Coast - Tony Buttler</div>
                             	<div class="col"><i class="ti-email">&nbsp;</i> <a class="contactLink" href="tony@surfindustries.com">tony@surfindustries.com</a></div>
                                <div class="col"><i class="ti-mobile">&nbsp;</i> 855 474 6821 (toll free)<br /></div>
								<div class="col"><strong>F:</strong> 408 516 5890</div>
                            </p>
                            <hr>
                            <p> <div class="col"><strong>ACCOUNTS RECEIVABLE ENQUIRIES</strong></div>
                            	<div class="col">Garret Wiseth</div>
                             	<div class="col"><i class="ti-email">&nbsp;</i> <a class="contactLink" href="garret@surfindustries.com">garret@surfindustries.com</a></div>
                                <div class="col"><i class="ti-mobile">&nbsp;</i> 877 474 6503 (toll free)<br /></div>
								<div class="col"><strong>F:</strong> 408 516 5890</div>
                            </p>
                            <hr>
                            <p> <div class="col"><strong>SALES: CA, AZ, NM, UT, CO, NV</strong></div>
								<div class="col">Jeff Deffenbaugh</div>
                                <div class="col"><i class="ti-email">&nbsp;</i> <a class="contactLink" href="mailto:jeff@surfindustries.com">jeff@surfindustries.com</a></div>
								<div class="col"><i class="ti-mobile">&nbsp;</i> 714 318 9963 </div>
								
                            </p>
                            <hr>
                            <p> <div class="col"><strong>SALES: OR, WA, AK, ID, WY & Canada</strong></div>
								<div class="col">Alex Pappas</div>
                                <div class="col"><i class="ti-email">&nbsp;</i> <a class="contactLink" href="mailto:alex@surfindustries.com">alex@surfindustries.com</a></div>
								<div class="col"><i class="ti-mobile">&nbsp;</i>  831 471 5790</div>
								
                            </p>
                            <hr>
                            <p> <div class="col"><strong>SALES: FL, GA, SC, NC, TN, AL, MI, LT, TX</strong></div>
								<div class="col">Golden Marshall</div>
                                <div class="col"><i class="ti-email">&nbsp;</i> <a class="contactLink" href="mailto:golden@surfindustries.com">golden@surfindustries.com</a></div>
								<div class="col"><i class="ti-mobile">&nbsp;</i>  321 305 9649</div>
								
                            </p>
                            <hr>
                            <p> <div class="col"><strong>SALES: WI, MI, IL, IN, OH, PA, MD, DE, NJ, NY, CT, RI, MA, ME, VT, NH and the Outerbanks + Caribbean, Eastern Canada (Ontario, Quèbec & Maritimes)</strong></div>
								<div class="col">Ed Gerbino</div>
                                <div class="col"><i class="ti-email">&nbsp;</i> <a class="contactLink" href="mailto:ed@surfindustries.com">ed@surfindustries.com</a></div>
								<div class="col"><i class="ti-mobile">&nbsp;</i>  408 306 8775</div>
								
                            </p>
                            <hr>
                            <p> <div class="col"><strong>SALES: HI, ND, SD, NE, KS, OK, AR, MO, IA, MN, KY, WV, MT</strong></div>
								<div class="col">Mike Sidani</div>
                                <div class="col"><i class="ti-email">&nbsp;</i> <a class="contactLink" href="mailto:mikes@surfindustries.com">mikes@surfindustries.com</a></div>
								<div class="col"><i class="ti-mobile">&nbsp;</i>  808 220 8649</div>
								
                            </p>
                            <hr>
                            <p> <div class="col"><strong>SALES: Pacific North West, Canada West, Mexico, South & Central America</strong></div>
								<div class="col">Alex Pappas</div>
                                <div class="col"><i class="ti-email">&nbsp;</i> <a class="contactLink" href="mailto:alex@surfindustries.com">alex@surfindustries.com</a></div>
								<div class="col"><i class="ti-mobile">&nbsp;</i>  831 471 5790</div>
								
                            </p>
                            <hr>
                            <p> <div class="col"><strong>POSTAL DETAILS</strong></div>
                            	<div class="col">General Correspondence and Payments</div>
								<div class="col">P.O Box 33133 Los Gatos, CA 95031 USA </div>
								
							</p>';
							} //end USA contacts
							
							
							if (($warehouseName == 'SYDNEY')|| ($warehouseName == 'PERTH')){
								
							echo '	
                           
                            <p>	<div class="col"><strong>CUSTOMER SERVICES MANAGER</strong></div>
                             	<div class="col">Chris Pothof</div>
                             	<div class="col"><i class="ti-email">&nbsp;</i> <a class="contactLink" href="chris@surfindustries.com">chris@surfindustries.com</a></div>
                                <div class="col"><i class="ti-mobile">&nbsp;</i> 310 651 8218<br /></div>
								<div class="col"><strong>F:</strong> 408 516 5890</div>
                            </p>
                            
                            <hr>
                            <p> <div class="col"><strong>SALES</div>
								<div class="col">Mark Eymes</div>
                                <div class="col"><i class="ti-email">&nbsp;</i> <a class="contactLink" href="mailto:marke@surfindustries.com">marke@surfindustries.com</a></div>
								<div class="col"><i class="ti-mobile">&nbsp;</i> 0414 677 310</div>
								
                            </p>
                            <hr>
                            <p> <div class="col"><strong>POSTAL DETAILS</strong></div>
                            	<div class="col">General Correspondence and Payments</div>
								<div class="col">88 Bower Street, Manly NSW 2095</div></p>
							<p>	<div class="col">Payments</div>
								<div class="col">PO Box 3346, Wamberal, NSW, 2260</div>
								<div class="col">F: 02 9475 0745</div>
								
							</p>';
							} //end AUS contacts
							
							if ($warehouseName == 'AUCKLAND'){
								
							echo '	
                           
                            <p>	<div class="col"><strong>CUSTOMER SERVICES MANAGER</strong></div>
                             	<div class="col">Chris Pothof</div>
                             	<div class="col"><i class="ti-email">&nbsp;</i> <a class="contactLink" href="chris@surfindustries.com">chris@surfindustries.com</a></div>
                                <div class="col"><i class="ti-mobile">&nbsp;</i> 1300 368 428<br /></div>
								<div class="col"><strong>F:</strong>+61 02 408 516 5890</div>
                            </p>
                            
                            <hr>
                           <p> <div class="col"><strong>SALES:</strong></div>
								<div class="col">Jordan Gosling</div>
                                <div class="col"><i class="ti-email">&nbsp;</i> <a class="contactLink" href="mailto:jordan@surfindustries.com">jordan@surfindustries.com</a></div>
								<div class="col"><i class="ti-mobile">&nbsp;</i> 021 064 8033</div>
								
                            </p>
                            <hr>
                           
                            <p> <div class="col"><strong>POSTAL DETAILS</strong></div>
                            	<div class="col">General Correspondence and Payments</div>
								<div class="col">PO BOX 4013 Mt Maunganui South Tauranga 3149 NZ </div>
							</p>';
							} //end NZ contacts
							
							
							
							?>
                        </div>
                     <!--begin side bar-->
                     <div class="col-md-3 col-md-pull-9 hidden-sm">
                         <?php include HOME . 'includes/dealer-portal-left-menu.inc'; ?>
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
      
      
      <script>
  ga('send', 'pageview');
</script>
      
    </body>
</html>