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

		
		if ( $_SESSION ['distributorStatus'] == ""){
		$_SESSION ['distributorStatus'] = $_GET["distributor"];}

		$distributorStatus = $_SESSION ['distributorStatus'];
		
		//echo $distributorStatus;

		if ($distributorStatus == ""){

			 header('Location: https://system.na2.netsuite.com/app/login/secure/privatelogin.nl?c=3743011');
			exit;
		}
			
		$pageName = '';
		$pageName = 'distContact';
	  
		
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
                            <h2 class="uppercase mb0">DISTRIBUTOR PORTAL</h2><h4>Contacts</h4>
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
                           
                          
                           
                            <p>	<div class="col"><strong>INTERNATIONAL DEVELOPMENT</strong></div>
                             	<div class="col">Alex Pappas</div>
                             	<div class="col"><i class="ti-email">&nbsp;</i> <a class="contactLink" href="alex@surfindustries.com">alex@surfindustries.com</a></div>
                                <div class="col"><i class="ti-mobile">&nbsp;</i> +1 831 471 5790<br /></div>
								<div class="col"><i class="ti-skype">&nbsp;</i> gsi-alex</div>
                            </p>
                            
							
							
							
                        </div>
                     <!--begin side bar-->
                     <div class="col-md-3 col-md-pull-9 hidden-sm">
                         <?php include HOME . 'includes/dist-portal-left-menu.inc'; ?>
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