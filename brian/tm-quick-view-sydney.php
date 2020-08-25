<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - TM PORTAL</title>
         <?php 
		session_start();
		define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		
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


		
		
		// echo 'user:' . $userType;
		$pageName = "";
		$pageName = "viewSYD";
		
		//$warehouseNo = "3";
		//$warehouse = "3";

	 
		
	?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/theme-gunmetal.css?v=<?=time()?>" rel="stylesheet" type="text/css" media="all" />
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
		url:'eg-qv-getsizes.php',
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
                    <?php echo "<img src='" . IMAGES_DIR ."tm-portal-header.jpg' class='background-image' alt='Global Surf Industries - TM Portal'>"; ?>
                    
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
                            <form action="https://surfindustries.pandaform.com/pub/wh4qnu" enctype="multipart/form-data" method="post" name="cpipForm" id="cpipForm" onsubmit="return validateForm();">
                            <div class="container">
								<div class="row">
									<div class="lrg-heading-title">
										 <br><br>LIVE INVENTORY QUICK VIEW BY BRAND - SYDNEY<br><hr>
										 </div>
									<div class="col-sm-12">
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
							</div></form>
                     </div>
                     <!--end form div-->
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
       <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/flexslider.min.js"></script>
        <script src="../js/smooth-scroll.min.js"></script>
        <script src="../js/scripts.js"></script>
      
      
      <script>
  ga('send', 'pageview');
</script>
      
    </body>
</html>