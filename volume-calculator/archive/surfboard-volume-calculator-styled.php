<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - SURFBOARD VOLUME CALCULATOR</title>
         <?php 
		define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		include HOME . 'includes/header-includes.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
	?>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
     <META NAME='author' CONTENT="Global Surf Industries" >
    <META NAME='subject' CONTENT="global surf industries - the world's premier distributor of surfboards - australian contacts" >
    <META NAME='Description' CONTENT="Global surf Industries is the world's premier distributor of surfboards - supplying shortboards, longboards, finless surfboards, beginner surfboards, standup paddle boards and funboards by 7 Surfboards, Walden Surfboards, Modern Surfboards, The Seaglass Project, Trident Paddles, Tom Carroll Paddle Surf,Creative Army Surfboards, Adventure Paddleboarding, Gnaraloo Soft surfboards, Surfica Surfboard and SUP accessories to the surfboard market. Contact Us today.">
    <META NAME='Classification' CONTENT="Global Surf Industries - the world's premier distributor of surfboards - Australian contact information." >
    <META NAME='Keywords' CONTENT="surfboards, surfboard, surfing, longboards, mark kelly, fish, shortboards, funboards, stand up paddle boards,hayden cox, josh constable, richie lovett, steve walden, tom carroll, tom wegener, life is better when you surf, contact information" >
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
    <link rel='SHORTCUT ICON' href='http://www.surfindustries.com/favicon.ico' >   
      
     
        
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	$('#salesrep_select').prop('disabled', true);
	$('#location_select').prop('disabled', true);
	$('#customer_select').prop('disabled', true);
	
	$.ajax({
		type:'POST',
		url:'eg-getsalesreps.php',
		success:function(html){
			$('#salesrep_select').html(html);
			$('#salesrep_select').prop('disabled', false);
		}
	}); 
		
    $('#salesrep_select').on('change',function(){
	var smlVol1 = $(this).val();
	if(salesrepID){
	
		$.ajax({
			type:'POST',
			url:'get-vol-smll.php',
			data:'volume='+smlVol1,
			success:function(html){
				$('#location_select').html(html);
				$('#location_select').prop('disabled', false);
			}
		}); 
		
		$.ajax({
			type:'POST',
			url:'eg-getcustomers.php',
			data:'salesrep='+salesrepID,
			success:function(html){
				$('#customer_select').html(html);
				$('#customer_select').prop('disabled', false);
			}
		}); 
		
	}
	
	});
});
</script>
              
                    
     
    </head>
    <body class="scroll-assist">
        <!-- include header -->
        <?php include HOME . 'includes/header-nav-items.inc'; ?>
        <div class="main-container">
           <section class="page-title page-title-4 image-bg overlay ">
                <div class="background-image-holder">
                    <?php echo "<img src='" . IMAGES_DIR ."contacts-header.jpg' class='background-image' alt='Global Surf Industries - Australian Contacts'>"; ?>
                    
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="uppercase mb0">SURFBOARD VOLUME CALCULATOR</h3>
                        </div>
                        
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="pb0">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 text-center">
                            <h3>Volume is one of the most important factors to consider when choosing a surfboard. Your body weight, fitness, skill level as well as the type of waves you want to ride will ultimately determine how much, or how little volume you need.</h3>
                        </div>
                        <div class="col-md-12 col-sm-10 ">
							<p class="regularText">Higher volume boards paddle easier, are more buoyant and stable, and therefore are better for beginners and older surfers. Lower volume boards turn faster and with less effort, however they’re not as stable and require more effort to catch waves. For these reasons they’re better for experienced and younger surfers.<br>As a general rule, a beginner should be riding the equivalent of 100% of their body weight in volume. I.e. A beginner weighing 80kg should be riding a surfboard around 80 litres in volume. Alternatively, an experienced surfer can ride a surfboard that’s 35% - 40% of their body weight in volume.<br>This formula varies depending on wave conditions, age and how often you surf. To find the surfboard volume to suit you, select your skill level and enter your weight. NB: These volumes should be used as a guide only. </p>
							<h5 class="uppercase mb8">SKILL LEVEL</h5>
							<p class="regularText">BEGINNER<br>New to surfing. Just started to paddle onto small broken waves. You don’t catch every wave you go for but can occasionally jump to your feet and ride to the shore.</p>
							<p class="regularText">BEGINNER - INTERMEDIATE<br>Paddling into the line-up and onto small unbroken waves unassisted. You catch most waves you go for and can ride along waves while performing simple direction changes.</p>
							<p class="regularText">INTERMEDIATE<br>Paddling into the line-up and onto small unbroken waves unassisted. You catch most waves you go for and can ride along waves while performing simple direction changes.</p>
							<p class="regularText">INTERMEDIATE - EXPERIENCED<br>Surfing 2 – 3 times per week and/or approximately 10 years of experience. Riding most types of waves and performing a range of different manoeuvres with confidence.</p>
							<p class="regularText">EXPERIENCED<br>Surfing 3+ times per week with over 10 years of experience. Riding all types of waves and performing committed turns in critical parts of the wave.</p>
							<h5 class="uppercase mb8">RECOMMENDED VOLUME & WAVE TYPE</h5>
							<div class="col-md-4 col-sm-10 p0 mb8 regularText">SMALL, MUSHY CONDITIONS (0 – 3 feet) <br>Soft, rolling beach and point waves under waist high.</div>
							<div class="col-md-4 col-sm-10 p0 mb8 regularText">MEDIUM, EVERYDAY CONDITIONS (2 – 6 feet) <br>Typical beach and point waves up to head high.</div>
							<div class="col-md-4 col-sm-10 p0 mb8 regularText">LARGE, PUNCHY CONDITIONS  (6 feet plus) <br>Stronger, more powerful beach and point waves above head high.</div>	
							
						</div>
                   
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="pb40 pt40">
            	<div class="container">
                   <div class="row">
				<div class="heading-title"><hr></div>
					</div>
				</div>
			</section>
            <section class="pb0 pt0">
                <div class="container">
                   <div class="row">
                        <div class="col-sm-12 text-center">
                            <h3 class="uppercase mb64 mb-xs-32">FIND THE BEST VOLUME FOR YOUR SKILL LEVEL</h3>
                        </div>
                    </div>
                    <div class="row">
                       
                        <div class="col-md-4 col-sm-10">
                            <div class="feature feature-3 mb-xs-24">
                                <div class="left">
                                    <i class="ti-medall icon-sm"></i>
                                </div>
                                <div class="right">
                                    <form id="vol-calc" action="#" method="post">
									<h5 class="uppercase mb16">SKILL LEVEL</h5>
									<span class="AmountRL" valign="top">
										<br>
										<div class="select-option">
                                <i class="ti-angle-down"></i>
										<select name="AmountRL">
											<option value="" SELECTED>Please select your Skill Level</option>
											<option value="5">Beginner</option>
											<option value="4">Beginner/Intermediate</option>
											<option value="3">Intermediate</option>
											<option value="2">Intermediate / Experienced</option>
											<option value="1">Experienced</option>
										</select>
										</div>
									</span>
		                        </div>
                            </div>
                            <!--end of feature-->
                        </div>
						<div class="col-md-4 col-sm-10">
							<div class="feature feature-3 mb-xs-24 ">
								<div class="left">
									<i class="ti-panel icon-sm"></i>
								</div>
								<div class="right">
									<h5 class="uppercase mb16">WEIGHT (KG)</h5>
									<p>You can convert Lbs to Kgs <a href="https://www.metric-conversions.org/weight/pounds-to-kilograms.htm" target="new">here</a>
									 <span class="WgtRL" align="left" valign="top"><br><input class="createOrderInput"  type="text" name="WgtRL" placeholder="Your Weight"></span>  
									</p>
								</div>
							</div>
							<!--end of feature-->
						</div>
						<div class="col-md-4 col-sm-10">
							<div class="feature feature-3 mb-xs-24 ">
								<div class="left">
									<i class="ti-dashboard icon-sm"></i>
								</div>
								<div class="right">
									<h5 class="uppercase mb16">RECOMMENDED VOLUME</h5>
									<span id="totalRL"  style="padding:0.6em;"></span>
									<span class="volStyle"><span id="totalRL2"  style="padding: 0.6em;"></span></span>
									<span class="volStyle"><span id="totalRL3"  style="padding: 0.6em;"></span></span>
								</div>
							</div>
							<!--end of feature-->
						</div>
                    </div>
                     </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="pt0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-10">
                        <h5 class="uppercase mb16">RECOMMENDED BOARDS</h5>
                        </div>
                        <div class="col-md-3 col-sm-10">
                        image here
						</div>
						<div class="col-md-5 col-sm-10">
						Link<br>
						Vol
						</div>
					</div>
				</div>
			</section>
            <section class="pt0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-6">
                        <div style="padding-left:15px;"><input type="button" class="btn" id="configreset" value="RESET CALCULATOR"></div>
                           </form>
						</div>
					</div>
				</div>
			</section>
                        
                        
                        
             <?php include HOME . 'includes/footer.inc'; ?>
        </div>
        <!-- this is for the captcha on the contact us form -->
		
        <?php include HOME . 'includes/site-scripts.inc'; ?>
<script>
	$(document).ready(function(){
		//This condition will check if form with id 'contact-form' is exist then only form reset code will execute.
    if($('#vol-calc').length>0){
        $('#vol-calc')[0].reset(); 
    }
		
	
		
		
		
		$('.WgtRL input').keyup(multiply);
		
//$('td.Amount select').change(multiply);
function multiply() {
   	
	
	
	var weightRL = parseFloat($('.WgtRL input').val());
	var gfRL = $('td.AmountRL select').val();
	
	var smlVol = volumeRL + 3 
	
	
	if (gfRL == '1')
	{
	var volumeRL =  +weightRL -(weightRL * 58/100); 
	}
	else if (gfRL == '2')
	{
	var volumeRL =  +weightRL -(weightRL * 55/100); 
	}
	else if (gfRL == '3')
	{
	var volumeRL =  +weightRL -(weightRL * 50/100); 
	}
	else if (gfRL == '4')
	{
	var volumeRL =  +weightRL -(weightRL * 25/100); 
	}
	else 
	{
	var volumeRL =  weightRL; 
	}
	
	
	var smlVol = volumeRL + 3;
	var medVol = volumeRL; 
	var lrgVol = volumeRL -3; 
	
	//grandTotalDiscount+=  +total -(total * 20/100); 
	
	
	$('#totalRL').html('<br>SMALL, MUSHY CONDITIONS: ' +smlVol +' ltr');
	$('#totalRL2').html('<br>MEDIUM, EVERYDAY CONDITIONS: ' +medVol +' ltr');
	$('#totalRL3').html('<br>LARGE, PUNCHY CONDITIONS: ' +(lrgVol  ) +' ltr');
	
	
	
}
		
 $('#configreset').click(function(){
            $('#vol-calc')[0].reset();
	 
	 $('#totalRL').empty();
	 $('#totalRL2').empty();
	 $('#totalRL3').empty();
 });
		

		
});

</script>
        
    </body>
</html>