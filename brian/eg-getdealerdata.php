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
	
		$data = array();
	$json_string =  json_encode($data);

	$option = array(
	  'http'=>array(
		'method'=>"GET",
		'header' => $req->to_header() . ',realm="3743011"'. " \r\n" . "Host: 3743011.restlets.api.netsuite.com \r\n" . "Content-Type: application/json",
		'content' => $json_string
	  )
	);
	$context = stream_context_create($option);
	return $context;

}

	$urlx = "https://3743011.restlets.api.netsuite.com/app/site/hosting/restlet.nl?script=customscriptgsi_r_brian_dealerdata&deploy=1&customer=" . $_SESSION['dealer'];

	$ckeyx = "a6a2498b6fdc39fec03309fa44f528173f5d1562a557c617259a59769fb5cc4a";
	$csecretx = "6588ba0f08d0e90cc56a1f3fff5e0efd56571032a2f017c7dbf2c20a7ef2c7aa";
	$tkeyx = "e10c50bfb90f433970c6a1c1cd980231fb0d63474c52557a503638a5339b3735";
	$tsecretx = "836112b0f5c1e35218068b60b287f53ab7fad078e3de0f627316b53480cda9f4";
	$contextx = createContext($urlx, $ckeyx, $csecretx, $tkeyx, $tsecretx);
	$open  = fopen($urlx, 'r', false, $contextx);

	//fpassthru($open);

	$content = stream_get_contents($open); 

	//print $content;
	
	$data = json_decode($content, true);
	
	//echo 'days over due: '.$data['daysoverdue'].'<br>';
	//echo 'credit hold status: '.$data['credithold'].'<br>';
	
	//test for credit hold 	
	if ($data['credithold'] == 'hold')
	{
		//set credit status
		//$_SESSION['creditStatus'] = 'hold' ;
		
		
		echo '<p class="pageText">Hi '.$data['custname'].','; 
		echo '<p class="pageText">You cannot create an order as your Account is currently on Credit Hold.</p>';
		echo '<p class="pageText">Please contact ';
		if ($data['whid'] == '3' || '4')
		{ 
		   echo 'Mark Kelly - 0403 045 159';
		}
		else if ($data['whid'] == '13' || '14' || '15')
		{ 
		
		   echo 'Garret Wiseth - 877 474 6503.';
		}
		else if ($data['whid'] == '12')
		{ 
		   echo 'Jordan Gosling - 02 1064 8033.';
		
		}
		
		
	}
		
	else {	
	
	
		
		
		
	
				
	echo '<p>Please complete the following information to begin your order:</p>';
	echo '<span class="requiredField">*required</span>';
	echo '<br/><br />';
	echo '<label style="color:#000000;text-transform: uppercase;">Territory Manager:<sup class="requiredField">*</sup></label> <br>';
	echo '<select name="salesrep_select" id="salesrep_select" required>';
	echo '<option disabled="disabled" value="'.$data['tmid'].'" selected="selected">'.$data['tmname'].'</option>';
	echo '</select>';
	echo '<br/><br/>';
	echo '<label style="color:#000000;text-transform: uppercase;">Warehouse:<sup class="requiredField">*</sup></label><br>';
	echo '<select name="location_select" id="location_select" required>';
	echo '<option disabled="disabled" value="'.$data['whid'].'" selected="selected">'.$data['whname'].'</option>';
	echo '</select>';
	echo '<br/><br/>';
	echo '<label style="color:#000000;text-transform: uppercase;">Account Name:<sup class="requiredField">*</sup></label><br>';
	echo '<select name="customer_select" id="customer_select" required>';
	echo '<option disabled="disabled" value="'.$data['custid'].'" selected="selected">'.$data['custname'].'</option>';
	echo '</select>';
	echo '<br/><br/>';
	echo '<label style="color:#000000;text-transform: uppercase;">Order Type:<sup class="requiredField">*</sup></label><br>';
	echo '<div class="select-option">';
	echo '<i class="ti-angle-down"></i>';
	echo '<select name="order_type" id="order_type" required>';
	echo '<option value="">Please Select an Order Type</option>';
	echo '<option value="1">At Once</option>';
	echo '<option value="2">Prebook</option>';
	echo '<option value="8">Drop Ship</option>';
	echo '</select>';
    echo '</div>';
	echo '<br/>';
	echo '<label style="color:#000000;text-transform: uppercase;">Order Ship Date:<sup class="requiredField">*</sup></label><br>';
	echo '<input type="text" name="shipDate" id="shipDate" class="createOrderInput" readonly="readonly" required>';
	echo '<br/><br/>';
	echo '<label style="color:#000000;text-transform: uppercase;">Enter a Purchase Order no. OR Your Name:<sup class="requiredField">*</sup></label><br>';
	echo '<input type="text" name= "orderPO" id="orderPO" class="createOrderInput mb0" onkeyup="countChar(this)" value="" required >';
	echo 'Characters entered (max 44): <span class="pt0" id="charNum">0</span>';
	echo '<br/><br/>';
	echo '<div id="regdiv">';
    echo '<label style="color:#000000;text-transform: uppercase;">Notes:</label><br>';
    echo '</div>';
	echo '<div id="dropshipdiv">';
    echo '<label style="color:#000000;text-transform: uppercase;">DROP SHIP ORDER Notes:</label><br>';
    echo '<span class="requiredField">Please add delivery Address details, Contact ph number and Authority to leave.</span><br>';
	echo '</div>';
	echo '<textarea name="orderNotes" id="orderNotes"></textarea>';
	echo '<br /><br />';
	echo '<input class="hollow" type="submit" value="NEXT" />';
	echo '<br /><br /><br /><br /><br /><br />';
    echo '<input type="hidden" name="custname" id="custname" value="'.$data['custname'].'" />';
    echo '<input type="hidden" name="tmname" id="tmname" value="'.$data['tmname'].'" />';
	
	}
						
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
	