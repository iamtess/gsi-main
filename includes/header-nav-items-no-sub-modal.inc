<div class="nav-container">
            <a id="top"></a>
            <nav class="nav-centered">
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
                        	<span class="sub">AUS 1300 765 897</span>
						</div>
						<div class="moduleTop left">
							<i class="ti-mobile">&nbsp;</i>
							<span class="sub">NZ 1300 765 897</span>
						</div>
						<div class="moduleTop left">
							<i class="ti-mobile">&nbsp;</i>
							<span class="sub">US 1300 765 897</span>
						</div>';
					}
					else if ($userCountry == 'NZ'){
						echo '
						<div class="moduleTop left">
							<i class="ti-mobile">&nbsp;</i>
							<span class="sub">NZ 1300 765 897</span>
						</div>
						<div class="moduleTop left">
                        	<i class="ti-mobile">&nbsp;</i>
                        	<span class="sub">AUS 1300 765 897</span>
						</div>
						<div class="moduleTop left">
							<i class="ti-mobile">&nbsp;</i>
							<span class="sub">US 1300 765 897</span>
						</div>';
					}
					else {
						echo '
						<div class="moduleTop left">
							<i class="ti-mobile">&nbsp;</i>
							<span class="sub">US 1300 765 897</span>
						</div>
						<div class="moduleTop left">
                        	<i class="ti-mobile">&nbsp;</i>
                        	<span class="sub">AUS 1300 765 897</span>
						</div>
						<div class="moduleTop left">
							<i class="ti-mobile">&nbsp;</i>
							<span class="sub">NZ 1300 765 897</span>
						</div>';
						
					}
					
					?>
                    
                    
                    
                    
                    <div class="module right">
                        <span class="sub" STYLE="letter-spacing: 0.0625em;">FREE SHIPPING ON ALL WEB ORDERS&nbsp;&nbsp;</span>
                        
                        <?php //echo "<a class='btn btn-sm btn-filled' href= '${url_frag}'>Buy Online</a>"; ?>
                        <?php echo "<a class='btn btn-sm hidden-xs hidden-sm hidden-md' href='".HOME."newsletter/newsletterSubs.php'>Subscribe</a>"; ?>
                        
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
                                                    <?php echo "<a href='${url_frag}/surf-category/beginner/'>Beginner</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf-category/finless/'>Finless</a>"; ?>
                                                </li>
                                                <li>
                                                 <?php echo "<a href='${url_frag}/surf-category/fish/'>Fish</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf-category/mid-length-surfboards/'>Mid Lengths</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf-category/longboards/'>Longboards</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf-category/shortboards/'>Shortboards</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf-category/tri-quad/'>Tri Quads</a>"; ?>
                                                </li>
                                                <br>
                                                <br>
                                                <li>
                                                <?php echo "<a class='smllTitle' href='".HOME."technology/surfboard-technology.php'>SURFBOARD TECHNOLOGY</a>"; ?>
												</li>
                                                 <li>
													<?php echo "<a class='smllTitle' href='".HOME."technology/sup-technology.php'>ONLINE SALE</a>"; ?>
                                                </li>
                                                <!-- <li>
													<span class="title">VOLUME CALCULATOR</span>
                                                </li> -->
                                                
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                               
													<?php echo "<a class='titleHeading' href='${url_frag}/brand/7s/'>7S</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/shortboards/7s-double-down-cv-shortboard/'>Double Down - CV</a>"; ?>
                                                    
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/shortboards/7s-double-down-im-shortboard/'>Double Down - IM</a>"; ?>
                                                    <span class="newLabel">New!</span>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/fish/7s-jetstream-im/'>Jetstream - IM</a>"; ?>
                                                    <span class="newLabel">New!</span>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/fish/7s-super-fish-3-cv/'>Superfish 3 - CV</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/fish/7s-super-fish-4-im/'>Superfish 4 - IM</a>"; ?>
                                                    <span class="newLabel">New!</span>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/fish/7s-super-fish-2-x2-surfboard/'>Superfish II - X2</a>"; ?>
                                                </li>
                                                <br>
                                                <li>
													<?php echo "<a class='titleHeading' href='${url_frag}/brand/creative-army/'>CREATIVE ARMY</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/creative-army-huevo-mid-length-pu-surfboard/'>Huevo - PU</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/creative-army-jive-pu-longboard/'>Jive - PU</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/creative-army-seahorse-pu-longboard/'>Seahorse - PU</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/shortboards/creative-army-taco-pu-shortboard/'>Taco - PU</a>"; ?>
                                                    
                                                </li>
                                                <br>
                                                <li>
													<?php echo "<a class='titleHeading' href='${url_frag}/brand/gnaraloo/'>GNARALOO</a>"; ?>
                                                </li>
                                                
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/beginner/gnaraloo-dune-buggy-softboard/'>Dune Buggy - soft</a>"; ?><span class="newLabel">New!</span>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/beginner/gnaraloo-fatty-surfboard/'>Fatty - soft</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/fish/gnaraloo-flounder-pounder-softboard/'>Flounder Pounder - soft</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/beginner/gnaraloo-soft-surfboard/'>Soft Surfboard - soft</a>"; ?>
                                                </li>
                                               
                                               
                                                
                                                
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                               <li>
													<?php echo "<a class='titleHeading' href='${url_frag}/brand/haydenshapes/'>HAYDENSHAPES</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/shortboards/haydenshapes-holy-grail-ff-shortboard/'>Holy Grail - FF</a>"; ?><span class="newLabel">New!</span>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/shortboards/haydenshapes-hypto-krypto-v-ff-fcs-ii-shortboard/'>Hypto Krypto - FF (FCSII)</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/shortboards/haydenshapes-hypto-krypto-ff-v-shortboard/'>Hypto Krypto - FF (Futures)</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/shortboards/haydenshapes-plunder-ff-shortboard/'>Plunder - FF</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/shortboards/haydenshapes-white-noiz-ff-shortboard/'>White Noiz - FF</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/fish/haydenshapes-untitled-ff-surfboard/'>Untitled - FF</a>"; ?>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                               <li>
													<?php echo "<a class='titleHeading' href='${url_frag}/brand/modern/'>MODERN</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/modern-blackbird-longboard/'>Blackbird - PU</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/modern-blackbird-x1-longboard/'>Blackbird - X1</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/modern-blackbird-x2-longboard/'>Blackbird - X1B</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/modern-double-wide-x1-longboard/'>Double Wide - X1</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/modern-double-wide-x2-longboard/'>Double Wide - X1B</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/shortboards/modern-highline-pu-shortboard/'>Highline - PU</a>"; ?>
                                                </li>
                                                <li>
													<?php echo "<a href='${url_frag}/surf/shortboards/modern-highline-x1-shortboard/'>Highline - X1</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/shortboards/modern-highline-x2-shortboard/'>Highline - X1B</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/mid-length-surfboards/modern-love-child-poly-shortboard/'>Love Child - PU</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/modern-retro-longboard/'>Retro - PU</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/modern-boss-pu-longboard/'>The Boss - PU</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/modern-the-boss-x1-longboard/'>The Boss - X1</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/modern-the-boss-x2-longboard/'>The Boss - X1B</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/fish/modern-wild-child-pu-surfboard/'>Wild Child - PU</a>"; ?>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul><li>
													<?php echo "<a class='titleHeading' href='${url_frag}/brand/seaglass-project/'>Superbrand</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/finless/seaglass-project-albacore-finless-surfboard/'>The Fling - SF</a>"; ?>
                                                    <span class="newLabel">New!</span>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/finless/seaglass-project-albacore-finless-surfboard/'>The Vapors - SF</a>"; ?>
                                                    <span class="newLabel">New!</span>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/finless/seaglass-project-albacore-finless-surfboard/'>Unit - SF</a>"; ?>
                                                    <span class="newLabel">New!</span>
                                                </li>
                                                <br>
                                               <li>
													<?php echo "<a class='titleHeading' href='${url_frag}/brand/seaglass-project/'>The Seaglass Project</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/finless/seaglass-project-albacore-finless-surfboard/'>Albacore - soft</a>"; ?>
                                                </li>
                                                <br>
                                                <li>
                                                    <?php echo "<a class='titleHeading' href='${url_frag}/brand/three-palms-board-co-surf.php'>Three Palms Board Co.</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/three-palms-board-co-soft-surfboard/'>Surfboard - soft</a>"; ?>
                                                    <span class="newLabel">New!</span>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/three-palms-x3-longboard/'>Surfboard - X3</a>"; ?>
                                                </li>
                                                <br>
                                                <li>
                                                    <?php echo "<a class='titleHeading' href='${url_frag}/brand/walden/'>Walden</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/walden-magic-model-poly-longboard/'>Magic Model - PU</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/walden-magic-model-x2-longboard/'>Magic Model - X2</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/walden-mega-magic-2-x2-longboard/'>Mega Magic 2 - SLX</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/longboards/walden-mega-magic-2-slx-longboard/'>Mega Magic 2 - X2</a>"; ?>
                                                    <span class="newLabel">New!</span>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/mid-length-surfboards/walden-mini-mega-magic-2-slx-surfboard/'>Mini Mega Magic 2 - SLX</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/mid-length-surfboards/walden-mini-mega-magic-2-x2-surfboard/'>Mini Mega Magic 2 - X2</a>"; ?>
                                                    <span class="newLabel">New!</span>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        STAND UP PADDLEBOARDS
                                    </a>
                                    <ul class="mega-menu">
                                        <li>
                                            <ul>
                                                <li>
                                                    <?php echo "<a class='titleHeading' href='${url_frag}/sups-type/'>TYPE</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf-category/stand-up-paddle-board/all-rounder/'>ALL ROUNDER</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf-category/stand-up-paddle-board/flatwater/'>FLATWATER</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf-category/stand-up-paddle-board/inflatable/'>INFLATABLE</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf-category/stand-up-paddle-board/surf/'>SURF</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf-category/stand-up-paddle-board/yoga-sup/'>YOGA</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf-category/paddles/'>SUP PADDLES</a>"; ?>
                                                </li>
                                                <br>
                                                <br>
                                                <li>
													<?php echo "<a class='smllTitle' href='".HOME."technology/sup-technology.php'>SUP TECHNOLOGY</a>"; ?>
                                                </li>
                                                <li>
													<?php echo "<a class='smllTitle' href='".HOME."technology/sup-technology.php'>ONLINE SALE</a>"; ?>
                                                </li>
                                                <!-- <li>
													<span class="title">VOLUME CALCULATOR</span>
                                                </li> -->
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <?php echo "<a class='titleHeading' href='${url_frag}/brand/adventure-paddleboarding/'>ADVENTURE PADDLEBOARDING</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/all-rounder/adventure-paddleboarding-all-rounder-cx-sup/'>ALL ROUNDER - CX</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/all-rounder/adventure-paddleboarding-rounder-mx-sup/'>ALL ROUNDER - MX</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/all-rounder/adventure-paddleboarding-all-rounder-x1-sup/'>ALL ROUNDER- X1</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/adventure-paddleboarding-all-rounder-x2-sup/'>ALL ROUNDER - X2</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/flatwater/adventure-paddleboarding-explorer-2-cx-sup/'>EXPLORER 2 - CX</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/flatwater/adventure-paddleboarding-the-explorer-2-x2-sup/'>EXPLORER 2 - X2</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/all-rounder/adventure-paddleboarding-fifty-fifty-mx-sup/'>FIFTY FIFTY - X1</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/inflatable/adventure-paddleboarding-inflatable-isup/'>10'2 INFLATABLE SUP</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/flatwater/12-adventure-paddleboarding-inflatable-isup/'>12'0 INFLATABLE SUP</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/all-rounder/adventure-paddleboarding-project-y-x2-sup/'>PROJECT Y - X2</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/all-rounder/adventure-paddleboarding-seventy-thirty-cx-sup/'>SEVENTY THIRTY - CX</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/surf/adventure-paddleboarding-sixty-forty-mx-sup/'>SIXTY FORTY - MX</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/all-rounder/adventure-paddleboarding-sixty-forty-x1-sup/'>SIXTY FORTY - X1</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/surf/adventure-paddleboarding-sixty-forty-x2-sup/'>SIXTY FORTY - X2</a>"; ?>
                                                </li>
                                            </ul>
										</li>
                                         <li>
                                             <ul>
                                                <li>
                                                    <?php echo "<a class='titleHeading noleftPad' href='${url_frag}/brand/three-palms-board-co/'>THREE PALMS BOARD CO.</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/all-rounder/three-palms-soft-sup/'>SUP - soft</a>"; ?>
                                                    <span class="newLabel">New!</span>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/all-rounder/the-three-palms-x3-stand-up-paddleboard/'>SUP - X3</a>"; ?>
                                                </li>
                                                <br>
                                                <br>
                                                <li>
                                                    <?php echo "<a class='titleHeading noleftPad' href='${url_frag}/brand/tom-carroll-paddle-surf/'>TOM CARROLL PADDLE SURF</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/surf/tom-carroll-paddle-surf-long-grain-v2-cx-sup/'>LONG GRAIN V2 - CX</a>"; ?>
													<span class="newLabel">NEW!</span>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/surf/tom-carroll-paddle-surf-loose-leaf-v2-cx-sup/'>LOOSE LEAF V2 - CX</a>"; ?>
													<span class="newLabel">NEW!</span>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/stand-up-paddle-board/all-rounder/tom-carroll-outer-reef-x2-sup/'>OUTER REEF - CX</a>"; ?>
											    </li>
                                                
											</ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        PADDLES
                                    </a>
                                    <ul class="mega-menu">
                                        <li>
                                            <ul>
                                                <li>
                                                    <?php echo "<a class='titleHeading' href='${url_frag}/brand/trident-paddles/'>TRIDENT PADDLES</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/paddles/trident-t669c-carbon-paddle/'>669CR Fixed Paddle</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/paddles/trident-669cr-ll-adj-paddle/'>669CR-LL Adj Paddle</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/paddles/trident-588cr-ll-adj-paddle/'>588CR-LL Adj Paddle</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/paddles/trident-t669a-adjustable-paddle-lever-lock/'>669FG-LL Adj Paddle</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/paddles/trident-t588a-adjustable-paddle-lever-lock/'>588FG-LL Adj Paddle</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/paddles/trident-t6al-ll-adjustable-paddle/'>T6AL-LL ADj Paddle</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/paddles/trident-t6fg-adjustable-paddle-lever-lock/'>T6FG-LL Adj Paddle</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surf/paddles/trident-t6fg-ll3p-sup-paddle/'>T6FG-LL3P Adj Paddle</a>"; ?>
                                                    <span class="newLabel">New!</span>
                                                </li>
                                               
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        ACCESSORIES
                                    </a>
                                    <ul class="mega-menu">
                                        <li>
                                            <ul>
                                                <li>
                                                   
                                                   
                                                    <?php echo "<a class='titleHeading' href='${url_frag}/brands/surfica-surf-accessories/'>SURFICA ACCESSORIES</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surfica-surf-board-bag/'>Surfboard Bags</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surfica-longboard-bag/'>Longboard Bags</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surfica-all-rounder-sup-board-bag/'>All Rounder SUP Bags</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surfica-flatwater-sup-bag/'>Flat Water SUP Bags</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surfica-leashes/'>Surf Leashes</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surfica-sup-leashes/'>SUP Leashes</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/surfica-5-piece-tail-pad/'>Tail Pad</a>"; ?>
                                                </li>
											</ul> 
										</li>
                                        <li>
                                              <ul>
                                                <li>
                                                  
                                                   
                                                    <?php echo "<a class='titleHeading' href='${url_frag}/surf-accessories/hang-up-systems/'>HANG UP SYSTEMS</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/hang-up-system-future-fins/'>Futures Fins Hang Up</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/hang-up-system-fcs/'>FCS Hang Up</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/hang-up-system-sup/'>SUP Hang UP</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='${url_frag}/hang-up-system-longboard-box/'>Longboard Box</a>"; ?>
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
                                                   <?php echo "<a href='".HOME."videos/how-to-videos.php#tailpad'>How to apply a tail pad</a>"; ?>
                                                    
                                                </li>
                                                <li>
                                                    <?php echo "<a href='".HOME."videos/how-to-videos.php#legrope'>How to attach a Leg Rope</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='".HOME."videos/how-to-videos.php#tradleash'>How to Apply a Traditional Leash String</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='".HOME."videos/how-to-videos.php#inflatesup'>How to inflate an inflatable SUP</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='".HOME."videos/how-to-videos.php#fcsorig'>How to Insert original FCS Fins</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='".HOME."video/how-to-videos.php#fcs2'>How to Insert FCSII Fins</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='".HOME."videos/how-to-videos.php#futures'>How to insert Futures Fins</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='".HOME."videos/how-to-videos.php#longboardfin'>How to insert a longboard fin</a>"; ?>
                                                </li>
                                                <li>
                                                    <?php echo "<a href='".HOME."videos/how-to-videos.php#chooseboard'>How to choose a Surfboard</a><span class='newLabel'> New!</span>"; ?>
                                                </li>
                                                <li>
                                                	<?php echo "<a href='".HOME."videos/how-to-videos.php#leverlock'>How to use the LeverLock System</a>"; ?>
												</li>
                                                <li>
                                                    <?php echo "<a href='".HOME."videos/how-to-videos.php#wax'>How to wax a surfboard</a>"; ?>
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
                                           <?php echo "<a href='".HOME."distributor-portal/dist-portal-login.php'>Distributor Portal</a>"; ?>
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
                                 <li>
                                    <?php echo "<a href='".HOME."blog/index.php'>STOCKISTS</a>"; ?>
                                    
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
                                                    <?php echo "<a href='".HOME."contacts/contacts-worldwide.php'>WORLDWIDE CONTACTS</a>"; ?>
                                                </li>
                                            </ul>
                                        
                                       
                                       
                                    
                                </li>
                            </ul>
                        </div>
                        <!--end of menu module-->
                       
                        
                        
                    </div>
                    <!--end of module group-->
                </div>
            </nav>
        </div>