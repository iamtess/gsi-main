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
		// echo 'user:' . $userType;
		$pageName = "";
		$pageName = "trainingVideos";
		
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
								echo '<h2 class="uppercase mb0">DISTRIBUTOR PORTAL</h2><h4>Training Videos</h4>';
								
							}
                            else {
							 echo '<h2 class="uppercase mb0">DEALER PORTAL</h2><h4>Dealer Training Videos</h4>';	
								
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
                            <div class="container">
								<div class="row">
									<div class="col-md-9 col-sm-12 ">
									  	<div class="widget"> 
											 <h6 class="title">TECHNOLOGY VIDEOS</h6>
											 <hr>
										</div>
									</div>	 
									<div class="col-md-9 col-sm-12 mb16">
										<strong>FUTURE FLEX (FF)</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/BR53M0SWK-Y?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div>  
									<div class="col-md-9 col-sm-12 mb16">
										<strong>CARBON VECTOR (CV)</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1o-QBw1vns8?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div>
									<div class="col-md-9 col-sm-12 mb16">
										<strong>POLYESTER (PU)</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DmU-8_eCxZE?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div>
									<div class="col-md-9 col-sm-12 mb16">
										<strong>SUPER LIGHTWEIGHT EPOXY (SLX)</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Pe65ogvliqQ?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div>  
									
									<div class="col-md-9 col-sm-12 ">
									  	<div class="widget"> 
											 <h6 class="title">7S PRODUCT VIDEOS</h6>
											 <hr>
										</div>
									</div>	
									<div class="col-md-9 col-sm-12 mb16">
										<strong>DOUBLE DOWN</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/icgWAPZ9yWE?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div> 
									<div class="col-md-9 col-sm-12 mb16">
										<strong>JET STREAM</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/CooUsgZI8Ag?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div> 
									<div class="col-md-9 col-sm-12 mb16">
										<strong>SUPERFISH 4 (SF4)</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/MoT9du3Ace4?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div> 
								
					   			
					   				<div class="col-md-9 col-sm-12 ">
									  	<div class="widget"> 
											 <h6 class="title">ADVENTURE PADDLEBOARDING PRODUCT VIDEOS</h6>
											 <hr>
										</div>
									</div>	
									<div class="col-md-9 col-sm-12 mb16">
										<strong>ALL ROUNDER CX & MX</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="	https://www.youtube.com/embed/BhTQZfdBm4I?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div> 
									<div class="col-md-9 col-sm-12 mb16">
										<strong>EXPLORER 2 CX</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/QRU27dLFqQ4?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div>
				   					<div class="col-md-9 col-sm-12 mb16">
										<strong>FIFTY FIFTY X1</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DJZYPefd6l8?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div>
				   					<div class="col-md-9 col-sm-12 mb16">
										<strong>SEVENTY THRITY CX</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="	https://www.youtube.com/embed/FQS-V7q7FWY?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div>
				   			<div class="col-md-9 col-sm-12 mb16">
										<strong>SIXTY FORTY MX</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="	https://www.youtube.com/embed/cJjQbK1KlO8?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div>
					   			
					   			
						   			<div class="col-md-9 col-sm-12 ">
									  	<div class="widget"> 
											 <h6 class="title">CREATIVE ARMY PRODUCT VIDEOS</h6>
											 <hr>
										</div>
									</div>	
									<div class="col-md-9 col-sm-12 mb16">
										<strong>HEUVO</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HoxVIpXNX5M?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div> 
									<div class="col-md-9 col-sm-12 mb16">
										<strong>JIVE</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XT4zJFkOTh4?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div> 
									<div class="col-md-9 col-sm-12 mb16">
										<strong>SEAHORSE</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pnOMIOv4_b4?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div> 
									<div class="col-md-9 col-sm-12 ">
									  	<div class="widget"> 
											 <h6 class="title">GNARALOO PRODUCT VIDEOS</h6>
											 <hr>
										</div>
									</div>	
									<div class="col-md-9 col-sm-12 mb16">
										<strong>FLOUNDER POUNDER</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/BhHXXH4OU-0?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div> 
									<div class="col-md-9 col-sm-12 mb16">
										<strong>SOFT SURFBOARD</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="	https://www.youtube.com/embed/fe0AS2JLGWg?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div> 
									<div class="col-md-9 col-sm-12 ">
									  	<div class="widget"> 
											 <h6 class="title">HAYDENSHAPES PRODUCT VIDEOS</h6>
											 <hr>
										</div>
									</div>	
									<div class="col-md-9 col-sm-12 mb16">
										<strong>HOLY GRAIL</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YILX3ekU--Q?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div> 
									<div class="col-md-9 col-sm-12 mb16">
										<strong>HYPTO KRYPTO (FCSII & FUTURES)</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cyazCv7sVL0?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div> 
									<div class="col-md-9 col-sm-12 mb16">
										<strong>PLUNDER</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/TmtXTcd6WU8?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div> 
									<div class="col-md-9 col-sm-12 mb16">
										<strong>UNTITLED</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7rZDByNO3tE?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div> 
									<div class="col-md-9 col-sm-12 mb16">
										<strong>WHITE NOIZ</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0OfPlGtoKm4?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div> 
									<div class="col-md-9 col-sm-12 ">
									  	<div class="widget"> 
											 <h6 class="title">MODERN SURFBOARDS PRODUCT VIDEOS</h6>
											 <hr>
										</div>
									</div>	
									<div class="col-md-9 col-sm-12 mb16">
										<strong>BLACKBIRD (PU, X1, X1B)</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zk6F0kcFZRo?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div> 
									<div class="col-md-9 col-sm-12 mb16">
										<strong>DOUBLE WIDE (X1, X1B)</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/eSlh7LdK5ms?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div> 
									<div class="col-md-9 col-sm-12 mb16">
										<strong>LOVE CHILD</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/iw1hveo_Hgs?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div> 
									<div class="col-md-9 col-sm-12 mb16">
										<strong>RETRO</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/6mHVc9mbNGQ?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div> 
									<div class="col-md-9 col-sm-12 mb16">
										<strong>THE BOSS</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aQFUI0DAmls?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div> 
									<div class="col-md-9 col-sm-12 mb16">
										<strong>WILD CHILD</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uhePapP_IMk?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div> 
									<div class="col-md-9 col-sm-12 ">
									  	<div class="widget"> 
											 <h6 class="title">THE SEAGLASS PROJECT PRODUCT VIDEOS</h6>
											 <hr>
										</div>
									</div>	
									<div class="col-md-9 col-sm-12 mb16">
										<strong>ALBACORE</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kTel6Jwlo1Y?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div>
									<div class="col-md-9 col-sm-12 ">
									  	<div class="widget"> 
											 <h6 class="title">TOM CARROLL PADDLE SURF PRODUCT VIDEOS</h6>
											 <hr>
										</div>
									</div>	
									<div class="col-md-9 col-sm-12 mb16">
										<strong>LONG GRAIN V2</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1dHIiMdx8jI?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div>
									<div class="col-md-9 col-sm-12 mb16">
										<strong>LOOSE LEAF V2</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EA26Ok7nQXg?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div>
									<div class="col-md-9 col-sm-12 mb16">
										<strong>OUTER REEF</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ot54myIFglc?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div> 
									<div class="col-md-9 col-sm-12 ">
									  	<div class="widget"> 
											 <h6 class="title">WALDEN SURFBOARDS PRODUCT VIDEOS</h6>
											 <hr>
										</div>
									</div>	
									<div class="col-md-9 col-sm-12 mb16">
										<strong>MAGIC MODLE (PU, X2)</strong><br>
										<div class="embed-video-container embed-responsive embed-responsive-16by9 mb16">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/H7hZkUhOnpE?showinfo=0&rel=0" allowfullscreen></iframe>
										</div>
									</div>
									 
									
							   <!--end of row-->
							   </div>
							</div>
                     </div>
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