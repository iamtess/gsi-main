<?php
session_start();

$accountName = $_POST["accountName"]; //how many ordered
//echo $accountName.'<br>';
$contact = $_POST["contact"]; //item name
//echo $contact.'<br>';
$email = $_POST["email"];//price
//echo $email.'<br>';
$phone 	= $_POST["phone"]; //return url
//echo $phone.'<br>';
$addLine1 = $_POST["addLine1"];
//echo $addLine1.'<br>';
$addLine2 = $_POST["addLine2"];
//echo $addLine2.'<br>';
$town = $_POST["town"];
//echo $town.'<br>';
$state = $_POST["state"];
//echo $state.'<br>';
$pcode = $_POST["postcode"];
//echo $pcode.'<br>';
$orderMessage 	= $_POST["message"]; //return url
//echo $orderMessage.'<br>';
$shipDate 	= $_POST["shipDate"]; //return url


$orderTotalF = $_SESSION["orderTotal"];
$subTotalF = $_SESSION["subTotal"];


//echo 'sub: '.$_SESSION["subTotal"];
//echo '<br>total: '.$_SESSION["orderTotal"];



$_SESSION["jsonOrderObject"] = $_POST["orderObjectJSONstringFinal"];
$jsonOrderObject = $_SESSION["jsonOrderObject"];

?>

<script>
// It works without the History API, but will clutter up the history
var history_api = typeof history.pushState !== 'undefined'

// The previous page asks that it not be returned to
if ( location.hash == '#no-back' ) {
  // Push "#no-back" onto the history, making it the most recent "page"
  if ( history_api ) history.pushState(null, '', '#stay')
  else location.hash = '#stay'

  // When the back button is pressed, it will harmlessly change the url
  // hash from "#stay" to "#no-back", which triggers this function
  window.onhashchange = function() {
    // User tried to go back; warn user, rinse and repeat
    if ( location.hash == '#no-back' ) {
      alert("Sorry you can't go back. Please go to Create Order page to begin a new Order")
      if ( history_api ) history.pushState(null, '', '#stay')
      else location.hash = '#stay'
    }
  }
}
</script>
<?php

$data = json_decode($jsonOrderObject, true);

//var_dump ($data);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>

<?php

define( "HOME", "../" );        // this page's subdir level (home="")
require_once( HOME . "includes/gsi-php-funcs.inc" );

//universal header info/scripts
$title = "dealer admin";
include HOME . 'includes/header-includes.inc';
include HOME . 'includes/main-nav-menu-scripts.inc';

echo '<link rel="stylesheet" type="text/css" href="../css/brian-styles.css">';
echo '<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans">';
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>';
?>
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
	<div style='width:996px;background-color: #fff;	float:left;	overflow: auto;	height:100%; height:auto !important; min-height:100%;'>
			<div class="brandContentContainer">
			<div class="contentText" style="padding-top:10px;padding-bottom:10px;float:left;">
			<div class="contentContainer">
		
		<?php 
				
		$message = "&#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; <br><strong>SURF SCHOOL DETAILS</strong><br>&#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45;<br>
		<p><strong>$accountName</strong><p><strong>CONTACT:</strong> $contact<br><strong>EMAIL:</strong> $email<br><strong>PHONE:</strong> $phone<br><strong>ADDRESS:</strong> $addLine1, $town, $state, $pcode<br><strong>PROPOSED SHIP DATE:</strong> $shipDate<br><strong>MESSAGE:</strong> $orderMessage</p><br><br>";
		$message .= '&#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45;<br><strong>ORDER DETAILS:</strong><br>&#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45; &#45;<br><br>
		<table cellpadding="0" cellspacing="5" width="650px" border="0">';
		$message .='<tr>
					<td style="min-width:150px;"><strong>Model</strong></td>
					<td style="min-width:50px;"><strong>SKU</strong></td>
					<td style="min-width:50px;"><strong>Size</strong></td>
					<td><strong>Quantity</strong></td>
					<td style="text-align:right;"><strong>Price</strong></td>
					<td style="text-align:right;"><strong>Total</strong></td>
					</tr>';

			$orderGrandtotal = '0';
			$orderGrandtotal1 = '0';
				
			foreach($data["models"]as $model) {
				
			$message .= '<tr><td>'.$model['name'].'</td>';
			$rowCount = 1;
			
			foreach($model["items"]as $row) {
				
				if($rowCount > 1) {
					$message .= '<tr><td></td>';
				}
				$message .=  '<td>'.$row['sku'].'</td>';
				$message .=  '<td>'.$row['name'].'</td>';
				$message .= '<td>'.$row['quantity'].'</td>';
				$message .=  '<td style="text-align:right;">$'.$row['price'].'</td>';
				
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
				
				
				
				
				$message .=  '<td style="text-align:right;">$'.$row['total'].'</td>';
				$message .=  '</tr>';
				
				$orderGrandTotal1 = + $orderGrandTotal1 +$row['total'];
				$orderGrandTotal = + $orderGrandTotal1 -$orderGrandTotal1 * 20/100;
				$rowCount++;
			}
		
		}
				
				
		$message .=  '<tr>';
		$message .=  '<td colspan="5" style="text-align:left;"><br><br><strong><strong>Sub Total </strong></span></td>';
		
		
						if (strpos($subTotalF,'.') == false) {
							   $subTotalF = $subTotalF. ".00";
							   }
						   else 
						   {	
							   $subTotalF = sprintf("%01.2f", $subTotalF);
							   if (number_format($subTotalF, 2)){
							   $subTotalF  = number_format($subTotalF, 2);

							   }
						   }
		
		
		
		
		$message .=  '<td style="text-align:right;"><br><br><strong>$'.$subTotalF.'</strong></td>';
		$message .=  '<tr>';
		$message .=  '<td colspan="5" style="text-align:left;"><strong><strong>Total </strong>(20% discount applied)<br><span class="requiredField">(Excl Tax + Shipping)</span></td>';
		
		
		if (strpos($orderTotalF,'.') == false) {
			   $orderTotalF = $orderTotalF. ".00";
			   }
		   else 
		   {	
			   $orderTotalF = sprintf("%01.2f", $orderTotalF);
			   if (number_format($orderTotalF, 2)){
			   $orderTotalF  = number_format($orderTotalF, 2);
			   
			   }
		   }
		
		
		
		
		$message .=  '<td valign="bottom" style="text-align:right;"><strong>$'.$orderTotalF.'</strong></td>';
		$message .=  '</tr>';
		$message .=  '<tr><td colspan="6"><hr></td></tr>';
		$message .=  '</table>';




										$email_from = "onlineorders@surfindustries.com";
										$email_subject = "GSI Surf Groms order from $accountName"; // The Subject of the email
										$ccEmail = $email ;
										$email_to = "scott@surfindustries.com"; // To email address: Te rritory Manager
										$eol = "\r\n";
										$dbl = "\n\n";
										$separator = md5(time());
										$email = array();

										$email["headers"] .= "From: $email_from".$eol;
										$email["headers"] .= "cc: $ccEmail, kel@surfindustries.com".$eol;
										$email["headers"] .= "Reply-To: $email".$eol;
										$email["headers"] .= "MIME-Version: 1.0" . $eol;
										$email["headers"] .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
										$email["headers"] .= "This is a MIME encoded message." . $eol;

										$email["body"] = "--" . $separator . $eol;
										$email["body"] .= "Content-Type: text/html; charset=\"iso-8859-1\"" . $eol;
										$email["body"] .= "Content-Transfer-Encoding: 8bit;" . $dbl;
										$email["body"] .= $message . $dbl;


										$email["body"] .= "--" . $separator . "--";

										$ok = mail($email_to, $email_subject, $email["body"], $email["headers"]);

										if($ok) {

											 //echo "<p><strong>country:$country</strong><br>";

											echo '<div style="padding-left:20px;padding-top:10px;float:left;">';
											echo '<span class="mainHheading"><br>YOUR ORDER CONFIRMATION</span>';
											//echo $message.'<br>';
											echo '<p class="pageText">Your order has been sent to our Customer Service team.';
											echo '<p class="pageText">You will receive a confirmation of this order via email and one of our team will be in touch shortly.</p>';
											echo '<p class="pageText">An invoice for full payment of these goods will be sent separately and payment will be due prior delivery.</p><br><br>';
										} else {
											die("Sorry but the email could not be sent. Please go back and try again!");
										}
										echo '
										<form action="brian-surfing-aus-order.php">
										<div style="float:left;padding-right:20%;">
										<input type="submit" value="CREATE ANOTHER ORDER" class="nextButton" onsubmit>
										</div></form><br><br><br><br><br><br><br><br><br>';
		
			
					fclose($open)

?>
  </div>
       
         <br><br><br><br><br><br>
     </div>
</div>       








</body>
</html>


