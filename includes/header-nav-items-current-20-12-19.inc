<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-ZNCQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 <div class="nav-container">
            <a id="top"></a>
            <nav class="nav-centered">
				 <div class="text-center" style="background-color: #e21111; color:#ffffff;">
					<h4 class="pt8 pb8" style="color:#ffffff;font-size:1em;letter-spacing: 2px;font-weight: 400;"><strong>PRE CHRISTMAS DELIVERY INFORMATION </strong>
						<?php echo "<a style='color:#ffffff;text-decoration:underline;' href='".HOME."christmas-delivery-information.php'>HERE</a>"; ?></h4>
					</div> 
                <div class="nav-utility hidden-xs">
                    <div class="module left">
                        <i class="ti-email">&nbsp;</i>
						<span class="sub"><a class="navUtilityLink" href="mailto:info@surfindustries.com">info@surfindustries.com</a></span>
                    </div>
                    <?php
                    		
					if ($userCountry == 'AU'){
						echo '
						<div class="moduleTop left">
                        	<i class="ti-mobile">&nbsp;</i>
                        	<span class="sub">AUS 1300 857 791</span>
						</div>
						<div class="moduleTop left">
							<i class="ti-mobile">&nbsp;</i>
							<span class="sub">NZ 09 889 6051 </span>
						</div>
						<div class="moduleTop left">
							<i class="ti-mobile">&nbsp;</i>
							<span class="sub">US 855 474 6821</span>
						</div>';
					}
					else if ($userCountry == 'NZ'){
						echo '
						<div class="moduleTop left">
							<i class="ti-mobile">&nbsp;</i>
							<span class="sub">NZ 09 889 6051 </span>
						</div>
						<div class="moduleTop left">
                        	<i class="ti-mobile">&nbsp;</i>
                        	<span class="sub">AUS 1300 857 791</span>
						</div>
						<div class="moduleTop left">
							<i class="ti-mobile">&nbsp;</i>
							<span class="sub">US 855 474 6821</span>
						</div>';
					}
					else {
						echo '
						<div class="moduleTop left">
							<i class="ti-mobile">&nbsp;</i>
							<span class="sub">US 855 474 6821</span>
						</div>
						<div class="moduleTop left">
                        	<i class="ti-mobile">&nbsp;</i>
                        	<span class="sub">AUS 1300 857 791</span>
						</div>
						<div class="moduleTop left">
							<i class="ti-mobile">&nbsp;</i>
							<span class="sub">NZ 09 889 6051 </span>
						</div>';
						
					}
					
					?>
                    
                    
                    
                    
                    <div class="module right">
                        <?php echo "<span class='sub'><a class='navUtilityLink' style='letter-spacing: 0.0625em;' href='".HOME."gsi-shipping-returns-policy.php#shippingfees'>FREE SHIPPING ON ALL WEB ORDERS*</a>&nbsp;&nbsp;</span>"; ?>
                        
                        <?php //echo "<a class='btn btn-sm btn-filled' href= '${url_frag}'>Buy Online</a>"; ?>
                        <?php echo "<a class='btn btn-sm  hidden-xs hidden-sm hidden-md' href='".HOME."newsletter/newsletterSubs.php'>Subscribe</a>"; ?>
                        
                    </div>
                </div>
                <div class="text-center">
                    <?php echo "<a href='".HOME."index.php'><img src='" . IMAGES_DIR ."logo-gsi-home.png' class='logo logo-dark' alt='Global Surf Industries'></a>"; ?>
                </div>
                <div class="nav-bar text-center">
                    <div class="module widget-handle mobile-toggle right visible-md visible-sm visible-xs">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="module-group text-left">
                        <div class="module left">
                            <ul class="menu">
                               	<li class="saleLabel">
                               	<?php echo "<a class='saleLabel' href='${url_frag}/on-sale/'>SALE</a>"; ?>
								</li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        SURFBOARDS
                                    </a>
                                    <ul class="mega-menu">
                                        <li>
                                            <ul>
                                                <li>
                                                <?php echo "<a class='titleHeading' href='${url_frag}/surfboards-type/'>TYPE</a>"; ?>
											    </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surfboard-type/beginner/'>Beginner</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surfboard-type/finless/'>Finless</a>"; ?>
                                                </li>
                                                <li>
                                                 <?php echo "<a href='${url_frag}/surfboard-type/fish/'>Fish</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surfboard-type/longboards/'>Longboards</a>"; ?>
                                                </li>
                                                 <li>
                                                    <?php echo "<a href='${url_frag}/surfboard-type/midlength-surfboards/'>Mid Lengths</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surfboard-type/shortboards/'>Shortboards</a>"; ?>
                                                </li>
												 <li>
                                                    <?php echo "<a href='${url_frag}/surfboard-type/soft-surfboards/'>Soft Surfboards</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surfboard-type/tri-quads/'>Tri Quads</a>"; ?>
                                                </li>
                                                <br>
                                                <br>
                                                <li>
													 <?php echo "<a class='smllTitle'  href='".HOME."volume-calculator/surfboard-volume-calculator.php'>VOLUME CALCULATOR</a>"; ?>
                                                </li>
                                                <li>
                                                <?php echo "<a class='smllTitle' href='".HOME."technology/surfboard-technology.php'>SURFBOARD CONSTRUCTION</a>"; ?>
												</li>
                                                 <li>
                                                 	 <?php echo "<a class='smllTitle' href='".HOME."videos/product-review-videos.php'>PRODUCT REVIEW VIDEOS</a>"; ?>
                                                </li>
												<li>
                                                 	<?php echo "<a class='saleLabel' href='${url_frag}/on-sale/'>ONLINE SALE</a>"; ?>
                                                </li>
                                                
                                                
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                               
													<?php echo "<a class='titleHeading' href='${url_frag}/brands/7s-surfboards/'>7S</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/shortboards/7s-double-down-im-shortboard/'>Double Down - IM</a>"; ?>
                                                    
                                                </li>
												<li><?php echo "<a href='${url_frag}/surf/fish-shaped-surfboards/7s-hook-twin-fin-surfboard//'>Hook - IM</a>"; ?>
												<li>
                                                    <?php echo "<a href='${url_frag}/surf/fish/7s-jetstream-im/'>Jetstream - IM</a>"; ?>
                                                </li>
                                                
                                              
                                               
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/fish/7s-super-fish-4-im/'>Superfish 4 - IM</a>"; ?>
                                                </li>
                                                <br>
												
												<li>
                                               
													<?php echo "<a class='titleHeading' href='${url_frag}/brands/chilli-surfboards/'>Chilli Surfboards</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/shortboards/chilli-hot-knife-tt/'>Hot Knife - TT</a>"; ?>
                                                    
                                                </li>
												<li><?php echo "<a href='${url_frag}/surf/midlength-surfboards/chilli-mid-strength-tt/'>Mid Strength - TT</a>"; ?>
												<li>
                                                    <?php echo "<a href='${url_frag}/surf/shortboards/chilli-rarest-bird-tt/'>Rarest Bird - TT</a>"; ?>
                                                </li>
												<br>
												
                                                <li>
													<?php echo "<a class='titleHeading' href='${url_frag}/brands/creative-army/'>CREATIVE ARMY</a>"; ?>
                                                </li>
												<?php echo "<li><a href='${url_frag}/surf/longboards/creative-army-five-sugars-pu/'>Five Sugars - PU</a></li>"; ?>
												
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/creative-army-huevo-mid-length-pu-surfboard/'>Huevo - PU</a>"; ?>
                                                </li>
												<?php echo "<li><a href='${url_frag}/surf/midlength-surfboards/creative-army-huevo-slx/'>Huevo - SLX</a> <span class='newLabel'>New!</span></li>";?>
                                                
												
												<?php echo "<li><a href='${url_frag}/surf/longboards/creative-army-jive-slx//'>Jive+ - SLX</a> <span class='newLabel'>New!</span></li>"; ?>
										        <br>
                                                <li>
													<?php echo "<a class='titleHeading' href='${url_frag}/brands/gnaraloo-surfboards/'>GNARALOO</a>"; ?>
                                                </li>
												
												<?php if (($userCountry == 'NZ') || ($userCountry == 'AU'))  {
												 echo "<li><a href='${url_frag}/surf/beginner-surfboards/gnaraloo-beach-cruiser-softboard/'>Beach Cruiser - soft</a> <span class='newLabel'>New!</span></li>";
												}
											   else
											   {
                                                 
                                                    echo "<li><a href='${url_frag}/surf/beginner/gnaraloo-soft-surfboard/'>Beach Cruiser - soft</a></li>";      
											   }
												 ?>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/beginner/gnaraloo-dune-buggy-softboard/'>Dune Buggy - soft</a>";  if (($userCountry == 'NZ') || ($userCountry == 'AU'))  { echo "  <span class='newLabel'>New!</span>";}  ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/beginner/gnaraloo-fatty-surfboard/'>Fatty - soft</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/fish/gnaraloo-flounder-pounder-softboard/'>Flounder Pounder - soft</a>"; if (($userCountry == 'NZ') || ($userCountry == 'AU'))  { echo "  <span class='newLabel'>New!</span>";}  ?>
                                                </li>
                                            </ul>
                                        </li>
	                                    <li>
                                            <ul>
		                                       <li>
													<?php	echo "<a class='titleHeading' href='${url_frag}/brands/meyerhoffer-surfboards/'>MEYERHOFFER</a>"; ?>
											    </li>
                                                <li>
                                                  	<?php  echo "<a href='${url_frag}/surf/shortboards/surf/midlength-surfboards/meyerhoffer-slip-in-cv-surfboard/'>Slip In - CV</a>"; ?>
									            </li>
                                                <li>
                                                  	<?php echo " <a href='${url_frag}/surf/shortboards/meyerhoffer-supernormal-cv-surfboard/'>Supernormal - CV</a>"; ?>
									            </li>
                                                <li>
                                                  	<?php  echo "<a href='${url_frag}/surf/longboards/meyerhoffer-xyz-cv-longboard/'>XYZ - CV</a>"; ?>
									            </li>
												 <br>
	                                           <li>
													<?php echo "<a class='titleHeading' href='${url_frag}/brands/modern-surfboards/'>MODERN</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/modern-blackbird-longboard/'>Blackbird - PU</a>"; ?>
                                                </li>
												
												<li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/modern-blackbird-xb/'>Blackbird - XB</a>"; ?>
									            </li>
                                                <?php echo "<li><a href='${url_frag}/surf/longboards/modern-double-wide-slx/'>Double Wide - SLX</a> <span class='newLabel'>New!</span></li>";?>
                                             	<li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/modern-double-wide-xb/'>Double Wide - XB</a>"; ?>
									            </li>
												<li>
												 <?php echo "<a href='${url_frag}/surf/midlength-surfboards/modern-falcon-pu/'>Falcon - PU</a> <span class='newLabel'>New!</span>"; ?>
												</li>	
												<li>
												 <?php echo "<a href='${url_frag}/surf/midlength-surfboards/modern-falcon-xb/'>Falcon - XB</a> <span class='newLabel'>New!</span>"; ?>
												</li>	
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/shortboards/modern-highline-pu-shortboard/'>Highline - PU</a>"; ?>
                                                </li>
												<li>
                                                    <?php echo "<a href='${url_frag}/surf/beginner-surfboards/modern-highline-xb/'>Highline - XB</a>"; ?>
								                </li>
												
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/mid-length-surfboards/modern-love-child-poly-shortboard/'>Love Child - PU</a>"; ?>
                                                </li>
												 <li>
                                                    <?php echo "<a href='${url_frag}/surf/midlength-surfboards/modern-love-child-xb/ '>Love Child - XB</a>"; ?>
									            </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/modern-retro-longboard/'>Retro - PU</a>"; ?>
												
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/modern-boss-pu-longboard/'>The Boss - PU</a>"; ?>
                                                </li>
												 <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/modern-the-boss-xb/'>The Boss - XB</a>"; ?>
									            </li>
						                    </ul>
                                        </li>
                                        <li>
                                            <ul>
												<li>
													<?php echo "<a class='titleHeading' href='${url_frag}/salt-gypsy-surfboards/'>Salt Gypsy Surfboards</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/salt-gypsy-dusty-pu-longboard/'>Dusty - PU</a>"; ?>
													<span class="newLabel">New!</span>
                                                </li>
												<li>
                                                    <?php echo "<a href='${url_frag}/surf/midlength-surfboards/salt-gypsy-mid-tide-pu-surfboard/'>Mid Tide - PU</a>"; ?>
													<span class="newLabel">New!</span>
                                                </li>
												<li>
                                                    <?php echo "<a href='${url_frag}/surf/fish-shaped-surfboards/salt-gypsy-shorebird-twin-fin-surfboard/'>Shorebird - PU</a>"; ?>
													<span class="newLabel">New!</span>
                                                </li>
                                                <br>
                                               <li>
													<?php echo "<a class='titleHeading' href='${url_frag}/brands/seaglass-project-surfboards/'>The Seaglass Project</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/finless/seaglass-project-albacore-finless-surfboard/'>Albacore - soft</a>"; ?>
                                                </li>
                                                <br>
                                                <li>
                                                    <?php echo "<a class='titleHeading' href='${url_frag}/brands/three-palms-board-co/'>Three Palms Board Co.</a>"; ?>
                                                </li>
												<li>
													<?php echo "<a href='${url_frag}/surf/midlength-surfboards/three-palms-board-co-due-back-blackbird-mx/'>Due Back Blackbird - MX</a>"; ?>
												</li>
												<li>
													<?php echo "<a href='${url_frag}/surf/midlength-surfboards/three-palms-board-co-due-back-highline-mx/'>Due Back Highline- MX</a>"; ?>
												</li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/three-palms-board-co-soft-surfboard/'>Surfboard - soft</a>"; ?>
                                                </li>
                                                <br>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        STAND UP PADDLE
                                    </a>
                                    <ul class="mega-menu">
                                        <li>
                                            <ul>
                                                <li>
                                                    <?php echo "<a class='titleHeading' href='${url_frag}/sup-type/'>TYPE</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/sup-type/all-rounder/'>ALL ROUNDER</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/sup-type/flatwater-sup/'>FLATWATER</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/sup-type/inflatable-sup/'>INFLATABLE</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/sup-type/surf-sup/'>SURF</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/sup-type/yoga-sup/'>YOGA</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/brands/trident-sup-paddles/'>SUP PADDLES</a>"; ?>
                                                </li>
                                                <br>
                                                <br>
                                                <li>
													<?php echo "<a class='smllTitle' href='".HOME."technology/sup-technology.php'>SUP CONSTRUCTION</a>"; ?>
                                                </li>
												 <li>
                                                 	 <?php echo "<a class='smllTitle' href='".HOME."videos/product-review-videos.php'>PRODUCT REVIEW VIDEOS</a>"; ?>
                                                </li>
                                                <li>
													<?php echo "<a class='saleLabel' href='${url_frag}/on-sale/'>ONLINE SALE</a>"; ?>
                                                </li>
                                                <!-- <li>
													<span class="title">VOLUME CALCULATOR</span>
                                                </li> -->
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <?php echo "<a class='titleHeading' href='${url_frag}/brands/adventure-paddleboarding/'>ADVENTURE PADDLEBOARDING</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/all-rounder/adventure-paddleboarding-all-rounder-cx/'>ALL ROUNDER - CX</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/all-rounder/adventure-paddleboarding-all-rounder-mx/'>ALL ROUNDER - MX</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/flatwater/adventure-paddleboarding-explorer-2-cx/'>EXPLORE - CX</a>"; ?>
                                                </li>
                                                 
												 <?php
												 if (($userCountry == 'AU')|| ($userCountry == 'NZ')){
												echo " <li> <a href='${url_frag}/surf/stand-up-paddle-boards/stand-up-paddle-boards-all-rounder/adventure-paddleboarding-fifty-fifty-mx/'>FIFTY FIFTY - MX</a></li>";
												}
												
												if ($userCountry != 'AU') {
													
													echo "<li><a href='${url_frag}/surf/stand-up-paddle-board/all-rounder/adventure-paddleboarding-fifty-fifty-mx-sup/'>FIFTY FIFTY - X1</a></li>";
												}
												 ?>
							                      <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-boards/stand-up-paddle-boards-inflatable/adventure-paddleboarding-inflatable/'>10'2 INFLATABLE SUP</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-boards/stand-up-paddle-boards-inflatable/12-adventure-paddleboarding-inflatable/'>12'0 INFLATABLE SUP</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/surf-sup/adventure-paddleboarding-seventy-thirty-cx/'>SEVENTY THIRTY - CX</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-boards/surf-sup/adventure-paddleboarding-sixty-forty-mx/'>SIXTY FORTY - MX</a>"; ?>
												</li>
                                            </ul>
										</li>
                                         <li>
                                             <ul>
												  <li>
                                                    <?php echo "<a class='titleHeading ' href='${url_frag}/brands/salt-gypsy-sup/'>SALT GYPSY SUP</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-boards/all-rounder/salt-gypsy-paradise-punch-mx/'>PARADISE PUNCH - MX</a> <span class='newLabel'>New!</span>"; ?>
                                                </li>
                                                <br>
                                                <li>
                                                    <?php echo "<a class='titleHeading ' href='${url_frag}/brands/three-palms-board-co-sup/'>THREE PALMS BOARD CO.</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/all-rounder/three-palms-soft-sup/'>SUP - soft</a>"; ?>
                                                </li>
                                                <br>
                                                <li>
                                                    <?php echo "<a class='titleHeading ' href='${url_frag}/brands/tom-carroll-paddle-surf/'>TOM CARROLL PADDLE SURF</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/surf/tom-carroll-paddle-surf-long-grain-v2-cx-sup/'>LONG GRAIN V2 - CX</a>"; ?>
											    </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/surf/tom-carroll-paddle-surf-loose-leaf-v2-cx-sup/'>LOOSE LEAF V2 - CX</a>"; ?>
											    </li>
												 
												 <?php
												 if (($userCountry == 'AU')|| ($userCountry == 'NZ')){
												echo " <li> <a href='${url_frag}/surf/stand-up-paddle-boards/all-rounder/tom-carroll-outer-reef-mx/'>OUTER REEF - MX</a></li>";
												}
												 ?>
												 <?php
												 if (($userCountry == 'NZ')){
												echo " <li> <a href='${url_frag}/surf/stand-up-paddle-board/all-rounder/tom-carroll-outer-reef-x2-sup/'>OUTER REEF - X2</a></li>";
												}
												 ?>
												 
												 
												 
                                               
                                                
											</ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        PADDLES
                                    </a>
                                    <ul class="mega-menu how-to-mega-menu">
                                        <li class="how-mega-menu">
                                            <ul>
                                                <li>
                                                    <?php echo "<a class='titleHeading' href='${url_frag}/brands/trident-sup-paddles/'>TRIDENT PADDLES</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board-paddles/trident-large-carbon-fixed-paddle/'>Large Fixed Carbon</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board-paddles/trident-669cr-ll-adj-paddle/'>Large Carbon Lever Lock</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board-paddles/trident-588cr-ll-adj-paddle/'>Medium Carbon Lever Lock</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board-paddles/trident-t669fg-adjustable-paddle-leverlock/'>Large FG Lever Lock</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board-paddles/trident-t588a-adjustable-paddle-lever-lock/'>Medium FG Lever Lock</a>"; ?>
                                                </li>
                                                <li>
                                                   
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board-paddles/trident-t6al-adjustable-paddle-lever-lock/'>T6 Alloy lever Lock</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board-paddles/trident-tga-adjustable-paddle-lever-lock/'>T6 Fiberglass Lever Lock</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board-paddles/trident-t6fg-ll3p-sup-paddle/'>T6 Fiberglass Lever Lock 3 Piece</a>"; ?>
                                                </li>
                                               
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        ACCESSORIES
                                    </a>
                                    <ul class="mega-menu paddle-acc-mega-menu">
                                        <li class="paddle-ac-mega-menu">
                                            <ul>
                                                <li>
                                                    <?php echo "<a class='titleHeading' href='${url_frag}/brands/surfica-surf-accessories/'>SURFICA ACCESSORIES</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/accessories/accessories-surfica-board-bags/surfica-surf-board-bag/'>Surfboard Bags</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/accessories/accessories-surfica-board-bags/surfica-longboard-bag/'>Longboard Bags</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/accessories/accessories-surfica-board-bags/surfica-all-rounder-sup-board-bag/'>All Rounder SUP Bags</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/accessories/accessories-surfica-board-bags/surfica-flatwater-sup-bag/'>Flat Water SUP Bags</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/accessories/accessories-leashes/surfica-leashes/'>Surf Leashes</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/accessories/accessories-leashes/surfica-sup-leashes/'>SUP Leashes</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/accessories/accessories-pads/surfica-5-piece-tail-pad/'>Tail Pad</a>"; ?>
                                                </li>
											</ul> 
										</li>
                                        <li>
                                              <ul>
                                                <li>
                                                  
                                                   
                                                    <?php echo "<a class='titleHeading' href='${url_frag}/surf-accessories/hang-up-systems/'>HANG UP SYSTEMS</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/accessories/accessories-hang-ups/hang-up-system-fcs/'>FCS Hang Up</a>"; ?>
                                                </li>
												  <?php
												 if ($userCountry != 'NZ'){
												echo " <li> <a href='${url_frag}/surf/accessories/accessories-hang-ups/hang-up-system-fcs-ll//'>FCS II Hang Up</a></li>";
												}
												 ?>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/accessories/accessories-hang-ups/hang-up-system-future-fins/'>Futures Fins Hang Up</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/accessories/accessories-hang-ups/hang-up-system-longboard-box/'>Longboard Box</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/accessories/accessories-hang-ups/hang-up-system-sup/'>SUP Hang UP</a>"; ?>
                                                </li>
                                                <br>
                                                 <li>
                                                    <?php echo "<a class='titleHeading' href='${url_frag}/surf-accessories/fins/'>FINS</a>"; ?>
                                                </li>
                                                <br>
                                                <li>
                                                    <?php echo "<a class='titleHeading' href='".HOME."gsi-mobile-apps.php'>MOBILE APPS</a>"; ?>
                                                </li>
                                                 
                                            </ul>
                                        </li>
										<li>
                                              <ul>
                                                <li>
                                                  
                                                   
                                                    <?php echo "<a class='titleHeading' href='${url_frag}/surf-accessories/hang-up-systems/'>PADDLE ACCESSORIES</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/accessories/paddle-accessories/lever-lock-handle/'>Lever Lock Handle</a>"; ?>
                                                </li>
												  <li>
												  <?php echo " <a href='${url_frag}/surf/accessories/paddle-accessories/lever-lock-lever/'>Lever Lock Lever</a>";?>
													 </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/accessories/paddle-accessories/lever-lock-pin/'>Lever Lock Pin</a>"; ?>
                                                </li>
                                              
                                                 
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        HOW TO
                                    </a>
                                    <ul class="mega-menu how-to-mega-menu">
                                        <li class="how-mega-menu">
                                            <ul>
                                               <li>
                                                    <?php echo "<a class='titleHeading ' href='".HOME."videos/how-to-videos.php'>HOW TO VIDEOS</a>"; ?>
                                                </li>
                                                <li>
                                                   <?php echo "<a href='".HOME."videos/how-to-apply-a-tail-pad.php'>How to apply a tail pad</a>"; ?>
                                                    
                                                </li>
                                                <li>
                                                    <?php echo "<a href='".HOME."videos/how-to-attach-a-leg-rope.php'>How to attach a Leg Rope</a>"; ?>
                                                </li>
												 <li>
                                                    <?php echo "<a href='".HOME."videos/how-to-attach-a-traditional-leash-string.php'>How to attach a Traditional Leash String</a>"; ?>
                                                </li>
												<li>
                                                    <?php echo "<a href='".HOME."videos/how-to-choose-a-surfboard.php'>How to choose a Surfboard</a>"; ?>
                                                </li>
                                               
                                                <li>
                                                    <?php echo "<a href='".HOME."videos/how-to-inflate-a-sup.php'>How to inflate an inflatable SUP</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='".HOME."videos/how-to-insert-original-fcs-fins.php'>How to Insert original FCS Fins</a>"; ?>
                                                </li>
												 <li>
                                                    <?php echo "<a href='".HOME."videos/how-to-insert-original-fcs-hangup.php'>How to Insert original FCS Hang Up</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='".HOME."videos/how-to-insert-fcsll-fins.php'>How to Insert FCSII Fins</a>"; ?>
                                                </li>
												 <li>
                                                    <?php echo "<a href='".HOME."videos/how-to-insert-fcsII-hangup.php'>How to Insert FCSII Hang Up</a>"; ?>
                                                </li>
                                                 <li>
                                                    <?php echo "<a href='".HOME."videos/how-to-insert-futures-hangup.php'>How to Insert Futures Hang Up</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='".HOME."videos/how-to-insert-longboard-sup-fins.php'>How to insert a Longboard / SUP fin</a>"; ?>
                                                </li>
                                                 <li>
                                                    <?php echo "<a href='".HOME."videos/how-to-insert-longboard-hangup.php'>How to Insert a Longboard Hang Up</a>"; ?>
                                                </li>
												 <li>
                                                    <?php echo "<a href='".HOME."videos/how-to-insert-sup-hangup.php'>How to Insert a SUP Hang Up</a>"; ?>
                                                </li>
                                                <li>
                                                	<?php echo "<a href='".HOME."videos/how-to-use-leverlock-system.php'>How to use the LeverLock System</a>"; ?>
												</li>
                                                <li>
                                                    <?php echo "<a href='".HOME."videos/how-to-wax-a-surfboard.php'>How to wax a surfboard</a>"; ?>
                                                </li>
                                                <br>
                                                <li>
                                                    <?php echo "<a class='titleHeading ' href='".HOME."volume-calculator/surfboard-volume-calculator.php'>SURFBOARD VOLUME CALCULATOR</a>"; ?>
                                                </li>
                                           </ul> 
										</li>
                                        
                                    </ul>
                                </li>
                                <!-- <li>
                                    <?php //echo "<a href='".HOME."blog/index.php'>BLOG</a>"; ?>
                                    
                                </li> -->
                                <li class="has-dropdown">
                                    <a href="#">
                                        LOGIN
                                    </a>
                                    <ul>
                                        <li>
                                           <?php echo "<a href= '${url_frag}/affiliate-area/'>Affiliates</a>"; ?>
                                        </li>
                                        <li>
                                           <?php echo "<a href='https://system.na2.netsuite.com/app/login/secure/privatelogin.nl?c=3743011'>Dealer Portal</a>"; ?>
                                        </li>
                                        <li>
                                           <?php echo "<a href='https://system.na2.netsuite.com/app/login/secure/privatelogin.nl?c=3743011'>Distributor Portal</a>"; ?>
                                        </li>
                                        <li>
                                           <?php echo "<a href='".HOME."GSIpayments'>Make a Payment</a>"; ?>
                                        </li>
                                        <li>
                                           <?php echo "<a href='".HOME."media/media-login.php'>Media</a>"; ?>
                                        </li>
                                        <li>
                                           <?php echo "<a href= '${url_frag}/my-account/'>Online Customer</a>"; ?>
                                        </li>
                                        <li>
                                           <?php echo "<a href='".HOME."TM-portal/tm-portal-login.php'>TM Portal</a>"; ?>
                                        </li>
                                    </ul>
                                </li>
                                 
                                <li class="has-dropdown">
                                    <a href="#">
                                        CONTACT US
                                    </a>
                                       
                                            <ul>
                                                <li>
												    <?php echo "<a href='".HOME."contacts/contacts-australia.php'>AUSTRALIAN CONTACTS</a>"; ?>
                                               </li>
												<li>
                                                    <?php echo "<a href='".HOME."contacts/contacts-new-zealand.php'>NEW ZEALAND CONTACTS</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='".HOME."contacts/contacts-usa.php'>US CONTACTS</a>"; ?>
                                                </li>
												<li>
												    <?php echo "<a href='".HOME."contacts/contacts-gsi-europe.php'>FRANCE, PORTUGAL & SPAIN CONTACTS</a>"; ?>
                                               </li>
												<li>
                                                    <?php echo "<a href='".HOME."contacts/contacts-worldwide.php'>WORLDWIDE CONTACTS</a>"; ?>
                                                </li>
                                            </ul>
                                        
                                       
                                       
                                    
                                </li>
									<li class="subscribeLabel visible-xs visible-sm visible-md pt16 pb16">
                               	<?php echo "<a class='subscribeLabel' href='".HOME."newsletter/newsletterSubs.php'>Subscribe</a>"; ?>
								</li>
                            </ul>
                        </div>
                        <!--end of menu module-->
                       
                        
                        
                    </div>
                    <!--end of module group-->
                </div>
            </nav>
        </div>