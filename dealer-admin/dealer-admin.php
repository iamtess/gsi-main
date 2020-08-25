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
		
		
		$pageName = "";
		$pageName = "dealerAdmin";
		
		//echo 'pagename'. $pageName;
		
		// echo 'user:' . $userType;
		
	?>
        
    </head>
    <body class="scroll-assist">
         <!-- include header -->
        <?php include HOME . 'includes/header-nav-items.inc'; ?>
        <div class="main-container">
            <section class="page-title page-title-4 image-bg overlay parallax">
                <div class="background-image-holder">
                    <?php echo "<img src='" . IMAGES_DIR ."tm-portal-header.jpg' class='background-image' alt='Global Surf Industries - Dealer Portal'>"; ?>
                    
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="uppercase mb0">Dealer Portal</h2>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section>
                <div class="container">
                    <div class="row">
                       <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
                               <a class="portalLink" href="https://system.na2.netsuite.com/app/site/hosting/scriptlet.nl?script=168&deploy=1&compid=3743011">
                                <div class="left">
                                    <i class="ti-shopping-cart icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">PLACE AN ORDER</h5>
                                    <p>
                                        Place an order online.
                                    </p>
								</div>
                               </a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
                               <a class="portalLink" href="onlineDIT.php">
                                <div class="left">
                                    <i class="ti-comment-alt icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">DIT CLAIM</h5>
                                    <p>
                                        Damage in transit claim form.
                                    </p>
								</div>
                               </a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
                               <a class="portalLink" href="onlineWarranty.php">
                                <div class="left">
                                    <i class="ti-comment-alt icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">FAULTY GOODS CLAIM</h5>
                                    <p>
                                        Faulty Goods / Warranty claim form.
                                    </p>
								</div>
                               </a>
                            </div>
                            <!--end of feature-->
                        </div>
                      
                       <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
                               <?php echo '<a class="portalLink" href="/brian/dealer-quick-view.php?warehouse='.$_SESSION ['warehouse'].'">'; ?>
                                <div class="left">
                                    <i class="ti-eye icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">VIEW LIVE INVENTORY</h5>
                                    <p>
                                        Quick View live inventory: pricing and clearance.
                                    </p>
								</div>
                              </a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
                               <a class="portalLink" href="dealer-portal-help-screens.php">
                                <div class="left">
                                    <i class="ti-info icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">DEALER PORTAL ASSISTANCE</h5>
                                    <p>
                                        Tips for using our online ordering system.
                                    </p>
								</div>
                               </a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
                               <a class="portalLink" <?php echo 'href="'.HOME.'dealer-admin/dealerContact.php";'?>>
                                <div class="left">
                                    <i class="ti-email icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">CONTACTS</h5>
                                    <p>
                                        Territory Manager Contact details.
                                    </p>
								</div>
                               </a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
								 <?php
								 if (($_SESSION ['warehouse'] == '13') || ($_SESSION ['warehouse'] == '16') || ($_SESSION ['warehouse'] == '15')){
								 echo '<a class="portalLink" href="https://shop.surfindustries.com/us/affiliate-area/">';
								 }
								 if (($_SESSION ['warehouse'] == '4') || ($_SESSION ['warehouse'] == '3')){
								 echo '<a class="portalLink" href="https://shop.surfindustries.com/au/affiliate-area/">';
								 }
								 if ($_SESSION ['warehouse'] == '12'){
								 echo '<a class="portalLink" href="https://shop.surfindustries.com/nz/affiliate-area/">';
								 }
								 ?>
                                <div class="left">
                                    <i class="ti-user icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">AFFILIATE PROGRAM</h5>
                                    <p>
                                        Log in or sign up to our affiliate program.
                                    </p>
								</div>
                               </a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
                               <a class="portalLink" href="dealer-training-videos.php">
                                <div class="left">
                                    <i class="ti-video-clapper icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">DEALER TRAINING VIDEOS</h5>
                                    <p>
                                        Learn about the different boards in our range.
                                    </p>
								</div>
                               </a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
                               <a class="portalLink" href="ask-the-ceo.php">
                                <div class="left">
                                    <i class="ti-comment icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">ASK THE CEO</h5>
                                    <p>
                                        Send any feedback or questions directly to our CEO.
                                    </p>
								</div>
                               </a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
                               <a class="portalLink" <?php echo 'href="'.HOME.'GSIpayments";' ?>>
                                <div class="left">
                                    <i class="ti-credit-card icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">Make a Payment</h5>
                                    <p>
                                        Pay your invoice online by credit card.
                                    </p>
								</div>
                               </a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
                               <a class="portalLink" href="https://itunes.apple.com/au/app/global-surf-industries-catalogue/id503697347?mt=8&ls=1\">
                                <div class="left">
                                    <i class="ti-download icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">GSI iPad/iPhone Catalogue</h5>
                                    <p>
                                        Download our Catalogue from the iTunes store.
                                    </p>
								</div>
                               </a>
                            </div>
                            <!--end of feature-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <?php include HOME . 'includes/footer.inc'; ?>
        </div>
        <?php include HOME . 'includes/site-scripts.inc'; ?>
    </body>
</html>