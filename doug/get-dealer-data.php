<?php

session_start();

require_once 'OAuth.php';
	
function generateRandomString() {
	$length = 20;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function createContext($url, $ckey, $csecret, $tkey, $tsecret){
	$consumer = new OAuthConsumer($ckey, $csecret);
	$token = new OAuthToken($tkey, $tsecret);
	$sig = new OAuthSignatureMethod_HMAC_SHA1();
	$params = array(
		'oauth_nonce' => generateRandomString(),
		'oauth_timestamp' => idate('U'),
		'oauth_version' => '1.0',
		'oauth_token' => $tkey,
		'oauth_consumer_key' => $ckey,
		'oauth_signature_method' => $sig->get_name()
	);


	$req = new OAuthRequest('GET', $url, $params);
	$req->set_parameter('oauth_signature', $req->build_signature($sig, $consumer, $token));
	$req->set_parameter('realm', "3743011");
	
	$option = array(
	  'http'=>array(
		'method'=>"GET",
		'header' => $req->to_header() . ',realm="3743011"'. " \r\n" . "Host: 3743011.restlets.api.netsuite.com \r\n" . "Content-Type: application/json"
	  )
	);
	$context = stream_context_create($option);
	return $context;
}

    
	//$urlx = "https://rest.na2.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_dealerdata&deploy=1&customer=" . $_SESSION['dealer'];
    $urlx = "https://3743011.restlets.api.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_dealerdata&deploy=1&customer=" . $_SESSION['distID'];
    

	$ckeyx = "a6a2498b6fdc39fec03309fa44f528173f5d1562a557c617259a59769fb5cc4a";
$csecretx = "6588ba0f08d0e90cc56a1f3fff5e0efd56571032a2f017c7dbf2c20a7ef2c7aa";
$tkeyx = "e10c50bfb90f433970c6a1c1cd980231fb0d63474c52557a503638a5339b3735";
$tsecretx = "836112b0f5c1e35218068b60b287f53ab7fad078e3de0f627316b53480cda9f4";
$contextx = createContext($urlx, $ckeyx, $csecretx, $tkeyx, $tsecretx);
$open  = fopen($urlx, 'rb', false, $contextx);

	//fpassthru($open);

	$content = stream_get_contents($open); 

	//print $content;
	
	$data = json_decode($content, true);
	
	//echo 'days over due: '.$data['daysoverdue'].'<br>';
	//echo 'credit hold status: '.$data['credithold'].'<br>';
	
	//test for credit hold 	
	
	
	

		
		
	
				
	echo '<p>Please complete the following information to begin your order:</p>';
	echo '<span class="requiredField">*required</span>';
	echo '<br/><br />';
	echo '<label style="color:#000000;text-transform: uppercase;">Distributer Name:</label> <br>';
	echo '<select name="dist_select" id="dist_select" required>';
	echo '<option value="'.$data['custid'].'" selected="selected">'.$data['custname'].'</option>';
	echo '</select>';
	echo '<br/><br/>';
	echo '<label style="color:#000000;text-transform: uppercase;">Manufacturer:<sup class="requiredField">*</sup></label><br>';
	//echo '<select name="location_select" id="location_select" required>';
	//echo '<option disabled="disabled" value="'.$data['whid'].'" selected="selected">'.$data['whname'].'</option>';
	//echo '</select>';

    echo '<div class="select-option">';
	echo '<i class="ti-angle-down"></i>';
	echo '<select name="manufacturer_select" id="manufacturer_select" required>';
	echo '<option value="">Please Select a Manufacturer</option>';
	echo '<option value="1">AGIT GLOBAL</option>';
	echo '<option value="2">BENNETON</option>';
	echo '<option value="3">COBRA INTERNATIONAL</option>';
	echo '<option value="4">DRAGON FLY</option>';
	echo '<option value="5">EWFU</option>';
	echo '<option value="6">OSIA NINGBO</option>';
	
	echo '</select>';
    echo '</div>';


	echo '<br/><br/>';
	
	//echo '<label style="color:#000000;text-transform: uppercase;">Order Type:<sup class="requiredField">*</sup></label><br>';
	//echo '<div class="select-option">';
	//echo '<i class="ti-angle-down"></i>';
	//echo '<select name="order_type" id="order_type" required>';
	//echo '<option value="">Please Select an Order Type</option>';
	//echo '<option value="1">At Once</option>';
	//echo '<option value="2">Prebook</option>';
	//echo '<option value="8">Drop Ship</option>';
	//echo '</select>';
   // echo '</div>';
	//echo '<br/>';
	echo '<label style="color:#000000;text-transform: uppercase;">Preferred Ship Date (to be confirmed):<sup class="requiredField">*</sup></label><br>';
	echo '<input type="text" name="shipDate" id="shipDate" class="createOrderInput" readonly="readonly" required>';
	echo '<br/><br/>';
	//echo '<label style="color:#000000;text-transform: uppercase;">Enter a Purchase Order no.:<sup class="requiredField">*</sup></label><br>';
	//echo '<input type="text" name= "orderPO" id="orderPO" class="createOrderInput mb0" onkeyup="countChar(this)" value="" required >';
	//echo 'Characters entered (max 44): <span class="pt0" id="charNum">0</span>';
	//echo '<br/><br/>';
	echo '<div id="regdiv">';
    echo '<label style="color:#000000;text-transform: uppercase;">Notes/Freight Forwarding information (email & contact number):<sup class="requiredField">*</sup></label><br>';
  	echo '<textarea name="orderNotes" id="orderNotes" required></textarea>';
    echo '</div>';
	echo '<input class="hollow" type="submit" value="NEXT" />';
	echo '<br /><br /><br /><br /><br /><br />';
   echo '<input type="hidden" name="distName" id="custname" value="'.$data['custname'].'" />';
 echo '<input type="hidden" name="distID" id="custname" value="'.$data['custid'].'" />';
   echo '<input type="hidden" name="tm" id="custname" value="'.$_SESSION['tm'].'" />';
  
   
	
	
						
	fclose($open)

?>
<script>
	$(function() {
    $('#dropshipdiv').hide(); 
    $('#order_type').change(function(){
        if($('#order_type').val() == '8') {
            $('#dropshipdiv').show(); 
			$('#regdiv').hide(); 
        } else {
            $('#dropshipdiv').hide(); 
			$('#regdiv').show(); 
        } 
    });
});
		</script>

<script>
  $.datepicker.setDefaults({ dateFormat: 'yy-mm-dd' });
  $(function() {
    //$( "#shipDate" ).datepicker();
	$("#shipDate").datepicker({ minDate: 0});
	
	
  });
</script>
<script>
      function countChar(val) {
        var len = val.value.length;
        if (len >= 45) {
          val.value = val.value.substring(0, 45);
        } else {
		  $('#charNum').text(len);
        }
      };
    </script>
	