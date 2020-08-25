<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Global Surf Industries - Adventure Paddleboarding 60/40 SUP</title>
	
	<?php
	define( "HOME", "../../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
	?>
	<?php
	if (isset($_GET['utm_source'])) {
    $source = $_GET['utm_source'];}
	
	if (isset($_GET['utm_campaign'])) {
    $campaign = $_GET['utm_campaign'];}
	
	$tracking= "?utm_source=".$source."&utm_campaign=".$campaign;
	
	if (isset($_GET['code'])) {
    $code = "#".$_GET['code'];}
	
	?>
	
	<?php
	if ($userCountry == 'AU'){
		echo "
		<meta http-equiv=\"Refresh\" content=\"5;url=https://shop.surfindustries.com/au/surf/stand-up-paddle-boards/surf-sup/adventure-paddleboarding-sixty-forty-mx/$tracking$code\">
		<SCRIPT LANGUAGE=\"JavaScript\">
		window.location=\"https://shop.surfindustries.com/au/surf/stand-up-paddle-boards/surf-sup/adventure-paddleboarding-sixty-forty-mx/$tracking$code\";
		// -->
		</script>";
	}
	elseif ($userCountry == 'NZ'){
		echo "
		<meta http-equiv=\"Refresh\" content=\"5;url=https://shop.surfindustries.com/nz/surf/stand-up-paddle-boards/surf-sup/adventure-paddleboarding-sixty-forty-mx/$tracking$code\">
		<SCRIPT LANGUAGE=\"JavaScript\">
		window.location=\"https://shop.surfindustries.com/nz/surf/stand-up-paddle-boards/surf-sup/adventure-paddleboarding-sixty-forty-mx/$tracking$code\";
		// -->
		</script>";
	}
	else{
		echo "
		<meta http-equiv=\"Refresh\" content=\"5;url=https://shop.surfindustries.com/nz/surf/stand-up-paddle-boards/surf-sup/adventure-paddleboarding-sixty-forty-mx/$tracking$code\">
		<SCRIPT LANGUAGE=\"JavaScript\">
		window.location=\"https://shop.surfindustries.com/nz/surf/stand-up-paddle-boards/surf-sup/adventure-paddleboarding-sixty-forty-mx/$tracking$code\";
		// -->
		</script>";
	}
	?>
	
	
	
 <!--Start Google Tracking Code -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-233363-1']);
  _gaq.push(['_setDomainName', 'surfindustries.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!--End Google Tracking Code -->
</head>

<body>


</body>
</html>
