<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - CAREERS</title>
         <?php 
		session_start();
		define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		include HOME . 'includes/header-includes.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
		
	?>
      <META NAME='author' CONTENT="Global Surf Industries" >
    <META NAME='subject' CONTENT="global surf industries - the world's premier distributor of surfboards - careers" >
    <META NAME='Description' CONTENT="The world's premier distributor of surfboards - supplying shortboards, longboards, finless surfboards, beginner surfboards, standup paddle boards and funboards by 7 Surfboards, Walden Surfboards, Modern Surfboards, The Seaglass Project, Trident Paddles, Tom Carroll Paddle Surf,Creative Army Surfboards, Adventure Paddleboarding, Gnaraloo Soft surfboards, Surfica Surfboard and SUP accessories to the surfboard market.">
    <META NAME='Classification' CONTENT="Global Surf Industries - the world's premier distributor of surfboards - find product information, local surfboard shops or buy surfboards online." >
    <META NAME='Keywords' CONTENT="surfboards, surfboard, surfing, longboards, mark kelly, fish, shortboards, funboards, stand up paddle boards,hayden cox, josh constable, richie lovett, steve walden, tom carroll, tom wegener, life is better when you surf, careers at global surf industries" >
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
     
     <!-- this is for the captchaon the conatct us form -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
     <!-- hide other area of interest text area if not required -->
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>
	  $(function() {
		$('#otherAreaText').hide(); 
		$('#appInterest').change(function(){
			if($('#appInterest').val() == 'OTHER') {
				$('#otherAreaText').show();

			} else {
				$('#otherAreaText').hide();
			}
		});
	   });
	</script>
     
   
    </head>
    <body class="scroll-assist">
        <!-- include header -->
        <?php include HOME . 'includes/header-nav-items.inc'; ?>
        
        <div class="main-container">
            <section class="page-title page-title-2 image-bg overlay ">
                <div class="background-image-holder">
                 <?php echo "<img src='" . IMAGES_DIR ."careers-page-header.jpg' class='background-image' alt='Global Surf Industries - Careers'>"; ?>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
							<h2 class="uppercase mb8">Careers @ GSI</h2>
                            
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
                        <div class="lrg-heading-title">SUBMIT YOUR APPLICATION<br><hr></div>
						</div>
                        <div class="col-md-9 col-sm-10 ">
							<p class="regularText">There are no open Positions available right now, however, we are interested in hearing from talented, passionate, professional people who love to work hard and understand our company mantra. So please complete the form below, attach your resume and we will contact you should a position open up in your area of interest.<br>NB: All fields are required except where stated as Optional.</p> 
						</div><form action="gsi-careers-confirmation.php" enctype="multipart/form-data" method="post" name="gsiScholApp" id="gsiScholApp" >
                      <div class="col-md-10 col-sm-10 ">
						  <div class="col-md-6 col-sm-10 p0">
							<label>First Name</label>
							<input type="text" placeholder="first name" name="firstname" required />
							<label>Last Name</label>
							<input type="text" placeholder="last name" name="lastname" required/>
							<label>Email Address</label>
							<input type="text" placeholder="email address" name="email" required/>
							<label>Phone</label>
							<input type="text" placeholder="contact number" name="phone" required/>
							<label>Area of interest</label>
							<div class="select-option">
							<i class="ti-angle-down"></i>
								<select name="appInterest" required id="appInterest" onchange="chTypeList()">
									<option  value="" selected> Area of Interest</option>
									<option  value="Customer Service"> Customer Service</option>
									<option  value="Finance"> Finance</option>
									<option  value="Graphic Design/Photography"> Graphic Design/Photography</option>
									<option  value="IT/Web Development"> IT/Web Development</option>
									<option  value="Logisitcs/Operations"> Logisitcs/Operations</option>
									<option  value="Product Management/Design"> Product Management/Design</option>
									<option  value="Sales"> Sales</option>   
									<option  value="OTHER"> OTHER</option>
								</select>
							</div> 
							
							<div id="otherAreaText">
							<label>Other Area of interest</label>
							<textarea class="mb0" placeholder="" name="otherInterest" id="otherInterest"/></textarea>
							</div>  
						    
							<label>Comments (optional)</label>
							<textarea class="mb0" name="comments" id="comments" required/></textarea>
							<label class="mt8">Resume</label>
							<input type="file" value="" name="appResume" id="appResume">
							<div class="g-recaptcha" data-sitekey="6LcUjQsTAAAAAO7wZYdEYvQ7hpnZu1NNpD-eBPMy"></div>
						  </div>
						  
					 </div>
					
					<div class="col-md-3 col-sm-10 mt24 ">	
						<input class="hollow" type="submit" value="Submit Button" />
					</div></form>
				</div>
				<!--end of row-->
				</div>
				
				
				
				
				
				
				
                      
                      
                      
                     
                      
                      
                      
            </section>
            
            
             <?php include HOME . 'includes/footer.inc'; ?>
            
        </div>
        <?php include HOME . 'includes/site-scripts.inc'; ?>
    </body>
</html>