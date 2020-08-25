<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - PRODUCT REVIEW VIDEOS</title>
         
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
		else {
			$source = 'vidReview';
		}
	
	if (isset($_GET['utm_medium'])) {
    $medium = $_GET['utm_medium'];}
	else {
			$medium = 'vidReview';
		}
		
	if (isset($_GET['utm_campaign'])) {
    $campaign = $_GET['utm_campaign'];}
		else {
			$campaign = 'none';
		}
	
		
	
	$tracking= "?utm_source=".$source."&utm_medium=".$medium."&utm_campaign=".$campaign;
		
	
	if (isset($_GET['code'])) {
    $code = "#".$_GET['code'];}
	
	?>
		<META NAME='author' CONTENT="Global Surf Industries" >
    <META NAME='subject' CONTENT="global surf industries - the world's premier distributor of surfboards -   surfboard reviews." >
    <META NAME='Description' CONTENT="The world's premier distributor of surfboards - video reviews of our range of surfboards and SUPs. ">
    <META NAME='Classification' CONTENT="Global Surf Industries - the world's premier distributor of surfboards - how to  /help tips videos." >
    <META NAME='Keywords' CONTENT="surfboards, surfboard, surfing, longboards, mark kelly, fish, shortboards, funboards, stand up paddle boards,surfboard construciton, surfboard technology, surfboard reveiws, stand up paddleboard reviews, tom carroll." >
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
                  <img src="../images/video-reviews-header.jpg" alt="Global Surf Industries - Video reviews">
                    
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="uppercase mb0">PRODUCT REVIEW VIDEOS</h2>
                        </div>
                        
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
			<section class="image-square right"><a name="dd"></a>
                <div class="col-md-6 image">
                    <div class="background-image-holder">
                        <img alt="image" class="background-image" src="../images/video-reviews-tc-double-down.jpg" />
                    </div>
                </div>
                <div class="col-md-6 content">
                    <h3>Tom Carroll reviews the 7S Double Down</h3>
                    <p class="mb0">
                        TC took the Double Down for a spin, watch this video to see what he thought.<br><?php echo "Check out the 7S Double Down specs <a href='${url_frag}/surf/shortboards/7s-double-down-im-shortboard/$tracking$code'>here</a>"; ?>. </p>
                    <div class="modal-container mt16">
                                <a class="btn btn-lg btn-modal" href="#"> WATCH VIDEO</a>
                                <div class="foundry_modal">
									 <iframe  src="https://www.youtube.com/embed/0OtCu_pFGHc?showinfo=0" frameborder="0" allowfullscreen></iframe>
                                 </div>
                            </div>
                </div>
            </section>		
			<section class="image-square left"><a name="jetstream"></a>
                <div class="col-md-6 image">
                    <div class="background-image-holder">
						<img alt="image" class="background-image" src="../images/video-reviews-tc-jetstream.jpg" />
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-1 content">
                    <h3>Tom Carroll reviews the 7S Jetstream</h3>
                    <p class="mb0">
                        Chekc this video of TC talking about how the 7S Jetstream goes.<br><?php echo "Check out the 7S Jetstream specs <a href='${url_frag}/surf/fish-shaped-surfboards/7s-jetstream-im/$tracking$code'>here.</a>"; ?>
                    </p>
                    <div class="modal-container mt16">
                                <a class="btn btn-lg btn-modal" href="#">WATCH VIDEO</a>
                                <div class="foundry_modal">
                                     <iframe  src="https://www.youtube.com/embed/5jVHW2udRmc?showinfo=0" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                </div>
		    </section>
            <section class="image-square right"><a name="sf4"></a>
                <div class="col-md-6 image">
                    <div class="background-image-holder">
                        <img alt="image" class="background-image" src="../images/video-reviews-tc-superfish-4.jpg" />
                    </div>
                </div>
                <div class="col-md-6 content">
                    <h3>Tom Carroll reviews the 7S Superfish 4</h3>
                    <p class="mb0">
                        We think the Superfish 4 is a ripper, watch this video to see what TC thinks. <br><?php echo "Check out the 7S Superfish 4 specs  <a href='${url_frag}/surf/fish-shaped-surfboards/7s-super-fish-4-im-surfboard/$tracking$code'>here</a>"; ?>. </p>
                    <div class="modal-container mt16">
                                <a class="btn btn-lg btn-modal" href="#"> WATCH VIDEO</a>
                                <div class="foundry_modal">
									 <iframe  src="https://www.youtube.com/embed/-0iFRwadUYQ?showinfo=0" frameborder="0" allowfullscreen></iframe>
                                 </div>
                            </div>
                </div>
            </section>	
            <section class="image-square left"><a name="hook"></a>
                <div class="col-md-6 image">
                    <div class="background-image-holder">
						<img alt="image" class="background-image" src="../images/video-review-tc-hook.jpg" />
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-1 content">
                    <h3>Tom Carroll reviews the 7S Hook</h3>
                    <p class="mb0">
                        Tom Caroll talks about his first impressions of the <?php echo "<a href='${url_frag}/surf/fish-shaped-surfboards/7s-hook-twin-fin-surfboard/$tracking$code'> 7S Hook</a>"; ?> in Innegra Matrix construction. View board specs <?php echo "<a href='${url_frag}/surf/fish-shaped-surfboards/7s-hook-twin-fin-surfboard/$tracking$code'>here</a>"; ?>
                    </p>
                    <div class="modal-container mt16">
                                <a class="btn btn-lg btn-modal" href="#">WATCH VIDEO</a>
                                <div class="foundry_modal">
                                     <iframe  src="https://www.youtube.com/embed/JZ6Sqx3rOaE?showinfo=0" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                </div>
		    </section>
            <section class="image-square right"><a name="vic"></a>
                <div class="col-md-6 image">
                    <div class="background-image-holder">
                        <img alt="image" class="background-image" src="../images/video-review-vl-7S-range.jpg" />
                    </div>
                </div>
                <div class="col-md-6 content">
                    <h3>Vic Levett reviews the 7S range</h3>
                    <p class="mb0">
                        Vic Levett, Surfer, Fishing Guide and Skipper from Sydney Australia recently test rode the 2019 <?php echo "<a href='${url_frag}/brands/7s-surfboards/'> 7S Range</a> of boards: <a href='${url_frag}/surf/shortboards/7s-double-down-im-shortboard/'>Double Down</a>, <a href='${url_frag}/surf/fish-shaped-surfboards/7s-hook-twin-fin-surfboard/'>Hook</a>, <a href='${url_frag}/surf/fish/7s-jetstream-im/'>Jetstream</a> and <a href='${url_frag}/surf/fish-shaped-surfboards/7s-super-fish-4-im-surfboard/'>Superfish 4</a>"; ?> - here's what he had to say. </p>
                    <div class="modal-container mt16">
                                <a class="btn btn-lg btn-modal" href="#"> WATCH VIDEO</a>
                                <div class="foundry_modal">
									 <iframe  src="https://www.youtube.com/embed/UcoXgwdbEvI?showinfo=0" frameborder="0" allowfullscreen></iframe>
                                 </div>
                            </div>
                </div>
            </section>
            
              <?php include HOME . 'includes/footer.inc'; ?>
			 </div>
				<?php include HOME . 'includes/site-scripts.inc'; ?>
				</body>
				</html> 
		   
		