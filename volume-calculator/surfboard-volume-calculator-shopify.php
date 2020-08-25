<!doctype html>


<html>
	<head>
		<title>Surfboard Volume Calculator</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
		<?php
		define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
echo '<link href="'.HOME.'css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />';
echo '<link href="'.HOME.'css/theme-gunmetal.css?v3" rel="stylesheet" type="text/css" media="all" />';
echo '<link href="'.HOME.'css/custom.css?v20" rel="stylesheet" type="text/css" media="all" />';
echo '<link href="'.HOME.'css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />';
?>
<link href='https://fonts.googleapis.com/css?family=Lato%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
		
	<?php	
		
	define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		
		
		
	$skill = $_POST["AmountRL"];
	$weight = $_POST["WgtRL"];
	$small = $_POST["smllVol1"];
	$med = $_POST["medVol1"];
	$large = $_POST["lrgVol1"];
	$budgetU = $_POST["budget"];
		
	//echo $small.'<br>'.$med.'<br>'.$large.'<br>';	
		
	if ($skill == "1") { $skillval = "Experienced";}
	if ($skill == "2") { $skillval = "Intermediate /Experienced";}
	if ($skill == "3") { $skillval = "Intermediate";}
	if ($skill == "4") { $skillval = "Beginner / Intermediate";}
	if ($skill == "5") { $skillval = "Beginner";}
		
	
	
	$_SESSION['country'] = ${url_frag_2};
		
	$country = $_SESSION['country'];
	
	?>
	
	
		
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
        
	<div class="main-container pt0 text-center">
            <section class="pb0 pt0">
                <div class="container p0" style="width:100%;">
                    <div class="row">
                        <div class="col-md-12    text-center">
                            <h5>Volume is one of the most important factors to consider when choosing a surfboard. Your body weight, fitness, skill level as well as the type of waves you want to ride will ultimately determine how much, or how little volume you need.</h5>
                        </div>
                         <div class="col-md-12  text-center">
							<p class="regularText">Higher volume boards paddle easier, are more buoyant and stable, and therefore are better for beginners and older surfers. Lower volume boards turn faster and with less effort, however they’re not as stable and require more effort to catch waves. For these reasons they’re better for experienced and younger surfers.<br>As a general rule, a beginner should be riding the equivalent of 100% of their body weight in volume. I.e. A beginner weighing 80kg should be riding a surfboard around 80 litres in volume. Alternatively, an experienced surfer can ride a surfboard that’s 35% - 40% of their body weight in volume.<br>This formula varies depending on wave conditions, age and how often you surf. To find the surfboard volume to suit you, select your skill level and enter your weight. NB: These volumes should be used as a guide only. </p>
						</div>	
						<div class="col-md-12   text-center">	
                            <ul class="accordion accordion-2   text-center">
                                <li>
                                    <div class="title">
                                        <span>SKILL LEVEL</span>
                                    </div>
                                    <div class="content" class="p8">
                                       
							<p class="p8 mb8" class="regularText">BEGINNER<br>New to surfing. Just started to paddle onto small broken waves. You don’t catch every wave you go for but can occasionally jump to your feet and ride to the shore.</p>
							<p class="p8 mb8"  class="regularText">BEGINNER - INTERMEDIATE<br>Paddling into the line-up and onto small unbroken waves unassisted. You catch most waves you go for and can ride along waves while performing simple direction changes.</p>
							<p class="p8 mb8"  class="regularText">INTERMEDIATE<br>Surfing 1 - 2 times per week and/or approximately 5 years of experience. You catch nearly all waves you paddle for and can ride small-to-medium size waves and complete fundamental manoeuvres such as cutbacks and top turns.</p>
							<p class="p8 mb8"  class="regularText">INTERMEDIATE - EXPERIENCED<br>Surfing 2 – 3 times per week and/or approximately 10 years of experience. Riding most types of waves and performing a range of different manoeuvres with confidence.</p>
							<p class="p8 mb8"  class="regularText">EXPERIENCED<br>Surfing 3+ times per week with over 10 years of experience. Riding all types of waves and performing committed turns in critical parts of the wave.</p>
                                    </div>
                                </li>
							<li>
                                    <div class="title">
                                        <span>RECOMMENDED VOLUME & WAVE TYPE</span>
                                    </div>
                                    <div class="content">
                                       
							<p class="p8 mb8" class="regularText">SMALL, MUSHY CONDITIONS (0 – 3 feet) <br>Soft, rolling beach and point waves under waist high. For these conditions add approx 3ltr to your everyday volume.</p>
							<p class="p8 mb8" class="regularText">MEDIUM, EVERYDAY CONDITIONS (2 – 6 feet) <br>Typical beach and point waves up to head high. The boards displayed below are calcualted using your everyday volume.</p>
							<p class="p8 mb8" class="regularText">LARGE, PUNCHY CONDITIONS  (6 feet plus) <br>Stronger, more powerful beach and point waves above head high. For these conditions remove approx 3ltr from your everyday volume.</p>
                                </li>
                              
							
							</ul>
						</div>	
								
							
						</div>
                   
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
           
            <section class="pb0 pt32">
                <div class="container p0">
                   <div class="row">
                        <div class="col-sm-12">
                            <h3 class="uppercase mb32 mb-xs-32">FIND THE BEST VOLUME FOR YOU</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
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
											<option value="" SELECTED>Your Skill Level</option>
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
						<div class="col-md-4 col-sm-4">
							<div class="feature feature-3 mb-xs-24 ">
								<div class="left">
									<i class="ti-panel icon-sm"></i>
								</div>
								<div class="right">
									<h5 class="uppercase mb16">WEIGHT (KG)</h5>
									<p>Convert Lbs to Kgs <a href="https://www.metric-conversions.org/weight/pounds-to-kilograms.htm" target="new">here</a>
									 <span class="WgtRL" align="left" valign="top"><br>
									 
									<input class="createOrderInput"  type="text" name="WgtRL" placeholder="Your Weight" required></span>  
									</p>
								</div>
							</div>
							<!--end of feature-->
						</div>
						<div class="col-md-4 col-sm-4">
                            <div class="feature feature-3 mb-xs-24">
                                <div class="left">
                                    <i class="ti-money icon-sm"></i>
                                </div>
                                <div class="right">
                                    <form id="vol-calc" action="#results" method="post">
									<div id="smllVolDiv"></div>
									<h5 class="uppercase mb16">BUDGET</h5>
									<span class="budget" valign="top">
										<br>
										<div class="select-option">
                                		<i class="ti-angle-down"></i>
                                		<select name="budget" required>
                                		<?php
											
											if ($userCountry == 'AU'){
												echo '<option value="">Your Budget</option>';
												echo '<option value="$">$ 499 and below</option>';
												echo '<option value="$$">$$ 500 - 799</option>';
												echo '<option value="$$$">$$$ 800 and above</option>';
												echo '<option value="all">Show me everything</option>';
											}
											elseif ($userCountry == 'NZ'){
												echo '<option value="">Your Budget</option>';
												echo '<option value="$">$ 599 and below</option>';
												echo '<option value="$$">$$ 600 - 999</option>';
												echo '<option value="$$$">$$$ 1000 and above</option>';
												echo '<option value="all">Show me everything</option>';
											}
											else {
												echo '<option value="">Your Budget</option>';
												echo '<option value="$">$ 425 and below</option>';
												echo '<option value="$$">$$ 426 - 649</option>';
												echo '<option value="$$$">$$$ 650 and above</option>';
												echo '<option value="all">Show me everything</option>';
											}
											
											?>
										
											
										</select>
										</div>
									</span>
		                        </div>
                            </div>
                            <!--end of feature-->
                        </div>
							
						
                    
                     </div>
                    <!--end of row-->
                </div><a name="results"></a>
                <!--end of container-->
            </section>
            
			<section class="pt0 pb24">
                <div class="container p0">
                    <div class="row">
                        <div class="col-md-3 text-center">
                        	<div class="right" ><input type="submit" class="button" name="getVolume" id="getVolume" value="GET VOLUME"></div>
                      	</div>
						</div>
					</div>
				</div>
			</section>
	
		<?php
		
		if (isset($_POST["AmountRL"]) && !empty($_POST["AmountRL"])) {
			
			echo '<section class="pt0 pb16 mb8 p0">';
            echo '<div class="container p0">';
            echo '<div class="row">';
            echo '<div class="col-md-12 pb16">';
			echo '<hr><br><br>';
			echo '<h4 class="uppercase">RECOMMENDED BOARDS & VOLUME FOR YOUR SKILL LEVEL</h4>';
			echo '<h5>YOUR SKILL LEVEL: '.$skillval.' </h5>';
			
			echo '<h5 class="mb0">YOUR VOLUME:  '.$med .'ltr ';
				if ($skill == "1") { echo '+/- 1ltr</h5>';}
				if ($skill == "2") { echo '+/- 2ltr</h5>';}
				if ($skill == "3") { echo '+/- 3ltr</h5>';}
				if ($skill == "4") { echo '+/- 4ltr</h5>';}
				if ($skill == "5") { echo '+/- 5ltr</h5>';}
			echo '<div class="mb24">PLEASE NOTE: This is only a suggested volume. Please hit the Live chat button below if you need more info.</div>';
			echo '<h5>BUDGET: ';
				
				if ($userCountry == 'AU'){
					if ($budgetU == "all") { echo 'Show me everything for my Volume';}								
					if ($budgetU == "$") { echo '$ 499 and below';}
					if ($budgetU == "$$") { echo '$$ 500 - 799';}
					if ($budgetU == "$$$") { echo '$$$ 800 and above';}		
				}
				elseif ($userCountry == 'NZ'){
					if ($budgetU == "all") { echo 'Show me everything for my Volume';}								
					if ($budgetU == "$") { echo '$ 599 and below';}
					if ($budgetU == "$$") { echo '$$ 600 - 999';}
					if ($budgetU == "$$$") { echo '$$$ 1000 and above';}			
				}
				else {
				if ($budgetU == "all") { echo 'Show me everything for my Volume';}								
					if ($budgetU == "$") { echo '$ 425 and below';}
					if ($budgetU == "$$") { echo '$$ 426 - 649';}
					if ($budgetU == "$$$") { echo '$$$ 650 and above';}	
				}
			
			
			
				
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</section>';
    		   
		}
			
			
		
		?>
		
		
		 
		  
		    <a name="smallresults"></a>
		<!-- <div id="vol-smll" name="vol-smll"></div> -->
		
		
		 <section class="pb0 pt8 p0">
            <div class="container p0">
               <div class="row">
                   <div class="col-sm-12 text-center">
		 		   <a name="medresults"></a>
					<div id="vol-med" name="vol-med">
						<p>
   							 <!-- spinner -->
   						   <div align="left" class="cssload-fond">
								<div class="cssload-container-general">
								  <div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_1"> </div></div>
								  <div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_2"> </div></div>
								  <div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_3"> </div></div>
								  <div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_4"> </div></div>
								</div>
							</div>
							 </p>
			
					</div>
				</div>	
			 </div>
		 </div>
		</section>
							
		<!-- <a name="largeresults"></a>
		<div id="vol-large" name="vol-large"></div> -->
				
	 <?php include HOME . 'includes/site-scripts.inc'; ?>	
  
        </div>
        <!-- this is for the captcha on the contact us form -->

<script>
	$(document).ready(function(){
		//This condition will check if form with id 'contact-form' is exist then only form reset code will execute.
    //if($('#vol-calc').length>0){
    //    $('#vol-calc')[0].reset(); 
  // }
		
		
		
		//$.ajax({
	//	type:'POST',
	//	url:'get-vol-smll.php',
	//	data:'smallVolume='+ <?php //echo json_encode($small) ?>+'&country=' + <?php //echo json_encode($country) ?>,
	//	success:function(html){
	//		$('#vol-smll').html(html);
	//		//$('#size_select').prop('disabled', false);
	//	}
//	}); 
		
		$.ajax({
		type:'POST',
		url:'get-vol-shopify.php',
		data:'medVolume='+ <?php echo json_encode($med) ?>+'&country=' + <?php echo json_encode($country)?>+'&skill=' + <?php echo json_encode($skill)?>+'&budget=' + <?php echo json_encode($budgetU) ?>,
		success:function(html){
			$('#vol-med').html(html);
			//$('#size_select').prop('disabled', false);
		}
	}); 
		
		//$.ajax({
		//type:'POST',
		//url:'get-vol-lrg.php',
		//data:'largeVolume='+ <?php echo json_encode($large) ?>+'&country=' + <?php echo json_encode($country) ?>,
		//success:function(html){
		//	$('#vol-large').html(html);
			//$('#size_select').prop('disabled', false);
		//}
	//}); 
		
	
		
		
		
		$('.WgtRL input').keyup(multiply);
		
function multiply() {
   	
	
	
	var weightRL = parseFloat($('.WgtRL input').val());
	var gfRL = $('span.AmountRL select').val();
	
	
	if (weightRL < 30){
	
	//min volume for weights under 30kg
	var volumeRL = 35;
	}
	
	else if ((gfRL == '1') && (weightRL > 29))
	{
	var volumeRL =  +weightRL -(weightRL * 58/100); 
	}
	else if ((gfRL == '2') && (weightRL > 29))
	{
	var volumeRL =  +weightRL -(weightRL * 55/100); 
	}
	else if ((gfRL == '3') && (weightRL > 29))
	{
	var volumeRL =  +weightRL -(weightRL * 50/100); 
	}
	else if ((gfRL == '4') && (weightRL > 29))
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