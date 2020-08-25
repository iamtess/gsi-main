<?php

session_start();

if (!isset($_SESSION['basic_is_logged_in'])
    || $_SESSION['basic_is_logged_in'] !== true) {
    // not logged in, move to login page
    header('Location: ../TM-portal/tm-portal-login.php');
    exit;
}


define( "HOME", "../" );        // this page's subdir level (home="")
define( "IMAGES_DIR",   HOME . "images/" );
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
	
//echo 'url_frag'.$url_frag.'<br>';
	
?>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){

	$('#salesrep_select').prop('disabled', true);
	$('#location_select').prop('disabled', true);
	$('#customer_select').prop('disabled', true);
	
	$.ajax({
		type:'POST',
		url:'eg-getsalesreps.php',
		success:function(html){
			$('#salesrep_select').html(html);
			$('#salesrep_select').prop('disabled', false);
		}
	}); 
		
    $('#salesrep_select').on('change',function(){
	var salesrepID = $(this).val();
	if(salesrepID){
	
		$.ajax({
			type:'POST',
			url:'eg-getlocations.php',
			data:'salesrep='+salesrepID,
			success:function(html){
				$('#location_select').html(html);
				$('#location_select').prop('disabled', false);
			}
		}); 
		
		$.ajax({
			type:'POST',
			url:'eg-getcustomers.php',
			data:'salesrep='+salesrepID,
			success:function(html){
				$('#customer_select').html(html);
				$('#customer_select').prop('disabled', false);
			}
		}); 
		
	}
	
	});
});
</script>
<!--date picker-->

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
  
  
  
<script>
	$(function() {
    $('#dropshipdiv').hide(); 
    $('#order_type').change(function(){
        if($('#order_type').val() == '8') {
            $('#dropshipdiv').show(); 
			$('#regdiv').hide(); 
        } else {
            $('#dropshipdiv').hide(); 
			$('#regdiv').show(); 
        } 
    });
});
		</script>
		<script>
  $.datepicker.setDefaults({ dateFormat: 'yy-mm-dd' });
  $(function() {
    //$( "#shipDate" ).datepicker();
	$("#shipDate").datepicker({ minDate: 0});
	
	
  });
  </script>
  <script>
      function countChar(val) {
        var len = val.value.length;
        if (len >= 45) {
          val.value = val.value.substring(0, 45);
        } else {
		  $('#charNum').text(len);
        }
      };
    </script>

<!--end date picker-->


<!-- styles for form validation -->
<script>
function validateForm() 
{

valid = true;
	//alert ("Validating");

	if (document.brianOrderForm.salesrep_select.options[document.brianOrderForm.salesrep_select.options.selectedIndex].value == ""){
			alert( "Please Select your Name." );
			document.brianOrderForm.salesrep_select.focus();
			return false;
		
	}
	if (document.brianOrderForm.location_select.options[document.brianOrderForm.location_select.options.selectedIndex].value == ""){
			alert( "Please select a warehouse." );
			document.brianOrderForm.location_select.focus();
			return false;
		
	}
	if (document.brianOrderForm.customer_select.options[document.brianOrderForm.customer_select.options.selectedIndex].value == ""){
			alert( "Please select an Account." );
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
		alert( "Please enter a PO." );
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
                    <?php echo "<img src='" . IMAGES_DIR ."tm-portal-header.jpg' class='background-image' alt='Global Surf Industries - Dealer Portal'>"; ?>
                    
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
            <p >Please complete the following information to begin your order:</p>
            <span class="requiredField">*required</span>
            <br/>
            <label style="color:#000000;text-transform: uppercase;">Territory Manager:<sup class="requiredField">*</sup></label><br>
            <div class="select-option">
				<i class="ti-angle-down"></i>
				<select name="salesrep_select" id="salesrep_select" onchange="document.getElementById('tm_name').value=this.options[this.selectedIndex].text" required>
					<option value="">Please Select your Name</option>
				</select>
			 </div>
            <label style="color:#000000;text-transform: uppercase;">Warehouse:<sup class="requiredField">*</sup></label><br>
             <div class="select-option">
				<i class="ti-angle-down"></i>
            <select name="location_select" id="location_select" required>
                <option value="">Please Select a Warehouse</option>
            </select>
			 </div>
            <label style="color:#000000;text-transform: uppercase;">Account Name:<sup class="requiredField">*</sup></label><br>
            <div class="select-option">
				<i class="ti-angle-down"></i>
            <select name="customer_select" id="customer_select" onchange="document.getElementById('customer_name').value=this.options[this.selectedIndex].text" required>
                <option value="">Please Select an Account</option>
            </select>
             </div>
           <label style="color:#000000;text-transform: uppercase;">Order Type:<sup class="requiredField">*</sup></label><br>
			<div class="select-option">
				<i class="ti-angle-down"></i>
			<select name="order_type" id="order_type" required>
			<option value="">Please Select an Order Type</option>
			<option value="1">At Once</option>
			<option value="2">Prebook</option>
			<option value="8">Drop Ship</option>
			</select>
            </div>
            <label style="color:#000000;text-transform: uppercase;">Order Ship Date:<sup class="requiredField">*</sup></label><br>
            <input type="text" name="shipDate" id="shipDate" class="createOrderInput" required>
            <br/>
            <label style="color:#000000;text-transform: uppercase;">Enter PO:<sup class="requiredField">*</sup></label><br>
            <input type="text" name= "orderPO" id="orderPO" class="createOrderInput mb0" value="" onkeyup="countChar(this)" required>
			 <div class="mt0 mb0">Characters entered (max 44): <span class="pt0" id="charNum">0</span></div>
            <br/>
            <div id="regdiv">
            <label style="color:#000000;text-transform: uppercase;">Notes:</label><br>
             </div>
			 <div id="dropshipdiv">
            <label style="color:#000000;text-transform: uppercase;">DROP SHIP ORDER Notes:</label><br>
            <span class="requiredField">Please add delivery Address details, Contact ph number and Authority to leave.</span><br>
			 </div>
			<textarea name="orderNotes" id="orderNotes"></textarea>
            <br />
            <input class="hollow" type="submit" value="NEXT" />
            <br /><br />
            <input type="hidden" name="customer_name" id="customer_name" value="" />
            <input type="hidden" name="tm_name" id="tm_name" value="" />
            
            
         </div></form>
         <br><br>
     </div>
</div> 
<div class="col-md-6 hidden-xs"> 
		<div class="module right">
		<?php include HOME . 'includes/brian-ad-include.inc'; ?>
		</div>
</div>  
				</div>
				</div>
				</section>
				</div>
	
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/smooth-scroll.min.js"></script>
        <script src="../js/parallax.js"></script>
        <script src="../js/scripts.js"></script>         
</body>
</html>