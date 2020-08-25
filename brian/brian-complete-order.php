<?php
session_cache_limiter('public');
session_start();

if (!isset($_SESSION['basic_is_logged_in'])
    || $_SESSION['basic_is_logged_in'] !== true) {
    // not logged in, move to login page
      header('Location: ../TM-portal/tm-portal-login.php');
    exit;
}


define( "HOME", "../" );        // this page's subdir level (home="")
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
$models = $_SESSION["models"];
$_SESSION["model_name"] = $_POST["modelName"];
$model_name = $_SESSION["model_name"];
$_SESSION["sizesID"] = $_POST["sizeID"];
$sizeID = $_SESSION["sizesID"];
$_SESSION["qty"] = $_POST["qty"];
$qty = $_SESSION["qty"];
$_SESSION["tprice"] = $_POST["tradePrice"];
$tprice = $_SESSION["tprice"];

$_SESSION["sizeName"] = $_POST["sizeName"];
$sizeName = $_SESSION["sizeName"];
$_SESSION["jsonOrderObject"] = $_POST["orderObjectJSONstring"];
$jsonOrderObject = $_SESSION["jsonOrderObject"];

$_SESSION["orderTotal"] = $_POST["orderTotal"];
$orderTotal = $_SESSION["orderTotal"];
$userType = $_SESSION['usertype'];


$creditStatus = $_SESSION['creditStatus'];
$currency = '$';
if ($warehouse == '47'){
	
	$currency = '€';
	
}


//echo 'creditStatus'.$creditStatus;

//echo "usertype: ".$_SESSION['usertype'];
//echo " tm: ".$_SESSION['tm'];
//echo "tm name".$_SESSION['tm_name'];
//echo " warehouse: ".$_SESSION['warehouse'];
//echo 'wareshoue variable'.$warehouse;
//echo " dealer: ".$_SESSION['dealer'];
//echo " dealer name: ".$_SESSION['dealer_name'];


//echo 'model name'.$model_name.'<br>';
//$string=implode(",",$model_name);
//echo 'models'.$string;

//print_r($jsonOrderObject);












//$_SESSION['models'] =  $_POST["model_select"];
//$models = $_SESSION['models'];


?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>GSI - Brian - Submit Order</title>
<?php
include HOME . 'includes/header-includes.inc'; 
include HOME . 'includes/geo-locator-script.inc'; 
include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
?>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>


<script type="text/javascript">

var jsonOrderObject = <?php echo $_SESSION["jsonOrderObject"];?>;

$(document).ready(function(){
	   
});

function brianSubmitValidator(submitButtonId) {
	
	//alert("brianSubmitValidator");
	
	$('#submitPendingApproval').prop('disabled', true);
	$('#submitPendingFulfillmentShip').prop('disabled', true);
	$('#submitPendingFulfillmentHold').prop('disabled', true);
	
	//var submitButtonId = this.id;
	
	//alert("submitButtonId: " + submitButtonId);
	
	var status = '';
	
	switch(submitButtonId) {		  
		case 'submitPendingApproval' :
			status = 'pendingapproval';
			break;
		case 'submitPendingFulfillmentShip' :
			status = 'ship';
			break;
		case 'submitPendingFulfillmentHold' :
			status = 'hold';
			break; 		  
	}

	
	jsonOrderObject.status = status;
 	jsonOrderObject.usertype = "<?php echo $_SESSION['usertype'];?>";
	

	$("#orderObjectJSONstringFinal").val(JSON.stringify(jsonOrderObject));

	$("#brianOrderForm").submit();
	
}


</script>

<style>
button:disabled {
    background: #dddddd;
	
} 
button:disabled:hover {
    background: #dddddd;
	
} 
</style>

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
                        <div class="col-md-8">
                            <h3 class="uppercase mb0">YOUR ORDER</h3>
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
							<form action="brian-order-confirm.php#no-back" name="brianOrderForm" id="brianOrderForm"  method="post">
								<input type="textarea" value="" id="orderObjectJSONstringFinal" name="orderObjectJSONstringFinal" hidden>
								<div class="wrapperContainer">
								<div class="contentContainer">
										<p >You are submitting the following order:</p>
										<p >
								<?php 
									
										echo '<table cellpadding="0" cellspacing="5" border="0" style="width:80%;">
												<tr>
												<td style="text-align:left;font-size:13px;font-weight:bold;color:#000000;width:26%;">TERRITORY MANAGER:</td><td>'.$tm_name.'</td>
												</tr><tr>
												<td style="text-align:left;font-size:13px;font-weight:bold;color:#000000;">ACCOUNT NAME:</td><td>'.$dealer_name.'</td>
												</tr><tr>
												<td style="text-align:left;font-size:13px;font-weight:bold;color:#000000;">SHIP DATE:</td><td>'.$date.' <span class="requiredField">(NB: this date is in ISO format)</span></td>
												</tr>
												<tr>
												<td style="text-align:left;font-size:13px;font-weight:bold;color:#000000;">ORDER TYPE:</td><td>';
													if ($orderType == '1')
													{ echo 'At Once';}
													else if ($orderType == '2')
													{echo 'Prebook';}
													else
													{echo 'Drop Ship';}
										  echo '</td>
												</tr>
												<tr>
												<td style="text-align:left;font-size:13px;font-weight:bold;color:#000000;">PO:</td><td>'.$po.'</td>
												</tr><tr>
												<td style="text-align:left;font-size:13px;font-weight:bold;color:#000000;">NOTES:</td><td>'.$notes.'</td>
												</tr>
												</table>';


												$data = json_decode($jsonOrderObject, true);

										echo '<table cellpadding="5" cellspacing="10" border="0" style="width:80%;">';
										echo '<tr><td colspan="5"><hr></td></tr>';
										echo '<tr>';
										echo '<td style="width:50%; text-align:left;font-size:13px;font-weight:bold;color:#000000;">MODEL</td><td style="width:17%;font-size:13px;font-weight:bold;color:#000000;">SIZE</td><td style="width:19%;font-size:13px;font-weight:bold;color:#000000;">QUANTITY</td><td style="text-align:left;width:12%;font-size:13px;font-weight:bold;color:#000000;color:#000000;">PRICE</td><td style="text-align:left;width:12%;font-size:12px;font-weight:bold;color:#000000;">TOTAL</td>';
										echo '</tr>';
										foreach($data["models"]as $model) {

											echo '<tr>';
											echo '<td>'.$model['name'].'</td>';
											$rowCount = 1;

											foreach($model["items"]as $row) {

												if($rowCount > 1) {
													echo '<tr>';
													echo '<td></td>';
												}
												echo '<td>'.$row['name'].'</td>';
												echo '<td>'.$row['quantity'].'</td>';
												echo '<td>'.$currency.$row['price'].'</td>';

												if (strpos($row['total'],'.') == false) {
											   $row['total'] = $row['total']. ".00";
											   }
										   else 
										   {	
											   $row['total'] = sprintf("%01.2f", $row['total']);
											   if (number_format($row['total'], 2)){
											   $row['total']  = number_format($row['total'], 2);

											   }
										   }

												echo '<td style="text-align: right">'.$currency.$row['total'].'</td>';
												echo '</tr>';

												$rowCount++;
											}

										}

										echo '<tr>';
										echo '<td style="font-weight:bold;color:#000000;">Grand Total<br><span class="requiredField">(Excl Tax + Shipping)</span></td><td></td><td></td><td></td><td style="text-align: right; font-weight:bold;color:#000000;">';

										if (strpos($orderTotal,'.') == false) {
											   $orderTotal = $orderTotal. ".00";
											   }
										   else 
										   {	
											   $orderTotal = sprintf("%01.2f", $orderTotal);
											   if (number_format($orderTotal, 2)){
											   $orderTotal  = number_format($orderTotal, 2);

											   }
										   }

										echo '<strong>'.$currency.$orderTotal.'</strong></td>';
										echo '</tr>';
										echo '<tr><td colspan="5"><hr></td></tr>';
										echo '</table>';
								?>
							   <?php
											
											
											
							   

							   //if dealer show one button if TM show 3 buttons
							   if ($userType == 'dealer')
							   {
								   //if account is on hold echo notification
								   //if ($creditStatus == 'hold'){
								   
									  // echo '<div style="width: 80%;background:#ffffff;border-radius: 8px; border:3px solid #f80712; font-size:16px; font-weight:regular; font-family: \'Josefin Sans\', serif;color:#f80712;text-align:left;padding-left:10px;padding-top:18px;padding-bottom:18px;"><strong>PLEASE NOTE:<br>Your Account is on credit hold. Please pay your account so we can process this order.</strong></div><br>';
								   //}
								   
								   

								  if ($warehouse == '3' || '4')
								  { 

									 //echo $warehouse;
									 //echo 'AUS';


										echo '<p class="requiredField">NB: Orders under $1,000.00 will incur a $35.00 surcharge.<br>To avoid the surcharge ensure your order is above this minimum.</p>	';


								 }
								 else if ($warehouse == '13' || '14' || '15')
								 { 
									//echo $warehouse;
									//echo 'US';
									if ($orderTotal < 750)
									 {

										echo '<p class="requiredField">NB: Orders under $750.00 will incur a $35.00 surcharge.<br>To avoid the surcharge ensure your order is above this minimum.</p>	';

									 }
								 }
								 else if ($warehouse == '12')
								 { 
								   //echo $warehouse;
								   //echo 'NZ';
								   if ($orderTotal < 1000)
								   {

								   echo '<p class="requiredField">NB: Orders under $1,000.00 will incur a $35.00 surcharge.<br>To avoid the surcharge ensure your order is above this minimum.</p>	';

								}
							 }

									$testDate = str_replace('/', '-', $date);
									//echo date('Y-m-d', strtotime($testDate));

									if( strtotime($testDate) > strtotime('+7 days'))
									{
										//IF ORDER DATE > 7 DAYS AWAY SHOW GREEN BUTTON PENDING APPROVAL
										echo "<button class=\"btn\"  onclick=\"brianSubmitValidator(this.id)\" id=\"submitPendingApproval\" class=\"btn\">SUBMIT ORDER</button>";
									}
									else 
									{
										//IF ORDER DATE < 7 DAYS AWAY SHOW BLUE BUTTON PENDING FULFILMENT HOLD
										echo "<button class=\"btn\"   onclick=\"brianSubmitValidator(this.id)\" id=\"submitPendingFulfillmentHold\" class=\"btn\">SUBMIT ORDER</button>";
									}

							   }
							   else 
							   {
								   //echo 'creditStatus'.$creditStatus;
								   //if account is on hold echo notification
								   //if ($creditStatus == 'hold'){
								   
								   	//echo '<div style="width: 80%;background:#ffffff;border-radius: 8px; border:3px solid #f80712; font-size:16px; font-weight:regular; font-family: \'Josefin Sans\', serif;color:#f80712;text-align:left;padding-left:10px;padding-top:18px;padding-bottom:18px;"><strong>PLEASE NOTE:<br>This Account is on credit hold! Please secure payment before processing this order.</strong></div><br>';
							 
								   //}


								   echo "<button  onclick='brianSubmitValidator(this.id)' id='submitPendingApproval' class='btn'>SUBMIT Pending Approval</button><br>";
								   echo "<button  onclick='brianSubmitValidator(this.id)' id='submitPendingFulfillmentShip' class='btn'>SUBMIT Pending Fulfillment SHIP</button><br>";
								   echo "<button  onclick='brianSubmitValidator(this.id)' id='submitPendingFulfillmentHold' class='btn'>SUBMIT Pending Fulfillment HOLD</button>";


							   }


							?>
									</p>
									</div>
								</div>
						</form>
					</div>  
		
				
				
				
				<div class="col-md-3 hidden-xs"> 
 					    <div class="module left">
 					    <?php include HOME . 'includes/brian-ad-include.inc'; ?>
					    </div>
				   </div>
				</div></div>
	</section>       


 <script src="../js/bootstrap.min.js"></script>
        <script src="../js/smooth-scroll.min.js"></script>
        <script src="../js/parallax.js"></script>
        <script src="../js/scripts.js"></script> 





</body>
</html>