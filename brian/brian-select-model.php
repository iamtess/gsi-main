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
$tm = $_SESSION['tm'] ;
$tm_name = $_SESSION['tm_name'];
$warehouse = $_SESSION['warehouse'];
$dealer = $_SESSION['dealer'];
$dealer_name = $_SESSION['dealer_name'];
$date = $_SESSION['shipDate'];
$po = $_SESSION['orderPO'];
$notes = $_SESSION['orderNotes'];
$_SESSION['brands'] =  $_POST["brandcheckbox"];
$brands = $_SESSION['brands'];
$userType = $_SESSION['usertype'];


//echo "usertype: ".$_SESSION['usertype'];
//echo " tm: ".$_SESSION['tm'];
//echo "tm name".$_SESSION['tm_name'];
//echo " warehouse: ".$_SESSION['warehouse'];
//echo " dealer: ".$_SESSION['dealer'];
//echo " dealer name: ".$_SESSION['dealer_name'];
//echo " notes: ".$_SESSION['orderNotes'];

?>



<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>GSI - Brian - Select a Model</title>
<link rel="stylesheet" type="text/css" href="../css/brian-styles.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	$('#model_select').prop('disabled', true);
	
	console.log('Test');
	
	$.ajax({
		type:'POST',
		url:'eg-getmodels.php',
		data:'brands='+ JSON.stringify(<?php echo json_encode($_POST["brandcheckbox"]) ?>) + '&location=' +  <?php echo $warehouse ?>,
		success:function(html){
			$('#model_select').html(html);
			$('#model_select').prop('disabled', false);
		
		$('.brandicon').each(function() {
				 
				var $this = $(this);
				
				var modelId = $this.attr('id');
				console.log('ModelId: ' + modelId);
				$this.on('click', function(){
					if( !$this.is('.checked')){
						$this.addClass('checked');
						$('#modelSelect' + modelId).prop('checked', true);
					} else {
						$this.removeClass('checked');
						$('#modelSelect' + modelId).prop('checked', false);
					}
				});
			});
		}
	}); 
});	
</script>
<script>
function CheckForm(){
	
	//return true;
	
	var checked=false;
	var elements = document.getElementsByName("modelSelect[]");
	for(var i=0; i < elements.length; i++){
		if(elements[i].checked) {
			checked = true;
			break;
		}
	}
	if (!checked) {
		alert('Please Select a Model to add to your order.');
	}
	return checked;
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
   <form action="brian-select-sizes.php" name="brianOrderFormBrand" id="brianOrderFormBrand"  method="post" onsubmit="return CheckForm();">
	<div class="wrapperContainer">
         <div class="contentContainer">
            <span class="mainHheading"><br>MODEL SELECTOR</span>
            <p class="pageText">Click to select Models to add to your order:</p>
               <div id="model_select" style="padding-top:16px;">
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
			<br/><br/>
			<div style="float:left;padding-right:20%;"><input type="submit" value="NEXT" class="nextButton" onsubmit></div>
            <br><br><br><br><br><br><br><br><br><br>
		</div></form>
         <br><br><br><br><br><br><br><br><br><br>
     </div>
</div>       
</body>
</html>