<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Global Surf Industries - Salt Gypsy Mid Tide Surfboard</title>
	
	<?php
	define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
	?>
	
	<?php
	if ($userCountry == 'AU'){
		echo "
		<meta http-equiv=\"Refresh\" content=\"5;url=https://shop.surfindustries.com/au/surf/midlength-surfboards/salt-gypsy-mid-tide-pu-surfboard\">
		<SCRIPT LANGUAGE=\"JavaScript\">
		window.location=\"https://shop.surfindustries.com/au/surf/midlength-surfboards/salt-gypsy-mid-tide-pu-surfboard\";
		// -->
		</script>";
	}
	elseif ($userCountry == 'NZ'){
		echo "
		<meta http-equiv=\"Refresh\" content=\"5;url=https://shop.surfindustries.com/nz/surf/midlength-surfboards/salt-gypsy-mid-tide-pu-surfboard\">
		<SCRIPT LANGUAGE=\"JavaScript\">
		window.location=\"https://shop.surfindustries.com/nz/surf/midlength-surfboards/salt-gypsy-mid-tide-pu-surfboard\";
		// -->
		</script>";
	}
	else{
		echo "
		<meta http-equiv=\"Refresh\" content=\"5;url=https://shop.surfindustries.com/us/surf/midlength-surfboards/salt-gypsy-mid-tide-pu-surfboard\">
		<SCRIPT LANGUAGE=\"JavaScript\">
		window.location=\"https://shop.surfindustries.com/us//surf/midlength-surfboards/salt-gypsy-mid-tide-pu-surfboard\";
		// -->
		</script>";
	}
	?>
	
	
	
 
</head>

<body>


</body>
</html>
