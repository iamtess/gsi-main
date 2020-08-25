<?php
 session_start();





$warehouseNo = $_SESSION ['warehouse'];
$_SESSION ['device'] = 'MOBILE';
	
if ($warehouseNo != $_GET["warehouse"]){
	unset($_SESSION['warehouse']);
	$_SESSION ['warehouse'] = $_GET["warehouse"];
	$warehouseNo = $_SESSION ['warehouse'];
}
elseif (!isset( $_SESSION ['warehouse'])){
	//echo '<br>warehouse not set <br>';
$_SESSION ['warehouse'] = $_GET["warehouse"];

}


if ($warehouseNo == ""){
	header('Location: https://system.na2.netsuite.com/pages/login.jsp');
    exit;
}
if (!$_SESSION['user'] == 'territoryManager'){

if (($warehouseNo == '13') || ($warehouseNo == '16') || ($warehouseNo == '15')){ $country = 'usDealers'; 	$countryName = 'US Dealer';	}
if (($warehouseNo == '4') || ($warehouseNo == '3')){ $country = 'ausDealers';  $countryName = 'Australian Dealer';}
if ($warehouseNo == '12'){ $country = 'nzDealers'; $countryName = 'New Zealand Dealer'; }
if ($_SESSION ['country'] == 'distributor'){ $country = 'distributor'; $countryName = 'GSI Distributor'; }
}
else 
if ($_SESSION['user'] == 'territoryManager'){
	$country = 'territoryManager';
	$countryName = 'TM Portal';
}

	
if ($warehouseNo == '13'){$warehouseName = 'ATLANTA';}
if ($warehouseNo == '16'){$warehouseName = 'LA';}
if ($warehouseNo == '15'){$warehouseName = 'HAWAII';}
if ($warehouseNo == '4'){$warehouseName = 'PERTH';}
if ($warehouseNo == '3'){$warehouseName = 'SYDNEY';}
if ($warehouseNo == '12'){$warehouseName = 'AUCKLAND';}
	

	
	
//check to see is warehouse set  11/8/2015
$_SESSION['warehouseName'] = (isset($_GET['warehouseName']) ? $_GET['warehouseName'] : null);
$_SESSION['warehouseName'] = $_GET['warehouseName'];	

//echo 'sesh warehouse'.$_SESSION ['warehouse'];
//echo '<br>warehouse'.$warehouseNo;
//echo '<br>country'.$country;
//echo '<br>warehouseName:'. $warehouseName;

	
// end log in check adn country allocation

define( "HOME", "../" );        // this page's subdir level (home="")
require_once( HOME . "includes/gsi-php-funcs.inc" );






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




<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>


<?php

  set_title( $title );
  set_universal_metadata($metaSubject,$metaDescription,$metaClassification,$metaKeywords);
  link_stylesheet( HOME . "i_gs.css" );
  link_stylesheet( HOME . "css/mobileForm.css" );
 
 include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
 
 ?>



<title>GSI - Brian - Select Sizes</title>
<?php 
link_stylesheet( HOME . "i_gs.css" );
 
 
 include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
?>


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
<body>


	



	<div style='background-color: #fff;	float:left;	overflow: auto;	height:100%; height:auto !important; min-height:100%;'>
	
	<?php include HOME . 'includes/i_header.inc'; ?>
 

  		

	      	<div class="formHeader" style="padding-left:10px;padding-top:4%;padding-bottom:4%;font-size:150%;">LIVE INVENTORY - QUICK VIEW by BRAND (<?php echo $warehouseName; ?>)</div>
		<div class="formHeader" style="padding-left:10px;padding-bottom:4%;font-color:#000000;"><a  href="../TM-portal/i-TM-portal-quick-view-links.php">CHANGE WAREHOUSE</a></div>
		
						
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
  
            <br><br><br><br>
		</form>
       
         
         
         <?php include HOME . 'includes/i_footer.inc'; ?>
         
     </div>
 
		
    








</body>
</html>