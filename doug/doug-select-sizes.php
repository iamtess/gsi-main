<?php
session_cache_limiter('public');
session_start();
define( "HOME", "../" ); 



$_SESSION['distributor'] = $_POST["distID"];
$distributor = $_SESSION['distributor'];

//echo 'dist id'. $distributor.'<br>';

$_SESSION['dist_name'] = $_POST["distName"];
$dist_name = $_SESSION['dist_name'];

//echo 'dist name'. $dist_name.'<br>';

$_SESSION['tm_id'] = $_POST["tm"];
$tm_id = $_SESSION['tm_id'];

//echo 'tm id'. $tm_id.'<br>';

//$_SESSION['tm_name'] = 'Alex Pappas';
//$tm_name = $_SESSION['tm_name'];

$_SESSION['manufacturer'] = $_POST["manufacturer_select"];
$manufacturer = $_SESSION['manufacturer'];

//echo 'manufacturer'. $manufacturer.'<br>';

if ($manufacturer == '1'){
				$_SESSION['manufacturerName'] = "AGIT GLOBAL";
}
if ($manufacturer == '2'){
				$_SESSION['manufacturerName'] = "BENNETON";
}
if ($manufacturer == '3'){
				$_SESSION['manufacturerName'] = "COBRA INTERNATIONAL";
}
if ($manufacturer == '4'){
				$_SESSION['manufacturerName'] = "DRAGON FLY";
}
if ($manufacturer == '5'){
				$_SESSION['manufacturerName'] = "EWFU";
}
if ($manufacturer == '6'){
				$_SESSION['manufacturerName'] = "OSIA NINGBO";
}
			


//$_SESSION['orderType'] = $_POST["order_type"];
//$orderType = $_SESSION['orderType'];

$_SESSION['shipDate'] = $_POST["shipDate"];
$date = $_SESSION['shipDate'];

$_SESSION['orderPO'] = $_POST["orderPO"];
$po = $_SESSION['orderPO'];

$_SESSION['orderNotes'] = ' Via Portal: '.$_POST["orderNotes"];
$notes = $_SESSION['orderNotes'];


?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>GSI - Doug - Select Sizes</title>
<?php
include HOME . 'includes/header-includes.inc'; 
include HOME . 'includes/geo-locator-script.inc'; 
include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
?>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
		url:'get-products.php',
		
		
		//data:'manufacturer='+ <?php //echo($manufacturer) ?> + '&customer=' +  <?php //echo $dealer ?>,
		data:'customer=' +  <?php echo $distributor ?> + '&manufacturer='+ <?php echo($manufacturer) ?>,
		
		
		success:function(html){
			$('#size_select').html(html);
			//$('#size_select').prop('disabled', false);
		}
	}); 

  
 
  $('#dougOrderForm').submit(function() {
	  
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
		"customer" : <?php echo json_encode($distributor); ?>,
		"manufacturer" : <?php echo json_encode($manufacturer); ?>,
		 "salesrep" : <?php echo json_encode($tm_id); ?>,
		"shipdate" : <?php echo json_encode($date); ?>,
		"memo" : <?php echo json_encode($notes); ?>,
		"ordertype" : <?php echo json_encode($orderType); ?>,
		//"po" : <?php echo json_encode($po); ?>,
		"status" : "",
		"models" : []
	};
	 
	 var rowCounter = 1;
	 var grandTotal = 0;
	 var grandVolTotal = 0;
	 var itemsAddedCount = 0;
	 var total2 = 0;
	 var cubicTotal2 = 0;
	
	var summaryHTML = '<div id="arrData" style="width:100%;"><table cellpadding="5" cellspacing="10" border="0"><tr><td class="pageText" style="width:50%; text-align:left;font-size:13px;font-weight:bold;color:#000000;">MODEL</td><td style="width:10%; font-size:13px;font-weight:bold;color:#000000;">SIZE</td><td style="width:15%;font-size:13px;font-weight:bold;color:#000000;">QUANTITY</td><td style="width:10%;text-align:left;font-size:13px;font-weight:bold;color:#000000;color:#000000;">PRICE</td><td style="width:20%;text-align:left;font-size:12px;font-weight:bold;color:#000000;">TOTAL PRICE</td><td style="width:20%;text-align:left;font-size:12px;font-weight:bold;color:#000000;">CBM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>';
	 
	 $('tr.models').each(function() {
		 
		 var $currentRow = $(this);
		 
		 var modelName = $currentRow.find('input[id$="modelName"]').val();
		 
		 var itemsArray = [];
		 
		 
		 var newItem = "";
		 var currentItem = "";
		 
		 
		 $currentRow.find('tr.sizes').each(function() {
			
			var $currentSize = $(this);
			var sizeId = $currentSize.find('input[id$="sizeID' + rowCounter + '"]').val();
			var sizeName = $currentSize.find('input[id$="sizeName' + rowCounter + '"]').val();
			var qty = $currentSize.find('input[id$="qty' + rowCounter + '"]').val() || 0;
			var price = $currentSize.find('input[id$="price' + rowCounter + '"]').val() || 0;
			var cubicVol = $currentSize.find('input[id$="cubicVol' + rowCounter + '"]').val() || 0;
			//var total = parseInt(qty, 10) * parseFloat(price).toFixed(2);
			var total = +qty * +price;
			var cubicTotal = +qty * +cubicVol;
			 
			
			 
			
			 

			grandTotal+=  +total;
			grandVolTotal+=  +cubicTotal;

			$("#" + 'total' + rowCounter).val('$' + parseFloat(total).toFixed(2));
			 $("#" + 'cubicTotal' + rowCounter).val(parseFloat(cubicTotal).toFixed(2));
			
			
			 
			if(+qty > 0) {
				itemsArray.push({
					"item" : sizeId,
					"name" : sizeName,
					"quantity" : qty,
					"price" : price,
					"total" : total,
					"cubicTotal" : cubicTotal
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
					var cubicTotal2 = parseFloat(val.cubicTotal).toFixed(2);
						
					summaryHTML += '<tr><td style="font-size:13px;font-weight:regular;">' + modelName + '</td><td style="text-align:left;font-size:13px;font-weight:regular;">' + val.name + '</td><td style="text-align:left;font-size:13px;font-weight:regular;">' + val.quantity + '</td><td  style="text-align:left;font-size:13px;font-weight:regular;">$' + val.price + '</td><td style="text-align:left;font-size:13px;font-weight:regular;">$' + total2 + '</td><td style="text-align:left;font-size:13px;font-weight:regular;">' + cubicTotal2 + '</td></tr>';
						
						
					});	
				
				// end print summary
			 
			 
			 
		 }
	 
		 
		 
		
		 
		 
		 
	 });//end on tr.models	
	
	summaryHTML += '</table></div>';
	
	$('#arrData').replaceWith(summaryHTML);
	
	 $("#orderObjectJSONstring").val(JSON.stringify(orderObject));
	 
	 $('#grandtotal').html('ORDER TOTAL: $' + parseFloat(grandTotal).toFixed(2));
	 $('#grandVoltotal').html('TOTAL CBM: ' + parseFloat(grandVolTotal).toFixed(2));
	 $('#summary').html('ORDER SUMMARY: test');
	 $("#orderTotal").val(grandTotal);
	 $("#volumeTotal").val(grandVolTotal);
	 
	 
	 
	 
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
				<span class="sub" STYLE="letter-spacing: 1px;"><strong>GSI ONLINE ORDERS TEST</strong></span>
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
                        <div class="col-md-10">
						   <form action="doug-complete-order.php" name="dougOrderForm" id="dougOrderForm"  method="post">
						   <input type="hidden" value="<?php echo $distributor; ?>" name="customer">
						   <input type="hidden" value="<?php echo $tm_id; ?>" name="salesrep">
						   <input type="hidden" value="<?php echo $tm_name; ?>" name="territoryManagerName">
						   <input type="hidden" value="<?php echo $manufacturer; ?>" name="manufacturer">
						   <input type="hidden" value="<?php echo $manufacturerName; ?>" name="manufacturerName">
						   <input type="hidden" value="<?php echo $date; ?>" name="shipdate">
						   <input type="hidden" value="<?php echo $notes; ?>" name="memo">
						   <input type="hidden" value="<?php echo $orderType; ?>" name="ordertype">
						   <input type="hidden" value="<?php echo $po; ?>" name="purchaseorder">
						   <input type="hidden" value="" id="orderObjectJSONstring" name="orderObjectJSONstring">
						   <input type="hidden" value="" id="orderTotal" name="orderTotal">
						   <input type="hidden" value="" id="volumeTotal" name="volumeTotal">
						   
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
								  <div id="grandVoltotal" style="text-align:left;font-size:15px;font-weight:bold;color:#000000;">TOTAL CBM: 0.00</div>
								</div>
								<br>
								<div style="text-align:left;font-size:12px;font-weight:normal;color:#000000;">NB: 20ft container = 25cbm | 40ft container = 50cbm | 40ft HQ container = 60cbm</div>
								<br>
								<div style="background:#ececec;padding:15px;border-radius: 8px;width:230px;">
								  <div id="grandtotal" style="text-align:left;font-size:15px;font-weight:bold;color:#000000;">ORDER TOTAL: $0.00</div>
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
 					 <!-- add can go here -->
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