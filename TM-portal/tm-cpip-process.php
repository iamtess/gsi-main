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
		$pageName = "CPIPProc";
		
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

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script language="JavaScript">


function validateForm() 
{
	
	valid = true;
	if (document.cpipForm.Name.options[document.cpipForm.Name.options.selectedIndex].value == ""){
	   alert( "You must select your Name." );
	   document.cpipForm.Name.focus();
	   return false;
	}
	if (document.cpipForm.Email.value == ""){
	   alert( "You must enter your email address." );
	   document.cpipForm.Email.focus();
	   return false;
	}
	

	
	
	if (document.cpipForm.processType.options[document.cpipForm.processType.options.selectedIndex].value == "0"){
	   alert( "Please select Department." );
	   document.cpipForm.processType.focus();
	   return false;
	}
	
	

	if (document.cpipForm.processIssue.value == ""){
	   alert( "Please enter a description of the issue." );
	   document.cpipForm.processIssue.focus();
	   return false;
	}
	
	
	
	
	
	

return true;

}


</script>

<!-- script for adding email address -->
<script>
	  function addEmail(){
		  var Name = document.getElementById('Name');
		  var Email = document.getElementById('Email');
		  
		  if(Name.value == 'Scott Wyatt'){
			  Email.value = "scottw@surfindustries.com";
		  }
		  if(Name.value == 'Tony Butler'){
			  Email.value = "tony@surfindustries.com";
		  }
		  if(Name.value == 'Golden Marshall'){
			  Email.value = "golden@surfindustries.com";
		  }
		  if(Name.value == 'Kel'){
			  Email.value = "kel@surfindustries.com";
		  }
		 
		  if(Name.value == 'Mark Eymes'){
			  Email.value = "marke@surfindustries.com";
		  }
		  if(Name.value == 'Jeff Deffenbaugh'){
			  Email.value = "jeff@surfindustries.com";
		  }
		
		  if(Name.value == 'Ed Gerbino'){
			  Email.value = "ed@surfindustries.com";
		  }
		  if(Name.value == 'Jordan Gosling'){
			  Email.value = "jordan@surfindustries.com";
		  }
		  if(Name.value == 'Alex Pappas'){
			  Email.value = "alex@surfindustries.com";
		  }
		  if(Name.value == 'Mike Sidani'){
			  Email.value = "mikes@surfindustriescom";
		  }
	 	  if(Name.value == 'Tess Kelly'){
			  Email.value = "tess@surfindustries.com";
		  }
		  if(Name.value == 'Matt Swan'){
			  Email.value = "matts@surfindustries.com";
		  }
		  if(Name.value == 'Bridget Reedman'){
			  Email.value = "bridget@surfindustries.com";
		  }
		  if(Name.value == 'John Jacka'){
			  Email.value = "johnj@surfindustries.com";
		  }
		  if(Name.value == 'Marie Mercer'){
			  Email.value = "marie@surfindustries.com";
		  }
		  if(Name.value == 'Garret Wiseth'){
			  Email.value = "garret@surfindustries.com";
		  }
		  if(Name.value == 'Chris Pothoff'){
			  Email.value = "chris@surfindustries.com";
		  }
		  
		   else if(Name.value == "") {
			  Email.value = "Please enter your email address";
		  }
	   }
	   
	   
	   
	   
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
                            <h2 class="uppercase mb0">TM PORTAL</h2><h4>Submit a CPIP Process Issue</h4>
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
                            <form action="https://surfindustries.pandaform.com/pub/wh4qnu" enctype="multipart/form-data" method="post" name="cpipForm" id="cpipForm" onsubmit="return validateForm();">
                            	<div class="container">
								<div class="row">		
								<div class="portalTopText mb8">
									Please fill out ALL fields before submitting this form.
								</div> 
                          	    <div class="col-md-8 col-sm-10 ">
                           	    <div class="heading-title">YOUR NAME<sup> *</sup><br><hr></div>
								</div>
                            	<div class="col-md-6 col-sm-10 ">
                        		    <div class="select-option">
                                     <i class="ti-angle-down"></i>
								     <select name="Name" id="Name" class="selection" onchange="addEmail()" required>
									   <option class="required-empty" value="" selected> Please select your Name</option>
									   <option class="" value="Alex Pappas"> Alex Pappas</option>
									   <option class="" value="Andrew Brady"> Andrew Brady</option>
									   <option class="" value="Bridget Reedman"> Bridget Reedman</option>
									   <option class="" value="Chris Pothof"> Chris Pothof</option>
									   <option class="" value="Ed Gerbino"> Ed Gerbino</option>
									   <option class="" value="Jordan Gosling"> Jordan Gosling</option>
									   <option class="" value="Garret Wiseth"> Garret Wiseth</option>
									   <option class="" value="Jeff Deffenbaugh"> Jeff Deffenbaugh</option>
									   <option class="" value="John Jacka"> John Jacka</option>
									   <option class="" value="Kel"> Kel</option>
									   <option class="" value="Marie Mercer"> Marie Mercer</option>
									   <option class="" value="Golden Marshall"> Golden Marshall</option>
									   <option class="" value="Mark Eymes"> Mark Eymes</option>
									   <option class="" value="Matt Swan"> Matt Swan</option>
									   <option class="" value="Mike Sidani"> Mike Sidani</option>
									   <option class="" value="Scott Wyatt"> Scott Wyatt</option>
									   <option class="" value="Tess Kelly"> Tess Kelly</option>
									   <option class="" value="Tony Butler"> Tony Butler</option>
									   <option class="" value="DISTRIBUTOR"> DISTRIBUTOR</option>
									</select>
									</div>
							   </div>   
							<div class="col-md-8 col-sm-10 ">
								<div class="heading-title">YOUR EMAIL ADDRESS</label><sup>*</sup><br><hr></div>
							 </div>
                             <div class="col-md-6 col-sm-10 ">
                           		<input type="text" value="" name="Email" id="Email" placeholder="email address" required>
							 </div>
                          <div class="col-md-8 col-sm-10 ">
					     	<div class="heading-title">DEPARTMENT</label><sup>*</sup><br><hr></div>
							    </div>
						     <div class="col-md-6 col-sm-10 ">
				         		<div class="select-option">
                                <i class="ti-angle-down"></i>
									 <select id="processType" name="processType" required>
									<option class="level-0" value="">Please select a Department</option>
									<option class="level-1" value="Accounts Payable"> Accounts Payable</option>
									<option class="level-1" value="Admin"> Admin</option>
									<option class="level-1" value="AR"> AR</option>
									<option class="level-1" value="Brian"> Brian</option>
									<option class="level-1" value="Customer Service"> Customer Service</option>
									<option class="level-1" value="Daisy"> Daisy</option>
									<option class="level-1" value="Finance"> Finance</option>
									<option class="level-1" value="Logistics"> Logistics</option>
									<option class="level-1" value="Sales"> Sales</option>
									<option class="level-1" value="Shipping"> Shipping</option>
									<option class="level-1" value="Warehouse"> Warehouse</option>
									</select>
								 </div>
							</div>
					      <div class="col-md-8 col-sm-10 ">
							  <div class="heading-title">DESCRIPTION OF ISSUE</label><sup>*</sup><br><hr></div>
							</div> 
							<div class="col-md-6 col-sm-10 ">
						      <textarea name="processIssue" id="processIssue" placeholder="Process issue description..." required></textarea>
						   </div>
                           <div class="col-md-8 col-sm-10 ">
						      <div class="heading-title">PROPOSED RESULUTION</label><sup>*</sup><br><hr></div>
						   </div>
						   <div class="col-md-6 col-sm-10 ">
						   <textarea name="proposedRes" id="proposedRes" placeholder="Proposed resolution..."></textarea>
						   </div>
                           <div class="col-md-8 col-sm-10 ">
							   <div class="heading-title">ATTACHMENT</label><sup>*</sup><br><hr></div>
							    </div>
						   <div class="col-md-6 col-sm-10 ">
						    <input type="file" name="attachment" id="attachment" class="file"><a></a>
						    
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
                       
					 <!--end of row-->
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