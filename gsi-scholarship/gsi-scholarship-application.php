<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - LIFE IS BETTER WHEN YOU SURF</title>
         <?php 
		session_start();
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
     

   
  
           
            
            
               
                     
    </head>
    <body class="scroll-assist">
        <!-- include header -->
        <?php include HOME . 'includes/header-nav-items.inc'; ?>
        
        <div class="main-container">
            <section class="page-title page-title-2 image-bg overlay">
                <div class="background-image-holder">
                 <?php echo "<img src='" . IMAGES_DIR ."gsi-scholarship-header-2019.jpg' class='background-image' alt='Global Surf Industries - Life is Better When You Surf'>"; ?>
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
                       <div class="col-md-10 col-sm-10 ">
                        <div class="lrg-heading-title">LIFE IS BETTER WHEN YOU SURF<sup class="smallText">&#174;</sup> SCHOLARSHIP PROGRAM - APPLICATION<br><hr></div>
						</div>
                        <div class="col-md-9 col-sm-10 ">
							<p class="regularText">Before you fill out and submit this form you will need the following items: 
							<ul class="bullets">
						 		<li>A short essay (maximum 200 words) on why Life Is Better When You Surf</li>
								<li>A short video or photo essay showing us why you deserve this scholarship, show us why you think Life Is Better When You Surf®, how you apply yourself at school and how you contribute to your community</li>
								<li>A letter of recommendation from your Teacher, Coach or Mentor</li>
								<li>And of course, permission from your Parent/Guardian to apply for this scholarship</li>
							</ul>
							NB: All fields are required except where stated as Optional.
							</p>
						</div>
                       <div class="col-md-10 col-sm-10 ">
			       		  <div class="heading-title">PERSONAL DETAILS<br><hr></div>
					   </div><form action="gsi-scholarship-application-confirmation.php" enctype="multipart/form-data" method="post" name="gsiScholApp" id="gsiScholApp" >
			      	<input type="hidden" name="languageType" value="english">
				      <div class="col-md-6 col-sm-10 ">
				        <label>First Name</label>
					    <input type="text" placeholder="first name" name="firstname" required />
					    <label>Last Name</label>
						<input type="text" placeholder="last name" name="lastname" required/>
						<label>Date of Birth</label>
						<input type="text" placeholder="date of birth" name="dob" id="dob" required/>
						<label>Email Address</label>
						<input type="text" placeholder="email address" name="email" required/>
						<label>Address line 1</label>
						<input type="text" placeholder="address line 1" name="address1" required/>
						<label>Address line 2 (optional)</label>
						<input type="text" placeholder="address line 2" name="address2" />
						<label>City/Town</label>
						<input type="text" placeholder="city" name="city" required/>
						<label>State</label>
						<input type="text" placeholder="state" name="state" required/>
						<label>Postal/Zip Code</label>
						<input type="text" placeholder="post/zip code" name="pcode" required/>
						<label>Contact Number</label>
						<input type="text" placeholder="contact number" name="phone" required/>
					  </div>
					  <div class="col-md-10 col-sm-10 ">
			       		  <div class="heading-title">PARENT/GUARDIAN DETAILS<br><hr></div>
					   </div>
				      <div class="col-md-6 col-sm-10 ">
				       <label>Parent/Guardian First Name</label>
				      	<input type="text" placeholder="parent/guardian first name" name="pfirstname" required />
				      	<label>Parent/Guardian Last Name</label>
						<input type="text" placeholder="parent/guardian last name" name="plastname" required/>
						  <label>Parent/Guardian Email</label>
						<input type="text" placeholder="parent guardian email" name="pemail" required/>
						  <label>Parent/Guardian Contact Number</label>
						<input type="text" placeholder="parent/guardian contact number" name="pcontact" required/>
					  </div>	
					  <div class="col-md-10 col-sm-10 ">
			       		  <div class="heading-title">ABOUT YOU<br><hr></div>
					   </div>
				      <div class="col-md-6 col-sm-10 ">
						<label>What school will you be attending in 2020.</label>
				      	<input type="text" placeholder="" name="school" required />
				      	<label>How many years have you been surfing?</label>
						<input type="text" placeholder="" name="surfyears" required/>
						<label>What are your favourite local spots to surf?</label>
						<input type="text" placeholder="" name="favspot" required/>
						<label>Instagram name (optional)</label>
						<input type="text" placeholder="" name="instagram"/>
						<label>Facebook (optional)</label>
						<input type="text" placeholder="" name="facebook"/>
						<label>Please submit a short essay (200 word max) on why Life Is Better When You Surf®</label>
						 <textarea class="mb0" placeholder="200 words max" name="essay" id="essay" required/></textarea>
						 <div class="mb16">
						 <span class="after-amount">You have <span class="wordcount">0</span> words.</span></span>
						 </div>
						 <label>Please tell us how you contribute to your community, e.g. volunteering, fundraising, beach clean ups (150 word max)</label>
						 <textarea class="mb0" placeholder="150 words max" name="communityhelp" id="communityhelp" required/></textarea>
						 <div class="mb16">
						 <span class="after-amount">You have <span class="wordcount">0</span> words.</span></span>
						 </div>
						<label>Please tell what you will use $1000 scholarship money for ( e.g. school fees, school trip, equipment, computer ) and which surfboard you'd like to receive first (200 word max)</label>
						 <textarea class="mb0" placeholder="200 words max" name="moneyuse" id="moneyuse" required/></textarea>
						 <div class="mb16">
						 <span class="after-amount">You have <span class="wordcount">0</span> words.</span></span>
						 </div>
						 <label>Please submit a short video or photo essay (2 mins max) showing us why you deserve the 2020 Life is Better When Your Surf® Scholarship. Get creative and describe why you should receive the GSI Scholarship. Tell us about yourself, your family, a significant surfing memory, an example of contribution to your local community, your current surfboard, your local beach and (if possible) footage of you surfing.  Please upload video (2 minutes max) to <a class="labelLink"  href="https://account.box.com">Box</a>, <a class="labelLink" href="https://www.youtube.com">Youtube</a>, <a class="labelLink" href="https://vimeo.com">Vimeo</a> or preferred platform and paste the link here.</label>
						 <input type="text" placeholder="" name="video" required/>
						 <label>Please submit a letter of recommendation from a Teacher, Coach or mentor (max 200 words). The letter should contain Name and Contact details of your Teacher, Coach or Mentor:</label>
						 <input type="file" name="reference" >
						 <label>Please submit a clear, quality photo of yourself for your profile that you would be happy to be posted on the GSI website: *</label>
						  <input type="file"  name="selfie" >
						  
					  </div>	
					  <div class="col-md-10 col-sm-10 ">
			       		  <div class="heading-title">MAKE IT OFFICIAL<br><hr></div>
					   </div>
				      <div class="col-md-6 col-sm-10 ">
				      <label>Signature - First and Surname</label>
						<input type="text" placeholder="" name="appsignature" required/>
					  </div>	
					  <div class="col-md-10 col-sm-10 ">
						<label><input type="checkbox" name="appsignatureagree"required>&nbsp;&nbsp;By signing here, I confirm that the information on the Life is Better When You Surf&reg; Scholarship Application Form is true and correct. I agree to the Terms and Conditions of the Life Is Better When You Surf&reg; Scholarship Program*. I confirm that I am 15 years or under and I am currently enrolled in school. I pledge to use the scholarship funds from Global Surf Industries for an educational purpose. I give permission for my name and profile photo to be published online as a scholarship recipient.</label>
					  </div>
					   <div class="col-md-6 col-sm-10 ">
				      <label>Parent / Guardian Full Name</label>
						<input type="text" placeholder="" name="parentsignatureagree" required/>
					  </div>	
					  <div class="col-md-10 col-sm-10 ">
						<label><input type="checkbox" name="parentsignature"required>&nbsp;&nbsp;Parental Consent - I confirm that the details of this Global Surf Industries Life Is Better When You Surf® Scholarship Application are true and correct and consent to this application being submitted. I agree to the Terms and Conditions of the Life Is Better When You Surf® Scholarship Program*.</label>
					  </div>
					  <div class="col-md-6 col-sm-10 ">
					    <label>Date Signed:</label>
						<input type="text" placeholder="" name="sigdate"  id="sigdate" required/>
					  </div>
				       <div class="col-md-10 col-sm-10 ">
					    <a class="labelLink" href="#fins" onclick="toggle_visibility('list1');"><strong>*Terms and Conditions</strong></a>
							<div id="list1" class="alist" style="display:none;"><br>
							<p>NO PURCHASE NECESSARY!</p>
 							<p>Subject to verification of age, parental consent and execution of an Affidavit of Eligibility, the scholarship applicants who are selected to win the prize package (each a “Recipient”) will receive from Global Surf Industries the following:
							<ul class="bullets">
								<li>A first surfboard of their choice from the Global Surf Industries range.</li>
								<li>A cash payment of $1000 (in the local currency of the winner) to be used for Educational Expenses only.  Recipients will receive instructions from Global Surf Industries on how to receive the Scholarship funds.</li>
								<li>Upon receipt by Global Surf Industries of evidence in the form of receipts demonstrating that the cash payment funds have been spent on bona fide Educational Expenses, a second surfboard of their choice. </li>
								</ul></p>
								<p>Educational Expenses shall mean stationary, tuition, school fees, school excursion/field trip costs, school uniform costs, and computer hardware.
								Global Surf Industries shall in its sole discretion determine whether or not an expense qualifies as an Educational Expense hereunder. </p><p>Global Surf Industries shall choose its Recipient winners according to the following subjective criteria:  the contest winners shall be chosen based on their dedication to the GSI mantra "Life Is Better When You Surf&reg;" and have a personal story that fits that criteria well, as well as some other subjective criteria such as writing style, kids showing great promise, a great story, and even perceived need.  The decision of Global Surf Industries is and shall be inherently subjective, and is final and binding once made.</p><p>If a Recipient does not provide sufficient evidence that the cash payment has been used for Educational Expenses, Global Surf Industries reserves the right to cancel the scholarship and/or not provide the second surfboard to the Recipient.</p><p>Notwithstanding the foregoing, Global Surf Industries does not guarantee that the surfboard selected by the Recipient will be available or provided to the Recipient.  The Recipient acknowledges that Global Surf Industries may provide an alternate surfboard at its sole discretion.</p><p>
								SURFING IS A DANGEROUS AND POTENTIALLY DEADLY ACTIVITY.  Each prize surfboard should only be used with those having the requisite health, athletic ability and knowledge of the ocean to mitigate the inherent dangers of the sport.  Global Surf Industries and its affiliates, agents and employees shall not be responsible for any injury or loss sustained while using a prize surfboard. Only you are responsible for your actions in the ocean with a surfboard.  Consider the risk and your responsibility before you paddle out.</p><p>Each Recipient hereby grants to Global Surf Industries the right, but not the obligation, to publish the Recipient’s name, city and profile photograph on the Global Surf Industries website and social media platforms (eg Facebook, Instagram, twitter) for promotional purposes and does hereby provide Global Surf Industries and its affiliates and trading partners with a licence to use for any purpose any such personality rights and intellectual property of and provided by the Recipient in its application.</p><p>If Global Surf Industries forms the opinion that a Recipient is ineligible to be a scholarship applicant, Global Surf Industries may cancel the scholarship.  This promotion is not open to employees of Global Surf Industries and their relatives.  We shall not be responsible for lost, stolen, misdirected, delayed, destroyed or illegible entries or submissions or any failure of the Internet.  This contest is subject to these Official Rules and any other rules at any time promulgated by us.  Global Surf Industries reserves the right to amend these rules at any time in its sole discretion. </p><p>
								USA Applicants:   USA Applicants: Applications close September 29, 2019. Applicants must be citizens of the United States of America. This contest is VOID WHERE PROHIBITED or where permit, registration and/or bonding requirements are required. Recipients will be announced October 18, 2019. Recipients will receive the scholarship funds and first surfboard by November 1, 2019 and, if so eligible, the second surfboard by April 30, 2020.</p><p>Australia and New Zealand Applicants: Applications close February 29, 2020. Applicants must be citizens of Australia or New Zealand. Recipients will be announced March 20, 2020. Recipients will receive the scholarship funds and first surfboard by April 10, 2020 and second surfboard by October 31, 2020.</p>

								<p>Privacy Collection Statement<br>						
								1.	Your personal information is being collected by Global Surf Industries Pty Ltd ("GSI").<br>
								2.	Your personal information is collected by GSI for the purposes of selling you our products or providing you with our services. Your personal information may be used for business purposes including marketing and sales of our products and services and for recording statistical data for market analysis. If GSI is unable to collect your personal information, GSI may be unable to sell you products and/or provide you services.<br>
								3.	Your personal information may be disclosed to other GSI group companies and non-GSI group companies, such as service providers, either in Australia or in the following countries: Australia, New Zealand, United States of America.<br>
								4.	You consent to our disclosure of your personal information to third parties for the purposes of providing the scholarship funds and surfboards to you. <br>
								5.	Information about how you may access the personal information held about you and seek correction of such information is contained in our Privacy Policy.<br>
								6.	Our Privacy Policy contains information about how you may make a complaint about a breach of the Australian Privacy Principles and how GSI will deal with such a complaint.<br>
								Read our <?php echo '<a class="underlineLink" href="'.HOME.'gsi-privacy.php" target="new">'; ?> Privacy Policy in full</a>.</p>
								<p>Costa Rican Applicants: Applications close August 12, 2018. Applicants must be citizens of Costa Rica. This contest is VOID WHERE PROHIBITED or where permit, registration and/or bonding requirements are required. Recipients will receive the scholarship funds by August 31, 2018, first surfboard by February 28, 2019, and if so eligible, the second surfboard by August 15, 2019.</p>
							</div>	
					</div>	
					<div class="col-md-3 col-sm-10 mt24 ">	
						<div class="g-recaptcha" data-sitekey="6LcUjQsTAAAAAO7wZYdEYvQ7hpnZu1NNpD-eBPMy"></div><br><br>
						<input class="hollow" type="submit" value="Submit Button" />
					</div></form>
				</div>
				<!--end of row-->
				</div>
				<!--end of container-->
				
				
				
				
				
				
				
				
				
				
				
				
				
				
                      
                      
                      
                     
                      
                      
                      
            </section>
            
            
             <?php include HOME . 'includes/footer.inc'; ?>
            
        </div>
        
        <!--date picker-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
  	$("#dob").datepicker({   maxDate: new Date(2008, 11, 31)});
	$("#sigdate").datepicker({ minDate: 0});
	
  } );
  </script>
<!--end date picker-->
   <!-- word counter -->

 <script type="text/javascript">
   $(function(){
    $('textarea').on('keyup', function(){
        var wordsLength = $(this).val().trim().split(' ').length
        $(this).next().find('.wordcount').html(wordsLength);
    });
});
	 </script> 
  <!-- t & c open/close -->
	<script type="text/javascript">

	function toggle_visibility(id) {
	    var list = document.getElementsByClassName("alist");
	    for (var i = 0; i < list.length; i++) {
	        list[i].style.display = 'none';
	    }
	    var e = document.getElementById(id);
	    if(e.style.display == 'block') {
	        e.style.display = 'hide';
	    } else {
	        e.style.display = 'block';
	    }
	}

	</script>
 
 
<!-- word counter -->

 <script type="text/javascript">
   $(function(){
    $('textarea').on('keyup', function(){
        var wordsLength = $(this).val().trim().split(' ').length
        $(this).next().find('.wordcount').html(wordsLength);
    });
});
	 </script> 
        
        
        
	<script src='https://www.google.com/recaptcha/api.js'></script>
       	
        
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/smooth-scroll.min.js"></script>
        <script src="../js/parallax.js"></script>
        <script src="../js/scripts.js"></script>
    </body>
</html>