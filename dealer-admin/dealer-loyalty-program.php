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

		
		
		if ($_SESSION['user'] == 'distributor'){
		
			$userType = $_SESSION['user'];
			
			if (!isset($_SESSION['basic_is_logged_in']) || $_SESSION['basic_is_logged_in'] !== true) {
			
			echo 	$_SESSION['basic_is_logged_in'];
			// not logged in, move to login page
			header('Location: dist-portal-login.php');
			exit;
			}
		}
		
		
		//warehouse from daisy sets $warehouseNo variable 
		else {
		
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
		$pageName = "dealerLoyalty";
		
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
                            <h2 class="uppercase mb0">DEALER LOYALTY PROGRAM</h2>
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
                        <div class="col-sm-12 col-sm-offset-1">
                        
                        
                        
                         <?php
							
							//echo 'country'.$country.'<br>';
							
							if ($country == 'usDealers'){
                           echo '<h3 class="mb40 mb-xs-24">Our Dealer Loyalty Program is designed to help increase the profitability of your surfboard business. We reward dealers who align their buying behaviour with our brand portfolio.</h3>
                           <div class="text-left">
                           <h4>You essentially make more money the more you buy from us.</h4>
						   <h5>We have three ongoing programs:</h5>
							
						   <p class="regularText"><strong>1. Prebook Program:</strong><br>
						   10% discount = 37% Margin & 59% Mark Up.</p>
							<p class="regularText"><strong>2. At once ongoing purchases:</strong><br>Dealer levels are based on turnover.</p><p>
							<ul>
								<li class="mb8"><img src="../images/icon-loyalty-trade-2.gif" width="32" height="24" alt=""/><strong>Trade Dealers:</strong> up to $25k = 0% re-order discount, 30% Margin, 43% Mark up.</li>
								<li class="mb8"><img src="../images/icon-loyalty-silver-2.gif" width="32" height="24" alt=""/><strong>Silver Dealers:</strong> $25 - $50k = 3% reorder discount, 32% Margin, 47% Mark up.</li>
								<li class="mb8"><img src="../images/icon-loyalty-gold-2.gif" width="32" height="24" alt=""/><strong>Gold Dealers:</strong> $50k - $75k = 6% reorder discount, 34% Margin , 52% Mark up.</li>
								<li class="mb8"><img src="../images/icon-loyalty-platinum-2.gif" width="32" height="24" alt=""/><strong>Platinum Dealers:</strong> $75k - $100k = 9% reorder discount, 36% Margin, 57% Mark up.</li>
								<li class="mb8"><img src="../images/icon-loyalty-diamond-2.gif" width="32" height="24" alt=""/><strong>Diamond Dealers:</strong> $100+k = 12% reorder discount, 38% Margin, 62% Mark up.</li>
							</ul>
							<p class="regularText"><strong>3. Clearance and Demo/rental orders:</strong><br>Your Dealer Loyalty discount is taken in addition to the clearance or demo/ rental price. </p>
							
							</div>'; }
							
							
							if ($country == 'ausDealers'){
                           echo '<h3 class="mb40 mb-xs-24">Our Dealer Loyalty Program is designed to help increase the profitability of your surfboard business. We reward dealers who align their buying behaviour with our brand portfolio.</h3>
                           <div class="text-left">
                           <h4>You essentially make more money the more you buy from us.</h4>
						   <h5>We have three ongoing programs:</h5>
						   <p class="regularText"><strong>1. Prebook Program:</strong><br>
						   <ul class="bullets">
						   		<li><strong>Everyday Range:</strong> 10% discount = 37% Margin & 59% Mark Up</li>
						   		<li><strong>Price Sensitive Range:</strong> 15% discount = 32% Margin & 47% Mark Up.</li>
						   </ul>
						   ** Softboards and Accessories have margins starting at 42% on prebook **
						   </p>
						   <p class="regularText"><strong>2. At once ongoing purchases:</strong><br>Dealer levels are based on turnover.</p><p>
						   <ul>
								<li class="mb16"><img src="../images/icon-loyalty-trade-2.gif" width="32" height="24" alt=""/><strong>Trade Dealers:</strong> up to $30k = 0% re-order discount, 30% Margin, 43% Mark up.</li>
								<li class="mb16"><img src="../images/icon-loyalty-silver-2.gif" width="32" height="24" alt=""/><strong>Silver Dealers:</strong> $30 - $60k = 3% reorder discount, 32% Margin, 47% Mark up.</li>
								<li class="mb16"><img src="../images/icon-loyalty-gold-2.gif" width="32" height="24" alt=""/><strong>Gold Dealers:</strong> $60k - $90k = 6% reorder discount, 34% Margin , 52% Mark up.</li>
								<li class="mb16"><img src="../images/icon-loyalty-platinum-2.gif" width="32" height="24" alt=""/><strong>Platinum Dealers:</strong> $90k - $120k = 9% reorder discount, 36% Margin, 57% Mark up.</li>
								<li class="mb16"><img src="../images/icon-loyalty-diamond-2.gif" width="32" height="24" alt=""/><strong>Diamond Dealers:</strong> $120k+ = 12% reorder discount, 38% Margin, 62% Mark up.</li>
							</ul>
							<p class="regularText"><strong>3. Clearance and Demo/rental orders:</strong><br>Your Dealer Loyalty discount is taken in addition to the clearance or Demo/ Rental price.</p>
							
							</div>'; }
							
							
							if ($country == 'nzDealers'){
                           echo '<h3 class="mb40 mb-xs-24">Our Dealer Loyalty Program is designed to help increase the profitability of your surfboard business. We reward dealers who align their buying behaviour with our brand portfolio.</h3>
                           <div class="text-left">
                           <h4>You essentially make more money the more you buy from us.</h4>
						   <h5>We have three ongoing programs:</h5>
							
						   <p class="regularText"><strong>1. Prebook Program:</strong><br>
						   <ul class="bullets">
						   		<li><strong>Everyday Range:</strong> 10% discount = 37% Margin & 59% Mark Up</li>
						   		<li><strong>Price Sensitive Range:</strong> 15% discount = 32% Margin & 47% Mark Up.
						   </ul>
						   ** Softboards and Accessories have margins starting at 42% on prebook **.</p>
						   
						   <p class="regularText"><strong>2. At once ongoing purchases:</strong><br>Dealer levels are based on turnover.</p><p>
							<ul>
								<li class="mb16"><img src="../images/icon-loyalty-trade-2.gif" width="32" height="24" alt=""/><strong>Trade Dealers:</strong> up to $40k = 0% re-order discount, 30% Margin, 43% Mark up.</li>
								<li class="mb16"><img src="../images/icon-loyalty-silver-2.gif" width="32" height="24" alt=""/><strong>Silver Dealers:</strong> $40 - $80k = 3% reorder discount, 32% Margin, 47% Mark up.</li>
								<li class="mb16"><img src="../images/icon-loyalty-gold-2.gif" width="32" height="24" alt=""/><strong>Gold Dealers:</strong> $80k - $120k = 6% reorder discount, 34% Margin , 52% Mark up.</li>
								<li class="mb16"><img src="../images/icon-loyalty-platinum-2.gif" width="32" height="24" alt=""/><strong>Platinum Dealers:</strong> $120k - $180k = 9% reorder discount, 36% Margin, 57% Mark up.</li>
								<li class="mb16"><img src="../images/icon-loyalty-diamond-2.gif" width="32" height="24" alt=""/><strong>Diamond Dealers:</strong> $180k+ = 12% reorder discount, 38% Margin, 62% Mark up.</li>
							   </ul>
							<p class="regularText"><strong>3. Clearance and Demo/rental orders:</strong><br>Your Dealer Loyalty discount is taken in addition to the clearance or Demo/ Rental price. </p>
							
							</div>'; }
							
							
							
						?>
							
							
							
                           
							
                            
						   </div>
						</div>
                    <!--begin side bar-->
                        <div class="col-md-3 col-md-pull-9 hidden-sm">
                           <?php
							
							 include HOME . 'includes/dealer-portal-left-menu.inc';	
								
							
                         ?> 
                            
                            
                            
                            
                        </div>
                        <!--end of sidebar-->
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