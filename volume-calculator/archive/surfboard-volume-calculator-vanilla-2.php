<!doctype html>


<html>
	<head>
		<title>Surfboard Volume Calculator</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
		<link rel="stylesheet" type="text/css" href="/css/board-vol-calc-styles.css">
		
	<?php	
		
	define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		include HOME . 'includes/header-includes.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
		
		
	$skill = $_POST["AmountRL"];
	$weight = $_POST["WgtRL"];
	$small = $_POST["smllVol1"];
	$med = $_POST["medVol1"];
	$large = $_POST["lrgVol1"];
		
	//echo $small.'<br>'.$med.'<br>'.$large.'<br>';	
		
	if ($skill == "1") { $skillval = "Experienced";}
	if ($skill == "2") { $skillval = "Intermediate /Experienced";}
	if ($skill == "3") { $skillval = "Intermediate";}
	if ($skill == "4") { $skillval = "Beginner / Intermediate";}
	if ($skill == "5") { $skillval = "Beginner";}
		
	
	
	$_SESSION['country'] = ${url_frag};
		
	$country = $_SESSION['country'];
	
	?>
	
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
		
		<style>
			option[value=""] { /* value not val */
				font-family:helvetica;font-size: 100%;padding: 0.3em;
			}

			option[value="0.3"],[value="0.31"],[value="0.32"],[value="0.33"],[value="0.34"],[value="0.35"] { /* value not val */
				background-color: #f90723;font-family:helvetica;font-size: 100%;padding: 0.3em;
			}
		   option[value="0.36"],[value="0.37"],[value="0.38"] { /* value not val */
				background-color: #f9bd07;font-family:helvetica;font-size: 100%;padding: 0.3em;
			}
			option[value="0.39"],[value="0.4"],[value="0.41"],[value="0.42"] { /* value not val */
				background-color: #ebee07;font-family:helvetica;font-size: 100%;padding: 0.3em;
			}
			option[value="0.43"],[value="0.44"],[value="0.45"],[value="0.46"],[value="0.47"],[value="0.48"],[value="0.49"] { /* value not val */
				background-color: #9be643;font-family:helvetica;font-size: 100%;padding: 0.3em;
			}
			option[value="0.5"],[value="0.51"],[value="0.52"],[value="0.53"],[value="0.54"],[value="0.55"] { /* value not val */
				background-color: #69a523;font-family:helvetica;font-size: 100%;padding: 0.3em;
			}
			
			input[type=button] {
			  -webkit-appearance: none; -moz-appearance: none;
			  display: block;
			  margin: 0;
			  border-radius: 8px;
			  padding:0.6em,0.6em,0.6em,0.6em;
			  width: 50%; height: 30px;
			  line-height: 20px; 
			  border: 1px solid #bbb;
			  background: #fdfdfd; background: -moz-linear-gradient(top, #fdfdfd 0%, #bebebe 100%); background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fdfdfd), color-stop(100%,#bebebe)); background: -webkit-linear-gradient(top, #fdfdfd 0%,#bebebe 100%); background: -o-linear-gradient(top, #fdfdfd 0%,#bebebe 100%); background: -ms-linear-gradient(top, #fdfdfd 0%,#bebebe 100%); background: linear-gradient(to bottom, #fdfdfd 0%,#bebebe 100%);
			}
			
			
			
			
		</style>
		
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
                            <h3 class="uppercase mb0">SURFBOARD VOLUME CALCULATOR<br>& BOARD SELECTOR</h3>
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
						</div>	
						<div class="col-md-10 col-sm-10 ">	
                            <ul class="accordion accordion-2">
                                <li>
                                    <div class="title">
                                        <span>SKILL LEVEL</span>
                                    </div>
                                    <div class="content" class="p8">
                                       
							<p class="p8 mb8" class="regularText">BEGINNER<br>New to surfing. Just started to paddle onto small broken waves. You don’t catch every wave you go for but can occasionally jump to your feet and ride to the shore.</p>
							<p class="p8 mb8"  class="regularText">BEGINNER - INTERMEDIATE<br>Paddling into the line-up and onto small unbroken waves unassisted. You catch most waves you go for and can ride along waves while performing simple direction changes.</p>
							<p class="p8 mb8"  class="regularText">INTERMEDIATE<br>Paddling into the line-up and onto small unbroken waves unassisted. You catch most waves you go for and can ride along waves while performing simple direction changes.</p>
							<p class="p8 mb8"  class="regularText">INTERMEDIATE - EXPERIENCED<br>Surfing 2 – 3 times per week and/or approximately 10 years of experience. Riding most types of waves and performing a range of different manoeuvres with confidence.</p>
							<p class="p8 mb8"  class="regularText">EXPERIENCED<br>Surfing 3+ times per week with over 10 years of experience. Riding all types of waves and performing committed turns in critical parts of the wave.</p>
                                    </div>
                                </li>
							<li>
                                    <div class="title">
                                        <span>RECOMMENDED VOLUME & WAVE TYPE</span>
                                    </div>
                                    <div class="content">
                                       
							<p class="p8 mb8" class="regularText">SMALL, MUSHY CONDITIONS (0 – 3 feet) <br>Soft, rolling beach and point waves under waist high.</p>
							<p class="p8 mb8" class="regularText">MEDIUM, EVERYDAY CONDITIONS (2 – 6 feet) <br>Typical beach and point waves up to head high.</p>
							<p class="p8 mb8" class="regularText">LARGE, PUNCHY CONDITIONS  (6 feet plus) <br>Stronger, more powerful beach and point waves above head high.</p>
                                </li>
							
							</ul>
						</div>	
								
							
						</div>
                   
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
           
            <section class="pb0 pt32">
                <div class="container">
                   <div class="row">
                        <div class="col-sm-12">
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
                                    <form id="vol-calc" action="#results" method="post">
									<div id="smllVolDiv"></div>
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
									 <span class="WgtRL" align="left" valign="top"><br>
									 
									<input class="createOrderInput"  type="text" name="WgtRL" placeholder="Your Weight" required></span>  
									</p>
								</div>
							</div>
							<!--end of feature-->
						</div>
						
                    </div>
                     </div>
                    <!--end of row-->
                </div><a name="results"></a>
                <!--end of container-->
            </section>
            
			<section class="pt0 pb24">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-10">
                        	<div class="right" ><input type="submit" class="button" name="getVolume" id="getVolume" value="GET VOLUMES"></div>
                      	</div>
						</div>
					</div>
				</div>
			</section>
	
		<?php
		
		if (isset($_POST["AmountRL"]) && !empty($_POST["AmountRL"])) {
			
			echo '<section class="pt0 pb24 mb8">';
            echo '<div class="container">';
            echo '<div class="row">';
            echo '<div class="col-md-12 col-sm-10 pb24">';
			echo '<hr><br><br>';
			echo '<h4 class="uppercase">RECOMMENDED BOARDS & VOLUME FOR YOUR SKILL LEVEL</h4>';
			echo '<h5>SKILL LEVEL: '.$skillval.' </h5>';
			echo '<h5>VOLUME:  <a href="#smallresults" class="regularLink">Small mushy conditions:</a> '.$small .'ltr / <a href="#medresults" class="regularLink">Medium everyday conditions:</a> '.$med .'ltr / <a href="#largeresults" class="regularLink">Large punchy conditions:</a> '.$large.'ltr</h5>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</section>';
    		   
		}
			
			
		
		?>
		
		 <a name="smallresults"></a>
		<div id="vol-smll" name="vol-smll"></div>
		<a name="medresults"></a>
		<div id="vol-med" name="vol-med"></div>
		<a name="largeresults"></a>
		<div id="vol-large" name="vol-large"></div>
				
		
       	 <?php include HOME . 'includes/footer.inc'; ?>
        </div>
        <!-- this is for the captcha on the contact us form -->
		
        <?php include HOME . 'includes/site-scripts.inc'; ?>

<script>
	$(document).ready(function(){
		//This condition will check if form with id 'contact-form' is exist then only form reset code will execute.
    //if($('#vol-calc').length>0){
    //    $('#vol-calc')[0].reset(); 
  // }
		
		
		
		$.ajax({
		type:'POST',
		url:'get-vol-smll.php',
		data:'smallVolume='+ <?php echo json_encode($small) ?>+'&country=' + <?php echo json_encode($country) ?>,
		success:function(html){
			$('#vol-smll').html(html);
			//$('#size_select').prop('disabled', false);
		}
	}); 
		
		$.ajax({
		type:'POST',
		url:'get-vol-med.php',
		data:'medVolume='+ <?php echo json_encode($med) ?>+'&country=' + <?php echo json_encode($country) ?>,
		success:function(html){
			$('#vol-med').html(html);
			//$('#size_select').prop('disabled', false);
		}
	}); 
		
		$.ajax({
		type:'POST',
		url:'get-vol-lrg.php',
		data:'largeVolume='+ <?php echo json_encode($large) ?>+'&country=' + <?php echo json_encode($country) ?>,
		success:function(html){
			$('#vol-large').html(html);
			//$('#size_select').prop('disabled', false);
		}
	}); 
		
	
		
		
		
		$('.WgtRL input').keyup(multiply);
		
function multiply() {
   	
	
	
	var weightRL = parseFloat($('.WgtRL input').val());
	var gfRL = $('span.AmountRL select').val();
	
	
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
	
	
	var smllVol = ((volumeRL + 3 ). toFixed(2));
	var medVol = ((volumeRL). toFixed(2));
	var lrgVol = ((volumeRL - 3) . toFixed(2));
	
	$('#totalRL').html('<p>' + smllVol);
	$('#smllVolDiv').html('<input type="hidden" value="'+ smllVol +'" name="smllVol1"><input type="hidden" value="'+ medVol +'" name="medVol1"><input type="hidden" value="'+ lrgVol +'" name="lrgVol1">');
	
	$('#totalRL2').html('<p>' + medVol);
	$('#totalRL3').html('<p>' + lrgVol);
	//grandTotalDiscount+=  +total -(total * 20/100); 
	
	
	
	
	
	
	
	
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