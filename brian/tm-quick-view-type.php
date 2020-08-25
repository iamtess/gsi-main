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
		header('Location: ../TM-portal/tm-portal-login.php');
		exit;
		}
			
		//echo 	$_SESSION['basic_is_logged_in'];
			
		if(isset($_SESSION['user']))
        {
			$userType = $_SESSION['user'] ;
	    }
		
		$warehouse = "";
		$warehouse = $_GET["warehouse"];
		$warehouseName = "";
		$pageName = "";
		
		if ($warehouse == '3'){
			$pageName = "viewSYD";
			$warehouseName = "SYDNEY";
		}
		
		if ($warehouse == '4'){
			$pageName = "viewPER";
			$warehouseName = "PERTH";
		}
		
		if ($warehouse == '16'){
			$pageName = "viewLA";
			$warehouseName = "LA";
		}
		
		if ($warehouse == '13'){
			$pageName = "viewATL";
			$warehouseName = "ATLANTA";
		}
		
		if ($warehouse == '15'){
			$pageName = "viewHI";
			$warehouseName = "HAWAII";
		}
		
		if ($warehouse == '12'){
			$pageName = "viewAUCK";
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
		url:'eg-qv-getsizes-type.php',
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
                            <h3 class="uppercase mb0">TM PORTAL</h3><h4>Live Inventory Quick View</h4>
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
											 <h6 class="title">LIVE INVENTORY QUICK VIEW BY TYPE - <?php echo $warehouseName; ?> WAREHOUSE</h6>
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
      <script src="../js/bootstrap.min.js"></script>
        <script src="../js/smooth-scroll.min.js"></script>
        <script src="../js/parallax.js"></script>
        <script src="../js/scripts.js"></script> 
      
      
      <script>
  ga('send', 'pageview');
</script>
      
    </body>
</html>