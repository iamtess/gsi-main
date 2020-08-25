<?php


//connect to daisy
require_once( 'daisyConnection.inc' );





//send data request for dealers to daisy returns id, name, subsidiary_id
$urlx = "https://rest.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_customers&deploy=1&subsidiaries=[13,5]";



require_once( 'brianKeys.inc' );


$data = json_decode($content, true);

		echo "<table>";
		echo "<tr><td>ID</td><td>Name</td><td>Name</td></tr>";
		
foreach($data as $dealers) {

		echo "<tr>";
		echo "<td>";
		echo $dealers['id'];
		echo "</td>";
		echo "<td>";
		echo $dealers['name'];
		echo "</td>";
		echo "<td>";
		echo $dealers['subsidiary_id'];
		echo "</td>";	
		echo "</tr>";
}
		echo "</table>";
		
fclose($open)
?>
