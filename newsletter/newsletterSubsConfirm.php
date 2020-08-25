<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - Newsletter Subscripiton</title>
         <?php 
		session_start();
		define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		include HOME . 'includes/header-includes.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 

	?>
      
    </head>
    <body class="scroll-assist">
        <!-- include header -->
        <?php include HOME . 'includes/header-nav-items.inc'; ?>
        
        <div class="main-container">
            <section class="page-title page-title-2 image-bg overlay ">
                <div class="background-image-holder">
                 <?php echo "<img src='" . IMAGES_DIR ."newsletter-sub.jpg' class='background-image' alt='Global Surf Industries - Newsletter Subscription'>"; ?>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
							<h2 class="uppercase mb8">SUBSCRIBE</h2><br>
                            
                        </div>
                        
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section>
                <div class="container">
                    <div class="row">
                       <div class="col-md-10 col-sm-10 ">
			       		  <div class="heading-title">Newsletter Subscription Confirmation<br><hr></div>
					   </div>
                        <div class="col-md-9 col-sm-10 ">
							<p class="regularText">Thanks for subscribing, our next newsletter will be in your inbox soon.</p><br><br><br><br>
							
							</p>
						</div>
  				</div>
				<!--end of row-->
				</div>
				
          </section>
            
            
             <?php include HOME . 'includes/footer.inc'; ?>
            
        </div>
        <?php include HOME . 'includes/site-scripts.inc'; ?>
    </body>
</html>