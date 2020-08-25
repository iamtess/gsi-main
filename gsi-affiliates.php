<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - AFFILIATE PROGRAM</title>
         <?php 
		session_start();
		define( "HOME", "" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		include HOME . 'includes/header-includes.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
		
		
		
		// echo 'user:' . $userType;
		
	?>
        
    </head>
    <body class="scroll-assist">
         <!-- include header -->
        <?php include HOME . 'includes/header-nav-items.inc'; ?>
        <div class="main-container">
            <section class="page-title page-title-4 image-bg overlay">
                <div class="background-image-holder">
                    <?php echo "<img src='" . IMAGES_DIR ."affiliate-page-header.jpg' class='background-image' alt='Global Surf Industries - GSI Affiliates'>"; ?>
                    
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="uppercase mb0">GSI Affiliate Program</h2><h4>Login / Sign Up</h4>
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
                            <div class="feature feature-3 mb-xs-24 mb64">
                               <a class="portalLink" href="https://www.surfindustries.com/shop/au/affiliate-area/">
                                <div class="left">
                                    <i class="ti-user icon-sm"></i>
                                </div>
                                <div class="right">
                                
									<h5 class="uppercase mb16">Australia <br>Affiliate Program</h5>
                                    <p>
										Click here to login or sign up for our Australian Affiliate Program.
                                    </p>
                                </div>
                                </a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24 mb64">
                               <a class="portalLink" href="https://www.surfindustries.com/shop/nz/affiliate-area/">
                                <div class="left">
                                    <i class="ti-user icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">New Zealand <br>Affiliate Program</h5>
                                    <p>
                                        Click here to login or sign up for our New Zealand Affiliate Program.
                                    </p>
                                </div>
								</a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24 mb64">
                               <a class="portalLink" href="https://www.surfindustries.com/shop/us/affiliate-area/">
                                <div class="left">
                                    <i class="ti-user icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">USA <br>Affiliate Program</h5>
                                    <p>
                                        Click here to login or sign up for our USA Affiliate Program.
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