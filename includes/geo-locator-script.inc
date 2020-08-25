<!--start geolocator -->
<?php
//code for geo redirect on home page and main  nav shop links
function get_client_ip_server() {
    $ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';

    return $ipaddress;
}
	
$userCountry = "";
$tmp = "";
$url_frag = "";
$url_frag_2 = "";
$misc_url_frag = "";
	


$ip = get_client_ip_server();
$url = "https://api.ipstack.com/" . $ip."?access_key=e3026347d56fbc4a8f6aa7e2a55a9b28";
$json = file_get_contents($url);
$data = json_decode($json, TRUE);

//echo $ip.'<br>';

//echo $url.'<br>';

// Allow access to country code from other files
global $userCountry;
//$userCountry = '';

// Set country code. If the code is not us, au or nz default to us
if(isset($data['country_code'])) {
    if (in_array($data['country_code'], array('US', 'AU', 'NZ'))) {
        $userCountry = $data['country_code'];
    } else {
        $userCountry = 'US';
    }
}

//echo $data['country_code'].'<br>';
//echo $userCountry.'<br>';
$tmp = strtolower($userCountry);
//echo "$tmp";
// this variable used for links to shop 
$url_frag = "https://shop.surfindustries.com/${tmp}";
$url_frag_2 = "https://${tmp}.surfindustries.com";

?>
<!--End geolocator -->