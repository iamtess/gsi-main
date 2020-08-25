<?php
session_cache_limiter('public');
session_start();



define( "HOME", "../" );        // this page's subdir level (home="")
$dealer = $_SESSION['distributor'] ;
$manufacturer_name = $_SESSION['manufacturerName'];
$dealer_name = $_SESSION['dist_name'];




$date = $_SESSION['shipDate'];
$orderType = $_SESSION['orderType'];
//$po = $_SESSION['orderPO'];
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

$_SESSION["volumeTotal"] = $_POST["volumeTotal"];
$volumeTotal = $_SESSION["volumeTotal"];


$userType = $_SESSION['usertype'];


$creditStatus = $_SESSION['creditStatus'];
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
<title>GSI - Doug - Submit Order</title>
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

	$("#dougOrderForm").submit();
	
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
							<form action="doug-order-confirm.php#no-back" name="dougOrderForm" id="dougOrderForm"  method="post">
								<input type="textarea" value="" id="orderObjectJSONstringFinal" name="orderObjectJSONstringFinal" hidden>
								<div class="wrapperContainer">
								<div class="contentContainer">
										<p >You are submitting the following order:</p>
										<p >
								<?php 
									
										echo '<table cellpadding="0" cellspacing="5" border="0" style="width:100%;">
												<tr>
												<td style="text-align:left;font-size:13px;font-weight:bold;color:#000000;">DISTRIBUTER NAME:</td><td style="text-align:left;font-size:13px;">'.$dealer_name.'</td>
												</tr>
												<tr>
												<td style="text-align:left;font-size:13px;font-weight:bold;color:#000000;">MANUFACTURER:</td><td style="text-align:left;font-size:13px;">'.$manufacturer_name.'</td>
												</tr>
												<tr>
												<td style="text-align:left;font-size:13px;font-weight:bold;color:#000000;">SHIP DATE:</td><td style="text-align:left;font-size:13px;">'.$date.' <span class="requiredField">(NB: this date is in ISO format)</span></td>
												</tr>
												<!-- <tr>
												<td style="text-align:left;font-size:13px;font-weight:bold;color:#000000;">ORDER TYPE:</td><td style="text-align:left;font-size:13px;">';
													if ($orderType == '1')
													{ echo 'At Once';}
													else if ($orderType == '2')
													{echo 'Prebook';}
													else
													{echo 'Drop Ship';}
										  echo '</td>
												</tr> -->
												<!-- <tr>
												<td style="text-align:left;font-size:13px;font-weight:bold;color:#000000;">PO:</td><td style="text-align:left;font-size:13px;">'.$po.'</td>
												</tr>-->
												<tr>
												<td style="text-align:left;font-size:13px;font-weight:bold;color:#000000;">NOTES:</td><td style="text-align:left;font-size:13px;">'.$notes.'</td>
												</tr>
												</table>';


												$data = json_decode($jsonOrderObject, true);

										echo '<table cellpadding="5" cellspacing="10" border="0" style="width:100%;">';
										echo '<tr><td colspan="6"><hr></td></tr>';
										echo '<tr>';
										echo '<td style="width:50%; text-align:left;font-size:13px;font-weight:bold;color:#000000;">MODEL</td><td style="width:10%; font-size:13px;font-weight:bold;color:#000000;">SIZE</td><td style="width:15%;font-size:13px;font-weight:bold;color:#000000;">QUANTITY</td><td style="width:10%;text-align:left;font-size:13px;font-weight:bold;color:#000000;color:#000000;">PRICE</td><td style="width:10%;text-align:left;font-size:12px;font-weight:bold;color:#000000;">TOTAL</td><td style="width:20%;text-align:left;font-size:12px;font-weight:bold;color:#000000;">CBM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>';
										echo '</tr>';
										foreach($data["models"]as $model) {

											echo '<tr>';
											echo '<td style="text-align:left;font-size:13px;">'.$model['name'].'</td>';
											$rowCount = 1;
											$modelNM = $model['name'];

											foreach($model["items"]as $row) {

												if($rowCount > 1) {
													echo '<tr>';
													echo '<td style="text-align:left;font-size:13px;">'.$modelNM.'</td>';
												}
												echo '<td style="text-align:left;font-size:13px;">'.$row['name'].'</td>';
												echo '<td style="text-align:left;font-size:13px;">'.$row['quantity'].'</td>';
												echo '<td style="text-align:left;font-size:13px;">$'.$row['price'].'</td>';

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

												echo '<td style="text-align:left;font-size:13px;text-align: left;">$'.$row['total'].'</td>';
												
												
												if (strpos($row['cubicTotal'],'.') == false) {
											   $row['cubicTotal'] = $row['cubicTotal']. ".00";
											   }
										   else 
										   {	
											   $row['cubicTotal'] = sprintf("%01.2f", $row['cubicTotal']);
											   if (number_format($row['total'], 2)){
											   $row['cubicTotal']  = number_format($row['cubicTotal'], 2);

											   }
										   }
												
												
												
												
												echo '<td style="text-align:left;font-size:13px;text-align: left">'.$row['cubicTotal'].'</td>';
												echo '</tr>';

												$rowCount++;
											}

										}
										
											echo '<tr>';
										echo '<td style="font-size:13px;font-weight:bold;color:#000000;"><br>Total CBM<br><span class="requiredField"></span></td>';
										echo '<td style="text-align: left;font-size:13px;font-weight:bold;color:#000000;"><br><strong>';
											
											
											if (strpos($volumeTotal,'.') == false) {
											   $volumeTotal = $volumeTotal. ".00";
											   }
										   else 
										   {	
											
											   $volumeTotal = sprintf("%01.2f", $volumeTotal);
											   if (number_format($volumeTotal, 2)){
											   $volumeTotal  = number_format($volumeTotal, 2);
										   }
										   }
											
											echo '<strong>'.$volumeTotal.'m<sup>3</sup></strong></td>';
											echo '<td></td><td></td><td></td><td></td>';
										echo '</tr>';
										echo '<tr>';
										echo '<td style="font-size:13px;font-weight:bold;color:#000000;">Grand Total<br><span class="requiredField">(Excl Tax + Shipping)</span></td>';
										echo '<td valign="top" style="text-align: left; font-size:13px;font-weight:bold;color:#000000;">';

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

										echo '<strong>$'.$orderTotal.'</strong></td>';
										
										
										
										echo '<td></td><td></td><td></td><td></td>';
										echo '</tr>';
										
										echo '<tr><td colspan="6"><br><hr></td></tr>';
										echo '</table>';
								?>
							   <?php
											
											
											
							   

							  


								   echo "<button  onclick='brianSubmitValidator(this.id)' id='submitPendingApproval' class='btn'>SUBMIT ORDER</button><br>";
								   


							  


							?>
									</p>
									</div>
								</div>
						</form>
					</div>  
		
				
				
				
				<div class="col-md-3 hidden-xs"> 
 					    <div class="module left">
 					    <!-- add goes here -->
						
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