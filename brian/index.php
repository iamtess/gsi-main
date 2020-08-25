<?php

$view = "";

if (strstr($_SERVER['HTTP_USER_AGENT'],'iPad')){

	$view = 'ipad';
//	echo "view: $view";

}
 if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod') ||  strstr($_SERVER['HTTP_USER_AGENT'],'BlackBerry') || strstr($_SERVER['HTTP_USER_AGENT'],'Android'))
{
	
	$view = "mobileP";
	echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">';
	//header('Location: http://surfindustries.com/surfboards/i_index.php');
	//exit();
}
else {
echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">

<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:fb=\"http://www.facebook.com/2008/fbml\">
<head>";
}

 
session_start(); 
?>

<?php
$_SESSION['nav'] = 'home';
define( "HOME", "../" ); 

if ($view == "mobileP"){
	
	require_once( HOME . "includes/i_gsi-php-funcs.inc" );
}
else {
require_once( HOME . "includes/gsi-php-funcs.inc" );


}



$errorMessage = '';



if (isset($_POST['txtUserId']) && isset($_POST['txtPassword'])) {
	// check if the username and password combination is correct
	$login = strtolower($_POST['txtUserId']);
	
	if ($login === 'brian' && $_POST['txtPassword'] === 'brian@gsi') {
		// the username and password match, 
		// set the session
		$_SESSION['basic_is_logged_in'] = true;
		$_SESSION['country'] = 'usa';
		// after login we move to the main page
		header('Location: ../brian/brian-create-an-order.php');
		exit;
	} 
	
	else{	$errorMessage = 'Sorry, wrong username / password. Try again.';
	}

}








$metaSubject = "global surf industries - the world's premier distributor of surfboards - read surfboard product information, find local surf shops or buy your surfboard online today";
$metaDescription = "The world's premier distributor of surfboards - supplying shortboards, longboards, finless surfboards, beginner surfboards, standup paddle boards and funboards by 7 Surfboards, Walden Surfboards, Modern Surfboards, The Seaglass Project, Trident Paddles, Surfica Surfboard and SUP accessories to the surfboard market.";
$metaClassification = "Global Surf Industries - the world's premier distributor of surfboards - find product information, local surfboard shops or buy surfboards online.";
$metaKeywords = "surfboards, surfboard, surfing, longboards, mark kelly, fish, shortboards, funboards, stand up paddle boards";

?>




<?php
if ($view == "mobileP"){
  set_title( $title );
  set_universal_metadata($metaSubject,$metaDescription,$metaClassification,$metaKeywords);
  link_stylesheet( HOME . "i_gs.css" );
  link_stylesheet( HOME . "css/mobileForm.css" );
 
 include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
}
else {
	
	//universal header info/scripts
$title = "Surfboard Designers - Hayden Cox";
include HOME . 'includes/header-includes.inc';
//end header scripts
//scripts for main nav menu
include HOME . 'includes/main-nav-menu-scripts.inc';
//product page scripts
include HOME . 'includes/product-page-includes.inc';
	
	link_stylesheet( HOME . "css/regularForm.css" );
	//link_stylesheet( HOME . "css/brian-styles.css" );
	
}
	





 
 ?>

</head>


 <?php 
 
 if ($view == "mobileP"){
 echo "<body>";
 include HOME . 'includes/i_header.inc'; 
   echo '<div class="menu-wrap" >
    <div class="menu">';
 }
 else {
	 include HOME . 'includes/main-nav-top-banner.inc';
	 echo "<body class=\"bodyPages\">
	 <div class=\"mainContainer\">";
	 include HOME . 'includes/main-nav-menu.inc';
	 
echo '<div class="contentContainer" style="overflow: hidden;width:996px;">';
echo '<div style="padding-left:20px;">';
 }
	
	?>
      
		<div <?php if ($view == "mobileP") {echo 'class="formHeader" style="padding-left:10px;padding-top:4%;padding-bottom:4%;"';} else { echo 'style="padding-left:10px;padding-top:4%;padding-bottom:4%;font-size:16px;" class="formHeader"';}?>>BRIAN LOGIN</div>
	<?php if ($view == "mobileP"){
    	echo '</div>';
	}?>

		<?php
							if ($errorMessage != '') {
								?>
								<p class="errorMessage"><?php echo $errorMessage; ?></p>
							<?php
						}
						?><form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="frmLogin" id="frmLogin">
		<div style="padding-left:10px;padding-bottom:10px;padding-right:10px;">
			<div class="formStandard"><strong>Enter username and password to login.</strong></div>
			<div style="padding-top:15px;padding-left:12px;" class="formStandard"><sup>*</sup>Required information</div>
		    <div style="padding-top:2%;padding-left:12px;padding-bottom:4%;" class="formStandard"><sup>*</sup>Login:<br><input type="text" name="txtUserId" /></div>
			<div style="padding-top:2%;padding-left:12px;padding-bottom:4%;" class="formStandard"><sup>*</sup>Password:<br><input type="password" name="txtPassword" /></div>
			<div style="padding-top:2%;padding-left:12px;padding-bottom:4%;"><button type="submit">SUBMIT</button></div></form><br><br>
		</div>
	

    
	<?php if ($view == "mobileP"){
	
	include HOME . 'includes/i_footer.inc';
	}
	else {
		echo '</div></div>';
		include HOME . 'includes/footer.inc';
	}
		
		?>


  </div>

</body>
</html>
