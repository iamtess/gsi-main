<?php
session_start();


define( "HOME", "../" );        // this page's subdir level (home="")
require_once( 'daisyConnection.inc' );

//send data request to daisy
$urlx = "https://rest.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_brands&deploy=1";

require_once( 'brianKeys.inc' );

?>



<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>GSI - Brian - Select a Brand</title>
</head>

<body>

<?php

$data = json_decode($content, true);

		echo " <div style=\"width:757px;\">
				<div style=\"padding-top:1px;\">";
		
		
		$count = "";
		
		
		
		
			$brandName = "";
	
		
		
		
foreach($data as $brand) {
	

	
	
	if (($brand['name'] == '3 Palms') || ($brand['name'] == '7S') || ($brand['name'] =='Adventure Paddleboarding') || ($brand['name'] =='Gnaraloo') || ($brand['name'] =='Haydenshapes') || ($brand['name'] =='Hang Up Systems') || ($brand['name'] =='Modern') || ($brand['name'] =='Seaglass Project') || ($brand['name'] =='Surfica') || ($brand['name'] =='TC SUP') || ($brand['name'] =='Trident') || ($brand['name'] =='Walden'))
	
		{
		
		
			
			if ($brand['name'] == '7S'){
			$bImage = "<img class=\"dealImg\" src=\"../images/logo-admin-brand-7S.gif\"  alt=\"\" hspace=\"8px;\"/>";
			}
			else if ($brand['name'] == 'Adventure Paddleboarding'){
			$bImage = "<img class=\"dealImg\" src=\"../images/logo-admin-brand-ap.gif\"  alt=\"\" hspace=\"8px;\"/>";
			}
			else if ($brand['name'] == 'Gnaraloo'){
			$bImage = "<img class=\"dealImg\" src=\"../images/logo-admin-brand-gnaraloo.gif\"  alt=\"\" hspace=\"8px;\"/>";
			}
			else if ($brand['name'] == 'Haydenshapes'){
			$bImage = "<img class=\"dealImg\" src=\"../images/logo-admin-brand-hs.gif\"  alt=\"\" hspace=\"8px;\"/>";
			}
			else if ($brand['name'] == 'Hang Up Systems'){
			$bImage = "<img class=\"dealImg\" src=\"../images/logo-admin-brand-hangups.gif\"  alt=\"\" hspace=\"8px;\"/>";
			}
			else if ($brand['name'] == 'Modern'){
			$bImage = "<img class=\"dealImg\" src=\"../images/logo-admin-brand-modern.gif\"  alt=\"\" hspace=\"8px;\"/>";
			}
			else if ($brand['name'] == 'Seaglass Project'){
			$bImage = "<img class=\"dealImg\" src=\"../images/logo-admin-brand-seaglass.gif\"  alt=\"\" hspace=\"8px;\"/>";
			}
			else if ($brand['name'] == 'Surfica'){
			$bImage = "<img class=\"dealImg\" src=\"../images/logo-admin-brand-surfica.gif\"  alt=\"\" hspace=\"8px;\"/>";
			}
			else if ($brand['name'] == '3 Palms'){
			$bImage = "<img class=\"dealImg\" src=\"../images/logo-admin-brand-three-palms.gif\"  alt=\"\" hspace=\"8px;\"/>";
			}
			else if ($brand['name'] == 'TC SUP'){
			$bImage = "<img class=\"dealImg\" src=\"../images/logo-admin-brand-tcps.gif\"  alt=\"\" hspace=\"8px;\"/>";
			}
			else if ($brand['name'] == 'Trident'){
			$bImage = "<img class=\"dealImg\" src=\"../images/logo-admin-brand-trident.gif\"  alt=\"\" hspace=\"8px;\"/>";
			}
			else if ($brand['name'] == 'Walden'){
			$bImage = "<img class=\"dealImg\" src=\"../images/logo-admin-brand-walden.gif\"  alt=\"\" hspace=\"8px;\"/>";
			}
			
		
			
			echo "<div style=\"float:left;padding-top:2%;padding-bottom:2%;\"  class=\"cText\"><a class=\"dealHmPgLink\" href=\"stock_atOnce.php?brand=7S\">". $bImage . "</a></div>";
			$count = $count + 1;
	//echo "count:$count";
			
			if ($count == '4'){
			echo "</div><br>
			<div style=\"padding-top:1px;\">";
			$count = '0';
			
		}
		
		

		
		}
}
		
		
fclose($open)
?>
<?php
echo "</div>";
				?>




</body>
</html>