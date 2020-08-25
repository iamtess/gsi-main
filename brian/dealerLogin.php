<?php
session_start(); 
?>

<?php
$_SESSION['nav'] = 'home';
define( "HOME", "../" ); 
require_once( HOME . "includes/gsi-php-funcs.inc" );

$title = "the world's premier surfboard company - find local surf shops or buy your surfboard online today";

$metaSubject = "global surf industries - the world's premier distributor of surfboards - read surfboard product information, find local surf shops or buy your surfboard online today";
$metaDescription = "The world's premier distributor of surfboards - supplying shortboards, longboards, finless surfboards, beginner surfboards, standup paddle boards and funboards by 7 Surfboards, Walden Surfboards, Modern Surfboards, The Seaglass Project, Trident Paddles, Surfica Surfboard and SUP accessories to the surfboard market.";
$metaClassification = "Global Surf Industries - the world's premier distributor of surfboards - find product information, local surfboard shops or buy surfboards online.";
$metaKeywords = "surfboards, surfboard, surfing, longboards, mark kelly, fish, shortboards, funboards, stand up paddle boards";

?>

<html>
<head>


<?php

	
	link_stylesheet( HOME . "css/regularForm.css" );
	//link_stylesheet( HOME . "css/brian-styles.css" );
	
 
 
 ?>

</head>

<body>
 <?php 
 
 include HOME . 'includes/header_nav.inc'; 
	 
		?> 
	 
<div class="contentContainer" style="overflow: hidden;width:996px;">
	<div style="padding-left:20px;">
 		<div style="padding-left:10px;padding-top:4%;padding-bottom:4%;font-size:16px;" class="formHeader">BRIAN CUSTOMER LOGIN</div>
	     <form class="login-form" method="post" action="https://system.netsuite.com/app/login/nllogin.nl">
            <div style="padding-left:10px;padding-bottom:10px;padding-right:10px;">
				<div class="formStandard"><strong>Enter username and password to login.</strong></div>
				<div style="padding-top:15px;padding-left:12px;" class="formStandard"><sup>*</sup>Required information</div>
		   		<div style="padding-top:2%;padding-left:12px;padding-bottom:4%;" class="formStandard"><sup>*</sup>Login:<br><input type="text" class="input username" name=email placeholder="Email"/></div>
				<div style="padding-top:2%;padding-left:12px;padding-bottom:4%;" class="formStandard"><sup>*</sup>Password:<br><input class="input password" name=password type=password Placeholder="Password" /></div>
				
          		<div style="padding-top:2%;padding-left:12px;padding-bottom:4%;">
            		<input type="hidden" name="errorredirect" value="https://system.netsuite.com/pages/login.jsp">
            		<input type="hidden" name="jsenabled" value="F">
            		<input type="hidden" name="ct" value="-2">
            		<input type="submit" name="submitter" value="Login" class="button" onClick="document.forms[0].jsenabled.value = 'T';">
          		</div>
         
        <br>
         <a href="https://system.netsuite.com/pages/pwdreset.jsp" class="formStandard">Forgot your password?</a>
         <br>
         </div>
			
         
         
         
         
         
         
         
         
         </form>
	</div>
  </div>
		


</body>
</html>
