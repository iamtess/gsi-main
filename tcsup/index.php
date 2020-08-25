<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Global Surf Industries - Tom Carroll Paddle Surf</title>
	
	<?php
	define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
	?>
	<?php
	if (isset($_GET['utm_source'])) {
    $source = $_GET['utm_source'];}
	
	if (isset($_GET['utm_campaign'])) {
    $campaign = $_GET['utm_campaign'];}
	
	$tracking= "?source=".$source."&campaign=".$campaign;
	
	if (isset($_GET['code'])) {
    $code = "#".$_GET['code'];}
	
	?>
	<?php
	if ($userCountry == 'AU'){
		echo "
		<meta http-equiv=\"Refresh\" content=\"5;url=https://shop.surfindustries.com/au/brands/tom-carroll-paddle-surf/$tracking$code\">
		<SCRIPT LANGUAGE=\"JavaScript\">
		window.location=\"https://shop.surfindustries.com/au/brands/tom-carroll-paddle-surf/$tracking$code\";
		// -->
		</script>";
	}
	elseif ($userCountry == 'NZ'){
		echo "
		<meta http-equiv=\"Refresh\" content=\"5;url=https://shop.surfindustries.com/nz/brands/tom-carroll-paddle-surf/$tracking$code\">
		<SCRIPT LANGUAGE=\"JavaScript\">
		window.location=\"https://shop.surfindustries.com/nz/brands/tom-carroll-paddle-surf/$tracking$code\";
		// -->
		</script>";
	}
	else{
		echo "
		<meta http-equiv=\"Refresh\" content=\"5;url=https://shop.surfindustries.com/us/brands/tom-carroll-paddle-surf/$tracking$code\">
		<SCRIPT LANGUAGE=\"JavaScript\">
		window.location=\"https://shop.surfindustries.com/us/brands/tom-carroll-paddle-surf/$tracking$code\";
		// -->
		</script>";
	}
	?>
	
</head>

<body>


</body>
</html>
