 			<section class="pt16 pb8 pt-xs-10 pb-xs-10 bg-dark">
                <div class="container">
                    <div class="row">
                       <div class="col-md-12 col-sm-6 text-center pt8">
                    	   <h4 class="uppercase">LIFE IS BETTER WHEN YOU SURF<sup>®</sup></h4>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            
          

	
	
             <div class="modal-strip bg-ltblu mb8 mb-xs-40" data-cookie="dismissed-cookie-info-notification">      	
	<div class="container">
		<div class="row">
			<div class="col-sm-12  overflow-hidden">
				<p class="mb0 pull-left">We use cookies to offer you a better browsing experience, to analyze traffic, for targetted advertisements and to allow Live Chat.<br>For more information please check out our <?php echo "<a href='".HOME."gsi-privacy.php'>Privacy statement</a>"; ?>.</p>
			</div>
		</div>
	</div>
				 <a class="btn btn-sm close-modal">OK, I agree</a>
</div>
            
            
            <!-- <div class="container">
             	<div class="row">
            		<div class="foundry_modal text-center" data-time-delay="2000" data-cookie="dismissed-cookie-info-modal">
						  
							
							<h2 class="uppercase pt40 pt-xs-0">HOW WE USE COOKIES</h2>  
								<hr>
								<p>
									We use cookies to offer you a better browsing experience, to analyze traffic, for targetted advertisements and to allow Live Chat. For more information please check out our <?php //echo "<a href='".HOME."gsi-privacy.php'>Privacy statement</a>"; ?>.
								</p>
								<p>
									If you continue to use this site, you consent to our use of cookies.
								</p>
							
						</div>
				 </div>
			</div> -->
            <footer class="footer-1 bg-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 mb-xs-40">
							<?php echo "<a href='".HOME."index.php'><img src='" . IMAGES_DIR ."logo-gsi-home.png' class='logo logo-dark' alt='Global Surf Industries'></a>"; ?>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="widget">
                                <h6 class="title">BRANDS</h6>
                                <hr>
                                <ul class="footerLink">
                                        <?php 
									
									 if ($userCountry == 'NZ'){
										 
										 echo "
										 <li><a href='${url_frag_2}/collections/7s-surfboards'>7S</a></li>
                                        <li><a href='${url_frag_2}/collections/adventure-paddleboarding-stand-up-paddleboards'>Adventure Paddleboarding</a></li>
                                        <li><a href='${url_frag_2}/collections/creative-army-surfboards'>Creative Army</a></li>
                                        <li><a href='${url_frag_2}/collections/gnaraloo-soft-surfboards'>Gnaraloo</a></li>
                                        <li><a href='${url_frag_2}/collections/modern-surfboards'>Modern Surfboards</a></li>
                                        <li><a href='${url_frag_2}/collections/salt-gypsy-surfboards'>Salt Gypsy Surfboards</a></li>
										<li><a href='${url_frag_2}/collections/surfica-surfboard-and-sup-accessories'>Surfica Assessories</a></li>
                                        <li><a href='${url_frag_2}/collections/three-palms-board-co-surfboards'>Three Palms Board Co</a></li>
                                        <li><a href='${url_frag_2}/collections/tom-carroll-paddle-surf'>Tom Carroll Paddle Surf</a></li>
										 <li><a href='${url_frag_2}/collections/trident-sup-paddles'>Trident SUP Paddles</a></li>";
										 
                                       
										 
										 
									 }
									else if ($userCountry == 'AU'){
										
										echo "<li><a href='${url_frag_2}/collections/7s-surfboards'>7S</a></li>
                                        <li><a href='${url_frag_2}/collections/adventure-paddleboarding-stand-up-paddleboards'>Adventure Paddleboarding</a></li>
                                        <li><a href='${url_frag_2}/collections/creative-army-surfboards'>Creative Army</a></li>
                                        <li><a href='${url_frag_2}/collections/gnaraloo-soft-surfboards'>Gnaraloo</a></li>
                                        <li><a href='${url_frag_2}/collections/modern-surfboards'>Modern Surfboards</a></li>
                                        <li><a href='${url_frag_2}/collections/salt-gypsy-surfboards'>Salt Gypsy Surfboards</a></li>
										<li><a href='${url_frag_2}/collections/salt-gypsy-sup'>Salt Gypsy SUP</a></li>
										<li><a href='${url_frag_2}/collections/surfica-surfboard-and-sup-accessories'>Surfica Assessories</a></li>
                                        <li><a href='${url_frag_2}/collections/three-palms-board-co-surfboards'>Three Palms Board Co Surf</a></li>
										<li><a href='${url_frag_2}/collections/three-palms-board-co-stand-up-paddleboard'>Three Palms Board Co SUP</a></li>
									    <li><a href='${url_frag_2}/collections/tom-carroll-paddle-surf'>Tom Carroll Paddle Surf</a></li>
									    <li><a href='${url_frag_2}/collections/trident-sup-paddles'>Trident SUP Paddles</a></li>";
										
									}
									
									else
									{
										echo "<li><a href='${url_frag}/brand/7s/'>7S</a></li>
											<li><a href='${url_frag}/brand/adventure-paddleboarding/'>Adventure Paddleboarding</a></li>
											<li><a href='${url_frag}/brand/chilli-surfboards/'>Chilli Surfboards</a></li>
											<li><a href='${url_frag}/brand/creative-army/'>Creative Army</a></li>
											<li><a href='${url_frag}/brand/gnaraloo/'>Gnaraloo</a></li>";
											if (($userCountry !== 'NZ') &&  ($userCountry !== 'AU')){
											echo "<li><a href='".HOME."/meyerhoffer'>Meyerhoffer</a></li>";
											}
											echo "<li><a href='${url_frag}/brand/modern/'>Modern Surfboards</a></li>
											<li><a href='${url_frag}/brands/salt-gypsy-surfboards/'>Salt Gypsy Surfboards</a></li>
											<li><a href='${url_frag}/brands/salt-gypsy-sup/'>Salt Gypsy SUP</a></li>
										   <li><a href='${url_frag}/brands/surfica-surf-accessories/'>Surfica Surf Accessories</a></li>
											<li><a href='${url_frag}/brands/three-palms-board-co-sup/'>Three Palms Board Co SUP</a></li>
											<li><a href='${url_frag}/brands/three-palms-board-co/'>Three Palms Board Co SURF</a></li>
											<li><a href='${url_frag}/brand/tom-carroll-paddle-surf/'>Tom Carroll Paddle Surf</a></li>
											<li><a href='${url_frag}/brand/trident-paddles/'>Trident Paddles</a></li>
											<li><a href='${url_frag}/brand/seaglass-project/'>The Seaglass Project</a></li>"; 
									
									}?>
                                   
                                    
                                </ul>
                            </div>
                            <!--end of widget-->
                        </div>
                        <div class="col-md-2 col-sm-6">
                           <div class="widget mb16">
                                <h6 class="title">CONTACT US</h6>
                                <hr>
                                <ul class="footerLink">
                                        <?php 
											echo "<li><a href='https://au.surfindustries.com/pages/contacts'>AUSTRALIAN CONTACTS</a></li>"; 
											echo "<li><a href='https://nz.surfindustries.com/pages/contacts'>NEW ZEALAND CONTACTS</a></li>"; 
											echo "<li><a href='".HOME."contacts/contacts-usa.php'>US CONTACTS</a></li>"; 
											echo "<li><a href='".HOME."contacts/contacts-worldwide.php'>WORLDWIDE CONTACTS</a></li>"; 
										?>
                                </ul>
                            </div>
                             <!--end of widget-->
                            <div class="widget">
                                <h6 class="title">FIND A DEALER</h6>
                                <hr>
                                <ul class="footerLink">
									<?php
									if (($userCountry == 'NZ') || ($userCountry == 'AU')){
										echo "<li><a href='${url_frag_2}/pages/store-locator'>Find your local Dealer</a></li>";
									}
								
									else {
										echo "<li><a href='https://shop.surfindustries.com/find-a-dealer/'>Find your local Dealer</a></li>";
									}
									?>
                        		</ul>
                            </div>
                            <!--end of widget-->
                        </div>
                        <div class="col-md-2 col-sm-6">
                        <div class="widget  mb16">
                                <h6 class="title">ABOUT</h6>
                                <hr>
                                	<ul class="footerLink">
                                     <?php 
										echo "<li><a href='".HOME."gsi-community.php'>Community</a></li>";
										echo "<li><a href='".HOME."life-is-better-when-you-surf.php'>Company Mantra</a></li>"; 
										echo "<li><a href='".HOME."gsi-company-profile.php'>Company Profile</a></li>";
										echo "<li><a href='".HOME."gsi-factory-code-of-conduct.php'>Factory Code of Conduct</a></li>"; 
										if ($userCountry == 'AU'){
											echo "	<li><a href='".HOME."gsi-outlet-store.php'>Factory Outlet</a></li>	";
										}
										echo "<li><a href='".HOME."gsi-memberships.php'>Memberships</a></li>"; 
									?>
                            	</ul>    
                            </div>
                            <!--end of widget-->
                 		</div>
                        <div class="col-md-2 col-sm-6">
                            <div class="widget">
                                <h6 class="title">INFORMATION</h6>
                                <hr>
                                <ul class="footerLink">
                                
                                     <?php 
										if (($userCountry == 'NZ') || ($userCountry == 'AU')){
											echo "<li><a href='${url_frag_2}/pages/frequently-asked-questions'>FAQs</a></li>"; 
											echo "<li><a href='https://www.surfindustries.com/GSIpayments/'>Make A Payment</a></li>"; 
											echo "<li><a href='${url_frag_2}/pages/wishlist'>My Wishlist</a></li>"; 
											echo "<li><a href='${url_frag_2}/policies/privacy-policy'>Privacy Policy</a></li>"; 
											echo "<li><a href='${url_frag_2}//pages/product-registration'>Register Your product</a></li>";
											echo "<li><a href='${url_frag_2}/policies/refund-policy'>Returns</a></li>"; 
											echo "<li><a href='${url_frag_2}/policies/shipping-policy'>Shipping</a></li>"; 
											echo "<li><a href='${url_frag_2}/pages/surfboard-volume-calculator'>Volume Calculator</a></li>";
											echo "<li><a href='${url_frag_2}//policies/terms-of-service'>Terms & Conditions</a></li>"; 
										}
										else {
											echo "<li><a href='".HOME."gsi-faq.php'>FAQs</a></li>"; 
											echo "<li><a href='".HOME."GSIpayments'>Make A Payment</a></li>"; 
											echo "<li><a href='".HOME."gsi-privacy.php'>Privacy Policy</a></li>"; 
											echo "<li><a href='".HOME."gsi-product-registration.php'>Register Your product</a></li>";
											echo "<li><a href='".HOME."gsi-shipping-returns-policy.php'>Shipping & Returns</a></li>"; 
											echo "<li><a href='".HOME."volume-calculator/surfboard-volume-calculator.php'>Volume Calculator</a></li>";
											echo "<li><a href='".HOME."gsi-terms-and-conditions.php'>Terms & Conditions</a></li>"; 
										}
									?>
                                 
                                 
                                     <?php 
									
									if (($userCountry !== 'NZ') &&  ($userCountry !== 'AU')){
									
									echo "<li><a href= '${url_frag}/affiliate-area/'>Become an Affiliate</a></li>";
									 }?>
                              
                                
								</ul>  
                            </div>
                            <!--end of widget-->
                        </div>
                       
						<?php
                        
                        echo "
						<div class='col-md-2 col-sm-6'>
                            <div class='widget'>
                                <h6 class='title'>LOGIN</h6>
                                <hr>
                                <ul class='footerLink'>";
									if (($userCountry !== 'NZ') &&  ($userCountry !== 'AU')){
                                		echo "<li><a href= '${url_frag}/affiliate-area/'>Affiliates</a></li>";
									}
                                	echo "<li><a href='https://system.na2.netsuite.com/app/login/secure/privatelogin.nl?c=3743011'>Dealer Portal</a></li>
                                 	<li><a href='https://system.na2.netsuite.com/app/login/secure/privatelogin.nl?c=3743011'>Distributor Portal</a></li>
                                 	<li><a href='https://www.surfindustries.com/media/media-login.php'>Media</a></li>";
									
									if (($userCountry == 'NZ') || ($userCountry == 'AU')){
										echo "<li><a href='${url_frag_2}/account/login'>My Account</a></li>"; 
									}
									else {
										echo "<li><a href= '${url_frag}/my-account/'>Online Customer</a></li>";
									}
								 	echo "<li><a href='".HOME."TM-portal/tm-portal-login.php'>TM Portal</a></li>
								</ul>";
                                ?>
                             	<?php 
									if (($userCountry == 'NZ') || ($userCountry == 'AU')){
										echo "<ul><li class='pt16 pb16'><a class='btn btn-sm' href='${url_frag_2}/pages/subscribe-to-our-newsletter'>Subscribe</a></li></ul>"; 
									}
									else{
										echo "<ul><li class='pt16 pb16'><a class='btn btn-sm' href='".HOME."newsletter/newsletterSubs.php'>Subscribe</a></li></ul>"; 
									}
								?>
						</div>
                         <!--end of widget-->
                   </div>
               </div>
                    <!--end of row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <span class="sub">&copy; Copyright 2020 - Global Surf Industries</span>
                        </div>
                        <div class="col-sm-6 text-right">
                            <ul class="list-inline social-list">
                                <li>
                                    <a href="https://www.facebook.com/GlobalSurfIndustries">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/surfindustries/">
                                        <i class="ti-instagram"></i>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end of container-->
                <a class="btn btn-sm fade-half back-to-top inner-link" href="#top">Top</a>
 
           
                 
                       
             
            
                 
                      
             </footer>
            
           
          
         
        
       