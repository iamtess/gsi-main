<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Global Surf Industries - Salt Gypsy Surfboards</title>
	
	<?php
	define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
	?>
	
	<?php
	if ($userCountry == 'AU'){
		echo "
		<meta http-equiv=\"Refresh\" content=\"5;url=https://www.surfindustries.com/saltgypsy/salt-gypsy-brand-info.php\">
		<SCRIPT LANGUAGE=\"JavaScript\">
		window.location=\"https://www.surfindustries.com/saltgypsy/salt-gypsy-brand-info.php\";
		// -->
		</script>";
	}
	elseif ($userCountry == 'NZ'){
		echo "
		<meta http-equiv=\"Refresh\" content=\"5;url=https://www.surfindustries.com/saltgypsy/salt-gypsy-brand-info.php\">
		<SCRIPT LANGUAGE=\"JavaScript\">
		window.location=\"https://www.surfindustries.com/saltgypsy/salt-gypsy-brand-info.php\";
		// -->
		</script>";
	}
	else{
		echo "
		<meta http-equiv=\"Refresh\" content=\"5;url=https://www.surfindustries.com/saltgypsy/salt-gypsy-brand-info.php\">
		<SCRIPT LANGUAGE=\"JavaScript\">
		window.location=\"https://www.surfindustries.com/saltgypsy/salt-gypsy-brand-info.php\";
		// -->
		</script>";
	}
	?>
	
	
	
 
</head>

<body>


</body>
</html>
