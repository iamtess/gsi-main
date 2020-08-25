<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-ZNCQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div class="nav-container">
            <a id="top"></a>
            <nav>
				<?php
				
				echo "<div id='banner' class='text-center' style='background-color: #75d1f7; color:#ed1212;'>
					<h4 class='pt8 pb8' style='color:#ed1212;font-size:1.5em;letter-spacing: 2px;font-weight: 400;'>";
					
					echo "<strong>OPERATIONAL UPDATE </strong>";
					echo "&nbsp;&nbsp;&nbsp;&nbsp; <a style='color:#ed1212;text-decoration:underline;' href='".HOME."operational-update.php'>FIND OUT MORE</a>&nbsp;&nbsp;&nbsp;&nbsp; "; 
					echo '<a style="color:#ed1212;font-size:.75em;letter-spacing: 2px;font-weight: 400; text-decoration:underline;" href="#" onclick="document.getElementById(\'banner\').style.display = \'none\'">Dismiss</a></h4>
					</div>';

			
?>
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
                        	<span class="sub">NZ 09 889 2185</span>
						</div>
						<div class="moduleTop left">
							<i class="ti-mobile">&nbsp;</i>
							<span class="sub">US 855 474 6821</span>
						</div>';
					}
					elseif ($userCountry == 'NZ'){
						echo '
						<div class="moduleTop left">
                        	<i class="ti-mobile">&nbsp;</i>
                        	<span class="sub">NZ 09 889 2185</span>
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
                        	<span class="sub">NZ 09 889 2185</span>
						</div>
						<div class="moduleTop left">
                        	<i class="ti-mobile">&nbsp;</i>
                        	<span class="sub">AUS 1300 857 791</span>
						</div>';
						
						
					}
					
					?>
                    <div class="module right">
                        <?php
							if (($userCountry !== 'NZ') &&  ($userCountry !== 'AU')){
								echo "<span class='sub'><a class='navUtilityLink' style='letter-spacing: 0.0625em;' href='".HOME."gsi-shipping-returns-policy.php#shippingfees'>FREE SHIPPING ON ALL WEB ORDERS</span><span class='footnoteText'>*</a>&nbsp;&nbsp;</span>"; 
                 			}
						?>
						
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
								<?php 
								if (($userCountry == 'NZ') || ($userCountry == 'AU')) { 
										echo "<li class='saleLabel'><a class='saleLabel' href='${url_frag_2}/collections/surfboard-sup-sale/'>SALE</a></li>"; 
								}
								else {
                               		echo "<li class='saleLabel'><a class='saleLabel' href='${url_frag}/on-sale/'>SALE</a></li>"; 
								}
								?>
						       	<li class="has-dropdown">
								<?php 
									if (($userCountry == 'NZ') || ($userCountry == 'AU')) { 
										echo "<a href='${url_frag_2}/collections/surfboards'>SURFBOARDS</a>"; 
									}
									else {
										echo "<a href='${url_frag}/surfboard-type/'>SURFBOARDS</a>"; 
									}
									?>
                                    <ul class="mega-menu">
                                        <li>
											<ul>
												<?php
												if ($userCountry == 'AU')  {
													echo "<li><a class='titleHeading' href='${url_frag_2}/collections/surfboards'>TYPE</a> </li>"; 
													echo "<li><a href='${url_frag_2}/collections/beginner-surfboards'>Beginner</a></li>"; 
													echo "<li><a href='${url_frag_2}/collections/surfboard-fish'>Fish</a></li>"; 
													echo "<li><a href='${url_frag_2}/collections/surfboard-longboards'>Longboards</a></li>";
													echo "<li><a href='${url_frag_2}/collections/midlength-surfboards'>Mid Lengths</a></li>"; 
													echo "<li><a href='${url_frag_2}/collections/surfboard-shortboards'>Shortboards</a> </li>"; 
                                               	}
												elseif ($userCountry == 'NZ')  {
													echo "<li><a class='titleHeading' href='${url_frag_2}/collections/surfboards'>TYPE</a> </li>"; 
													echo "<li><a href='${url_frag_2}/collections/beginner-surfboards'>Beginner</a></li>"; 
													echo "<li><a href='${url_frag_2}/collections/surfboard-fish'>Fish</a></li>"; 
													echo "<li><a href='${url_frag_2}/collections/surfboard-longboards'>Longboards</a></li>";
													echo "<li><a href='${url_frag_2}/collections/midlength-surfboards'>Mid Lengths</a></li>"; 
													echo "<li><a href='${url_frag_2}/collections/surfboard-shortboards'>Shortboards</a> </li>"; 
												}
												else  {
													echo "<li><a class='titleHeading' href='${url_frag}/surfboards-type/'>TYPE</a> </li>"; 
													echo "<li><a href='${url_frag}/surfboard-type/beginner/'>Beginner</a></li>"; 
													echo "<li><a href='${url_frag}/surfboard-type/finless/'>Finless</a></li>"; 
													echo "<li><a href='${url_frag}/surfboard-type/fish/'>Fish</a></li>"; 
													echo "<li><a href='${url_frag}/surfboard-type/longboards/'>Longboards</a></li>";
													echo "<li><a href='${url_frag}/surfboard-type/midlength-surfboards/'>Mid Lengths</a></li>"; 
													echo "<li><a href='${url_frag}/surfboard-type/shortboards/'>Shortboards</a> </li>"; 
													echo "<li><a href='${url_frag}/surfboard-type/tri-quads/'>Tri Quads</a></li><br>";
                                                }
												echo "<li><a class='titleHeading' href='#'>INFORMATION</a></li>"; 
                                                if (($userCountry == 'NZ') || ($userCountry == 'AU')) { 
													echo "<li><a href='${url_frag_2}/pages/surfboard-volume-calculator'>VOLUME CALCULATOR</a></li>";
													echo "<li><a href='${url_frag_2}/pages/surfboard-construction'>SURFBOARD CONSTRUCTION</a></li>";
												}
												else {
													echo "<li><a href='".HOME."volume-calculator/surfboard-volume-calculator.php'>VOLUME CALCULATOR</a></li>"; 
													echo "<li><a href='".HOME."technology/surfboard-technology.php'>SURFBOARD CONSTRUCTION</a></li>"; 
												} 
												echo "<li><a href='".HOME."videos/product-review-videos.php'>PRODUCT REVIEW VIDEOS</a></li>";
                                                if (($userCountry == 'NZ') || ($userCountry == 'AU')) { 
													echo "<li><a class='saleLabel' href='${url_frag_2}/collections/surfboard-sup-sale'>ONLINE SALE</a></li>"; 
												} 
												else{
													echo "<li><a class='saleLabel' href='${url_frag}/on-sale/'>ONLINE SALE</a></li>"; 
												}
												?>
									</ul>
                                    </li>
                                    	<li>
                                        	<ul>
											<?php 
											if ($userCountry == 'NZ'){
												echo "<li><a class='titleHeading' href='${url_frag_2}/collections/7s-surfboards'>7S</a></li>"; 
												echo "<li> <a href='${url_frag_2}/products/7s-double-down-shortboard'>Double Down - PU</a> <span class='newLabel'>NEW</span></li>";  
												echo "<li> <a href='${url_frag_2}/products/7s-jetstream-shortboard'>Jetstream+ - PU</a> <span class='newLabel'>NEW</span></li>";  
												echo "<li><a href='${url_frag_2}/products/7s-superfish-4-surfboard'>Superfish 4 - PU</a> <span class='newLabel'>NEW</span></li>";   
											}
  										   	elseif ($userCountry == 'AU'){
												echo "<li><a class='titleHeading' href='${url_frag_2}/collections/7s-surfboards'>7S</a></li>"; 
												echo "<li> <a href='${url_frag_2}/products/7s-double-down-shortboard'>Double Down - PU</a> <span class='newLabel'>NEW</span></li>";  
												echo "<li><a href='${url_frag_2}/products/7s-jetstream-im-shortboard'>Jetstream - IM</a></li>"; 
												echo "<li> <a href='${url_frag_2}/products/7s-jetstream-shortboard'>Jetstream+ - PU</a> <span class='newLabel'>NEW</span></li>";  
												echo "<li><a href='${url_frag_2}/products/7s-superfish-4-im-surfboard'>Superfish 4 - IM</a></li>";
												echo "<li><a href='${url_frag_2}/products/7s-superfish-4-surfboard'>Superfish 4 - PU</a> <span class='newLabel'>NEW</span></li>";   
											}	
											else { 
												echo "<li><a class='titleHeading' href='${url_frag}/brands/7s-surfboards/'>7S</a></li>"; 
												echo "<li><a href='${url_frag}/surf/shortboards/7s-double-down-im-shortboard/'>Double Down - IM</a> <span class='redLabel'>SALE</span></li>";
												echo "<li><a href='${url_frag}/surf/shortboards/7s-double-down-pu/'>Double Down - PU</a> <span class='newLabel'>New!</span></li>";
												echo "<li><a href='${url_frag}/surf/fish-shaped-surfboards/7s-hook-twin-fin-surfboard/'>Hook - IM</a> <span class='redLabel'>SALE</span></li>";
												echo "<li><a href='${url_frag}/surf/fish/7s-jetstream-im/'>Jetstream - IM</a>  <span class='redLabel'>SALE</span> </li>"; 
												echo "<li><a href='${url_frag}/surf/shortboards/7s-jetstream-pu/'>Jetstream + - PU</a> <span class='newLabel'>New!</span></li>";
												echo "<li><a href='${url_frag}/surf/fish-shaped-surfboards/7s-superfish-4-pu/'>Superfish 4 - PU</a> <span class='newLabel'>New!</span></li>";
                                           	}
											if (($userCountry !== 'NZ') && ($userCountry !== 'AU')){
												echo " <br><li><a class='titleHeading' href='${url_frag}/brands/chilli-surfboards/'>Chilli Surfboards</a></li>";
												echo "<li><a href='${url_frag}/surf/shortboards/chilli-hot-knife-tt/'>Hot Knife - TT</a></li>";
												echo "<li><a href='${url_frag}/surf/midlength-surfboards/chilli-mid-strength-tt/'>Mid Strength - TT</a></li>";
												echo "<li><a href='${url_frag}/surf/shortboards/chilli-rarest-bird-tt/'>Rarest Bird - TT</a></li><br>"; 
											}
											
											if ($userCountry == 'NZ'){
												echo "<br><li><a class='titleHeading'href='${url_frag_2}/collections/creative-army-surfboards'>CREATIVE ARMY SURFBOARDS</a></li>";
												echo "<li><a href='${url_frag_2}/products/creative-army-five-sugars-pu-longboard'>Five Sugars - PU</a></li>";
												echo "<li><a href='${url_frag_2}/products/creative-army-huevo-pu-mid-length-surfboard'>Huevo - PU</a>  </li>";
												echo "<li><a href='${url_frag_2}/products/creative-army-huevo-slx-mid-length-surfboard'>Huevo - SLX</a></li>";
												echo "<li><a href='${url_frag_2}/products/creative-army-jive-slx-longboard'>Jive+ - SLX</a></li>"; 
												echo "<li><a href='${url_frag_2}/products/creative-army-jumbo-jet-slx-longboard'>Jumbo Jet - SLX</a> <span class='newLabel'>NEW</span></li>";  
											}
											elseif  ($userCountry == 'AU'){
												echo "<br><li><a class='titleHeading'href='${url_frag_2}/collections/creative-army-surfboards'>CREATIVE ARMY SURFBOARDS</a></li>";
												echo "<li><a href='${url_frag_2}/products/creative-army-five-sugars-pu-longboard'>Five Sugars - PU</a></li>";
												echo "<li><a href='${url_frag_2}/products/creative-army-huevo-pu-mid-length-surfboard'>Huevo - PU</a>  </li>";
												echo "<li><a href='${url_frag_2}/products/creative-army-huevo-slx-mid-length-surfboard'>Huevo - SLX</a></li>";
												echo "<li><a href='${url_frag_2}/products/creative-army-jive-slx-longboard'>Jive+ - SLX</a></li>"; 
												echo "<li><a href='${url_frag_2}/products/creative-army-jumbo-jet-slx-longboard'>Jumbo Jet - SLX</a> <span class='newLabel'>NEW</span></li>";  
											}
											else {
												echo "<li><a class='titleHeading' href='${url_frag}/brands/creative-army/'>CREATIVE ARMY SURFBOARDS</a></li>";
												echo "<li><a href='${url_frag}/surf/longboards/creative-army-five-sugars-pu/'>Five Sugars - PU</a></li>";
												echo "<li><a href='${url_frag}/surf/longboards/creative-army-huevo-mid-length-pu-surfboard/'>Huevo - PU</a></li>";
												echo "<li><a href='${url_frag}/surf/midlength-surfboards/creative-army-huevo-slx/'>Huevo - SLX</a></li>";
												echo "<li><a href='${url_frag}/surf/longboards/creative-army-jive-slx/'>Jive+ - SLX</a></li>";
												echo "<li><a href='${url_frag}/surf/longboards/creative-army-jumbo-jet/'>Jumbo Jet - SLX</a> <span class='newLabel'>NEW</span></li>"; 
											}
											?>
					                      	</ul>
                                        </li>
			                            <li>
                                            <ul>
											<?php 
											if ($userCountry == 'US') {
												echo "<li><a class='titleHeading' href='${url_frag}/brands/meyerhoffer-surfboards/'>MEYERHOFFER</a></li>"; 
												echo "<li> <a href='${url_frag}/surf/shortboards/meyerhoffer-supernormal-cv-surfboard/'>Supernormal - CV</a>  <span class='redLabel'>SALE</span></li>"; 
											} 
											if ($userCountry == 'NZ') {
												echo "<li><a class='titleHeading' href='${url_frag_2}/collections/modern-surfboards'>MODERN SURFBOARDS</a> </li>";
												echo "<li><a href='${url_frag_2}/products/modern-double-wide-slx-surfboard'>Double Wide - SLX</a> </li>";
                                           	    echo "<li><a href='${url_frag_2}/products/modern-falcon-pu-mid-length-surfboard'>Falcon - PU</a></li>";
											    echo "<li><a href='${url_frag_2}/products/highline-pu-mid-length-surfboard'>Highline - PU</a></li>";
												echo "<li><a href='${url_frag_2}/products/modern-love-child-pu-midlength-surfboard'>Love Child - PU</a></li>";
												echo "<li><a href='${url_frag_2}/products/modern-retro-pu-longboard'>Retro - PU</a></li>"; 
												echo "<li><a href='${url_frag_2}/products/modern-golden-rule-pu-longboard'>The Golden Rule - PU</a> <span class='newLabel'>NEW</span></li>"; 
													 
											 }
												
											elseif ($userCountry == 'AU') {
												echo "<li><a class='titleHeading' href='${url_frag_2}/collections/modern-surfboards'>MODERN SURFBOARDS</a> </li>";
												echo "<li><a href='${url_frag_2}/products/modern-double-wide-slx-surfboard'>Double Wide - SLX</a> </li>";
                                           	    echo "<li><a href='${url_frag_2}/products/modern-falcon-pu-mid-length-surfboard'>Falcon - PU</a></li>";
											    echo "<li><a href='${url_frag_2}/products/highline-pu-mid-length-surfboard'>Highline - PU</a></li>";
												echo "<li><a href='${url_frag_2}/products/modern-love-child-pu-midlength-surfboard'>Love Child - PU</a></li>";
												echo "<li><a href='${url_frag_2}/products/modern-retro-pu-longboard'>Retro - PU</a></li>"; 
												echo "<li><a href='${url_frag_2}/products/modern-golden-rule-pu-longboard'>The Golden Rule - PU</a> <span class='newLabel'>NEW</span></li>"; 
											}
												
											else {
												echo "<br><li><a class='titleHeading' href='${url_frag}/brands/modern-surfboards/'>MODERN SURFBOARDS</a> </li>";
												echo "<li><a href='${url_frag}/surf/longboards/modern-double-wide-slx/'>Double Wide - SLX</a> </li>";
												echo "<li><a href='${url_frag}/surf/longboards/modern-double-wide-xb/'>Double Wide - XB</a></li>"; 
												echo "<li><a href='${url_frag}/surf/midlength-surfboards/modern-falcon-pu/'>Falcon - PU</a></li>";
												echo "<li><a href='${url_frag}/surf/midlength-surfboards/modern-falcon-xb/'>Falcon - XB</a></li>";
												echo "<li><a href='${url_frag}/surf/shortboards/modern-highline-pu-shortboard/'>Highline - PU</a></li>"; 
												echo "<li><a href='${url_frag}/surf/beginner-surfboards/modern-highline-xb/'>Highline - XB</a></li>";
												echo "<li><a href='${url_frag}/surf/mid-length-surfboards/modern-love-child-poly-shortboard/'>Love Child - PU</a></li>"; 
												echo "<li><a href='${url_frag}/surf/midlength-surfboards/modern-love-child-xb/ '>Love Child - XB</a></li>";
												echo "<li><a href='${url_frag}/surf/longboards/modern-retro-longboard/'>Retro - PU</a></li>"; 
												echo "<li><a href='${url_frag}/surf/longboards/modern-the-golden-rule-pu/'>The Golden Rule - PU</a>  <span class='newLabel'>NEW</span> </li>";
											}
											?>
	                                        </ul>
                                        </li>
                                        <li>
                                        	<ul>
											<?php
											if ($userCountry == 'NZ') {
												echo "<li><a class='titleHeading' href='${url_frag_2}/collections/salt-gypsy-surfboards'>Salt Gypsy Surfboards</a> </li>";
												echo "<li><a href='${url_frag_2}/products/salt-gypsy-dusty-pu-longboard'>Dusty - PU</a></li>";
												echo "<li><a href='${url_frag_2}/products/salt-gypsy-mid-tide-mid-length-surfboard'>Mid Tide - PU</a></li>";
												echo "<li><a href='${url_frag_2}/products/salt-gypsy-shorebird-pu-twin-fin-surfboard'>Shorebird - PU</a></li>";
											}
											elseif ($userCountry == 'AU') {
												echo "<li><a class='titleHeading' href='${url_frag_2}/collections/salt-gypsy-surfboards'>Salt Gypsy Surfboards</a> </li>";
												echo "<li><a href='${url_frag_2}/products/salt-gypsy-dusty-pu-longboard'>Dusty - PU</a></li>";
												echo "<li><a href='${url_frag_2}/products/salt-gypsy-mid-tide-mid-length-surfboard'>Mid Tide - PU</a></li>";
												echo "<li><a href='${url_frag_2}/products/salt-gypsy-shorebird-pu-twin-fin-surfboard'>Shorebird - PU</a></li>";
											}
											else {
												echo "<li><a class='titleHeading' href='${url_frag}/salt-gypsy-surfboards/'>Salt Gypsy Surfboards</a> </li>";
												echo "<li><a href='${url_frag}/surf/longboards/salt-gypsy-dusty-pu-longboard/'>Dusty - PU</a></li>";
												echo "<li><a href='${url_frag}/surf/midlength-surfboards/salt-gypsy-mid-tide-pu-surfboard/'>Mid Tide - PU</a></li>";
												echo "<li><a href='${url_frag}/surf/fish-shaped-surfboards/salt-gypsy-shorebird-twin-fin-surfboard/'>Shorebird - PU</a></li>";
											}		
											?>
											<?php
											if ($userCountry == 'NZ') {
												echo "<br><li><a class='titleHeading' href='${url_frag_2}/collections/three-palms-board-co-surfboards'>Three Palms Board Co.</a></li>";
												echo "<li><a href='${url_frag_2}/products/three-palms-board-co-due-back-blackbird-surfboard'>Due Back Blackbird - MX</a></li>";
												echo "<li><a href='${url_frag_2}/products/three-palms-board-co-due-back-highline-surfboard'>Due Back Highline- MX</a></li>";
											}
											elseif ($userCountry == 'AU') {
												echo "<br><li><a class='titleHeading' href='${url_frag_2}/collections/three-palms-board-co-surfboards'>Three Palms Board Co.</a></li>";
												echo "<li><a href='${url_frag_2}/products/three-palms-board-co-due-back-blackbird-surfboard'>Due Back Blackbird - MX</a></li>";
												echo "<li><a href='${url_frag_2}/products/three-palms-board-co-due-back-highline-surfboard'>Due Back Highline- MX</a></li>";
											}
											else {
												echo "<br><li><a class='titleHeading' href='${url_frag}/brands/three-palms-board-co/'>Three Palms Board Co.</a></li>
												<li><a href='${url_frag}/surf/midlength-surfboards/three-palms-board-co-due-back-blackbird-mx/'>Due Back Blackbird - MX</a>  <span class='redLabel'>SALE</span></li>";
											}
											?>
											<br>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
								<li class="has-dropdown">
                                <?php 
								 if (($userCountry == 'NZ') || ($userCountry == 'AU')) { 
									echo "<a href='${url_frag_2}/collections/gnaraloo-soft-surfboards'>SOFT SURFBOARDS</a>"; 
								}
								else {
									echo "<a href='${url_frag}/surfboard-type/soft-surfboards/'>SOFT SURFBOARDS</a>";
								}
							 	?>
								<ul class="mega-menu">
									<li>
                                    	<ul>
                                        <?php 
										echo "<li><a class='titleHeading' href='#'>INFORMATION</a></li>"; 
										
										if (($userCountry == 'NZ') || ($userCountry == 'AU')) {
											echo " <li><a href='${url_frag_2}/pages/surfboard-volume-calculator'>VOLUME CALCULATOR</a></li>";
                                        	echo " <li><a href='${url_frag_2}/pages/surfboard-construction'>SURFBOARD CONSTRUCTION</a></li>";
											echo "<li><a class='saleLabel' href='${url_frag_2}/collections/surfboard-sup-sale'>ONLINE SALE</a></li>"; 
										}
										else {
											echo "<li><a href='".HOME."volume-calculator/surfboard-volume-calculator.php'>VOLUME CALCULATOR</a></li>"; 
                                        	echo "<li><a href='".HOME."technology/surfboard-technology.php'>SURFBOARD CONSTRUCTION</a></li>"; 
										}
										?>
                                        </ul>
									</li>
                                  	<li>
                                    	<ul>
                                        <?php 
										if ($userCountry == 'NZ'){
											echo "<li><a class='titleHeading' href='${url_frag_2}/collections/gnaraloo-soft-surfboards'>GNARALOO</a></li>"; 
											echo "<li><a href='${url_frag_2}/products/gnaraloo-beach-cruiser-soft-surfboard'>Beach Cruiser - soft</a></li>"; 
											echo "<li><a href='${url_frag_2}/products/gnaraloo-dune-buggy-soft-surfboard'>Dune Buggy - soft</a></li>"; 
											echo "<li><a href='${url_frag_2}/products/gnaraloo-flounder-pounder-soft-surfboard'>Flounder Pounder - soft</a></li>"; 
											echo "<li><a href='${url_frag_2}/products/gnaraloo-schoolie-soft-surfboard'>Schoolie- soft</a></li>"; 
										}
										elseif ($userCountry == 'AU')  {
											echo "<li><a class='titleHeading' href='${url_frag_2}/collections/gnaraloo-soft-surfboards'>GNARALOO</a></li>"; 
											echo "<li><a href='${url_frag_2}/products/gnaraloo-beach-cruiser-soft-surfboard'>Beach Cruiser - soft</a></li>"; 
											echo "<li><a href='${url_frag_2}/products/gnaraloo-dune-buggy-soft-surfboard'>Dune Buggy - soft</a></li>"; 
											echo "<li><a href='${url_frag_2}/products/gnaraloo-flounder-pounder-soft-surfboard'>Flounder Pounder - soft</a></li>"; 
											echo "<li><a href='${url_frag_2}/products/gnaraloo-schoolie-soft-surfboard'>Schoolie- soft</a></li>"; 
										}
										else {
											echo "<li><a class='titleHeading ' href='${url_frag}/brands/seaglass-project/'>THE SEAGLASS PROJECT</a></li>"; 
                                            echo "<li><a href='${url_frag}/surf/finless/seaglass-project-albacore-finless-surfboard/'>Albacore - soft</a> <span class='redLabel'>SALE</span></li> <br>"; 
										}
										?>
                                        </ul>
									</li>
                                    <li>
                                 		<ul>
										<?php 
										
										if (($userCountry !== 'NZ') &&  ($userCountry !== 'AU')){
											echo "<li><a class='titleHeading' href='${url_frag}/brands/three-palms-board-co/'>Three Palms Board Co.</a></li>";
											echo "<li><a href='${url_frag}/surf/longboards/three-palms-board-co-soft-surfboard/'>Surfboard - soft</a></li>"; 
										}
									 	?>
                                        </ul>
                              		</li>
                             	</ul>
                         	</li>
							<li class="has-dropdown">
							<?php 
							if (($userCountry == 'NZ') ||  ($userCountry == 'AU')){
								echo "<a href='${url_frag_2}/collections/stand-up-paddleboards'>STAND UP PADDLE</a>"; 
							}
							else {
								echo "<a href='${url_frag}/sup-type/'>STAND UP PADDLE</a>"; 
							}
							?>
                             <ul class="mega-menu">
                             	<li>
                                	<ul>
									<?php
									if (($userCountry != 'NZ') ||  ($userCountry != 'AU')){
                                       	echo "<li><a class='titleHeading' href='${url_frag}/sup-type/'>TYPE</a></li>";
                                        echo "<li><a href='${url_frag}/sup-type/all-rounder/'>ALL ROUNDER</a></li>";
                                        echo "<li><a href='${url_frag}/sup-type/flatwater-sup/'>FLATWATER</a> </li>";
                                        echo "<li><a href='${url_frag}/sup-type/surf-sup/'>SURF</a></li>";
                                     	echo "<li><a href='${url_frag}/brands/trident-sup-paddles/'>SUP PADDLES</a></li><br>"; 
									}
									?>
                                    <?php 
									
									if (($userCountry == 'NZ') ||  ($userCountry == 'AU')){
										echo "<li><a class='titleHeading' href='#'>INFORMATION</a></li>";
										echo "<li><a href='${url_frag_2}/pages/sup-construction'>SUP CONSTRUCTION</a></li>"; 
										echo "<li><a href='${url_frag_2}/collections/sup-paddle-accessories'>PADDLE ACCESSORIES</a></li>"; 
                                    }
									else {
										
										echo "<li><a class='titleHeading' href='#'>INFORMATION</a></li>";
									echo "<li><a href='".HOME."technology/sup-technology.php'>SUP CONSTRUCTION</a></li>"; 
										
									}
									?>
                                    </ul>
                                 </li>
                                 <li>
                                 	<ul>
                                    <?php
									if ($userCountry == 'NZ'){
										echo "<li><a class='titleHeading'  href='${url_frag_2}/collections/adventure-paddleboarding-stand-up-paddleboards'>ADVENTURE PADDLEBOARDING</a></li>"; 
                                    	echo "<li><a href='${url_frag_2}/products/adventure-paddleboarding-all-rounder-stand-up-paddleboard'>ALL ROUNDER - MX</a></li>";
										echo "<li><a href='${url_frag_2}/products/adventrue-paddleboarding-sixty-forty-mx-stand-up-paddleboard'>SIXTY-FORTY - MX</a></li>";
									}
										
									elseif ($userCountry == 'AU'){
										echo "<li><a class='titleHeading'  href='${url_frag_2}/collections/adventure-paddleboarding-stand-up-paddleboards'>ADVENTURE PADDLEBOARDING</a></li>"; 
                                    	echo "<li><a href='${url_frag_2}/products/adventure-paddleboarding-all-rounder-cx-stand-up-paddleboard'>ALL ROUNDER - CX</a></li>";
										echo "<li><a href='${url_frag_2}/products/adventure-paddleboarding-all-rounder-stand-up-paddleboard'>ALL ROUNDER - MX</a></li>";
										echo "<li><a href='${url_frag_2}/products/adventure-paddleboarding-fifty-fifty-stand-up-paddleboard'>FIFTY FIFTY - MX</a></li>";
										echo "<li><a href='${url_frag_2}/products/adventrue-paddleboarding-sixty-forty-mx-stand-up-paddleboard'>SIXTY-FORTY - MX</a></li>";
										echo "<li><a href='${url_frag_2}/products/adventure-paddleboarding-seventy-thirty-stand-up-paddleboard'>SEVENTY THIRTY - MX</a></li>";
									}	
									else {
										echo "<li><a class='titleHeading' href='${url_frag}/brands/adventure-paddleboarding/'>ADVENTURE PADDLEBOARDING</a></li>"; 
										echo "<li><a href='${url_frag}/surf/stand-up-paddle-board/all-rounder/adventure-paddleboarding-all-rounder-cx/'>ALL ROUNDER - CX</a></li>"; 
                                    	echo "<li><a href='${url_frag}/surf/stand-up-paddle-board/all-rounder/adventure-paddleboarding-all-rounder-mx/'>ALL ROUNDER - MX</a></li>"; 
                                    	echo "<li><a href='${url_frag}/surf/stand-up-paddle-board/flatwater/adventure-paddleboarding-explorer-2-cx/'>EXPLORE - CX</a></li>"; 
										echo "<li><a href='${url_frag}/surf/stand-up-paddle-boards/surf-sup/adventure-paddleboarding-sixty-forty-mx/'>SIXTY FORTY - MX</a></li>"; 
									}
									?>
									<br>
									<?php
									if ($userCountry == 'AU') {
										echo "<li><a class='titleHeading ' href='${url_frag_2}/collections/salt-gypsy-sup'>SALT GYPSY SUP</a> </li>";
										echo "<li><a href='${url_frag_2}/products/salt-gypsy-paradise-punch-sup'>PARADISE PUNCH - MX</a> </li>";
                                  		echo "<li><a class='titleHeading ' href='${url_frag_2}//collections/three-palms-board-co-stand-up-paddleboard'>THREE PALMS BOARD CO.</a></li>";
										echo "<li><a href='${url_frag_2}/products/three-palms-surf-co-stand-up-paddleboard'>SUP - soft</a></li>";
									}
									?>
									</ul>
								</li>
                                <li>
                                	<ul>
							        <?php 
									if ($userCountry == 'NZ') {
										echo "<li><a class='titleHeading '  href='${url_frag_2}/collections/tom-carroll-paddle-surf'>TOM CARROLL PADDLE SURF</a></li>";
								    	echo "<li> <a  href='${url_frag_2}/products/tom-carroll-outer-reef-mx-stand-up-paddleboard'>OUTER REEF - MX</a></li>";
									}
									elseif  ($userCountry == 'AU') {
										echo "<li><a class='titleHeading '  href='${url_frag_2}/collections/tom-carroll-paddle-surf'>TOM CARROLL PADDLE SURF</a></li>";
								    	echo "<li> <a  href='${url_frag_2}/products/tom-carroll-outer-reef-mx-stand-up-paddleboard'>OUTER REEF - MX</a></li>";
									}
									else {
										echo "<li><a class='titleHeading ' href='${url_frag}/brands/tom-carroll-paddle-surf/'>TOM CARROLL PADDLE SURF</a></li>";
										echo "<li><a href='${url_frag}/surf/stand-up-paddle-board/surf/tom-carroll-paddle-surf-long-grain-v2-cx-sup/'>LONG GRAIN V2 - CX</a>  <span class='redLabel'>SALE</span></li>";
										echo "<li> <a href='${url_frag}/surf/stand-up-paddle-boards/all-rounder/tom-carroll-outer-reef-mx/'>OUTER REEF - MX</a></li>";
									}
									if ($userCountry == 'NZ')  {
										echo " <br><li><a class='titleHeading' href='${url_frag_2}/collections/trident-sup-paddles'>TRIDENT PADDLES</a></li>"; 
										echo "<li><a href='${url_frag_2}/products/large-carbon-lever-lock-sup-paddle'>Large Carbon Lever Lock</a></li>";
                                        echo "<li><a href='${url_frag_2}/products/medium-carbon-lever-lock-sup-paddle'>Medium Carbon Lever Lock</a></li>";
                                        echo "<li><a href='${url_frag_2}/products/large-fg-lever-lock-sup-paddle'>Large FG Lever Lock</a></li>";
                                        echo "<li><a href='${url_frag_2}/products/medium-fg-lever-lock-sup-paddle'>Medium FG Lever Lock</a></li>";
                                        echo "<li><a href='${url_frag_2}/products/t6-alloy-lever-lock-sup-paddle'>T6 Alloy lever Lock</a></li>";
                                        echo "<li><a href='${url_frag_2}/products/t6-fg-lever-lock-sup-paddle'>T6 FG Lever Lock</a></li>";
									}
									elseif ($userCountry == 'AU')  {
										echo " <br><li><a class='titleHeading' href='${url_frag_2}/collections/trident-sup-paddles'>TRIDENT PADDLES</a></li>"; 
										echo "<li><a href='${url_frag_2}/products/trident-large-carbon-lever-lock-sup-paddle/'>Large Fixed Carbon</a></li>"; 
										echo "<li><a href='${url_frag_2}/products/large-carbon-lever-lock-sup-paddle'>Large Carbon Lever Lock</a></li>";
                                        echo "<li><a href='${url_frag_2}/products/medium-carbon-lever-lock-sup-paddle'>Medium Carbon Lever Lock</a></li>";
                                        echo "<li><a href='${url_frag_2}/products/large-fg-lever-lock-sup-paddle'>Large FG Lever Lock</a></li>";
                                        echo "<li><a href='${url_frag_2}/products/medium-fg-lever-lock-sup-paddle'>Medium FG Lever Lock</a></li>";
                                        echo "<li><a href='${url_frag_2}/products/t6-alloy-lever-lock-sup-paddle'>T6 Alloy lever Lock</a></li>";
                                        echo "<li><a href='${url_frag_2}/products/t6-fg-lever-lock-sup-paddle'>T6 FG Lever Lock</a></li>";
									}
                                	else {
										echo " <br><li><a class='titleHeading' href='${url_frag}/brands/trident-sup-paddles/'>TRIDENT PADDLES</a></li>"; 
									   echo "<li><a href='${url_frag}/surf/stand-up-paddle-board-paddles/trident-669cr-ll-adj-paddle/'>Large Carbon Lever Lock</a></li>";
                                       echo "<li><a href='${url_frag}/surf/stand-up-paddle-board-paddles/trident-588cr-ll-adj-paddle/'>Medium Carbon Lever Lock</a></li>";
                                       echo "<li><a href='${url_frag}/surf/stand-up-paddle-board-paddles/trident-t669fg-adjustable-paddle-leverlock/'>Large FG Lever Lock</a></li>";
                                       echo "<li><a href='${url_frag}/surf/stand-up-paddle-board-paddles/trident-t588a-adjustable-paddle-lever-lock/'>Medium FG Lever Lock</a></li>";
                                       echo "<li><a href='${url_frag}/surf/stand-up-paddle-board-paddles/trident-t6al-adjustable-paddle-lever-lock/'>T6 Alloy lever Lock</a></li>";
                                       echo "<li><a href='${url_frag}/surf/stand-up-paddle-board-paddles/trident-tga-adjustable-paddle-lever-lock/'>T6 FG Lever Lock</a></li>";
                                       echo "<li><a href='${url_frag}/surf/stand-up-paddle-board-paddles/trident-t6fg-ll3p-sup-paddle/'>T6 FG Lever Lock 3 Piece</a></li> "; 
									}
									?>
                                    </ul>
                              	</li>
                         	</ul>
                    	</li>
                        <?php
						if ($userCountry == 'NZ')  {
							echo "<li class='has-dropdown'>";
							echo "<a href='${url_frag_2}//collections/surfboard-and-stand-up-paddleboard-accessories'>ACCESSORIES</a>";
                            echo "<ul class='mega-menu paddle-acc-mega-menu'>
                            			<li class='paddle-ac-mega-menu'>
                                        	<ul>
                                        		<li><a class='titleHeading' href='${url_frag_2}/collections/surfica-surfboard-and-sup-accessories'>SURFICA ACCESSORIES</a></li>                                               
                                        		<li><a href='${url_frag_2}/products/surfica-all-rounder-sup-board-bag'>All Rounder SUP Bags</a></li>
                                        		<li><a href='${url_frag_2}/products/surfica-leashes'>Leashes</a></li>
												<li><a href='${url_frag_2}/products/surfica-longboard-bags'>Longboard Bags</a></li>
                                        		<li><a href='${url_frag_2}/products/surfica-surfboard-bags'>Surfboard Bags</a></li><br>
												<li><a class='titleHeading' href='${url_frag_2}/collections/hang-up-systems-surf-and-sup-storage'>HANG UP SYSTEMS</a></li> 
												<li><a href='${url_frag_2}/products/hang-up-system-fcs-fin-box'>FCS Hang Up</a></li>
												<li><a href='${url_frag_2}/products/hang-up-system-fcsii-fin-box'>FCS II Hang Up</a></li>
												<li><a href='${url_frag_2}/products/hang-up-system-futures-fins-box'>Futures Fins Hang Up</a></li>
                                        		<li><a href='${url_frag_2}/products/hang-up-system-longboard-box'>Longboard Box</a></li>
												<li><a href='${url_frag_2}/products/hang-up-system-sup-fin-box'>SUP Hang UP</a></li>  <br>
                                        	</ul>
										</li>
                                        <li>
                                        	<ul>
												<li><a class='titleHeading' href='${url_frag_2}/surf-accessories/fins/'>FINS</a></li> 
												<li><a href='${url_frag_2}/products/ap-8-inch-molded-sup-fin'>AP 8\" Molded SUP Fin</a></li>
												<li><a href='${url_frag_2}/products/ap-10-flat-water-sup-fin'>AP 10\" Flat Water SUP Fin</a></li>
												<li><a href='${url_frag_2}/products/ap-10-inch-molded-sup-fin'>AP 10\" Molded SUP Fin</a></li>
												<li><a href='${url_frag_2}/products/ca-7-inch-smoky-grey-longboard-fin'>CA 7\" Smoky Grey Longboard Fin</a></li>
												<li><a href='${url_frag_2}/products/ca-9-inch-smoky-grey-longboard-fin'>CA 9\" Smoky Grey Longboard Fin</a></li>
												<li><a href='${url_frag_2}/products/ca-10-inch-smoky-grey-longboard-fin'>CA 10\" Smoky Grey Longboard Fin</a></li>
												<li><a href='${url_frag_2}/products/fino-soft-edge-fin'>Fino soft Edge Fin Set</a></li>
												<li><a href='${url_frag_2}/products/gnaraloo-schoolie-soft-surfboard-finset'>Gnaraloo Schoolie Fin Set</a></li>
												<li><a href='${url_frag_2}/products/longboard-finger-screw-and-plate'>Longboard Finger Screw & plate</a></li>
												<li><a href='${url_frag_2}/products/longboard-hex-screw-and-plate'>Longboard Hex Screw & plate</a></li>
												<li><a href='${url_frag_2}/products/modern-7-5-inch-longboard-fin'>Modern 7.5\" Longboard Fin</a></li>
												<li><a href='${url_frag_2}/products/modern-9-5-inch-longboard-fin'>Modern 9.5\" Longboard Fin</a></li>
												<li><a href='${url_frag_2}/products/modern-10-5-inch-longboard-fin'>Modern 10.5\" Longboard Fin</a></li>
												<li><a href='${url_frag_2}/products/tom-carroll-7-25-inch-sup-fin'>TC 7.25\" SUP Fin</a></li>
												<li><a href='${url_frag_2}/products/tom-carroll-8-5-inch-sup-fin'>TC 8.5\" SUP Fin</a></li>
												<li><a href='${url_frag_2}/products/tom-carroll-9-5-inch-sup-fin'>TC 9.5\" SUP Fin</a></li>
												
									    	</ul>
                                        </li>
										<li>
                                              <ul>
											  	<li><a class='titleHeading' href='".HOME."gsi-mobile-apps.php'>MOBILE APPS</a></li><br>
                                                <li><a class='titleHeading' href='${url_frag_2}/collections/sup-paddle-accessories'>PADDLE ACCESSORIES</a> </li>
                                              	<li><a href='${url_frag_2}/products/lever-lock-cable/'>Lever Lock Cable</a></li>
												<li><a href='${url_frag_2}/products/lever-lock-handle'>Lever Lock Handle</a></li>
									            <li><a href='${url_frag_2}/products/lever-lock-lever'>Lever Lock Lever</a></li>
												<li><a href='${url_frag_2}/products/lever-lock-pin'>Lever Lock Pin</a></li>
                                             </ul>
                                        </li>
                                    </ul>
                                </li>";
							}
							elseif  ($userCountry == 'AU')  {
							echo "<li class='has-dropdown'>";
							echo "<a href='${url_frag_2}//collections/surfboard-and-stand-up-paddleboard-accessories'>ACCESSORIES</a>";
                            echo "<ul class='mega-menu paddle-acc-mega-menu'>
                            			<li class='paddle-ac-mega-menu'>
                                        	<ul>
                                        		<li><a class='titleHeading' href='${url_frag_2}/collections/surfica-surfboard-and-sup-accessories'>SURFICA ACCESSORIES</a></li>                                               
                                        		<li><a href='${url_frag_2}/products/surfica-all-rounder-sup-board-bag'>All Rounder SUP Bags</a></li>
                                        		<li><a href='${url_frag_2}/products/surfica-leashes'>Leashes</a></li>
												<li><a href='${url_frag_2}/products/surfica-longboard-bags'>Longboard Bags</a></li>
                                        		<li><a href='${url_frag_2}/products/surfica-surfboard-bags'>Surfboard Bags</a></li><br>
												<li><a class='titleHeading' href='${url_frag_2}/collections/hang-up-systems-surf-and-sup-storage'>HANG UP SYSTEMS</a></li> 
												<li><a href='${url_frag_2}/products/hang-up-system-fcs-fin-box'>FCS Hang Up</a></li>
												<li><a href='${url_frag_2}/products/hang-up-system-fcsii-fin-box'>FCS II Hang Up</a></li>
												<li><a href='${url_frag_2}/products/hang-up-system-futures-fins-box'>Futures Fins Hang Up</a></li>
                                        		<li><a href='${url_frag_2}/products/hang-up-system-longboard-box'>Longboard Box</a></li>
												<li><a href='${url_frag_2}/products/hang-up-system-sup-fin-box'>SUP Hang UP</a></li>  <br>
                                        	</ul>
										</li>
                                        <li>
                                        	<ul>
												<li><a class='titleHeading' href='${url_frag_2}/surf-accessories/fins/'>FINS</a></li> 
												<li><a href='${url_frag_2}/products/ap-8-inch-molded-sup-fin'>AP 8\" Molded SUP Fin</a></li>
												<li><a href='${url_frag_2}/products/ap-10-flat-water-sup-fin'>AP 10\" Flat Water SUP Fin</a></li>
												<li><a href='${url_frag_2}/products/ap-10-inch-molded-sup-fin'>AP 10\" Molded SUP Fin</a></li>
												<li><a href='${url_frag_2}/products/ca-7-inch-smoky-grey-longboard-fin'>CA 7\" Smoky Grey Longboard Fin</a></li>
												<li><a href='${url_frag_2}/products/ca-9-inch-smoky-grey-longboard-fin'>CA 9\" Smoky Grey Longboard Fin</a></li>
												<li><a href='${url_frag_2}/products/ca-10-inch-smoky-grey-longboard-fin'>CA 10\" Smoky Grey Longboard Fin</a></li>
												<li><a href='${url_frag_2}/products/fino-soft-edge-fin'>Fino soft Edge Fin Set</a></li>
												<li><a href='${url_frag_2}/products/gnaraloo-schoolie-soft-surfboard-finset'>Gnaraloo Schoolie Fin Set</a></li>
												<li><a href='${url_frag_2}/products/longboard-finger-screw-and-plate'>Longboard Finger Screw & plate</a></li>
												<li><a href='${url_frag_2}/products/longboard-hex-screw-and-plate'>Longboard Hex Screw & plate</a></li>
												<li><a href='${url_frag_2}/products/modern-7-5-inch-longboard-fin'>Modern 7.5\" Longboard Fin</a></li>
												<li><a href='${url_frag_2}/products/modern-9-5-inch-longboard-fin'>Modern 9.5\" Longboard Fin</a></li>
												<li><a href='${url_frag_2}/products/modern-10-5-inch-longboard-fin'>Modern 10.5\" Longboard Fin</a></li>
												<li><a href='${url_frag_2}/products/tom-carroll-7-25-inch-sup-fin'>TC 7.25\" SUP Fin</a></li>
												<li><a href='${url_frag_2}/products/tom-carroll-8-5-inch-sup-fin'>TC 8.5\" SUP Fin</a></li>
												<li><a href='${url_frag_2}/products/tom-carroll-9-5-inch-sup-fin'>TC 9.5\" SUP Fin</a></li>
												
									    	</ul>
                                        </li>
										<li>
                                              <ul>
											  	<li><a class='titleHeading' href='".HOME."gsi-mobile-apps.php'>MOBILE APPS</a></li><br>
                                                <li><a class='titleHeading' href='${url_frag_2}/collections/sup-paddle-accessories'>PADDLE ACCESSORIES</a> </li>
                                              	<li><a href='${url_frag_2}/products/lever-lock-cable/'>Lever Lock Cable</a></li>
												<li><a href='${url_frag_2}/products/lever-lock-handle'>Lever Lock Handle</a></li>
									            <li><a href='${url_frag_2}/products/lever-lock-lever'>Lever Lock Lever</a></li>
												<li><a href='${url_frag_2}/products/lever-lock-pin'>Lever Lock Pin</a></li>
                                             </ul>
                                        </li>
                                    </ul>
                                </li>";
							}
							else {		  
                            	echo "<li class='has-dropdown'>
									<a href='${url_frag}/surf-accessories/'>ACCESSORIES</a>
                                    <ul class='mega-menu paddle-acc-mega-menu'>
                                    	<li class='paddle-ac-mega-menu'>
                                        	<ul>
                                                <li><a class='titleHeading' href='${url_frag}/brands/surfica-surf-accessories/'>SURFICA ACCESSORIES</a></li>                                                
                                                <li><a href='${url_frag}/surf/accessories/accessories-surfica-board-bags/surfica-surf-board-bag/'>Surfboard Bags</a></li>
                                                <li><a href='${url_frag}/surf/accessories/accessories-surfica-board-bags/surfica-longboard-bag/'>Longboard Bags</a></li>
                                                <li><a href='${url_frag}/surf/accessories/accessories-surfica-board-bags/surfica-all-rounder-sup-board-bag/'>All Rounder SUP Bags</a></li>
                                                <li><a href='${url_frag}/surf/accessories/accessories-surfica-board-bags/surfica-flatwater-sup-bag/'>Flat Water SUP Bags</a></li>
                                                <li><a href='${url_frag}/surf/accessories/accessories-leashes/surfica-leashes/'>Surf Leashes</a></li>
                                                <li><a href='${url_frag}/surf/accessories/accessories-leashes/surfica-sup-leashes/'>SUP Leashes</a></li>"; 
                                            	if ($userCountry == 'US'){
												     echo "<li><a href='${url_frag}/surf/accessories/accessories-pads/surfica-5-piece-tail-pad/'>Tail Pad</a></li></li>"; 
												}
								  				echo "
										</ul> 
									</li>
                                    <li>
                                    	<ul>
											<li><a class='titleHeading' href='${url_frag}/surf-accessories/hang-up-systems/'>HANG UP SYSTEMS</a></li> 
                                            <li><a href='${url_frag}/surf/accessories/accessories-hang-ups/hang-up-system-fcs/'>FCS Hang Up</a></li>
                                            <li><a href='${url_frag}/surf/accessories/accessories-hang-ups/hang-up-system-future-fins/'>Futures Fins Hang Up</a></li>
                                            <li><a href='${url_frag}/surf/accessories/accessories-hang-ups/hang-up-system-longboard-box/'>Longboard Box</a></li>
                                            <li><a href='${url_frag}/surf/accessories/accessories-hang-ups/hang-up-system-sup/'>SUP Hang UP</a></li>  <br>
                                            <li><a class='titleHeading' href='${url_frag}/surf-accessories/fins/'>FINS</a></li> <br>
                                            <li><a class='titleHeading' href='".HOME."gsi-mobile-apps.php'>MOBILE APPS</a></li>
                                        </ul>
                                 	</li>
									<li>
                                    	<ul>
                                        	<li><a class='titleHeading' href='${url_frag}/surf-accessories/paddle-accessories/'>PADDLE ACCESSORIES</a> </li>
                                            <li><a href='${url_frag}/surf/accessories/paddle-accessories/lever-lock-cable/'>Lever Lock Cable</a></li>
											<li><a href='${url_frag}/surf/accessories/paddle-accessories/lever-lock-handle/'>Lever Lock Handle</a></li>
									        <li><a href='${url_frag}/surf/accessories/paddle-accessories/lever-lock-lever/'>Lever Lock Lever</a></li>
											<li><a href='${url_frag}/surf/accessories/paddle-accessories/lever-lock-pin/'>Lever Lock Pin</a></li>
                                        </ul>
                                    </li>
                              	</ul>
                            </li>";
							}?>
                            <li class="has-dropdown">
                            	<?php 
									if (($userCountry == 'NZ') || ($userCountry == 'AU')) {
										echo "<a href='#'>HOW TO</a>";
                                		echo "<ul class='mega-menu how-to-mega-menu'>";
                                			echo "<li class='how-mega-menu'>";
                                    			echo "<ul>";
                                        			echo "<li><a class='titleHeading ' href='${url_frag_2}/pages/how-to-apply-a-tail-pad'>HOW TO VIDEOS</a>";
													echo "<li><a href='${url_frag_2}/pages/how-to-apply-a-tail-pad'>How to apply a tail pad</a></li>";
													echo "<li><a href='${url_frag_2}/pages/how-to-attach-a-leg-rope'>How to attach a Leg Rope</a></li>"; 
													echo "<li><a href='${url_frag_2}/pages/how-to-attach-a-traditional-leg-string'>How to attach a Traditional Leash String</a></li>"; 
													echo "<li><a href='${url_frag_2}/pages/how-to-choose-a-surfboard'>How to choose a Surfboard</a></li>"; 
													echo "<li><a href='${url_frag_2}/pages/how-to-inflate-an-inflatable-sup'>How to inflate an inflatable SUP</a></li>";
													echo "<li><a href='${url_frag_2}/pages/how-to-insert-original-fcs-fins'>How to Insert original FCS Fins</a></li>"; 
													echo "<li><a href='${url_frag_2}/pages/how-to-insert-an-original-fcs-hang-up'>How to Insert original FCS Hang Up</a></li>"; 
													echo "<li><a href='${url_frag_2}/pages/how-to-insert-fcsii-fins'>How to Insert FCSII Fins</a></li>"; 
													echo "<li><a href='${url_frag_2}/pages/how-to-insert-an-fcsii-hang-up'>How to Insert FCSII Hang Up</a></li>"; 
													echo "<li><a href='${url_frag_2}/pages/how-to-insert-a-futures-fins-hang-up'>How to Insert Futures Hang Up</a></li>"; 
													echo "<li><a href='${url_frag_2}/pages/how-to-insert-longboard-sup-fins'>How to insert a Longboard / SUP fin</a></li>"; 
													echo "<li><a href='${url_frag_2}/pages/how-to-insert-longboard-hang-up'>How to Insert a Longboard Hang Up</a></li>";
													echo "<li><a href='${url_frag_2}/pages/how-to-insert-a-sup-hang-up'>How to Insert a SUP Hang Up</a></li>"; 
													echo "<li><a href='${url_frag_2}/pages/how-to-use-the-leverlock-system-on-a-trident-sup-paddles'>How to use the LeverLock System</a></li>"; 
													echo "<li><a href='${url_frag_2}/pages/how-to-wax-a-surfboard'>How to wax a surfboard</a></li>"; 
												echo "</ul>"; 
											echo "</li>";
                            			echo "</ul>";
                                        echo "<br>";
										}
								else  {
									echo "<a href='".HOME."videos/how-to-videos.php'>HOW TO</a>";
                                	echo "<ul class='mega-menu how-to-mega-menu'>";
                                		echo "<li class='how-mega-menu'>";
                                    		echo "<ul>";
												echo "<li><a class='titleHeading ' href='".HOME."videos/how-to-videos.php'>HOW TO VIDEOS</a>";
												echo "<li><a href='".HOME."videos/how-to-apply-a-tail-pad.php'>How to apply a tail pad</a></li>";
												echo "<li><a href='".HOME."videos/how-to-attach-a-leg-rope.php'>How to attach a Leg Rope</a></li>"; 
												echo "<li><a href='".HOME."videos/how-to-attach-a-traditional-leash-string.php'>How to attach a Traditional Leash String</a></li>"; 
												echo "<li><a href='".HOME."videos/how-to-choose-a-surfboard.php'>How to choose a Surfboard</a></li>"; 
												echo "<li><a href='".HOME."videos/how-to-inflate-a-sup.php'>How to inflate an inflatable SUP</a></li>";
												echo "<li><a href='".HOME."videos/how-to-insert-original-fcs-fins.php'>How to Insert original FCS Fins</a></li>"; 
												echo "<li><a href='".HOME."videos/how-to-insert-original-fcs-hangup.php'>How to Insert original FCS Hang Up</a></li>"; 
												echo "<li><a href='".HOME."videos/how-to-insert-fcsll-fins.php'>How to Insert FCSII Fins</a></li>"; 
												echo "<li><a href='".HOME."videos/how-to-insert-fcsII-hangup.php'>How to Insert FCSII Hang Up</a></li>"; 
												echo "<li><a href='".HOME."videos/how-to-insert-futures-hangup.php'>How to Insert Futures Hang Up</a></li>"; 
												echo "<li><a href='".HOME."videos/how-to-insert-longboard-sup-fins.php'>How to insert a Longboard / SUP fin</a></li>"; 
												echo "<li><a href='".HOME."videos/how-to-insert-longboard-hangup.php'>How to Insert a Longboard Hang Up</a></li>";
												echo "<li><a href='".HOME."videos/how-to-insert-sup-hangup.php'>How to Insert a SUP Hang Up</a></li>"; 
												echo "<li><a href='".HOME."videos/how-to-use-leverlock-system.php'>How to use the LeverLock System</a></li>"; 
												echo "<li><a href='".HOME."videos/how-to-wax-a-surfboard.php'>How to wax a surfboard</a></li>"; 
                                            echo "</ul>"; 
										echo "</li>";
                            		echo "</ul>";
                                    echo "<br>";
								}
                                ?>
                         	<?php 
                            echo "<li class='has-dropdown'>
                            	<a href='#''> LOGIN </a>
                                    <ul>";
										 if (($userCountry !== 'NZ') &&  ($userCountry !== 'AU')){
											echo "<li><a href= '${url_frag}/affiliate-area/'>Become an Affiliate</a></li>";
									 	}
                                        echo "
                                         <li><a href='https://system.na2.netsuite.com/app/login/secure/privatelogin.nl?c=3743011'>Dealer Portal</a> </li>
                                         <li><a href='https://system.na2.netsuite.com/app/login/secure/privatelogin.nl?c=3743011'>Distributor Portal</a> </li>
                                         <li><a href='".HOME."GSIpayments'>Make a Payment</a> </li>
                                         <li><a href='".HOME."media/media-login.php'>Media</a> </li>";
										 if (($userCountry !== 'NZ') &&  ($userCountry !== 'AU')){
                                         echo "<li><a href= '${url_frag}/my-account/'>Online Customer</a> </li>";
										 }
                                         echo "<li><a href='".HOME."TM-portal/tm-portal-login.php'>TM Portal</a> </li>
                                    </ul>
                               </li>
							   <li class='has-dropdown'>
                                    <a href='#''>
                                        CONTACT US
                                    </a>
                                            <ul>
                                                <li><a href='https://au.surfindustries.com/pages/contacts'>AUSTRALIAN CONTACTS</a> </li>
                                                <li><a href='https://nz.surfindustries.com/pages/contacts'>NEW ZEALAND CONTACTS</a></li>
                                                <li><a href='".HOME."contacts/contacts-usa.php'>US CONTACTS</a> </li>
                                                <li><a href='".HOME."contacts/contacts-worldwide.php'>WORLDWIDE CONTACTS</a> </li>
                                            </ul>
                                </li>
					           <li class='subscribeLabel visible-xs visible-sm visible-md pt16 pb16'><a class='subscribeLabel' href='".HOME."newsletter/newsletterSubs.php'>Subscribe</a></li>"; 
								  ?>
					        </ul>
                        </div>
                        <!--end of menu module-->
                    </div>
                    <!--end of module group-->
                </div>
            </nav>
        </div>