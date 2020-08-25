<?php

session_start();
		
	$token = $_GET['t'];
	$tokendecoded = base64_decode($token);	
	
	if (strlen($tokendecoded) > 0){
		
		$userparams = json_decode($tokendecoded, true);
					
		$_SESSION['basic_is_logged_in'] = true;
		$_SESSION['usertype'] = "dealer";
		$_SESSION['tm'] = $userparams["t"];
		$_SESSION['warehouse'] = $userparams["w"];
		$_SESSION['dealer'] = $userparams["u"];
		
	} else {
		// not logged in, move to login page
		header('Location: https://system.na2.netsuite.com/app/center/card.nl?sc=-47&whence=');
		exit;
	}

$userType = $_SESSION['usertype'];


//echo "usertype: ".$_SESSION['usertype'];
//echo " tm: ".$_SESSION['tm'];
//echo " warehouse: ".$_SESSION['warehouse'];
//echo " dealer: ".$_SESSION['dealer'];

		
define( "HOME", "../" );        // this page's subdir level (home="")

//connect to daisy



 ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>GSI - Brian - Create an order</title>
<?php
include HOME . 'includes/header-includes.inc'; 
include HOME . 'includes/geo-locator-script.inc'; 
include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
?>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	
	$.ajax({
		type:'POST',
		url:'eg-getdealerdata.php',
		data:'customer='+ <?php echo $_SESSION['dealer']; ?>,
		success:function(html){
			$('#dealerFields').html(html);
			
			$('#salesrep_select').prop('disabled', true);
			$('#location_select').prop('disabled', true);
			$('#customer_select').prop('disabled', true);
		}
	}); 
	


});
</script>
<!--date picker-->

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
  


<!--end date picker-->


<!-- styles for form validation -->
<!-- styles for form validation -->
<script>
function validateForm() 
{

valid = true;
	//alert ("Validating");

	if (document.brianOrderForm.salesrep_select.options[document.brianOrderForm.salesrep_select.options.selectedIndex].value == ""){
			alert( "Please Select a Territory Manager Name." );
			document.brianOrderForm.salesrep_select.focus();
			return false;
		
	}
	if (document.brianOrderForm.location_select.options[document.brianOrderForm.location_select.options.selectedIndex].value == ""){
			alert( "Please select your nearest warehouse." );
			document.brianOrderForm.location_select.focus();
			return false;
		
	}
	if (document.brianOrderForm.customer_select.options[document.brianOrderForm.customer_select.options.selectedIndex].value == ""){
			alert( "Please select your Account name." );
			document.brianOrderForm.customer_select.focus();
			return false;
		
	}
	if (document.brianOrderForm.order_type.options[document.brianOrderForm.order_type.options.selectedIndex].value == ""){
			alert( "Please select your Order Type." );
			document.brianOrderForm.order_type.focus();
			return false;
		
	}
	if (document.brianOrderForm.shipDate.value == ""){
		alert( "Please slect a ship date." );
		document.brianOrderForm.shipDate.focus();
		return false;
	}
	
	if (document.brianOrderForm.orderPO.value == ""){
		alert( "Please enter a Purchase Order No. OR Your Name." );
		document.brianOrderForm.orderPO.focus();
		return false;
	}
	
	


	return true;
	}

</script>




</head>

<body class="scroll-assist">
<div class="nav-container">
	<a id="top"></a>
	<nav class="nav-centered">
		<div class="nav-utility-prod" style="background-color: #000;">
			<div class="module left">
				<img src="../images/brian-gsi-logo.gif" width="218" height="51" alt=""/>
			</div>
			<div class="module right">
				<span class="sub" STYLE="letter-spacing: 1px;"><strong>GSI ONLINE ORDERS</strong></span>
			</div>
		</div>
	</nav>
</div>
<div class="main-container">
            <section class="page-title page-title-4 image-bg overlay">
                <div class="background-image-holder">
                    <?php echo "<img src='../images/tm-portal-header.jpg' class='background-image' alt='Global Surf Industries - Dealer Portal'>"; ?>
                    
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="uppercase mb0">CREATE AN ORDER</h3>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-10 ">
   <form action="brian-select-sizes.php" name="brianOrderForm" id="brianOrderForm" method="post" onsubmit="return validateForm();">
	<div class="wrapperContainer">
         <div class="contentContainer">
          	<div id="dealerFields">
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
            
          </form>
         <br><br>
     
</div>  
				</div>
				</div>
				<div class="col-md-6 hidden-xs"> 
		<div class="module left">
		<?php include HOME . 'includes/brian-ad-include.inc'; ?>
		</div>
</div>
				
				</div> <!-- end row -->
				</div>  <!-- end container -->
				
				
	</section>
  <script src="../js/bootstrap.min.js"></script>
        <script src="../js/smooth-scroll.min.js"></script>
        <script src="../js/parallax.js"></script>
        <script src="../js/scripts.js"></script> 
          
</body>
</html>