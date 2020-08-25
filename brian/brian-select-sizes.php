<?php
session_cache_limiter('public');
session_start();


if (!isset($_SESSION['basic_is_logged_in'])
    || $_SESSION['basic_is_logged_in'] !== true) {
    // not logged in, move to login page
      header('Location: ../TM-portal/tm-portal-login.php');
    exit;
}



define( "HOME", "../" ); 
if ($_SESSION['usertype'] != "dealer"){
	
	$_SESSION['tm'] = $_POST["salesrep_select"];
	$_SESSION['tm_name'] = $_POST["tm_name"];
	$_SESSION['warehouse'] = $_POST["location_select"];
	$_SESSION['dealer'] = $_POST["customer_select"];
	$_SESSION['dealer_name'] = $_POST["customer_name"];
	$_SESSION['orderNotes'] = $_POST["orderNotes"];
	
}
else {
	// these variables come from useparams set in previous page from Daisy 
	$_SESSION['tm_name'] = $_POST["tmname"];
	$_SESSION['dealer_name'] = $_POST["custname"];
	$_SESSION['orderNotes'] = ' Via Portal: '.$_POST["orderNotes"];
	
	
}

//$creditStatus = $_SESSION['creditStatus'];
//echo 'creditStatus'.$creditStatus;
$_SESSION['orderType'] = $_POST["order_type"];
//$_SESSION['ot'] = $_POST["ot"];
$_SESSION['shipDate'] = $_POST["shipDate"];
$_SESSION['orderPO'] = $_POST["orderPO"];

$date = $_SESSION['shipDate'];
//echo "date:$date";

$userType = $_SESSION['usertype'];

//echo "usertype: ".$_SESSION['usertype'];
//echo " tm: ".$_SESSION['tm'];
//echo "tm name".$_SESSION['tm_name'];
//echo " warehouse: ".$_SESSION['warehouse'];
//echo " dealer: ".$_SESSION['dealer'];
//echo " dealer name: ".$_SESSION['dealer_name'];

//echo " order type: ".$_SESSION['orderType'];
//echo " <br>ot: ".$_SESSION['ot'];







// this page's subdir level (home="")
$tm = $_SESSION['tm'] ;
$tm_name = $_SESSION['tm_name'];
$warehouse = $_SESSION['warehouse'];
$dealer = $_SESSION['dealer'];
$dealer_name = $_SESSION['dealer_name'];
$date = $_SESSION['shipDate'];
$orderType = $_SESSION['orderType'];
$po = $_SESSION['orderPO'];
$notes = $_SESSION['orderNotes'];
$brands = $_SESSION['brands'];
$_SESSION["models"] = $_POST["modelSelect"];
$models = $_SESSION["models"];

$userType = $_SESSION['usertype'];


//echo "usertype: ".$_SESSION['usertype'];
//echo " tm: ".$_SESSION['tm'];
//echo "tm name".$_SESSION['tm_name'];
//echo " warehouse: ".$_SESSION['warehouse'];
//echo " select sizes dealer: ".$_SESSION['dealer'];
//echo " dealer name: ".$_SESSION['dealer_name'];
//echo "<br>order type2: ".$_SESSION['orderType'];

?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>GSI - Brian - Select Sizes</title>
<?php
include HOME . 'includes/header-includes.inc'; 
include HOME . 'includes/geo-locator-script.inc'; 
include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
?>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
		url:'eg-getsizes-brand-open.php',
		//data:'locations='+ <?php //echo json_encode($warehouse) ?>,
		data:'locations='+ <?php echo json_encode($warehouse) ?> + '&customer=' +  <?php echo $dealer ?>,
		
		//data:'locations='+ <?php //echo json_encode($warehouse) ?> + '&customer=' + <?php //echo json_encode($dealer); ?>,
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
   
	
	
// prevents user from submitting form when return key is pressed
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });

	
  
});
	
 var rowCount = "";
  
function totalate() {
	
	   var orderObject = {
		"customer" : <?php echo json_encode($dealer); ?>,
		"location" : <?php echo json_encode($warehouse); ?>,
		"shipdate" : <?php echo json_encode($date); ?>,
		"memo" : <?php echo json_encode($notes); ?>,
		"salesrep" : <?php echo json_encode($tm); ?>,
		"ordertype" : <?php echo json_encode($orderType); ?>,
		"po" : <?php echo json_encode($po); ?>,
		"status" : "",
		"models" : []
	};
	 
	 var rowCounter = 1;
	 var grandTotal = 0;
	 var itemsAddedCount = 0;
	 var total2 = 0;
	 var warehouse = <?php echo json_encode($warehouse); ?>;
	 var currency = '$';
	 
	 
	var summaryHTML = '<div id="arrData" style="width:100%;"><table cellpadding="5" cellspacing="10" border="0"><tr><td class="pageText" style="width:50%; text-align:left;font-size:13px;font-weight:bold;color:#000000;">MODEL</td><td style="width:17%;font-size:13px;font-weight:bold;color:#000000;">SIZE</td><td style="width:19%;font-size:13px;font-weight:bold;color:#000000;">QUANTITY</td><td style="text-align:left;width:12%;font-size:13px;font-weight:bold;color:#000000;color:#000000;">PRICE</td><td style="text-align:left;width:12%;font-size:12px;font-weight:bold;color:#000000;">TOTAL</td></tr>';
	 
	 $('tr.models').each(function() {
		 
		 var $currentRow = $(this);
		 
		 var modelName = $currentRow.find('input[id$="modelName"]').val();
		 
		 var itemsArray = [];
		 
		 
		 var newItem = "";
		 var currentItem = "";
		 
		 
		 $currentRow.find('tr.sizes').each(function() {
			
			 
			  if (warehouse == '47'){
				 
				  currency = '€';
			 }
			 
			var $currentSize = $(this);
			var sizeId = $currentSize.find('input[id$="sizeID' + rowCounter + '"]').val();
			var sizeName = $currentSize.find('input[id$="sizeName' + rowCounter + '"]').val();
			var qty = $currentSize.find('input[id$="qty' + rowCounter + '"]').val() || 0;
			var price = $currentSize.find('input[id$="price' + rowCounter + '"]').val() || 0;
			//var total = parseInt(qty, 10) * parseFloat(price).toFixed(2);
			var total = +qty * +price;
			 
			grandTotal+=  +total;
			
			//$("#" + 'total' + rowCounter).val('$' + parseFloat(total).toFixed(2));
			 
			 $("#" + 'total' + rowCounter).val(currency + parseFloat(total).toFixed(2));
			 
			
			
			 
			if(+qty > 0) {
				itemsArray.push({
					"item" : sizeId,
					"name" : sizeName,
					"quantity" : qty,
					"price" : price,
					"total" : total
				});
				itemsAddedCount++;
				
			} //end if qty > 0
			
			
			rowCounter++; 
			 
		 });
		
		 
		 if(itemsArray.length > 0) {
			 orderObject.models.push({
				 "name" : modelName,
				 "items" : itemsArray
			 });
			 
			 
			 //print summary of order

					$.each(itemsArray, function(index, val) {
						
					var total2 = parseFloat(val.total).toFixed(2);
						
				
						
					summaryHTML += '<tr><td style="font-size:13px;font-weight:regular;">' + modelName + '</td><td style="text-align:left;font-size:13px;font-weight:regular;">' + val.name + '</td><td style="text-align:left;font-size:13px;font-weight:regular;">' + val.quantity + '</td><td  style="text-align:left;font-size:13px;font-weight:regular;">' + currency + val.price + '</td><td style="text-align:left;font-size:13px;font-weight:regular;">'+ currency + total2 + '</td></tr>';
						
						
					});	
				
				// end print summary
			 
			 
			 
		 }
	 
		 
		 
		
		 
		 
		 
	 });//end on tr.models	
	
	summaryHTML += '</table></div>';
	
	$('#arrData').replaceWith(summaryHTML);
	
	 $("#orderObjectJSONstring").val(JSON.stringify(orderObject));
	 
	 $('#grandtotal').html('ORDER TOTAL: ' +currency + parseFloat(grandTotal).toFixed(2));
	 $('#summary').html('ORDER SUMMARY: test');
	 $("#orderTotal").val(grandTotal);
	 
	 
	 
	 
	 return itemsAddedCount;
	
};



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
                    <?php echo "<img src='../images/tm-portal-header.jpg' class='background-image' alt='Global Surf Industries - online orders'>"; ?>
                    
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="uppercase mb0">MODEL & SIZE SELECTOR</h3>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
						   <form action="brian-complete-order.php" name="brianOrderForm" id="brianOrderForm"  method="post">
						   <input type="hidden" value="<?php echo $dealer; ?>" name="customer">
						   <input type="hidden" value="<?php echo $warehouse; ?>" name="location">
						   <input type="hidden" value="<?php echo $date; ?>" name="shipdate">
						   <input type="hidden" value="<?php echo $notes; ?>" name="memo">
						   <input type="hidden" value="<?php echo $tm; ?>" name="salesrep">
						   <input type="hidden" value="<?php echo $orderType; ?>" name="ordertype">
						   <input type="hidden" value="<?php echo $po; ?>" name="purchaseorder">
						   <input type="hidden" value="" id="orderObjectJSONstring" name="orderObjectJSONstring">
						   <input type="hidden" value="" id="orderTotal" name="orderTotal">
						   
						   <p class="pageText">Enter the number of each Size required for your order - an order summary will display at the bottom of the page:</p>
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
            
							<div style="width:100%;background-color:#ffffff;">
								<!-- calculate button no longer required
								<div style="text-align:left;">
								<button type="button" onclick="totalate()" id="totalateButton" class="calculateBtn">CALCULATE ORDER</button> 

								</div>-->
								<!-- order summary printing here -->
								<a name="orderSummary"></a>
								<span style="text-align:left;font-size:15px;font-weight:bold;color:#000000;">YOUR ORDER SUMMARY</span><br><hr>
								<div id="arrData" style="width:100%;"> </div>
								<br>  <!-- end order summary div -->
								<div style="background:#ececec;padding:15px;border-radius: 8px;width:230px;">
								  <div id="grandtotal" style="text-align:left;font-size:15px;font-weight:bold;color:#000000;">ORDER TOTAL: 0.00</div>
								</div>
								<br><br><br>

								<?php
								if ($userType == 'dealer') 
								{
								 echo '<div style="float:left;padding-right:20%;"><p class="requiredField">';
								if ($warehouse == '3' || '4')
								{ 
								  echo '<br>NB: Orders under $1,000.00 will incur a $35.00 surcharge.<br>To avoid the surcharge ensure your order is above this minimum.<br><br>	';
								}
								 else if ($warehouse == '13' || '14' || '15')
								{ 
								echo '<br>NB: Orders under $1000.00 will incur a $35.00 surcharge.<br>To avoid the surcharge ensure your order is above this minimum.<br><br>	';
								}
								 else if ($warehouse == '12')
								{ 
								echo '<br>NB: Orders under $1,000.00 will incur a $35.00 surcharge.<br>To avoid the surcharge ensure your order is above this minimum.<br><br>	';
								}
								  echo '</p></div>';
								}

								?>                  
								<div style="background-color:#ffffff;"><input class="hollow" type="submit" value="NEXT" /></div>
								<br><br><br><br><br><br><br><br><br><br>
							</div>
					       </form>
       					   <br><br>
					   </div> 
 						<div class="col-md-3 hidden-xs"> 
 					    <div class="module right">
 					    <?php include HOME . 'includes/brian-ad-include.inc'; ?>
					    </div>
					    </div>
				</div> 
				<!-- end row -->
				</div>
				<!-- end container -->
	</section>    

 <script src="../js/bootstrap.min.js"></script>
        <script src="../js/smooth-scroll.min.js"></script>
        <script src="../js/parallax.js"></script>
        <script src="../js/scripts.js"></script> 






</body>
</html>