<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - TM PORTAL</title>
         <?php 
		session_start();
		define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		include HOME . 'includes/header-includes.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
		
		if (!isset($_SESSION['basic_is_logged_in']) || $_SESSION['basic_is_logged_in'] !== true) {
			
		echo 	$_SESSION['basic_is_logged_in'];
		// not logged in, move to login page
		header('Location: tm-portal-login.php');
		exit;
		}
			
		//echo 	$_SESSION['basic_is_logged_in'];
			
		if(isset($_SESSION['user']))
        {
			$userType = $_SESSION['user'] ;
	    }
		
		// echo 'user:' . $userType;
		$pageName = "";
		$pageName = "CPIPProd";
		
		//echo 'pagename'. $pageName;
		
	?>
        
        
        <!-- start Mixpanel --><script type="text/javascript">(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===e.location.protocol?"https:":"http:")+'//cdn.mxpnl.com/libs/mixpanel-2.2.min.js';f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f);b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==
			typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");for(g=0;g<i.length;g++)f(c,i[g]);
			b._i.push([a,e,d])};b.__SV=1.2}})(document,window.mixpanel||[]);
			mixpanel.init("48d1470366230009bc08ad4bc2731537");</script><!-- end Mixpanel -->

			<script type="text/javascript">
			  mixpanel.identify("surfindustries");
			</script>

			 <!-- Google Analytics -->
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
				ga('create', 'UA-12052961-4', 'auto');
			  ga('require', 'linker');

			  ga('create', 'UA-12052961-1', {'name': 'landingPageTracker', 'allowLinker': true, 'cookieDomain': 'pandaform.com'});
			  ga('landingPageTracker.require', 'linker');

			  ga('linker:autoLink', ['pandaform.com', 'fastspring.com']);

			</script>
       
       
       <?php 
			//this script os required for this particualr form to show/hide the divs as the user progresses through the form
			echo "<script src='".HOME."js/jquery-1.7.2.min.js' type='text/javascript' charset='utf-8'></script>"; 
		?>
        
        <script language="JavaScript">


			function validateForm() 
			{

				valid = true;
				if (document.cpipForm.tmName.options[document.cpipForm.tmName.options.selectedIndex].value == ""){
				   alert( "You must select your Name." );
				   document.cpipForm.tmName.focus();
				   return false;
				}
				if (document.cpipForm.tmEmail.value == ""){
				   alert( "You must enter your email address." );
				   document.cpipForm.tmEmail.focus();
				   return false;
				}

			if (document.cpipForm.boardType.options[document.cpipForm.boardType.options.selectedIndex].value == ""){
				   alert( "Please select board type." );
				   document.cpipForm.boardType.focus();
				   return false;
				}

			if (document.cpipForm.BrandModel.options[document.cpipForm.BrandModel.options.selectedIndex].value == "0")  {
				   alert( "Please select Brand & Model." );
				   document.cpipForm.BrandModel.focus();
				   return false;
				}

			if (document.cpipForm.boardLength.value == ""){
				   alert( "You must enter a board length.");
				   document.cpipForm.boardLength.focus();
				   return false;
				}



				if (document.cpipForm.otherProduct.value == ""){
				   alert( "You must enter a Product.");
				   document.cpipForm.otherProduct.focus();
				   return false;
				}


				if (document.cpipForm.serialNumber.value == ""){
				   alert( "You must enter a serial number." );
				   document.cpipForm.serialNumber.focus();
				   return false;
				}
				if (document.cpipForm.issueDescription.value == ""){
				   alert( "Please enter a description of the issue." );
				   document.cpipForm.issueDescription.focus();
				   return false;
				}
				if (document.cpipForm.issuePhoto.value == ""){
					alert( "You must upload an image of the issue." );
					document.cpipForm.issuePhoto.focus();
					return false;
				}

				return true;
			}

			</script>

			<!-- script for adding email address -->
			<script>
			  function addEmail(){
				  var tmName = document.getElementById('tmName');
				  var tmEmail = document.getElementById('tmEmail');

				  if(tmName.value == 'Scott Wyatt'){
					  tmEmail.value = "scottw@surfindustries.com";
				  }
				
				  if(tmName.value == 'Kel'){
					  tmEmail.value = "kel@surfindustries.com";
				  }
				  
				  if(tmName.value == 'Dave Hyslop'){
					  tmEmail.value = "dave@surfindustries.com";
				  }
				  if(tmName.value == 'Jeff Deffenbaugh'){
					  tmEmail.value = "jeff@surfindustries.com";
				  }
				 
				  if(tmName.value == 'Ed Gerbino'){
					  tmEmail.value = "ed@surfindustries.com";
				  }
				  
				  if(tmName.value == 'Andrrew Crane'){
					  tmEmail.value = "andrewc@surfindustries.com";
				  }
				  
				  if(tmName.value == 'Jordan Gosling'){
					  tmEmail.value = "jordan@surfindustries.com";
				  }
				  if(tmName.value == 'Alex Pappas'){
					  tmEmail.value = "alex@surfindustries.com";
				  }
				  if(tmName.value == 'Mike Sadini'){
					  tmEmail.value = "mikes@surfindustries.com.com";
				  }


				   else if(tmName.value == "") {
					  tmEmail.value = "Please enter your email address";
				  }
		      }
	   
	   
	   
	   
			function chTypeList(){
			  var boardType = document.getElementById('boardType');


			  if(boardType.value == 'Surfboard'){
				  otherProduct.value = "n/a";
			  }
			  if(boardType.value == 'SUP'){
				  otherProduct.value = "n/a";
			  }
			  if(boardType.value == 'OTHER'){
				  boardLength.value = "n/a";
				  serialNumber.value = "n/a";
			  }

			}
	   
	   
  		</script>
  		<script>
 

		$(function(){
		$('#boardType').on('change', function () {
			//alert(this.value); // or $(this).val()
			if (this.value == 'SUP') {
				$("#BrandModel").html(
					"<option class=\"level-1\" value=\"0\">Please Select a Brand and Model</option><option></option><option class=\"level-1\" value=\"TC - Outer Reef\"> TC - Outer Reef</option><option class=\"level-1\" value=\"TC - Loose Leaf V2\"> TC - Loose Leaf V2</option><option class=\"level-1\" value=\"TC - Long Grain V2\"> TC - Long Grain V2</option><option></option><option class=\"level-1\" value=\"Three Palms Soft SUP\"> Three Palms Soft SUP</option><option></option><option class=\"level-1\" value=\"Salt Gypsy - Paradise Punch\"> Salt Gypsy - Paradise Punch</option><option></option><option class=\"level-1\" value=\"AP - Fifty Fifty - MX\"> AP - Fifty Fifty - MX</option><option class=\"level-1\" value=\"AP - Seventy Thirty CX\"> AP - Seventy Thirty CX</option><option class=\"level-1\" value=\"AP - Sixty Forty - MX\"> AP - Sixty Forty - MX</option><option class=\"level-1\" value=\"AP - Inflatable  - 10'2\"> AP - Inflatable  - 10'2</option><option class=\"level-1\" value=\"AP - Inflatable  - Flatwater\"> AP - Inflatable  - Flatwater</option><option class=\"level-1\" value=\"AP - Explorer 2 - X2\"> AP - Explorer 2 - CX</option><option class=\"level-1\" value=\"AP - All Rounder - X2\"> AP - All Rounder - CX</option><option class=\"level-1\" value=\"AP - All Rounder - X2\"> AP - All Rounder - MX</option><option></option>");
			} 
			else if (this.value == 'Surfboard') {
				$("#BrandModel").html(
					"<option class=\"level-0\" value=\"0\">Please select Brand & Model;</option><option></option><option class=\"level-1\" value=\"Walden - Mega Magic 2 - SLX\"> Walden - Mega Magic 2 - SLX</option><option class=\"level-1\" value=\"Walden - Mega Magic 2 - X2\"> Walden - Mega Magic 2 - X2</option><option class=\"level-1\" value=\"Walden - Mini Mega Magic 2 - SLX\"> Walden - Mini Mega Magic 2 - SLX</option><option class=\"level-1\" value=\"Walden - Mini Mega Magic 2 - X2\"> Walden - Mini Mega Magic 2 - X2</option><option class=\"level-1\" value=\"Walden - Magic Model 2 - X2\"> Walden - Magic Model 2 - X2</option><option></option><option class=\"level-1\" value=\"Three Palms Due Back\"> Three Palms Due Back</option><option class=\"level-1\" value=\"Three Palms Soft Surfboard\"> Three Palms Soft Surfboard</option><option></option><option class=\"level-1\" value=\"Salt Gypsy - Dusty\"> Salt Gypsy - Dusty</option><option class=\"level-1\" value=\"Salt Gypsy - Mid Tide\"> Salt Gypsy - Mid Tide</option><option class=\"level-1\" value=\"Salt Gypsy - Shorebird\"> Salt Gypsy - Shorebird</option><option></option><option class=\"level-1\" value=\"Seaglass - Albacore\"> Seaglass - Albacore</option><option></option><option class=\"level-1\" value=\"Modern - Retro\"> Modern - Retro</option><option class=\"level-1\" value=\"Modern - The Boss - PU\"> Modern - The Boss - PU</option><option class=\"level-1\" value=\"Modern - The Boss - XB\"> Modern - The Boss - XB</option><option class=\"level-1\" value=\"Modern - Love Child - PU\"> Modern - Love Child - PU</option><option class=\"level-1\" value=\"Modern - Love Child - XB\"> Modern - Love Child - XB</option><option class=\"level-1\" value=\"Modern - Highline - PU\"> Modern - Highline - PU</option><option class=\"level-1\" value=\"Modern - Highline - XB\"> Modern - Highline - XB</option><option class=\"level-1\" value=\"Modern - Falcon - PU\"> Modern - Falcon - PU</option><option class=\"level-1\" value=\"Modern - Blackbird - PU\"> Modern - Blackbird - PU</option><option class=\"level-1\" value=\"Modern - Blackbird - XB\"> Modern - Blackbird - XB</option><option class=\"level-1\" value=\"Modern - Double Wide - SLX\"> Modern - Double Wide - SLX</option><option class=\"level-1\" value=\"Modern - Double Wide - XB\"> Modern - Double Wide - XB</option><option></option><option class=\"level-1\" value=\"Gnaraloo - Dune Buggy\"> Gnaraloo - Dune Buggy</option><option class=\"level-1\" value=\"Gnaraloo - Fatty\"> Gnaraloo - Fatty</option><option class=\"level-1\" value=\"Gnaraloo - Beach Cruiser\"> Gnaraloo - Beach Cruiser</option><option class=\"level-1\" value=\"Gnaraloo - Flounder Pounder\"> Gnaraloo - Flounder Pounder</option><option></option><option class=\"level-1\" value=\"Creative Army - Huevo - PU\"> Creative Army - Huevo - PU</option><option class=\"level-1\" value=\"Creative Army - Huevo - SLX\"> Creative Army - Huevo - SLX</option><option class=\"level-1\" value=\"Creative Army - Jive\"> Creative Army - Jive</option><option class=\"level-1\" value=\"Creative Army - Jive+ - SLX\"> Creative Army - Jive+ - SLX</option><option class=\"level-1\" value=\"Creative Army - 5 Sugars\"> Creative Army - 5 Sugars</option><option></option><option class=\"level-1\" value=\"Chilli - Hot Knife - TT\"> Chilli - Hot Knife - TT</option><option class=\"level-1\" value=\"Chilli - Mid Strength - TT\"> Chilli - Mid Strength - TT</option><option class=\"level-1\" value=\"Chilli - Rarest Bird - TT\"> Chilli - Rarest Bird - TT</option><option></option><option class=\"level-1\" value=\"7S - Double Down\"> 7S - Double Down - IM</option><option class=\"level-1\" value=\"7S - Hook - IM\"> 7S - Hook - IM</option><option class=\"level-1\" value=\"7S- Jetstream - IM\"> 7S- Jetstream - IM</option><option class=\"level-1\" value=\"7S - Superfish 2 X2\"> 7S - Superfish 2 - X2</option><option class=\"level-1\" value=\"7S - Superfish 4 - IM\"> 7S - Superfish 4 - IM</option><option></option>");
			} 
			else if (this.value == 'OTHER') {
				$("#BrandModel").html(
					"<option class=\"level-1\" value=\"0\">Please Select a Brand.</option><option class=\"level-1\" value=\"Surfica\"> Surfica</option><option class=\"level-1\" value=\"Trident\"> Trident</option>");
			}
			else  {

				$("#BrandModel").html(
					"Go back and select a Brand & Model");
			}

		});
		});
		  </script>
 
		<script>
		  $(function() {
			$('#brandModelDrop').hide(); 
			$('#lengthSerial').hide();

			$('#type_OTHER').hide(); 
			$('#photo2').hide();
			$('#photo3').hide();
			$('#photo4').hide();
			$('#photo5').hide();
			$('#photo6').hide();
			$('#photo3link').hide();
			$('#photo4link').hide();
			$('#photo5link').hide();
			$('#photo6link').hide();


			$('#boardType').change(function(){
				if($('#boardType').val() == 'Surfboard') {
					$('#brandModelDrop').show();
					$('#lengthSerial').show();
					$('#type_OTHER').hide();
				} else if  ($('#boardType').val() == 'SUP') {
					$('#brandModelDrop').show();
					$('#lengthSerial').show();
					$('#type_OTHER').hide();
				} else if  ($('#boardType').val() == 'OTHER') {
					$('#brandModelDrop').show();
					$('#type_OTHER').show(); 
					$('#lengthSerial').hide();
				}
			});
		   });
		</script>
    </head>
    <body class="scroll-assist">
         <!-- include header -->
        <?php include HOME . 'includes/header-nav-items.inc'; ?>
        <div class="main-container">
            <section class="page-title page-title-4 image-bg overlay parallax">
                <div class="background-image-holder">
                    <?php echo "<img src='" . IMAGES_DIR ."tm-portal-header.jpg' class='background-image' alt='Global Surf Industries - TM Portal'>"; ?>
                    
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="uppercase mb0">TM PORTAL</h2><h4>Submit a CPIP PRODUCT Issue</h4>
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
                            <form action="https://surfindustries.pandaform.com/pub/vhcks0" enctype="multipart/form-data" method="post" name="cpipForm" id="cpipForm" onsubmit="return validateForm();">
                            <div class="container">
								<div class="row">		
								<div class="portalTopText mb8">
									Please fill out ALL fields before submitting this form.
								</div> 
                          	    <div class="col-md-8 col-sm-10 "><div class="heading-title">YOUR NAME<sup> *</sup><br><hr></div>
								</div>  
                            	<div class="col-md-6 col-sm-10">
						   		   <div class="select-option">
                                   <i class="ti-angle-down"></i>
								   <select name="tmName" id="tmName" class="selection" onchange="addEmail()" required>
								   <option class="required-empty" value="" selected> Please select your Name</option>
								   <option class="" value="Alex Pappas"> Alex Pappas</option>
								   <option class="" value="Ed Gerbino"> Ed Gerbino</option>
								   <option class="" value="Andrew Crane"> Andrew Crane</option>
								   <option class="" value="Jordan Gosling"> Jordan Gosling</option>
								   <option class="" value="Jeff Deffenbaugh"> Jeff Deffenbaugh</option>
								   <option class="" value="Kel"> Kel</option>
								   <option class="" value="Dave Hyslop"> Dave Hyslop</option>
								   <option class="" value="Mike Sadini"> Mike Sadini</option>
								   <option class="" value="Scott Wyatt"> Scott Wyatt</option>
								   <option class="" value="DISTRIBUTOR"> DISTRIBUTOR</option>
								   </select>
									</div>
							   </div>   
							<div class="col-md-8 col-sm-10 ">
							<div class="heading-title">
								YOUR EMAIL ADDRESS</label><sup>*</sup><br><hr></div>
							</div>                                
                             <div class="col-md-6 col-sm-10">
                           		   <input type="text" value="" name="tmEmail" id="tmEmail" placeholder="email address" required>
							 </div>
                          	<div class="col-md-8 col-sm-10 ">
					     <div class="heading-title">
							 PRODUCT TYPE</label><sup>*</sup><br><hr></div>
							    </div>  
						     <div class="col-md-6 col-sm-10">
 						   		<div class="select-option">
                                <i class="ti-angle-down"></i>
						        <select id="boardType" name="boardType" onchange="chTypeList()" required>
							    <option value="">Please select product type</option>
							    <option class="level-0" value="SUP">SUP</option>
							    <option class="level-0" value="Surfboard">Surfboard</option>
							    <option class="level-0" value="OTHER">OTHER</option>
						       </select>
								 </div>
							</div>
					     <div id="brandModelDrop">
                           <div class="col-md-8 col-sm-10 ">
                      	    <div class="heading-title">
								BRAND & MODEL</label><sup>*</sup><br><hr></div>
							    </div> 
                      	      <div class="col-md-6 col-sm-10">
 						   	  <div class="select-option">
                                <i class="ti-angle-down"></i>
								<select id="BrandModel" name="BrandModel" required>
									<option class="level-0" value="0">Please select Brand & Model</option>
									<option></option>
									<option class="level-0" value="0">Please select Brand & Model;
									<option></option>
									<option class="level-1" value="Walden - Mega Magic 2 - SLX"> Walden - Mega Magic 2 - SLX</option>
									<option class="level-1" value="Walden - Mega Magic 2 - X2"> Walden - Mega Magic 2 - X2</option>
									<option class="level-1" value="Walden - Mini Mega Magic 2 - SLX"> Walden - Mini Mega Magic 2 - SLX</option>
									<option class="level-1" value="Walden - Mini Mega Magic 2 - X2"> Walden - Mini Mega Magic 2 - X2</option>
									<option class="level-1" value="Walden - Magic Model 2 - X2"> Walden - Magic Model 2 - X2</option>
									<option class="level-1" value="Walden - Magic Model - PU"> Walden - Magic Model - PU</option>
									<option></option>
									<option class="level-1" value="Three Palms Soft Surfboard"> Three Palms Soft Surfboard</option>
									<option></option>
									
									<option class="level-1" value="Seaglass - Albacore"> Seaglass - Albacore</option><option></option>
									
									<option></option>
									<option class="level-1" value="Modern - Retro"> Modern - Retro</option>
									<option class="level-1" value="Modern - The Boss - PU"> Modern - The Boss - PU</option>
									<option class="level-1" value="Modern - The Boss - XB"> Modern - The Boss - XB</option>
									<option class="level-1" value="Modern - Love Child - PU"> Modern - Love Child - PU</option>
									<option class="level-1" value="Modern - Love Child - XB"> Modern - Love Child - XB</option>
									<option class="level-1" value="Modern - Highline - PU"> Modern - Highline - PU</option>
									<option class="level-1" value="Modern - Highline - XB"> Modern - Highline - XB</option>
									<option class="level-1" value="Modern - Falcon - PU"> Modern - Falcon - PU</option>
									<option class="level-1" value="Modern - Blackbird - PU"> Modern - Blackbird - PU</option>
									<option class="level-1" value="Modern - Blackbird - XB"> Modern - Blackbird - XB</option>
									<option class="level-1" value="Modern - Double Wide - SLX"> Modern - Double Wide - SLX</option>
									<option class="level-1" value="Modern - Double Wide - XB"> Modern - Double Wide - XB</option>
									
									<option></option>
									
									<option class="level-1" value="Gnaraloo - Dune Buggy"> Gnaraloo - Dune Buggy</option>
									<option class="level-1" value="Gnaraloo - Fatty"> Gnaraloo - Fatty</option>
									<option class="level-1" value="Gnaraloo - Soft Surfboard"> Gnaraloo - Soft Surfboard</option>
									<option class="level-1" value="Gnaraloo - Flounder Pounder"> Gnaraloo - Flounder Pounder</option>
									<option></option>
									<option class="level-1" value="Creative Army - Huevo"> Creative Army - Huevo</option>
									<option class="level-1" value="Creative Army - Jive"> Creative Army - Jive</option>
									<option class="level-1" value="Creative Army - Seahorse"> Creative Army - Seahorse</option>
									<option class="level-1" value="Creative Army - Taco"> Creative Army - Taco</option>
									<option></option>
									<option class="level-1" value="Chilli - Hot Knife - TT"> Chilli - Hot Knife - TT</option>
									<option class="level-1" value="Chilli - Mid Strength - TT"> Chilli - Mid Strength - TT</option>
									<option class="level-1" value="Chilli - Rarest Bird - TT"> Chilli - Rarest Bird - TT</option>
									<option></option>
									<option class="level-1" value="7S - Double Down"> 7S - Double Down - IM</option>
									<option class="level-1" value="7S- Jetstream - IM"> 7S- Jetstream - IM</option>
									<option class="level-1" value="7S - Superfish 2 X2"> 7S - Superfish 2 X2</option>
									<option class="level-1" value="7S - Superfish 4 - IM"> 7S - Superfish 4 - IM</option>
									<option></option>
									<option class="level-1" value="TC - Outer Reef"> TC - Outer Reef</option>
									<option class="level-1" value="TC - Loose Leaf V2"> TC - Loose Leaf V2</option>
									<option class="level-1" value="TC - Long Grain V2"> TC - Long Grain V2</option>
									<option></option>
									<option class="level-1" value="Three Plams Soft SUP"> Three Plams Soft SUP</option>
									<option></option>
									<option class="level-1" value="AP - Fifty Fifty - X1"> AP - Fifty Fifty - X1</option>
									<option class="level-1" value="AP - Seventy Thirty CX"> AP - Seventy Thirty CX</option>
									<option class="level-1" value="AP - Sixty Forty - MX"> AP - Sixty Forty - MX</option>
									<option class="level-1" value="AP - Sixty Forty - X1"> AP - Sixty Forty - X1</option>
									<option class="level-1" value="AP - Sixty Forty - X2"> AP - Sixty Forty - X2</option>
									<option class="level-1" value="AP - Project Y"> AP - Project Y</option>
									<option class="level-1" value="AP - Inflatable  - 10'2"> AP - Inflatable  - 10'2</option>
									<option class="level-1" value="AP - Inflatable  - Flatwater"> AP - Inflatable  - Flatwater</option>
									<option class="level-1" value="AP - Explorer 2 - X2"> AP - Explorer 2 - CX</option>
									<option class="level-1" value="AP - Explorer 2 - X2"> AP - Explorer 2 - X2</option>
									<option class="level-1" value="AP - All Rounder - X2"> AP - All Rounder - CX</option>
									<option class="level-1" value="AP - All Rounder - X2"> AP - All Rounder - MX</option>
									<option class="level-1" value="AP - All Rounder - X2"> AP - All Rounder - X2</option>
									<option class="level-1" value="AP - All Rounder - X1"> AP - All Rounder - X1</option>
									<option></option>                             
						       </select>
							   </div>
                           </div>
						</div>
                       <div id="lengthSerial">
						   	<div class="col-md-8 col-sm-10 ">
							   <div class="heading-title">
								   BOARD LENGTH</label><sup>*</sup><br><hr></div>
							    </div>  
					   		   <div class="col-md-6 col-sm-10">
						   		   <input type="text" value="" name="boardLength" id="boardLength" placeholder="Board Length">
						       </div>   
						       <div class="col-md-8 col-sm-10 ">
								<div class="heading-title">
									SERIAL NUMBER</label><sup>*</sup><br><hr></div>
							    </div>  
							    <div class="col-md-6 col-sm-10">
								   <input type="text" value="" name="serialNumber" id="serialNumber" placeholder="Serial Number">
							   </div>
						   </div>
                        <div id="type_OTHER">
              			   <div class="col-md-8 col-sm-10 ">
                            <div class="heading-title">
								PRODUCT</label><sup>*</sup><br><hr></div>
							    </div> 
                                <div class="col-md-6 col-sm-10">
   						   	   <input type="text" value="" name="otherProduct" id="otherProduct">
                              </div>
                           </div>
					      <div class="col-md-8 col-sm-10 ">
                       		<div class="heading-title">
								DESCRIPTION OF ISSUE</label><sup>*</sup><br><hr></div>
							    </div>  
						   <div class="col-md-6 col-sm-10">
  						   	   <textarea name="issueDescription" id="issueDescription" placeholder="Issue Description..." required></textarea>
						   </div>
                       	   <div class="col-md-8 col-sm-10 ">
                       	   <div class="heading-title">
							   PHOTOS</label><sup>*</sup><br><hr></div>
							    </div> 
						   <div class="col-md-6 col-sm-10">
  						   		<strong>NB:</strong> When sending more than one Photo the form can take a few minutes to submit, so hang in there - it will happen!
								<p ><label for="issuePhoto" class="labelHeader">Photo 1<sup> *</sup></label><input type="file" name="issuePhoto" id="issuePhoto" class="file" required><a></a></p>

								<p id="photo2link"><input type="button" value="+ Add another Photo" onclick="$('#photo2').show('slow');$('#photo2link').hide('slow');$('#photo3link').show('slow');" /><p>
								<p id="photo2"><label for="issuePhoto2" class="labelHeader">Photo 2 (optional)</label><input type="file" name="issuePhoto2" id="issuePhoto2" class="file"><a class="file-link"></a></p>

								<p id="photo3link"><input type="button" value="+ Add another Photo" onclick="$('#photo3').show('slow');$('#photo3link').hide('slow');$('#photo4link').show('slow');" /><p>
								<p id="photo3"><label for="issuePhoto3" class="labelHeader">Photo 3(optional)</label><input type="file" name="issuePhoto3" id="issuePhoto3" class="file"><a class="file-link"></a></p>

								<p id="photo4link"><input type="button" value="+ Add another Photo" onclick="$('#photo4').show('slow');$('#photo4link').hide('slow');$('#photo5link').show('slow');" /><p>
								<p id="photo4"><label for="issuePhoto4" class="labelHeader">Photo 4</label>input type="file" name="issuePhoto4" id="issuePhoto4" class="file"><a class="file-link"></a></p>

								<p id="photo5link"><input type="button" value="+ Add another Photo" onclick="$('#photo5').show('slow');$('#photo5link').hide('slow');$('#photo6link').show('slow');" /><p>
								<p id="photo5"><label for="issuePhoto5" class="labelHeader">Photo 5 (optional)</label><input type="file" name="issuePhoto5" id="issuePhoto5" class="file"><a class="file-link"></a></p>

								<p id="photo6link"><input type="button" value="+ Add another Photo" onclick="$('#photo6').show('slow');$('#photo6link').hide('slow');" /><p>
								<p id="photo6"><label for="issuePhoto6" class="labelHeader">Photo 6(optional)</label><input type="file" name="issuePhoto6" id="issuePhoto6" class="file"><a class="file-link"></a></p>
						  </div>
					  </div>
					   <!--end of row-->
					 </div>
                       <div class="hidden"><input type="hidden" name="$action" value="_firstSubmitInstep"></div>
                       <div class="container">
							<div class="row">
								<div class="col-md-3 col-sm-10 ">
									<input class="hollow" type="submit" value="Submit Button" />
								</div>
								</form>
							</div> 
							 <!--end of row-->
							</div>
					 
                     </div>
                     <!--end form div-->
                     <!--begin side bar-->
                     <div class="col-md-3 col-md-pull-9 hidden-sm">
                         <?php include HOME . 'includes/tm-portal-left-menu.inc'; ?>
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