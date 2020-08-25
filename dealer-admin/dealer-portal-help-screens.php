<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - DEALER PORTAL</title>
         <?php 
		session_start();
		define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		include HOME . 'includes/header-includes.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
		
		//warehouse from daisy sets $warehouseNo variable 
		if ( $_SESSION ['warehouse'] == ""){
		$_SESSION ['warehouse'] = $_GET["warehouse"];}

		$warehouseNo = $_SESSION ['warehouse'];

		if ($warehouseNo == ""){

			 header('Location: https://system.na2.netsuite.com/app/login/secure/privatelogin.nl?c=3743011');
			exit;
		}

		if (($warehouseNo == '13') || ($warehouseNo == '16') || ($warehouseNo == '15')){ $country = 'usDealers'; 	$countryName = 'US Dealer';	}
		if (($warehouseNo == '4') || ($warehouseNo == '3')){ $country = 'ausDealers';  $countryName = 'Australian Dealer';}
		if ($warehouseNo == '12'){ $country = 'nzDealers'; $countryName = 'New Zealand Dealer'; }
		
		$warehouse = "";
		$warehouse = $_SESSION ['warehouse'];
		$warehouseName = "";
		$pageName = "";
		$pageName = "dealerAssist";
		
		if ($warehouse == '3'){
			$warehouseName = "SYDNEY";
		}
		
		if ($warehouse == '4'){
			$warehouseName = "PERTH";
		}
		
		if ($warehouse == '16'){
			$warehouseName = "LA";
		}
		
		if ($warehouse == '13'){
			$warehouseName = "ATLANTA";
		}
		
		if ($warehouse == '15'){
			$warehouseName = "HAWAII";
		}
		
		if ($warehouse == '12'){
			$warehouseName = "AUCKLAND";
		}
		
		//$warehouseNo = "3";
		//$warehouse = "3";

	  
		
	?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/theme-gunmetal.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/custom.css?v=<?=time()?>" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
        
   


   
        

    </head>
    <body class="scroll-assist">
         <!-- include header -->
        <?php include HOME . 'includes/header-nav-items.inc'; ?>
        <div class="main-container">
            <section class="page-title page-title-4 image-bg overlay parallax">
                <div class="background-image-holder">
                    <?php echo "<img src='" . IMAGES_DIR ."tm-portal-header.jpg' class='background-image' alt='Global Surf Industries - Dealer Portal'>"; ?>
                    
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="uppercase mb0">DEALER PORTAL</h2><h4>Assistance</h4>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-push-3">
                        	To access the GSI Dealer Portal you need to login into our enterpise system and from there you can view live inventory, create orders, view your previous orders, make payments, view invoices and link to the other handy resources.
							<p>If you are unsure of your Login please contact your <a href=dealerContact.php>Territory Manager</a> or use the Forgot your password function on the Log in page.
							<p>LOGIN HERE: <a href="https://system.na2.netsuite.com/app/login/secure/privatelogin.nl?c=3743011">https://system.netsuite.com/app/login/secure/privatelogin.nl?c=3743011</a> or hit the 'Dealer Portal' link on the LOGIN dropdown at the top of this page.
							<p>The information below will guide you through the login and ordering process, if you require more information or need a hand, please don't hesitate to contact your <a href=dealerContact.php>Territory Manager</a>.</p>
							<p>Click the WATCH VIDEO button to watch our video guide or browse the screen shots/written guide below.
							<div class="modal-container mt16">
                                <a class="btn btn-lg btn-modal" href="#">WATCH VIDEO</a>
                                <div class="foundry_modal">
                                    <iframe  src="https://www.youtube.com/embed/k2S4lPBJREw?showinfo=0" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
							<p><strong>1.</strong> Enter your login and password to access the new Dealer Portal</p>
							<p><img src="../images/1-1-login.gif" alt=""></p>
							<hr>
							<p><strong>2.</strong> Click the 'See Orders' link to view any outstanding orders. Click the 'Place an order' link to go to the new ordering System.<br><strong>3.</strong>The 'Live Inventory - Quick View' link will take to you a 'Quick View' of inventory levels. The Rescources links will take you to the relevant page within the GSI Dealer Portal.<br>SELECT Place an Order</p>
							<p><img src="../images/2-dashboard-2.gif" alt=""></p>
							<hr>
							<p><strong>CREATE AN ORDER</strong><br><strong>4.</strong> This information cannot be changed, if the details are incorrect please contact your Territory Manager.<br><strong>5.</strong> Enter the date you would like this order to be shipped.<br><strong>6.</strong> Please enter a purchase order number or your name.<br>Hit the 'NEXT button to move to the next screen.</p>
							<p><img src="../images/3-create-an-order.gif" alt=""></p>
							<hr>
							<p><strong>7.</strong> Page loading indicator - the page is loading ALL available products.</p>
							<p><img src="../images/4-loading-products-2.gif" alt=""></p>
							<hr>
							<p><strong>8.</strong> 'SHOW/HIDE ALL MODELS' link will display ALL models for ALL brands (default is HIDE).<br><strong>9.</strong> 'SHOW/HIDE TRADE PRICE' button will remove the TRADE PRICE from the screen (the default is to hide the trade price). The 'CLEARANCE STOCK' button will take you to the Clearance list further down the page.<br><strong>10.</strong>Click this arrow to show model images, pricing and stock levels for the chosen brand.</p>
							<p><img src="../images/5-show-hide-models.gif" alt=""></p> 
							<hr>
							<p><strong>11.</strong> Work your way down the page entering the quantities you require. You can scroll up and down as much as you need to.</p>
							<p><img src="../images/6-enter-quantity-4.gif" alt=""></p>
							<hr>
							<p><strong>12.</strong> Each time you enter a quantity the Order Summary at the bottom of the screen will automatically update. Once you are happy with your order click the NEXT button.<br><strong>PLEASE NOTE:</strong> The Order minimum surcharge still applies.</p>
							<p><img src="../images/7-order-summary.gif" alt=""></p>
							<hr>
							<p><strong>13.</strong> Your Order is displayed on the screen. The Order Total <strong>excludes</strong> taxes and shipping costs.<br><strong>14.</strong> Click the SUBMIT ORDER button to submit your order.</p>
							<p><img src="../images/8-confirm-order-2.gif" alt=""></p>
							<hr>
							<p><strong>15.</strong> Your order has been submitted for processing and the order number will be displayed. You will also recevie adn email with a pdf of your order summary attached.<br><strong>16.</strong> Click the Create Order / Acc History button to go back to the Dealer Portal.<br><strong>17.</strong> Click the Go to GSI Dealer Resources area to access the make a payment link, online warranty forms, training videos etc.</p>
							<p><img src="../images/9-order-confirmation-2.gif" alt=""></p>
							
						
                     </div>
                     <!--begin side bar-->
                     <div class="col-md-3 col-md-pull-9 hidden-sm">
                         <?php include HOME . 'includes/dealer-portal-left-menu.inc'; ?>
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