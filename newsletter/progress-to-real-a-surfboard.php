<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES -  Progress from a softboard to a real surfboard</title>
         <?php 
		define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		include HOME . 'includes/header-includes.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
	?>
		<?php
	if (isset($_GET['utm_source'])) {
    $source = $_GET['utm_source'];}
	
	if (isset($_GET['utm_medium'])) {
    $medium = $_GET['utm_medium'];}
		
	if (isset($_GET['utm_campaign'])) {
    $campaign = $_GET['utm_campaign'];}
	
		
	
	$tracking= "?utm_source=".$source."&utm_medium=".$medium."&utm_campaign=".$campaign;
		
	
	if (isset($_GET['code'])) {
    $code = "#".$_GET['code'];}
	
	?>
    <META NAME='author' CONTENT="Global Surf Industries" >
    <META NAME='subject' CONTENT="global surf industries - Progress from a softboard to a real surfboard" >
    <META NAME='Description' CONTENT="How to progress from a softboard to a real surfboard.">
    <META NAME='Classification' CONTENT="Global Surf Industries - the world's premier distributor of surfboards - buy  surfboards online" >
    <META NAME='Keywords' CONTENT="surfboards, surfboard, surfing, longboards, mark kelly, gnaraloo dune buggy,  modern highline, modern love child, moder falcon, salt gypsy mid tide,chilli rarest bird, gnaraloo surfboards,modern surfboards, salt gypsy surfbaords, chilli surfboards, shortboards, funboards, beginner surfboards, life is better when you surf" >
    <META NAME='Language' CONTENT='English' >
    <META HTTP-EQUIV='CACHE-CONTROL' CONTENT='PUBLIC' > 
    <META HTTP-EQUIV='Expires' CONTENT='never' >
    <META NAME='Copyright' CONTENT='global surf industries. All rights reserved.' >
    <META NAME='Designer' CONTENT='surfindustries.com' >
    <META NAME='Publisher' CONTENT='Mark Kelly, Mark Kelly, Global Surf Industries' >
    <META NAME='Revisit-After' CONTENT='4' >
    <META NAME='distribution' CONTENT='Global' >
    <META NAME='Robots' CONTENT='INDEX,FOLLOW' >
    <META NAME='country' CONTENT='USA, United States, United States Of America, America' >
    <META NAME='organization' content='Global Surf Industries' >
    <META NAME='viewport' CONTENT='width = device-width'>
    <link rel='SHORTCUT ICON' href='https://www.surfindustries.com/favicon.ico' >
    </head>
    <body class="scroll-assist">
        <!-- include header -->
        <?php include HOME . 'includes/header-nav-items.inc'; ?>
        
        <div class="main-container">
            <section class="page-title page-title-2 image-bg overlay ">
                <div class="background-image-holder">
                 <?php echo "<img src='" . IMAGES_DIR ."progress-to-real-board-header.jpg' class='background-image' alt='Progress from a softboard to a real surfboard'>"; ?>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
							<h2 class="uppercase mb10">Progress from a softboard to your first real surfboard</h2>
                            
                        </div>
                        
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="pt16">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 text-center">
							<?php echo "<img src='" . IMAGES_DIR ."lightbulb.gif' alt=''>"; ?>
							<h3 class="mb32 mb-xs-24 pt16">OK so you are ready to move from your softboard to your first real surfboard.<br>But how do you choose?</h3>
							<hr />
                            </div>
							 <div class="col-md-12 col-sm-10  text-center mb32">
								 <div  class="col-md-6 col-sm-5  text-center mb32" style="border-right: 1px solid #808080;">
						<h3>SHORTER BOARD</h3>
								 <?php echo "<img src='" . IMAGES_DIR ."progress-highline.png' alt=''>"; ?>
									 <p class="regularText mt24">The Modern Highline will help shorten the learn to surf curve. It’s bouyant, stable and easy to control. Essentially, we built this board to re-define the first steps in surfing so people develop their skills quicker and maximise the enjoyment they get from riding waves.</p>
									 <p class="regularText"><?php echo "<a class='btn' href='${url_frag}/surf/shortboards/modern-highline-pu-shortboard/'>MORE INFO</a>"; ?></p> 
									
								 </div>
								 <div  class="col-md-6 col-sm-5  text-center mb32">
							<h3>LONGER BOARD</h3>
								  <?php echo "<img src='" . IMAGES_DIR ."progress-falcon.png' alt=''>"; ?>
								<p class="regularText mt24">To become a better surfer you need to catch more waves.<br>The Falcon is stable and buoyant with some performance hidden within the design. This is a great board for beginner-to-intermediates wanting a board that gets better as their skills improve.</p>
								 <p class="regularText"><?php echo "<a class='btn' href='${url_frag}/surf/midlength-surfboards/modern-falcon-pu/'>MORE INFO</a>"; ?></p> 
								 
							</div>
                        <div class="col-md-12 col-sm-10  text-center mb32">
							<hr>
							</div>
						</div>
                    <!--end of row-->
                </div>
                <!--end of container-->
				
				<div class="container">
                    <div class="row">
				
						<div class="col-md-3 col-sm-10">
                            <div class="feature feature-3 mb-xs-24">
                                <div class="center">
                                   
									
									<div class="image-tile outer-title text-center">
                               <?php echo "<a href='${url_frag}/surf/shortboards/modern-highline-pu-shortboard/'>
                                   <img src='" . IMAGES_DIR ."cat-prod-modern-19-highline-anim.gif' class='product-thumb' alt=Modern Highline Surfboard'>"; ?>
                               </a>
                                <div class="title">
                                    <div style="text-align:left;">&nbsp;</div>
                                    <hr />
									<h5 class='productName mb0'><?php echo "<a href='${url_frag}/surf/shortboards/modern-highline-pu-shortboard/'>Modern Highline - PU</a>"; ?> </h5>
                                     <h6 class="productCategory mb0">Shortboard</h6> 
									 <?php
									if ($userCountry == 'AU'){
												echo " <span class='display-block productPricing mb0'>$525.00 - $620.00</span>";
											}
											else if ($userCountry == 'NZ'){
												echo " <span class='display-block productPricing mb0'>$605.00 - $705.00</span>";
											}
											else {
												echo " <span class='display-block productPricing mb0'>$429.00 - $510.00</span>";
											}
									?>
                                   
                                </div>
                                </div>
                            </div>
									
		                        </div>
                            </div>
					<div class="col-md-3 col-sm-10">
                            <div class="feature feature-3 mb-xs-24">
                                <div class="center">
                                   
									
									<div class="image-tile outer-title text-center">
                               <?php echo "<a href='${url_frag}/surf/shortboards/modern-highline-xb-shortboard/'>
                                   <img src='" . IMAGES_DIR ."cat-prod-modern-19-highline-xb-2.jpg' class='product-thumb' alt=Modern Highline Surfboard'>"; ?>
                               </a>
                                <div class="title">
                                    <div style="text-align:left;">&nbsp;</div>
                                    <hr />
									<h5 class='productName mb0'><?php echo "<a href='${url_frag}/surf/shortboards/modern-highline-pu-shortboard/'>Modern Highline - XB</a>"; ?> </h5>
                                     <h6 class="productCategory mb0">Shortboard</h6> 
									 <?php
									if ($userCountry == 'AU'){
												echo " <span class='display-block productPricing mb0'>$620.00 - $649.00</span>";
											}
											else if ($userCountry == 'NZ'){
												echo " <span class='display-block productPricing mb0'>$680.00 - $705.00</span>";
											}
											else {
												echo " <span class='display-block productPricing mb0'>$469.00 - $510.00</span>";
											}
									?>
                                   
                                </div>
                                </div>
                            </div>
									
		                        </div>
                            </div>
						
				
			
			<div class="col-md-3 col-sm-10">
                            <div class="feature feature-3 mb-xs-24">
                                <div class="right">
                                   
									
									<div class="image-tile outer-title text-center">
                                <?php echo "<a href='${url_frag}/surf/midlength-surfboards/modern-falcon-pu/'><img src='" . IMAGES_DIR ."cat-prod-modern-20-falcon-anim.gif' class='product-thumb' alt='Modern Falcon'>"; ?>
                               </a>
                                <div class="title">
                                    <div style="text-align:left;">&nbsp;</div>
                                    <hr />
									<h5 class="productName mb0"> <?php echo "<a href='${url_frag}/surf/midlength-surfboards/modern-falcon-pu/'>Modern Falcon - PU</a>"; ?></h5>
                                      <h6 class="productCategory mb0">Mid Length</h6>
                                    <?php
									if ($userCountry == 'AU'){
												echo " <span class='display-block productPricing mb0'>$599.00 - $845.00</span>";
											}
											else if ($userCountry == 'NZ'){
												echo " <span class='display-block productPricing mb0'>$680.00 - $829.00</span>";
											}
											else {
												echo " <span class='display-block productPricing mb0'>$510.00 - $599.00</span>";
											}
									?>
                                </div>
                                </div>
                            </div>
									
		                        </div>
                            </div>
				<div class="col-md-3 col-sm-10">
                            <div class="feature feature-3 mb-xs-24">
                                <div class="right">
                                   
									
									<div class="image-tile outer-title text-center">
                                <?php echo "<a href='${url_frag}/surf/midlength-surfboards/modern-falcon-xb/'><img src='" . IMAGES_DIR ."cat-prod-modern-20-falcon-xb.jpg' class='product-thumb' alt='Modern Falcon'>"; ?>
                               </a>
                                <div class="title">
                                    <div style="text-align:left;">&nbsp;</div>
                                    <hr />
									<h5 class="productName mb0"> <?php echo "<a href='${url_frag}/surf/midlength-surfboards/modern-falcon-pu/'>Modern Falcon - XB</a>"; ?></h5>
                                      <h6 class="productCategory mb0">Mid Length</h6>
                                    <?php
									if ($userCountry == 'AU'){
												echo " <span class='display-block productPricing mb0'>$549.00 - $845.00</span>";
											}
											else if ($userCountry == 'NZ'){
												echo " <span class='display-block productPricing mb0'>$605.00 - $855.00</span>";
											}
											else {
												echo " <span class='display-block productPricing mb0'>$430.00 - $675.00</span>";
											}
									?>
                                </div>
                                </div>
                            </div>
									
		                        </div>
                            </div>
                            <!--end of feature-->
                    	
						
						
		
		
						 
						
							
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