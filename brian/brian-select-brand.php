<?php

session_cache_limiter('public');
session_start();


if (!isset($_SESSION['basic_is_logged_in'])
    || $_SESSION['basic_is_logged_in'] !== true) {
    // not logged in, move to login page
    header('Location: ../brian/index.php');
    exit;
}


define( "HOME", "../" );        // this page's subdir level (home="")

if ($_SESSION['usertype'] != "dealer"){
	
	$_SESSION['tm'] = $_POST["salesrep_select"];
	$_SESSION['tm_name'] = $_POST["tm_name"];
	$_SESSION['warehouse'] = $_POST["location_select"];
	$_SESSION['dealer'] = $_POST["customer_select"];
	$_SESSION['dealer_name'] = $_POST["customer_name"];
	$_SESSION['orderNotes'] = $_POST["orderNotes"];
	
}
else {
	
	$_SESSION['tm_name'] = $_POST["tmname"];
	$_SESSION['dealer_name'] = $_POST["custname"];
	$_SESSION['orderNotes'] = 'WEB ORDER: '.$_POST["orderNotes"];
	
}



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


?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>GSI - Brian - Select a Brand</title>
<link rel="stylesheet" type="text/css" href="../css/brian-styles.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	$('#brand_select').prop('disabled', true);
	
	$.ajax({
		type:'POST',
		url:'eg-getbrands.php',
		success:function(html){
			
			$('#brand_select').html(html);
			$('#brand_select').prop('disabled', false);
			
			 $('.brandicon').each(function() {
				 
				var $this = $(this);
				
				var brandId = $this.attr('id');
				console.log('brandId: ' + brandId);
				$this.on('click', function(){
					if( !$this.is('.checked')){
						$this.addClass('checked');
						$('#brandcheckbox' + brandId).prop('checked', true);
					} else {
						$this.removeClass('checked');
						$('#brandcheckbox' + brandId).prop('checked', false);
					}
				});
			});
		}
	}); 
});	
</script>
<script>
function CheckForm(){
	var checked=false;
	var elements = document.getElementsByName("brandcheckbox[]");
	for(var i=0; i < elements.length; i++){
		if(elements[i].checked) {
			checked = true;
		}
	}
	if (!checked) {
		alert('Please Select a Brand to add to your order.');
	}
	return checked;
}
function SelectAllBrands(){
	$('.brandicon').each(function() {
		var $this = $(this);
		var brandId = $this.attr('id');		
		$this.prop('checked', true);
		$this.addClass('checked');	
		$('#brandcheckbox' + brandId).prop('checked', true);
		
	});
}
function UnselectAllBrands(){
	$('.brandicon').each(function() { 
		var $this = $(this);
		var brandId = $this.attr('id');	
		$this.prop('checked', false);
		$this.removeClass('checked');	
		$('#brandcheckbox' + brandId).prop('checked', false);
	});
}
</script>
</head>

<body>

<div style="background-color:#d9d9d9; width:100%; height:100%;">
   <?php 
   if ($userType == 'dealer'){
	  include HOME . 'includes/brian-dealer-header.inc';    
   }
   else {
      include HOME . 'includes/brian-header.inc'; 
   }
   ?>
   <form action="brian-select-model.php" name="brianBrandSelectionForm" id="brianBrandSelectionForm"  method="post" onsubmit="return CheckForm();">
	<div class="wrapperContainer">
         <div class="contentContainer">
            <span class="mainHheading"><br>BRAND SELECTOR</span>
           
            <p class="pageText">Click to select Brands to add to your order:</p>
             <div style="width:100%;padding-top:10px;padding-left:15px;">
            <button type="button" onclick="SelectAllBrands()" class="selectAllButton">Select All</button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" onclick="UnselectAllBrands()" class="selectAllButton">Unselect All</button>
            </div>
            	<div id="brand_select" style="padding-top:16px;">
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
			<br/>
           <div style="float:left;padding-right:20%;"><input type="submit" value="NEXT" class="nextButton"></div>
            <br><br><br><br><br><br><br><br><br><br>
		</div></form>
         <br><br><br><br><br><br><br><br><br><br>
     </div>
</div>       
</body>
</html>