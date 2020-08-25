<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - SHIPPING AND RETURNS</title>
         <?php 
		define( "HOME", "" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		include HOME . 'includes/header-includes.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
	?>
    <META NAME='author' CONTENT="Global Surf Industries" >
    <META NAME='subject' CONTENT="global surf industries - SHIPPING ADN RETURNS" >
    <META NAME='Description' CONTENT="Global Surf Industries (GSI) shipping and returns information.">
    <META NAME='Classification' CONTENT="Global Surf Industries - the world's premier distributor of surfboards - find product information, local surfboard shops or buy surfboards online." >
    <META NAME='Keywords' CONTENT="surfboards, surfboard, surfing, longboards, mark kelly, fish, shortboards, funboards, stand up paddle boards,hayden cox, josh constable, richie lovett, steve walden, tom carroll, tom wegener, life is better when you surf, company profile" >
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
            <section class="page-title page-title-2 image-bg overlay ">
                <div class="background-image-holder">
                 <?php echo "<img src='" . IMAGES_DIR ."shipping-returns-heading.jpg' class='background-image' alt='Global Surf Industries - shipping returns policy'>"; ?>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">
							<h2 class="uppercase mb8">SHIPPING AND RETURNS POLICY</h2>
                            
                        </div>
                        
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-10 ">
						<p class="regularText"><strong>SHIPPING</strong></p>
					<p><span class="regularText">GSI Online Stores provides FREE SHIPPING on all orders.</span><span class="footnoteText">*</span></p>
					<p class="regularText"><strong>1. Order Confirmation.</strong> Once your order has been placed and your payment has been confirmed you will be sent an email to confirm your order.</p>
					<p class="regularText"><strong>2. Order Completed.</strong> Once the order has been confirmed and sent to our warehouse you will be sent an email to say your order is complete.</p>
					<p class="regularText"><strong>3. Shipped.</strong> Once your order has been shipped you will receive an email with the tracking number.</p>
					
					
					 <?php
							
							if (($userCountry == 'AU')||($userCountry == 'NZ')) {
												echo "<p class='regularText'>Shipping usually occurs within 24hr of placing your order and takes between 2-7 days for delivery.</p>";
											}
											
											else {
												echo "<p class='regularText'>7'11\" and under usually ships within 24-48 hours shipping via Fed Ex or UPS.  Shipping can take 3-5 business days depending on the final destination.<br>8'0\" and larger usually ships within 24-72 hours shipping LTL freight.  Shipping can take 3-7 business days depending on the final destination.</p>";
											}
					?>
					
					<a name="shippingfees"></a>
					<p class="regularText">We currently only provide shipping to USA, Australia and New Zealand.</p>
						<p ><span class="footnoteText">*</span> <span class="regularText">extra changes will apply for services to Hawaii, ( $100 ) Tasmania, Western Australian ( $50 ) and remote locations and Islands ( on a per order basis ) EG: Northern Territory, Lord Howe Island etc.</span></p>
					<p class="regularText"><strong>RETURNS</strong></p>
					<p class="regularText">In the event that the product you purchased online is defective and requires any form of warranty, you need to contact our Customer Care team us straight away by phoning: AUS 1300 857 791, USA 855 474 6821, NEW ZEALAND 09 889 6050 or email <a class="regularLink" href="mailto:info@surfindustries.com">info@surfindustries.com</a>. Our Customer Care team will then inform you how to return the product.</p>
					<p class="regularText">Please note that a change in mind does not constitute an acceptable reason for return in our mind.</p>
					<p class="regularText">You have 30 days from the receipt of the online shipment to return any defective item for credit or exchange, provided the merchandise is unused, in original condition, and is returned in the original shipping container.
						</div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            
            
             <?php include HOME . 'includes/footer.inc'; ?>
            
        </div>
        <?php include HOME . 'includes/site-scripts.inc'; ?>
    </body>
</html>