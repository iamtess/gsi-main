<?php
//session_cache_limiter('public');
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<?php
//check if TMis logged in or dealer
$_SESSION ['warehouse'] = '3';
$warehouseNo = $_SESSION ['warehouse'];
	

	

	
	
//check to see is warehouse set  11/8/2015
$_SESSION['warehouseName'] = 'Sydney';	
$warehouseName = $_SESSION['warehouseName'];

//echo 'sesh warehouse'.$_SESSION ['warehouse'];
//echo '<br>warehouse'.$warehouseNo;
//echo '<br>country'.$country;
//echo '<br>warehouseName:'. $warehouseName;

	
// end log in check adn country allocation

define( "HOME", "../" );        // this page's subdir level (home="")
require_once( HOME . "includes/gsi-php-funcs.inc" );

//universal header info/scripts
$title = "dealer admin";
include HOME . 'includes/header-includes.inc';
include HOME . 'includes/main-nav-menu-scripts.inc';




if ($_SESSION['usertype'] != "dealer"){
	
	$_SESSION['tm'] = $_POST["salesrep_select"];
	$_SESSION['tm_name'] = $_POST["tm_name"];
	//$_SESSION['warehouse'] = '3';//$_POST["location_select"];
	$_SESSION['dealer'] = $_POST["customer_select"];
	$_SESSION['dealer_name'] = $_POST["customer_name"];
	$_SESSION['orderNotes'] = $_POST["orderNotes"];
	
}
else {
	// these variables come from useparams set in previous page from Daisy 
	$_SESSION['tm_name'] = $_POST["tmname"];
	$_SESSION['dealer_name'] = $_POST["custname"];
	$_SESSION['orderNotes'] = 'WEB ORDER: '.$_POST["orderNotes"];
	//$_SESSION['warehouse'] = '3';
}


$userType = $_SESSION['usertype'];


$warehouse = $_SESSION['warehouse'];

$brands = $_SESSION['brands'];
$_SESSION["models"] = $_POST["modelSelect"];
$models = $_SESSION["models"];

$navID = 'stock';
$navFolder = 'brian';
	
?>




<title>GSI - Brian - Select Sizes</title>
<link rel="stylesheet" type="text/css" href="../css/brian-styles.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

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
		url:'eg-surfing-aus-getsizes.php',
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
	
 var rowCount = "";
  
function totalate() {
	
	   var orderObject = {
		"customer" : <?php echo json_encode($dealer); ?>,
		"location" : <?php echo json_encode($warehouse); ?>,
		"shipdate" : <?php echo json_encode($date); ?>,
		"memo" : <?php echo json_encode($notes); ?>,
		"salesrep" : <?php echo json_encode($tm); ?>,
		"po" : <?php echo json_encode($po); ?>,
		"status" : "",
		"models" : []
	};
	 
	 var rowCounter = 1;
	 var grandTotal = 0;
	 var grandTotalDiscount = 0;
	 var itemsAddedCount = 0;
	 var total2 = 0;
	
	var summaryHTML = '<div id="arrData" style="width:100%;"><table cellpadding="5" cellspacing="10" border="0" class="pageText"><tr><td class="pageText" style="width:50%" style="text-align:left;"><strong>Model</strong></td><td "width:17%"><strong>Size</strong></td><td width:9%><strong>Quantity</strong></td><td style="text-align:left" width:12%><strong>Price</strong></td><td style="text-align:left" width:12%><strong>Total</strong></td></tr>';
	 
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
			var sizeSKU = $currentSize.find('input[id$="sizeSKU' + rowCounter + '"]').val();
			var qty = $currentSize.find('input[id$="qty' + rowCounter + '"]').val() || 0;
			var price = $currentSize.find('input[id$="price' + rowCounter + '"]').val() || 0;
			//var total = parseInt(qty, 10) * parseFloat(price).toFixed(2);
			var total = +qty * +price;
			 
			
			 
			
			 

			grandTotal+=  +total;
			grandTotalDiscount+=  +total -(total * 20/100); 

			$("#" + 'total' + rowCounter).val('$' + parseFloat(total).toFixed(2));
			
			
			 
			if(+qty > 0) {
				itemsArray.push({
					"item" : sizeId,
					"name" : sizeName,
					"sku" : sizeSKU,
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
						
					summaryHTML += '<tr><td class="pageText">' + modelName + '</td><td class="pageText" style="text-align:left;">' + val.name + '</td><td class="pageText">' + val.quantity + '</td><td class="pageText" style="text-align:left">$' + val.price + '</td><td class="pageText" style="text-align:left">$' + total2 + '</td></tr>';
						
						
					});	
				
				// end print summary
			 
			 
			 
		 }
	 
		 
		 
		
		 
		 
		 
	 });//end on tr.models	
	
	summaryHTML += '</table></div>';
	
	$('#arrData').replaceWith(summaryHTML);
	
	 $("#orderObjectJSONstring").val(JSON.stringify(orderObject));
	 
	 $('#grandtotal').html('Sub Total: $' + parseFloat(grandTotal).toFixed(2));
	 $('#grandtotalDiscount').html('Total: $' + parseFloat(grandTotalDiscount).toFixed(2));
	 $('#summary').html('ORDER SUMMARY:');
	 $("#orderTotal").val(grandTotalDiscount);
	 $("#subTotal").val(grandTotal);
	 
	 
	 
	 
	 return itemsAddedCount;
	
};



</script>



</head>
<?php
//determine in index page or other to assign backgorund color
if ($pageName == 'home'){
	
	echo "<body class=\"bodyHome\">";
	
}
else {
    
	echo "<body class=\"bodyPages\">";
	
}
?>
<!-- include header nav -->
<?php include HOME . 'includes/main-nav-top-banner.inc'; ?>
<?php
    //begin main page container
	if ($view == 'ipad'){
	echo "<div class=\"iPadmainContainer\">";
	}
	else {
		
		echo "<div class=\"mainContainer\">";
	}
	?>	
<?php include HOME . 'includes/main-nav-menu.inc'; ?>
<form action="brian-surfing-aus-complete-order.php" name="brianOrderForm" id="brianOrderForm"  method="post">
   			<input type="hidden" value="surfing aus dealer" name="surfin">
   			<input type="hidden" value="3" name="location">
   			<input type="hidden" value="<?php echo $date; ?>" name="shipdate">
   			<input type="hidden" value="surfing au order" name="memo">
   			<input type="hidden" value="Mark Kelly" name="salesrep">
   			<input type="hidden" value="TBA" name="purchaseorder">
   			<input type="hidden" value="" id="orderObjectJSONstring" name="orderObjectJSONstring">
   			<input type="hidden" value="" id="orderTotal" name="orderTotal">
   			<input type="hidden" value="" id="subTotal" name="subTotal">



	<div style='width:996px;background-color: #fff;	float:left;	overflow: auto;	height:100%; height:auto !important; min-height:100%;'>
			<div class="brandContentContainer" style="width:100%;">
			<div class="contentText" style="padding-top:10px;padding-bottom:10px;float:left;">
				<div class="contentContainer" style="padding-top:50px;padding-left:50px;width:100%;">
							<span class="mainHheading">SURFING AUS PREBOOK ORDER FORM</span><br>
						
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
                 <br>
                 <hr>
                 <br>
                 <a name="orderSummary"></a>
                 <span class="mainHheading" style="font-size:24px;">YOUR ORDER SUMMARY</span>
                <div id="arrData" style="width:100%;"> </div>
                 <br>  <!-- end order summary div -->
                  <div style="background:#ececec;padding:15px;border-radius: 8px;width:200px;">
                      <div id="grandtotal" class="largeText" style="font-size:18px;">Sub Total: $0.00</div>
					  <span class="pageText" style="font-size:12px;padding-top:6px:padding-bottom:3px;">Discount 20%</span>
                      <div id="grandtotalDiscount" class="largeText" style="font-weight:bold;font-size:20px;">Total: $0.00</div>
                      <span class="pageText" style="font-size:12px;padding-top:3px:padding-bottom:3px;">(Excl Tax + Shipping)</span>
                  </div>
                  
                  
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
                  `<br><br>              
                   <div style="float:left;padding-right:20%;background-color:#ffffff;"><input type="submit" value="NEXT" class="nextButton" onsubmit></div>
                   <br><br><br><br><br><br><br><br><br><br>
                </div>
               
               
           
           
            
             



            <br><br><br><br>
		</div></form>
       
         <br><br><br><br><br><br>
     </div>
	</div>
	</div>

<!--end content container -->


</body>
</html>       
