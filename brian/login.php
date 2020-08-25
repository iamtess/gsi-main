<?php
if (strstr($_SERVER['HTTP_USER_AGENT'],'iPad')){

	$view = 'ipad';
//	echo "view: $view";

}
 if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod') ||  strstr($_SERVER['HTTP_USER_AGENT'],'BlackBerry') || strstr($_SERVER['HTTP_USER_AGENT'],'Android'))
{
	header('Location: http://surfindustries.com/dealers/i-login.php');
	exit();
}
session_start();

define( "HOME", "../" );        // this page's subdir level (home="")
require_once( HOME . "includes/gsi-php-funcs.inc" );


$errorMessage = '';
if (isset($_POST['txtUserId']) && isset($_POST['txtPassword'])) {
	// check if the username and password combination is correct
	if ($_POST['txtUserId'] === 'gsiOrder' && $_POST['txtPassword'] === 'brian@gsi') {
		// the username and password match, 
		// set the session
		$_SESSION['basic_is_logged_in'] = true;
		
		// after login we move to the main page
		header('Location: ../brain/brain-create-an-order.php');
		exit;
	} 
	
	
	
}




?>
<?php
  $title = "Brain";
?>

<!-- include header nav -->
<?php include HOME . 'includes/header_nav.inc'; ?>
<img src="../images/headImg_companyPolicy.jpg" width="996" height="280" alt="HeadImg Contact" border="0">
	<div class="contentContainer">
		<div class="contactContainer" style="height:300px;">
			
				<div style="float:left;width:360px;background-color:#F7F7F7;">
					<div class="pageHead" style="float:left;">
						<div class="headingText" style="padding-top:6px;" >&nbsp;&nbsp;BRIAN LOGIN</div>
					</div>
					<div style="float:left;padding-left:10px;" class="contentText">
						<?php
							if ($errorMessage != '') {
								?>
								<p class="errorMessage"><?php echo $errorMessage; ?></p>
							<?php
						}
						?><form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="frmLogin" id="frmLogin">
						<div style="padding-top:6px;padding-left:10px;padding-right:10px;"><strong>Enter username and password to login to Brian</strong></div>
						<div style="float:left;width:350px;">
							<div style="padding-top:15px;padding-left:20px;"><sup>*</sup>Required information</div>
							<div style="padding-top:15px;padding-left:20px;"><sup>*</sup>Login:<br><input class="formtext" style="width: 270px;"  type="text" name="txtUserId" size="40" /></div>
							<div style="padding-top:15px;padding-left:20px;"><sup>*</sup>Password:<br><input class="formtext" style="width: 270px;" type="password" name="txtPassword" size="40" /></div>
							<div style="padding-top:15px;padding-left:20px;"><input type="submit" value="SUBMIT"></form></div>
						</div>
					</div>
				</div>
			
				<br><br><br><br><br><br><br>
			
		</div> <!--end contact container -->
	</div><!--end content container -->
	<?php include HOME . 'includes/footer.inc'; ?>
</div> <!--end main container -->



<!-- live person -->
<!-- BEGIN LivePerson Monitor. --><script language='javascript'> var lpMTagConfig = {'lpServer' : "server.iad.liveperson.net",'lpNumber' : "15503116",'lpProtocol' : (document.location.toString().indexOf('https:')==0) ? 'https' : 'http'}; function lpAddMonitorTag(src){if(typeof(src)=='undefined'||typeof(src)=='object'){src=lpMTagConfig.lpMTagSrc?lpMTagConfig.lpMTagSrc:'/hcp/html/mTag.js';}if(src.indexOf('http')!=0){src=lpMTagConfig.lpProtocol+"://"+lpMTagConfig.lpServer+src+'?site='+lpMTagConfig.lpNumber;}else{if(src.indexOf('site=')<0){if(src.indexOf('?')<0)src=src+'?';else src=src+'&';src=src+'site='+lpMTagConfig.lpNumber;}};var s=document.createElement('script');s.setAttribute('type','text/javascript');s.setAttribute('charset','iso-8859-1');s.setAttribute('src',src);document.getElementsByTagName('head').item(0).appendChild(s);} if (window.attachEvent) window.attachEvent('onload',lpAddMonitorTag); else window.addEventListener("load",lpAddMonitorTag,false);</script><!-- END LivePerson Monitor. -->
</body>
</html>
