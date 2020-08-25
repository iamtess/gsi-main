<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - LIFE IS BETTER WHEN YOU SURF</title>
         <?php 
		define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		include HOME . 'includes/header-includes.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 

	?>
    <META NAME='author' CONTENT="Global Surf Industries" >
    <META NAME='subject' CONTENT="global surf industries - life is better when you sruf scholarship program" >
    <META NAME='Description' CONTENT="The Life Is Better When You Surf® Scholarship Program has been set up to give kids across the USA, Australia and New Zealand the chance to get a step up with their surfing and schooling.">
    <META NAME='Classification' CONTENT="Global Surf Industries - the world's premier distributor of surfboards - find product information, local surfboard shops or buy surfboards online." >
    <META NAME='Keywords' CONTENT="surfboards, surfboard, surfing, mark kelly, life is better when you surf, scholarship program, scholarship" >
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
    
    <?php 
			//this script os required for this particualr form to show/hide the divs as the user progresses through the form
			echo "<script src='".HOME."js/jquery-1.7.2.min.js' type='text/javascript' charset='utf-8'></script>"; 
		?>
    <script>
		$(function() {
    $('#spandiv').hide(); 
    $('#languageSelect').change(function(){
        if($('#languageSelect').val() == 'span') {
            $('#spandiv').show(); 
			$('#engdiv').hide(); 
        } else {
            $('#spandiv').hide(); 
			$('#engdiv').show(); 
        } 
    });
});
		</script>
     
    </head>
    <body class="scroll-assist">
        <!-- include header -->
        <?php include HOME . 'includes/header-nav-items.inc'; ?>
        
        <div class="main-container">
            <section class="page-title page-title-2 image-bg overlay">
                <div class="background-image-holder">
                 <?php echo "<img src='" . IMAGES_DIR ."gsi-scholarship-header-4.jpg' class='background-image' alt='Global Surf Industries - Life is Better When You Surf'>"; ?>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
							<h2 class="uppercase mb8"><?php echo "<img src='" . IMAGES_DIR ."gsi-scholarship-program-logo-white.png' class='background-image' alt='Global Surf Industries - Life is Better When You Surf'>"; ?></h2>
                            
                        </div>
                        
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section>
               <div class="container">
                    <div class="row">
                    <div class="select-option">
                                <i class="ti-angle-down"></i>
						        <select id="languageSelect" name="languageSelect">
							    	<option value="">Change language</option>
							    	<option class="eng" value="eng">English</option>
							    	<option class="span" value="span">Spanish</option>
							   </select>
								 </div>
				   </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
                
                
                <div id="engdiv">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 text-center">
                            English
                            
							</div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
				</div> <!-- end Eng div -->
           
           
           
           		<div id="spandiv">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 text-center">
                            Spanish
                            
							</div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
				</div> 
           
            </section>
            
            
             <?php include HOME . 'includes/footer.inc'; ?>
            
        </div>
        <?php include HOME . 'includes/site-scripts.inc'; ?>
    </body>
</html>