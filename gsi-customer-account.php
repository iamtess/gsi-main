<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - CUSTOMER LOGIN</title>
         <?php 
		session_start();
		define( "HOME", "" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		
		
		
		// echo 'user:' . $userType;
		
	?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme-gunmetal.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    </head>
    <body class="scroll-assist">
         <!-- include header -->
        <?php include HOME . 'includes/header-nav-items.inc'; ?>
        <div class="main-container">
            <section class="page-title page-title-4 image-bg overlay">
                <div class="background-image-holder">
                    <?php echo "<img src='" . IMAGES_DIR ."affilate-page-header.jpg' class='background-image' alt='Global Surf Industries - GSI Affiliates'>"; ?>
                    
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <h2 class="uppercase mb0">GSI online account Login</h2>
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
                               <a class="portalLink" href="https://shop.surfindustries.com/au/my-account/">
                                <div class="left">
                                    <i class="ti-user icon-sm"></i>
                                </div>
                                <div class="right">
                                
									<h5 class="uppercase mb16">Australia <br>GSI ONLINE STORE</h5>
                                    <p>
										If you have previously registered as a customer on the our Australian web store you can log in here to view your purchase history and order status.
                                    </p>
                                </div>
                                </a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24 mb64">
                               <a class="portalLink" href="https://shop.surfindustries.com/nz/my-account/">
                                <div class="left">
                                    <i class="ti-user icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">New Zealand <br>GSI ONLINE STORE</h5>
                                    <p>
                                        If you have previously registered as a customer on the our New Zealand web store you can log in here to view your purchase history and order status.
                                    </p>
                                </div>
								</a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24 mb64">
                               <a class="portalLink" href="https://shop.surfindustries.com/us/my-account/">
                                <div class="left">
                                    <i class="ti-user icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">USA <br>GSI ONLINE STORE</h5>
                                    <p>
                                        If you have previously registered as a customer on the our US web store you can log in here to view your purchase history and order status.
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
       <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/flickr.js"></script>
        <script src="js/flexslider.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/masonry.min.js"></script>
        <script src="js/twitterfetcher.min.js"></script>
        <script src="js/spectragram.min.js"></script>
       <!-- <script src="js/ytplayer.min.js"></script> -->
        <script src="js/countdown.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>