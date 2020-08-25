<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
       <title>GLOBAL SURF INDUSTRIES - TM PORTAL</title>
         <?php 
		session_start();
		define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		include HOME . 'includes/header-includes.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 

		$errorMessage = '';

		if (isset($_POST['txtUserId']) && isset($_POST['txtPassword'])) 
		{
			// check if the username and password combination is correct
			$login = strtolower($_POST['txtUserId']);
			$pwd = strtolower($_POST['txtPassword']);

			if ($login === 'brian' && $pwd === 'brian@gsi') {
				// the username and password match, 
				// set the session
				$_SESSION['basic_is_logged_in'] = true;
				$_SESSION['user'] = 'territoryManager';
				// after login we move to the main page
				
				echo $_SESSION['basic_is_logged_in'];
				echo $_SESSION['user'];
				
				header('Location: tm-portal-links.php');
				exit;
			} 
			else{	$errorMessage = 'Sorry, wrong username / password please try again.';
			}
		}
		?>
        
    </head>
    <body class="scroll-assist">
        <!-- include header -->
        <?php include HOME . 'includes/header-nav-items.inc'; ?>
        <div class="main-container">
            <section class="cover fullscreen image-bg overlay">
                <div class="background-image-holder">
                   <?php echo "<img src='" . IMAGES_DIR ."login-bground.jpg' class='background-image' alt='Global Surf Industries - TM Portal Login'>"; ?>
                </div>
                <div class="container v-align-transform">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
                            <div class="feature bordered text-center">
                                <h4 class="uppercase">TM PORTAL LOGIN</h4>
                                <form class="text-left" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="frmLogin" id="frmLogin">   
                                    <input class="mb0" type="text" name="txtUserId" placeholder="Username" />
                                    <input class="mb0" type="password"  name="txtPassword" placeholder="Password" />
                                    <input class="btn-login" type="submit" value="Login" />
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
             <?php include HOME . 'includes/footer.inc'; ?>
        </div>
        <?php include HOME . 'includes/site-scripts.inc'; ?>
    </body>
</html>