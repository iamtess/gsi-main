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
		
		if (!isset($_SESSION['basic_is_logged_in']) || $_SESSION['basic_is_logged_in'] !== true) {
			
		echo 	$_SESSION['basic_is_logged_in'];
		// not logged in, move to login page
		header('Location: tm-portal-login.php');
		exit;
		}
			
		//echo 	$_SESSION['basic_is_logged_in'];
			
		if(isset($_SESSION['user']))
        {
			$userType = $_SESSION['user'] ;
	    }
		
		// echo 'user:' . $userType;
		
		include HOME . 'includes/header-includes.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
	?>
       
    </head>
    <body class="scroll-assist">
         <!-- include header -->
        <?php include HOME . 'includes/header-nav-items.inc'; ?>
        <div class="main-container">
            <section class="page-title page-title-4 image-bg overlay parallax">
                <div class="background-image-holder">
                    <?php echo "<img src='" . IMAGES_DIR ."tm-portal-header.jpg' class='background-image' alt='Global Surf Industries - TM Portal'>"; ?>
                    
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="uppercase mb0">TM Portal</h2>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24 mb64">
                               <a class="portalLink" href="../brian/brian-create-an-order.php">
                                <div class="left">
                                    <i class="ti-shopping-cart icon-sm"></i>
                                </div>
                                <div class="right">
                                
									<h5 class="uppercase mb16">BRIAN</h5>
                                    <p>
										Create orders online.
                                    </p>
                                </div>
                                </a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24 mb64">
                               <a class="portalLink" href="tm-cpip-process.php">
                                <div class="left">
                                    <i class="ti-thought icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">CPIP PROCESS</h5>
                                    <p>
                                        Note areas where process/procedures need to be amended or created.
                                    </p>
                                </div>
								</a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24 mb64">
                               <a class="portalLink" href="tm-cpip-product.php">
                                <div class="left">
                                    <i class="ti-support icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">CPIP PRODUCT</h5>
                                    <p>
                                        Note issues with product quality.
                                    </p>
                                </div>
								</a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24 mb64">
                               <a class="portalLink" href="tm-dit-online.php">
                                <div class="left">
                                    <i class="ti-comment-alt icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">DIT CLAIM</h5>
                                    <p>
                                        Damage in transit claim form.
                                    </p>
								</div>
                          	   </a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
                               <a class="portalLink" href="tm-warranty-online.php">
                                <div class="left">
                                    <i class="ti-comment-alt icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">FAULTY GOODS CLAIM</h5>
                                    <p>
                                        Faulty Goods / Warranty claim form.
                                    </p>
								</div>
                               </a>
                            </div>
                            <!--end of feature-->
                        </div>
                  	</div>
                    <!--end of row-->
                    <div class="row">  
                       <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
                               <a class="portalLink" href="../brian/tm-quick-view.php?warehouse=4">
                                <div class="left">
                                    <i class="ti-eye icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">LIVE INVENTORY - PERTH</h5>
                                    <p>
                                        View Perth warehouse live inventory: pricing and clearance.
                                    </p>
								</div>
                              </a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
                               <a class="portalLink" href="../brian/tm-quick-view.php?warehouse=3">
                                <div class="left">
                                    <i class="ti-eye icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">LIVE INVENTORY - SYDNEY</h5>
                                    <p>
                                        View Sydney warehouse live inventory: pricing and clearance.
                                    </p>
								</div>
                               </a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
                               <a class="portalLink" href="../brian/tm-quick-view.php?warehouse=16">
                                <div class="left">
                                    <i class="ti-eye icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">LIVE INVENTORY - LA</h5>
                                    <p>
                                        View LA warehouse live inventory: pricing and clearance.
                                    </p>
								</div>
                               </a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
                               <a class="portalLink" href="../brian/tm-quick-view.php?warehouse=13">
                                <div class="left">
                                    <i class="ti-eye icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">LIVE INVENTORY - ATLANTA</h5>
                                    <p>
                                        View Atlanta warehouse live inventory: pricing and clearance.
                                    </p>
								</div>
                               </a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
                               <a class="portalLink" href="../brian/tm-quick-view.php?warehouse=15">
                                <div class="left">
                                    <i class="ti-eye icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">LIVE INVENTORY - HAWAII</h5>
                                    <p>
                                        View Hawaii warehouse live inventory: pricing and clearance.
                                    </p>
								</div>
                               </a>
                            </div>
                            <!--end of feature-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature feature-3 mb-xs-24">
                               <a class="portalLink" href="../brian/tm-quick-view.php?warehouse=12">
                                <div class="left">
                                    <i class="ti-eye icon-sm"></i>
                                </div>
                                <div class="right">
                                    <h5 class="uppercase mb16">LIVE INVENTORY - AUCKLAND</h5>
                                    <p>
                                        View Auckland warehouse live inventory: stock levels, pricing and clearance.
                                    </p>
								</div>
                               </a>
                            </div>
                            <!--end of feature-->
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