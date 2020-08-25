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
		$pageName = "viewDealer";
		
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
        
        
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>


<script type="text/javascript">
$(document).ready(function(){

	
	$( '#size_select' ).on('change', function() {
		totalate();
  //alert( "We just ran totalate" );
});

	//$('#size_select').prop('disabled', true);
	
	
	$.ajax({
		type:'POST',
		url:'dealer-qv-getsizes.php',
		data:'locations='+ <?php echo json_encode($warehouse) ?>,
		success:function(html){
			$('#size_select').html(html);
			//$('#size_select').prop('disabled', false);
		}
	}); 

  
 
  $('#brianOrderForm').submit(function() {
	  
	 var itemsAddedCount = totalate();
	  
	 if(+itemsAddedCount == 0) {
		 alert('You haven\'t selected anything');
		 return false;
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
                    <?php echo "<img src='" . IMAGES_DIR ."tm-portal-header.jpg' class='background-image' alt='Global Surf Industries - Dealer Portal'>"; ?>
                    
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="uppercase mb0">DEALER PORTAL</h3><h4>Live Inventory Quick View</h4>
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
                            <div class="container">
								<div class="row">
									<div class="col-md-9 col-sm-12 ">
									  	<div class="widget"> 
											 <h6 class="title">LIVE INVENTORY QUICK VIEW BY BRAND - <?php echo $warehouseName; ?> WAREHOUSE</h6>
											 <hr>
										</div>
									</div>	 
									<div class="col-md-9 col-sm-12 ">
									   <div id="size_select">
											<p>
											<!-- spinner -->
											<div align="left" class="cssload-fond">
												<div class="cssload-container-general">
													<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_1"> </div></div>
													<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_2"> </div></div>
													<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_3"> </div></div>
													<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_4"> </div></div>
												</div>
											</div>
											</p>
										</div>
								   </div>   
								</div>
							   <!--end of row-->
							</div>
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
        
 <script src="../js/bootstrap.min.js"></script>
        <script src="../js/smooth-scroll.min.js"></script>
        <script src="../js/parallax.js"></script>
        <script src="../js/scripts.js"></script> 

      
      
      <script>
  ga('send', 'pageview');
</script>
      
    </body>
</html>