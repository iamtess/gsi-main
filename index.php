<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES | buy your surfboard online | life is better when you surf</title>
        <?php 
		define( "HOME", "" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		include HOME . 'includes/header-includes.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
	?>
		
		<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
		
        
       
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/ytplayer.css" rel="stylesheet" type="text/css" media="all" />
       
     <!-- privacy open/close on subscription popup-->
	<script type="text/javascript">

    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }

</script>
     
     
    <META NAME='author' CONTENT="Global Surf Industries" >
    <META NAME='subject' CONTENT="global surf industries - the world's premier distributor of surfboards - read surfboard product information, find local surf shops or buy your surfboard online today" >
    <META NAME='Description' CONTENT="The world's premier distributor of surfboards - supplying shortboards, longboards, finless surfboards, beginner surfboards, standup paddle boards and funboards by 7 Surfboards,  Modern Surfboards, The Seaglass Project, Trident Paddles, Tom Carroll Paddle Surf,Creative Army Surfboards, Adventure Paddleboarding, Gnaraloo Soft surfboards, Surfica Surfboard and SUP accessories to the surfboard market.">
    <META NAME='Classification' CONTENT="Global Surf Industries - the world's premier distributor of surfboards - find product information, local surfboard shops or buy surfboards online." >
    <META NAME='Keywords' CONTENT="surfboards, surfboard, surfing, longboards, mark kelly, fish, shortboards, funboards, stand up paddle boards,hayden cox, josh constable, richie lovett, steve walden, tom carroll, tom wegener, life is better when you surf" >
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
           <!-- main image -->
           <!-- <section class="image-slider parallax pt0 pb0"> -->
				
                <section class="image-slider  pt0 pb0">
                <ul class="slides">
                    <li class=" image-bg pt240 pb240 pt-xs-120 pb-xs-120">
                            <?php
									if ($userCountry == 'AU'){
										
										echo "<div class='HMoverlay background-image-holder'>
										'<img alt='image' class='background-image' src='images/home-main-salt-gypsy-mid-2.jpg'>
										</div>";
									}
									else if ($userCountry == 'NZ'){
											echo "<div class='HMoverlay background-image-holder'>
										'<img alt='image' class='background-image' src='images/hm-pg-modern.jpg'>
										</div>";							
									}
									else {
										
										echo "<div class='HMoverlay background-image-holder'>
										'<img alt='image' class='background-image' src='images/home-main-salt-gypsy-mid-2.jpg'>
										</div>";
										

									}
								?>
                        <div class="container">
                            <div class="row text-center" >
                                <div class="col-md-12" >
                            <?php
									if ($userCountry == 'AU'){
										echo "<img src='images/home-main-logo-txt-salt-gypsy-mid-tide.png'  alt=''/><p><br><a class='btn btn-lg' href='https://au.surfindustries.com/products/salt-gypsy-mid-tide-mid-length-surfboard'>FIND OUT MORE</a></p>";
									}
									
									else if ($userCountry == 'NZ'){
										echo "<img src='images/home-main-logo-modern-2.png'  alt=''/><p><br><a class='btn btn-lg' href='https://nz.surfindustries.com/collections/modern-surfboards'>FIND OUT MORE</a></p>";
									}
									else {
										echo "<img src='images/home-main-logo-txt-salt-gypsy-mid-tide.png'  alt=''/><p><br><a class='btn btn-lg' href='https://shop.surfindustries.com/us/surf/midlength-surfboards/salt-gypsy-mid-tide-pu-surfboard/'>FIND OUT MORE</a></p>";
									}
								?>
                                                                                        </div>
                            </div>
                            <!--end of row-->
                            </div>
                        <!--end of container-->
                    </li>
                </ul>
            <!-- end main image -->
            </section>
           
            <section class="pt40 pb0">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="image-tile inner-title title-center text-center">
								
                               <?php 
								
								
								if ($userCountry == 'NZ') {
									echo "<a class='titleHeading' href='${url_frag_2}/collections/surfboards'>";
								}
								elseif ($userCountry == 'AU') {
									echo "<a class='titleHeading' href='${url_frag_2}/collections/surfboards'>";
								}
								else {
								echo "<a class='titleHeading' href='${url_frag}/surfboard-type/'>";
										
								}
								echo "		
                                    <img alt='browse by surfboards' src='images/hm-browse-surfboard-21.jpg' />
                                    <div class='title'>
										<h4 class='uppercase mb0'>BROWSE BY SURFBOARD</h4>
                                    </div>
                                </a>";  ?>
                            </div>
                        </div>
                       <div class="col-sm-6">
                            <div class="image-tile inner-title title-center text-center">
                               <?php 
								if ($userCountry == 'NZ') {
									echo "<a class='titleHeading' href='${url_frag_2}/collections/stand-up-paddleboards'>";
								}
								elseif ($userCountry == 'AU') {
									echo "<a class='titleHeading' href='${url_frag_2}/collections/stand-up-paddleboards'>";
								}
								else {
									echo "<a class='titleHeading' href='${url_frag}/sup-type/'>";
								}
								echo "
                                    <img alt='browse by sup' src='images/hm-browse-sup-21.jpg' />
                                    <div class='title'>
                                        <h4 class='uppercase mb0'>browse by sup</h4>
                                    </div>
                                </a>"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="pt40 pb0">
                <div class="container">
                    <div class="row">
                       
                       <?php
                       if ($userCountry == 'NZ'){
                        echo "<div class='col-sm-6'>
                            <div class='image-tile inner-title title-center text-center'>
                                 <a class='titleHeading' href='https://nz.surfindustries.com/collections/creative-army-surfboards'>
                                    <img alt='Creative Army Surfboards'  src='images/feat-prod-left-ca-2.jpg' />
                                    <div class='title'>
										<h4 class='uppercase mb0 redText'>CREATIVE ARMY</h4><h5 class='uppercase mb0'>VIEW THE RANGE</h5>
                                    </div>
                                </a>
			                </div>
                        </div>
                         <!--end three col-->
						<div class='col-sm-6'>
                       <div class='image-tile inner-title title-center text-center'>
                                 <a class='titleHeading' href='https://nz.surfindustries.com/collections/salt-gypsy-surfboards'>
                                    <img alt='Salt Gypsy Surfboards'  src='images/feat-prod-right-sg-2.jpg' />
                                    <div class='title'>
										<h4 class='uppercase mb0 redText'>SALT GYPSY</h4><h5 class='uppercase mb0'>VIEW THE RANGE</h5>
                                    </div>
                                </a>
			                </div>
                        </div>";
                        }
						elseif ($userCountry == 'AU') {
										
									 echo "<div class='col-sm-6'>
                            <div class='image-tile inner-title title-center text-center'>
                                 <a class='titleHeading' href='${url_frag_2}/collections/surfboard-sup-sale'>
                                    <img alt='hayden shapes holy grail'  src='images/feat-prod-left-surf-sup-sale.jpg' />
                                    <div class='title'>
										<h4 class='uppercase mb0 redText'>SURFBOARD & SUP SALE</h4><h5 class='uppercase mb0'>ON NOW</h5>
                                    </div>
                                </a>
							
                            </div>
                        </div>
                         <!--end three col-->
                        <div class='col-sm-6'>
                            <div class='image-tile inner-title title-center text-center'>
                              <a class='titleHeading' href='${url_frag_2}/collections/salt-gypsy-surfboards'>
                                    <img alt='Salt Gypsy Surfboards & SUPs' src='images/feat-prod-right-SG-1.jpg' />
									<div class='title'>
									    <h4 class='uppercase mb0'> <img alt='Salt Gypsy Surfboards & SUPs' src='images/feat-prod-right-SG-logo.png' style='width: 20%; height: 20%' /></h4>
										<h5 class='uppercase mb0'>available now</h5>
                                    </div>
                                </a>
                         </div>
                        </div>"; 
									}
									else {
										
									 echo "<div class='col-sm-6'>
                            <div class='image-tile inner-title title-center text-center'>
                                 <a class='titleHeading' href='${url_frag}/on-sale/'>
                                    <img alt='hayden shapes holy grail'  src='images/feat-prod-left-surf-sup-sale.jpg' />
                                    <div class='title'>
										<h4 class='uppercase mb0 redText'>SURFBOARD & SUP SALE</h4><h5 class='uppercase mb0'>ON NOW</h5>
                                    </div>
                                </a>
							
                            </div>
                        </div>
                         <!--end three col-->
                        <div class='col-sm-6'>
                            <div class='image-tile inner-title title-center text-center'>
                              <a class='titleHeading' href='${url_frag}/brands/salt-gypsy-surfboards/'>
                                    <img alt='Salt Gypsy Surfboards & SUPs' src='images/feat-prod-right-SG-1.jpg' />
									<div class='title'>
									    <h4 class='uppercase mb0'> <img alt='Salt Gypsy Surfboards & SUPs' src='images/feat-prod-right-SG-logo.png' style='width: 20%; height: 20%' /></h4>
										<h5 class='uppercase mb0'>available now</h5>
                                    </div>
                                </a>
                         </div>
                        </div>"; 
									}
								?>
                               
                               
                               
                               
                               
                               
                               
                                
                            
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
           <?php include HOME . 'includes/footer.inc'; ?>
        </div>
        <div class="foundry_modal text-center  image-bg overlay" data-time-delay="5000" data-cookie="dismissed-homepage-subscribe-modal">
          <div class="background-image-holder">
                <?php echo "<img src='" . IMAGES_DIR ."login-bground.jpg' class='background-image' alt='Global Surf Industries - Subscribe to Newsletter'>"; ?>
            </div>
            <h2 class="uppercase pt64 pt-xs-0">SUBSCRIBE</h2>  
            <h5 class="text-center ">
                Subscribe and get * Latest product releases * Sale alerts & special promos * News stories & Videos
                
				</h5>
			<br />
				<h4>LIFE IS BETTER WHEN YOU SURF!</h4>
                <!-- Begin MailChimp Signup Form -->
			
				<style type="text/css">
					#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
					/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
					   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
				</style>
				
				<div class="feature bordered text-center">
                                <form action="https://surfindustries.us2.list-manage.com/subscribe/post?u=d70e70edf08c660f1ae4fb4ea&amp;id=bd79415f06" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>   
                                   <!-- <input type="text" value="" name="FNAME" class="mb0" required id="mce-FNAME" placeholder="Your Name"> -->
                                    <input type="text" value="" name="EMAIL" class="mb0" required id="mce-EMAIL" placeholder="Your Email">
                                    <div class="select-option mb0">
											<select name="COUNTRY" placeholder="country" id="mce-COUNTRY">
												<option value="">COUNTRY</option>
												<option value="United States of America">United States of America</option>
												<option value="Aaland Islands">Aaland Islands</option>
												<option value="Afghanistan">Afghanistan</option>
												<option value="Albania">Albania</option>
												<option value="Algeria">Algeria</option>
												<option value="American Samoa">American Samoa</option>
												<option value="Andorra">Andorra</option>
												<option value="Angola">Angola</option>
												<option value="Anguilla">Anguilla</option>
												<option value="Anguilla">Anguilla</option>
												<option value="Antarctica">Antarctica</option>
												<option value="Antigua And Barbuda">Antigua And Barbuda</option>
												<option value="Argentina">Argentina</option>
												<option value="Armenia">Armenia</option>
												<option value="Aruba">Aruba</option>
												<option value="Australia">Australia</option>
												<option value="Austria">Austria</option>
												<option value="Azerbaijan">Azerbaijan</option>
												<option value="Bahamas">Bahamas</option>
												<option value="Bahrain">Bahrain</option>
												<option value="Bangladesh">Bangladesh</option>
												<option value="Barbados">Barbados</option>
												<option value="Belarus">Belarus</option>
												<option value="Belgium">Belgium</option>
												<option value="Belize">Belize</option>
												<option value="Benin">Benin</option>
												<option value="Bermuda">Bermuda</option>
												<option value="Bhutan">Bhutan</option>
												<option value="Bolivia">Bolivia</option>
												<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
												<option value="Botswana">Botswana</option>
												<option value="Bouvet Island">Bouvet Island</option>
												<option value="Brazil">Brazil</option>
												<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
												<option value="Brunei Darussalam">Brunei Darussalam</option>
												<option value="Bulgaria">Bulgaria</option>
												<option value="Burkina Faso">Burkina Faso</option>
												<option value="Burundi">Burundi</option>
												<option value="Cambodia">Cambodia</option>
												<option value="Cameroon">Cameroon</option>
												<option value="Canada">Canada</option>
												<option value="Cape Verde">Cape Verde</option>
												<option value="Cayman Islands">Cayman Islands</option>
												<option value="Central African Republic">Central African Republic</option>
												<option value="Chad">Chad</option>
												<option value="Chile">Chile</option>
												<option value="China">China</option>
												<option value="Christmas Island">Christmas Island</option>
												<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
												<option value="Colombia">Colombia</option>
												<option value="Comoros">Comoros</option>
												<option value="Congo">Congo</option>
												<option value="Cook Islands">Cook Islands</option>
												<option value="Costa Rica">Costa Rica</option>
												<option value="Costa Rica">Costa Rica</option>
												<option value="Cote D'Ivoire">Cote D'Ivoire</option>
												<option value="Croatia">Croatia</option>
												<option value="Cuba">Cuba</option>
												<option value="Cyprus">Cyprus</option>
												<option value="Czech Republic">Czech Republic</option>
												<option value="Denmark">Denmark</option>
												<option value="Djibouti">Djibouti</option>
												<option value="Dominica">Dominica</option>
												<option value="Dominica">Dominica</option>
												<option value="Dominican Republic">Dominican Republic</option>
												<option value="East Timor">East Timor</option>
												<option value="Ecuador">Ecuador</option>
												<option value="Egypt">Egypt</option>
												<option value="El Salvador">El Salvador</option>
												<option value="Equatorial Guinea">Equatorial Guinea</option>
												<option value="Eritrea">Eritrea</option>
												<option value="Estonia">Estonia</option>
												<option value="Ethiopia">Ethiopia</option>
												<option value="Falkland Islands">Falkland Islands</option>
												<option value="Faroe Islands">Faroe Islands</option>
												<option value="Fiji">Fiji</option>
												<option value="Finland">Finland</option>
												<option value="France">France</option>
												<option value="French Guiana">French Guiana</option>
												<option value="French Polynesia">French Polynesia</option>
												<option value="French Southern Territories">French Southern Territories</option>
												<option value="Gabon">Gabon</option>
												<option value="Gambia">Gambia</option>
												<option value="Germany">Germany</option>
												<option value="Ghana">Ghana</option>
												<option value="Gibraltar">Gibraltar</option>
												<option value="Greece">Greece</option>
												<option value="Greenland">Greenland</option>
												<option value="Grenada">Grenada</option>
												<option value="Guadeloupe">Guadeloupe</option>
												<option value="Guam">Guam</option>
												<option value="Guatemala">Guatemala</option>
												<option value="Guernsey">Guernsey</option>
												<option value="Guinea">Guinea</option>
												<option value="Guinea-Bissau">Guinea-Bissau</option>
												<option value="Guyana">Guyana</option>
												<option value="Haiti">Haiti</option>
												<option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
												<option value="Honduras">Honduras</option>
												<option value="Hong Kong">Hong Kong</option>
												<option value="Hungary">Hungary</option>
												<option value="Iceland">Iceland</option>
												<option value="India">India</option>
												<option value="Indonesia">Indonesia</option>
												<option value="Iran">Iran</option>
												<option value="Iraq">Iraq</option>
												<option value="Ireland">Ireland</option>
												<option value="Israel">Israel</option>
												<option value="Italy">Italy</option>
												<option value="Jamaica">Jamaica</option>
												<option value="Japan">Japan</option>
												<option value="Jersey  (Channel Islands)">Jersey  (Channel Islands)</option>
												<option value="Jordan">Jordan</option>
												<option value="Kazakhstan">Kazakhstan</option>
												<option value="Kenya">Kenya</option>
												<option value="Kiribati">Kiribati</option>
												<option value="Kuwait">Kuwait</option>
												<option value="Kuwait">Kuwait</option>
												<option value="Kyrgyzstan">Kyrgyzstan</option>
												<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
												<option value="Latvia">Latvia</option>
												<option value="Lebanon">Lebanon</option>
												<option value="Lesotho">Lesotho</option>
												<option value="Liberia">Liberia</option>
												<option value="Libya">Libya</option>
												<option value="Liechtenstein">Liechtenstein</option>
												<option value="Lithuania">Lithuania</option>
												<option value="Luxembourg">Luxembourg</option>
												<option value="Macau">Macau</option>
												<option value="Macedonia">Macedonia</option>
												<option value="Madagascar">Madagascar</option>
												<option value="Malawi">Malawi</option>
												<option value="Malaysia">Malaysia</option>
												<option value="Maldives">Maldives</option>
												<option value="Mali">Mali</option>
												<option value="Malta">Malta</option>
												<option value="Marshall Islands">Marshall Islands</option>
												<option value="Martinique">Martinique</option>
												<option value="Mauritania">Mauritania</option>
												<option value="Mauritius">Mauritius</option>
												<option value="Mayotte">Mayotte</option>
												<option value="Mexico">Mexico</option>
												<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
												<option value="Moldova, Republic of">Moldova, Republic of</option>
												<option value="Monaco">Monaco</option>
												<option value="Mongolia">Mongolia</option>
												<option value="Montenegro">Montenegro</option>
												<option value="Montserrat">Montserrat</option>
												<option value="Morocco">Morocco</option>
												<option value="Mozambique">Mozambique</option>
												<option value="Myanmar">Myanmar</option>
												<option value="Namibia">Namibia</option>
												<option value="Nauru">Nauru</option>
												<option value="Nepal">Nepal</option>
												<option value="Netherlands">Netherlands</option>
												<option value="Netherlands Antilles">Netherlands Antilles</option>
												<option value="New Caledonia">New Caledonia</option>
												<option value="New Zealand">New Zealand</option>
												<option value="Nicaragua">Nicaragua</option>
												<option value="Niger">Niger</option>
												<option value="Nigeria">Nigeria</option>
												<option value="Niue">Niue</option>
												<option value="Norfolk Island">Norfolk Island</option>
												<option value="North Korea">North Korea</option>
												<option value="Northern Mariana Islands">Northern Mariana Islands</option>
												<option value="Norway">Norway</option>
												<option value="Oman">Oman</option>
												<option value="Pakistan">Pakistan</option>
												<option value="Palau">Palau</option>
												<option value="Palestine">Palestine</option>
												<option value="Panama">Panama</option>
												<option value="Papua New Guinea">Papua New Guinea</option>
												<option value="Paraguay">Paraguay</option>
												<option value="Peru">Peru</option>
												<option value="Philippines">Philippines</option>
												<option value="Pitcairn">Pitcairn</option>
												<option value="Poland">Poland</option>
												<option value="Portugal">Portugal</option>
												<option value="Puerto Rico">Puerto Rico</option>
												<option value="Qatar">Qatar</option>
												<option value="Republic of Georgia">Republic of Georgia</option>
												<option value="Reunion">Reunion</option>
												<option value="Romania">Romania</option>
												<option value="Russia">Russia</option>
												<option value="Russia">Russia</option>
												<option value="Rwanda">Rwanda</option>
												<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
												<option value="Saint Lucia">Saint Lucia</option>
												<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
												<option value="Samoa (Independent)">Samoa (Independent)</option>
												<option value="San Marino">San Marino</option>
												<option value="Sao Tome and Principe">Sao Tome and Principe</option>
												<option value="Saudi Arabia">Saudi Arabia</option>
												<option value="Senegal">Senegal</option>
												<option value="Serbia">Serbia</option>
												<option value="Serbia">Serbia</option>
												<option value="Seychelles">Seychelles</option>
												<option value="Sierra Leone">Sierra Leone</option>
												<option value="Singapore">Singapore</option>
												<option value="Slovakia">Slovakia</option>
												<option value="Slovenia">Slovenia</option>
												<option value="Solomon Islands">Solomon Islands</option>
												<option value="Somalia">Somalia</option>
												<option value="South Africa">South Africa</option>
												<option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
												<option value="South Korea">South Korea</option>
												<option value="South Korea">South Korea</option>
												<option value="Spain">Spain</option>
												<option value="Sri Lanka">Sri Lanka</option>
												<option value="St. Helena">St. Helena</option>
												<option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
												<option value="Sudan">Sudan</option>
												<option value="Suriname">Suriname</option>
												<option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
												<option value="Swaziland">Swaziland</option>
												<option value="Sweden">Sweden</option>
												<option value="Switzerland">Switzerland</option>
												<option value="Syria">Syria</option>
												<option value="Taiwan">Taiwan</option>
												<option value="Tajikistan">Tajikistan</option>
												<option value="Tanzania">Tanzania</option>
												<option value="Thailand">Thailand</option>
												<option value="Togo">Togo</option>
												<option value="Tokelau">Tokelau</option>
												<option value="Tonga">Tonga</option>
												<option value="Trinidad and Tobago">Trinidad and Tobago</option>
												<option value="Trinidad and Tobago">Trinidad and Tobago</option>
												<option value="Trinidad and Tobago">Trinidad and Tobago</option>
												<option value="Tunisia">Tunisia</option>
												<option value="Turkey">Turkey</option>
												<option value="Turkmenistan">Turkmenistan</option>
												<option value="Turks &amp; Caicos Islands">Turks &amp; Caicos Islands</option>
												<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
												<option value="Tuvalu">Tuvalu</option>
												<option value="Uganda">Uganda</option>
												<option value="Ukraine">Ukraine</option>
												<option value="United Arab Emirates">United Arab Emirates</option>
												<option value="United Kingdom">United Kingdom</option>
												<option value="Uruguay">Uruguay</option>
												<option value="USA Minor Outlying Islands">USA Minor Outlying Islands</option>
												<option value="Uzbekistan">Uzbekistan</option>
												<option value="Vanuatu">Vanuatu</option>
												<option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
												<option value="Venezuela">Venezuela</option>
												<option value="Vietnam">Vietnam</option>
												<option value="Virgin Islands (British)">Virgin Islands (British)</option>
												<option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
												<option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
												<option value="Western Sahara">Western Sahara</option>
												<option value="Yemen">Yemen</option>
												<option value="Zaire">Zaire</option>
												<option value="Zambia">Zambia</option>
												<option value="Zimbabwe">Zimbabwe</option>
											</select>
										  </div>
                                    <div id="mce-responses" class="clear">
										<div style="background-color:darkseagreen; display:none;" class="response" id="mce-error-response"></div>
										<div style="background-color:darkseagreen; display:none;" class="response" id="mce-success-response"></div>
									</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
									<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d70e70edf08c660f1ae4fb4ea_bd79415f06" tabindex="-1" value=""></div>
                                    <input class="btn-login" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"  />
                                </form>
                                
                                
					    <a class="labelLink" href="#fins" onclick="toggle_visibility('list1');"><strong>PRIVACY COLLECTION STATEMENT</strong></a>
							<div id="list1" class="alist" style="display:none;"><br>
								<p>Your personal information is being collected by Blue Ball Pty Limited ACN 100 906 867 trading as Global Surf Industries (“GSI”). Your personal information is collected by GSI for the purposes of selling you our products or providing you with our services. Your personal information may be used for business purposes including marketing and sales of our products and services and for recording statistical data for market analysis. If GSI is unable to collect your personal information, GSI may be unable to sell you products and/or provide you services.<br>Your personal information may be disclosed to other GSI group companies and non-GSI group companies, such as service providers, either in Australia or in the following countries: Australia, New Zealand, United States of America.<br>Information about how you may access the personal information held about you and seek correction of such information is contained in our Privacy Policy.<br>Our Privacy Policy contains information about how you may make a complaint about a breach of the Australian Privacy Principles and how GSI will deal with such a complaint. Read our <a class="regular" href="https://www.surfindustries.com/gsi-privacy.php" target="new">Privacy Policy in full</a> or for more details call: AUS 1300 857 791| USA 855 474 6821 | NEW ZEALAND 09 889 6050.
								</p>
							</div>	
					
                            </div>
                            
				<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[3]='COUNTRY';ftypes[3]='dropdown';fnames[2]='BIRTHYEAR';ftypes[2]='dropdown';fnames[6]='GENDER';ftypes[6]='dropdown';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
				<!--End mc_embed_signup-->
           
            
        </div>
		   <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/flickr.js"></script>
        <script src="js/flexslider.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/masonry.min.js"></script>
        <script src="js/twitterfetcher.min.js"></script>
        <script src="js/spectragram.min.js"></script>
        <script src="js/ytplayer.min.js"></script>
        <script src="js/countdown.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>
        <?php //include HOME . 'includes/site-scripts.inc'; ?>
    </body>
</html>