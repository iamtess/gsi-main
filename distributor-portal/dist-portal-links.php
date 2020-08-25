<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - DISTRIBUTOR PORTAL</title>
         <?php 
		session_start();
		define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		include HOME . 'includes/header-includes.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
		
		//if (!isset($_SESSION['basic_is_logged_in']) || $_SESSION['basic_is_logged_in'] !== true) {
			
		//echo 	$_SESSION['basic_is_logged_in'];
		// not logged in, move to login page
		//header('Location: dist-portal-login.php');
		//exit;
		//}
		
		if ( $_SESSION ['distributorStatus'] == ""){
		$_SESSION ['distributorStatus'] = $_GET["distributor"];}

		$distributorStatus = $_SESSION ['distributorStatus'];
		
		//echo $distributorStatus;

		if ($distributorStatus == ""){

			 header('Location: https://system.na2.netsuite.com/app/login/secure/privatelogin.nl?c=3743011');
			exit;
		}
			
		
		
		$pageName = "";
		$pageName = "distributorLinks";
		
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
                        <div class="col-md-8">
                            <h2 class="uppercase mb0">Distributor Portal</h2>
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
                            <div class="feature feature-3 mb-xs-24 mb64">
                               <a class="portalLink" href="../media/media-login.php?distributor=true">
                                <div class="left">
                                    <i class="ti-download icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">Media Downloads</h5>
                                    <p>
                                        Download Hi Res product images and logos.
                                    </p>
								</div>
                          	   </a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
                               <a class="portalLink" href="../dealer-admin/onlineWarranty.php?distributor=true">
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
                  	 </div>
                    <!--end of row-->
                    <div class="row"> 
						<div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
                               <a class="portalLink" href="dist-contacts.php?distributor=true">
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
                               <a class="portalLink" href="../dealer-admin/ask-the-ceo.php?distributor=true">
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
					
					<!--<div class="row"> 
					<div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
                               <a class="portalLink" href="../dealer-admin/dealer-training-videos.php?distributor=true">
                                <div class="left">
                                    <i class="ti-video-clapper icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">TRAINING VIDEOS</h5>
                                    <p>
                                        Learn about the different boards in our range.
                                    </p>
								</div>
                               </a>
                            </div>
                            <!--end of feature-->
                       <!-- </div>
					</div> -->
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <?php include HOME . 'includes/footer.inc'; ?>
        </div>
        <?php include HOME . 'includes/site-scripts.inc'; ?>
    </body>
</html>