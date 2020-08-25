<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - MEDIA DOWNLOADS</title>
         <?php 
		session_start();
		define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		include HOME . 'includes/header-includes.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 
		
		
		if ($_SESSION['user'] == 'distributor'){
		
			$userType = $_SESSION['user'];
			
			if (!isset($_SESSION['basic_is_logged_in']) || $_SESSION['basic_is_logged_in'] !== true) {
			
			echo 	$_SESSION['basic_is_logged_in'];
			// not logged in, move to login page
			header('Location: dist-portal-login.php');
			exit;
			}
		}
		else {
			
			if (!isset($_SESSION['basic_is_logged_in']) || $_SESSION['basic_is_logged_in'] !== true) {
			
			echo 	$_SESSION['basic_is_logged_in'];
			// not logged in, move to login page
			header('Location: media-login.php');
			exit;
			}
		}
		
		
		
		
		//$warehouseNo = "3";
		//$warehouse = "3";
		
	 	$pageName = "";
		$pageName = "mediaDownloads";
		
	?>
       

    </head>
    <body class="scroll-assist">
         <!-- include header -->
        <?php include HOME . 'includes/header-nav-items.inc'; ?>
        <div class="main-container">
            <section class="page-title page-title-2 image-bg overlay parallax">
                <div class="background-image-holder">
                    <?php 
					if ($userType == 'distributor'){
								echo "<img src='" . IMAGES_DIR ."tm-portal-header.jpg' class='background-image' alt='Global Surf Industries - Distributor Portal'>";
							}
                            else {
							 echo "<img src='" . IMAGES_DIR ."media-downloads-header-2.jpg' class='background-image' alt='Global Surf Industries - Media Downlaods'>";
								
							}
					 ?>
                    
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                           
                           <?php
							if ($userType == 'distributor'){
								echo '<h3 class="uppercase mb0">DISTRIBUTOR PORTAL</h3><h4>Media Downloads</h4>';
								
							}
                            else {
							 echo '<h3 class="uppercase mb0">MEDIA DOWNLOADS</h3>';	
								
							}
                         ?>  
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section>
                <div class="container">
                    <div class="row">
                       <?php
							if ($userType == 'distributor'){
								echo '<div class="col-md-9 col-md-push-3">';
								
							}
                            else {
							 echo '<div class="col-sm-10 col-sm-offset-1">';	
								
							}
                         ?> 
                       
                        
                            <div class="container">
								<div class="row">
									<div class="col-md-9 col-sm-12 ">
									 <ul class="accordion accordion-2 one-open">
                                	<li>
                                    <div class="title">
                                        <h5 class="inline-block mb0 boldText">7S</h5>
                                    </div>
                                    <div class="content media-brands">
                                       <h6 class="inline-block mediaHeading  boldText mb0 mt16">MEDIA PACK</h6>
                                        <p>
                                            <a class="mediaLink" href="https://app.box.com/s/vxmexrvc9gfwhgnc4688hbs0iskiqlgi">7S Media Pack</a>
										</p>
                                      </div>
                                    <div class="content media-brands">
                                       <h6 class="inline-block mediaHeading boldText mb0 mt16">HI RES BOARD IMAGES</h6>
                                        <p>
											
											 <a class="mediaLink" href="https://app.box.com/s/fnha2euzd0ooufxh60lyvr790uo8x9kw">7S Double Down - IM Model</a><br>
											<a class="mediaLink" href="https://surfindustries.box.com/s/6hccr568rsym5xw667eehlw6smbix9i2">7S Double Down - PU Model</a><br><br>
                                          <a class="mediaLink" href="https://app.box.com/s/ft0jklz4awuw8jdxr8528vn0joi0qaz3">7S Hook - IM Model</a><br><br>
                                           
                                            <a class="mediaLink" href="https://app.box.com/s/oywx7bmefk7z57r3mt97scya5kqhg5ba">7S Jetstream - IM Model</a><br>
											<a class="mediaLink" href="https://surfindustries.box.com/s/atyj7f8p5qqhu6rqqprnifg7a28zthw2">7S Jetstream - PU Model</a><br><br>
											
                                            <a class="mediaLink" href="https://app.box.com/s/y09b3hafa1najm3g6csnvi7gn9vhkd8u">7S Superfish 4 - IM Model</a><br>
											<a class="mediaLink" href="https://surfindustries.box.com/s/8xyel6wdvbnffij44qkv0tu589hk25wn">7S Superfish 4 - PU Model</a>
                                        </p>
                                     </div>
                                      <div class=" content media-brands"> 
                                        <h6 class="inline-block mediaHeading  boldText mb0">LOGOS</h6>
                                        <p class="mediaText">
                                            7S:  <a class="mediaLink mediaLogoLink" href="https://surfindustries.box.com/s/dl25e2ph95ttipcsc812hfkrsmzu5ukc">EPS</a> 
											<a class="mediaLink mediaLogoLink" href="https://surfindustries.box.com/s/68bhulq0dehc1lf3c7kzm9zk6otqvlc3">GIF</a> 
											<a class="mediaLink mediaLogoLink" href="https://surfindustries.box.com/s/74ix6183w3sgipxso21dnu6k4972o7p7">PNG</a> 
											<a class="mediaLink mediaLogoLink" href="https://surfindustries.box.com/s/5v5bwcte9mpy678n3sh5os1pvrf040u2">SVG</a><br>
											
											
                                            Double Down: <a class="mediaLink mediaLogoLink" href="seven/logos/7S-double-down-logo-eps.zip">EPS</a> <a class="mediaLink mediaLogoLink" href="seven/logos/7S-double-down-logo-gif.zip">GIF</a> <a class="mediaLink mediaLogoLink" href="seven/logos/7S-double-down-logo-jpg.zip">JPG</a> <a class="mediaLink mediaLogoLink" href="seven/logos/7S-double-down-logo-tif.zip">TIF</a><br>
                                            Jetstream: <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/rcejvjn6ixthey2q52xsj1tcsez4lz65">EPS</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/4a9x57kzvztoggnnhabqab27d0qtynkq">GIF</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/0lx2io0gfxzm6yp7r30a59m19mvumcbr">JPG</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/so0jak1v5rygu7xwyqh9ixr4lmr4ce09">TIF</a><br>
                                            Superfish 4: <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/agmvd3l6g9uyu31mc85chved4r7xs04c">EPS</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/agmvd3l6g9uyu31mc85chved4r7xs04c">GIF</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/ihut57se51ctrsv558ifv7nrn3uuy6j7">JPG</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/y7ja9v24abo3jan7xmcqtne6qkzkdnzy">TIF</a>
                                        </p>
                                       </div>
                                      
                                </li>
                              
                                <li>
                                    <div class="title">
                                        <h5 class="inline-block mb0 boldText">ADVENTURE PADDLEBOARDING</h5>
                                    </div>
                                    <div class="content media-brands">
                                       <h6 class="inline-block mediaHeading  boldText mb0 mt16">HI RES BOARD IMAGES</h6>
                                        <p >
                                         <a class="mediaLink" href="https://app.box.com/s/whue1debtlv14s5w0yhmj6gnw9e2wcfa">All Rounder - CX</a><br>
                                         <br>
                                            <a class="mediaLink" href="https://app.box.com/s/v1fsyile14fi1rwtazeea8kkv3vecd2b">All Rounder - MX Blue</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/z19qswsql9gcc30g3c9xoe7tkw9lwz5h">All Rounder - MX Magenta</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/lk1tnrk6ohh6leg56bn3c1bv9kj55oro">All Rounder - MX Teal<br>
                                            <a class="mediaLink" href="https://app.box.com/s/v117qsue3xfub41wn6jjpa8ypxdtrl7c">All Rounder - MX Orange</a><br>
                                          <br>
                                           
                                         <br>
                                         <a class="mediaLink" href="https://app.box.com/s/2m0j7ecavcgni57306enltdwicm4fmbb">Fifty Fifty - MX Aqua</a><br>
                                         <a class="mediaLink" href="https://app.box.com/s/1j50rkfeyrbk0zoqk206qauztzr7s0v6">Fifty Fifty - MX Teal</a><br><br>
                                                                                 <a class="mediaLink" href="https://app.box.com/s/v4d0m1bzb44g5xoc404a1ofwzjl8420o">Seventy Thirty - CX</a><br>
                                       <br>
                                         <br>
                                         <a class="mediaLink" href="https://app.box.com/s/s07t1q0620ovijvz2y86awn8h5tcmj1y">Sixty Forty - MX Magenta</a><br>
                                         <a class="mediaLink" href="https://app.box.com/s/1h4rl9966ethxoafrgtyhpf813c25qqz">Sixty Forty - MX New Blue</a><br>
                                         <a class="mediaLink" href="https://app.box.com/s/mk70a84n9510ohhil2gpq7uvh2os52ax">Sixty Forty - MX Teal</a><br>
                                        
                                            
                                          <br>
                                          <a class="mediaLink" href="https://app.box.com/s/7yhb78n1o1vquf7d0uh8wcbs0noziwji">The Explorer 2 - CX</a><br>
                                        
                                        </p>
									</div>
                                      <div class=" content media-brands"> 
                                        <h6 class="inline-block mediaHeading  boldText mb0">LOGOS</h6>
                                        <p class="mediaText">
                                            Adventure Paddleboarding: <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/nuvhitnag3hk51t5ayid5ujuhwdsrktz">EPS</a><a class="mediaLink mediaLogoLink" href="https://app.box.com/s/ze574vr8sy6fxyuniq921zd05s5lvgv2">GIF</a><a class="mediaLink mediaLogoLink" href="https://app.box.com/s/9mqrh25kkwtvmwaqf1erbgydss2zwtu9">JPG</a><a class="mediaLink mediaLogoLink" href="https://app.box.com/s/3ty9akct9i4eqtktup1rgdyiswsz82ux">TIF</a><br>
                                            All Rounder: <a class="mediaLink mediaLogoLink" href="adventure-paddleboarding/logos/adv-paddleboarding-all-rounder-logo-eps.zip">EPS</a><a class="mediaLink mediaLogoLink" href="adventure-paddleboarding/logos/adv-paddleboarding-all-rounder-logo-gif.zip">GIF</a><a class="mediaLink mediaLogoLink" href="adventure-paddleboarding/logos/adv-paddleboarding-all-rounder-logo-jpg.zip">JPG</a><a class="mediaLink mediaLogoLink" href="adventure-paddleboarding/logos/adv-paddleboarding-all-rounder-logo-tif.zip">TIF</a> <br>
                                            Fifty Fifty: <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/gin566kgmqkrh6audc9m0vlmtr7rfnjv">EPS</a><a class="mediaLink mediaLogoLink" href="https://app.box.com/s/hdaal0s5qm7cse0cbeiwmx62acloxatu">GIF</a><a class="mediaLink mediaLogoLink" href="https://app.box.com/s/np7rhasjj2bpiwu57kimnsnewxe7n0o3">JPG</a><a class="mediaLink mediaLogoLink" href="https://app.box.com/s/5dnigxov869diqpfs4wcfynnwvwr5ben">TIF</a> <br>
                                            Seventy Thirty:<a class="mediaLink mediaLogoLink" href="https://app.box.com/s/gin566kgmqkrh6audc9m0vlmtr7rfnjv">EPS</a> 
											<a class="mediaLink mediaLogoLink" href="https://app.box.com/s/hdaal0s5qm7cse0cbeiwmx62acloxatu">GIF</a> 
											<a class="mediaLink mediaLogoLink" href="https://app.box.com/s/bw38yvuj0j4z642r0cmlb3u58nt58zez">JPG</a> 
											<a class="mediaLink mediaLogoLink" href="https://app.box.com/s/z4ed5d85p428esnifgec1jflx3my7cr4">TIF</a> <br>
                                            Sixty Forty: <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/3woz6q0qy2lndtwoo8pjadbh6d266pvs">EPS</a> 
											<a class="mediaLink mediaLogoLink" href="https://app.box.com/s/mm2oxgvxk9p8s0yf4kfq1s2pktutthwv">GIF</a> 
											<a class="mediaLink mediaLogoLink" href="https://app.box.com/s/n1vqcuf9dk1um140tcyhlw6n4rmhkjsp">JPG</a> 
											<a class="mediaLink mediaLogoLink" href="https://app.box.com/s/lflhqjw20egbyjrsobdclret9b6m4cfq">TIF</a> <br>
                                            The Explorer 2: <a class="mediaLink mediaLogoLink" href="adventure-paddleboarding/logos/adv-paddleboarding-the-explorer-logo-eps.zip">EPS</a> 
											<a class="mediaLink mediaLogoLink" href="adventure-paddleboarding/logos/adv-paddleboarding-the-explorer-logo-gif.zip">GIF</a> 
											<a class="mediaLink mediaLogoLink" href="adventure-paddleboarding/logos/adv-paddleboarding-the-explorer-logo-jpg.zip">JPG</a> 
											<a class="mediaLink mediaLogoLink" href="adventure-paddleboarding/logos/adv-paddleboarding-the-explorer-logo-tif.zip">TIF</a> <br>
                                            
                                        </p>
                                        </div>
                                      
                                </li>
                                <li>
                                    <div class="title">
                                        <h5 class="inline-block mb0 boldText">CHILLI SURFBOARDS</h5>
                                    </div>
                                   <!-- <div class="content media-brands">
                                       <h6 class="inline-block mediaHeading  boldText mb0 mt16">MEDIA PACK</h6>
                                        <p>
                                            <a class="mediaLink" href="https://app.box.com/s/vxmexrvc9gfwhgnc4688hbs0iskiqlgi">7S Media Pack</a>
										</p>
                                      </div> -->
                                    <div class="content media-brands">
                                       <h6 class="inline-block mediaHeading boldText mb0 mt16">HI RES BOARD IMAGES</h6>
                                        <p>
											 <a class="mediaLink" href="https://app.box.com/s/ml3fqblq3c4nbz727ib4hslqvrmmhvoc">Hot Knife</a><br>
                                          <a class="mediaLink" href="https://app.box.com/s/ap4m8tltpmvho6hl4wr6z2vd8posob4e">Mid Strength</a><br>
                                           
                                            <a class="mediaLink" href="https://app.box.com/s/y2zhgvtgefcaayjywy0gh56c7x173v3k">Rarest Bird</a><br>
                                           
                                        </p>
                                     </div>
                                      <div class=" content media-brands"> 
                                        <h6 class="inline-block mediaHeading  boldText mb0">LOGOS</h6>
                                        <p class="mediaText">
                                            Chilli:  <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/00x156o0as9jf2xrzcunu3qsy5sf7jxd">AI</a> 
											<a class="mediaLink mediaLogoLink" href="https://app.box.com/s/eu8xwv9317cvxfpjbwz0bxvfpjyo0gwm">GIF</a> 
											<a class="mediaLink mediaLogoLink" href="https://app.box.com/s/nyoijfdyrf3sw9hzd4ondugxv0zgq09u">JPG</a><br>
											
											
                                            Hot Knife: <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/gs3cz35ookybfgo5viw87zwpt8rherxl">AI</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/wo103czt3bqp1xdxhnky13m3874gp539">GIF</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/47txsq5rb36sjb8vyszfitw0htv6woqu">JPG</a><br>
											
                                            Mid Strength: <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/3pb6linrvtawh9r18bgfk6xu29tae9ss">AI</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/xz2xjintopfsii41anpvdrfaf72c8nj1">GIF</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/e6ky332o9upxf8xikf1f78swvuwi17or">JPG</a><br>
											
                                            Rarest Bird: <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/lrgydqd3109qefb9qfdrir87a1nq1gv1">AI</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/3qmad5v7mradv4ak8eeca0uh8xgelzoa">GIF</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/j392ztw1rywf7aqxk8hqd7p35jtsgcgg">JPG</a>
                                        </p>
                                       </div>
                                      
                                </li>
                                <li>
                                    <div class="title">
                                        <h5 class="inline-block mb0 boldText">CREATIVE ARMY</h5>
                                    </div>
                                    <!-- <div class="content media-brands">
                                       <h6 class="inline-block mediaHeading  boldText mb0 mt16">MEDIA PACK</h6>
                                        <p>
                                            <a class="mediaLink" href="https://app.box.com/s/04g8169a5z4i4t6aaiypv1k6li3kkfy0">Creative Army Media Pack</a>
										</p>
                                      </div>  -->
                                      <div class=" content media-brands"> 
                                       <h6 class="inline-block mediaHeading  boldText mb0">HI RES BOARD IMAGES</h6>
                                        <p>
                                           	<a class="mediaLink" href="https://app.box.com/s/kpl3iythj95hid274nzeoalynhvyjou5">Creative Army Five Sugars - blu</a><br>
											<a class="mediaLink" href="https://app.box.com/s/6pymhki7d7dh9hu1sufkafe8lgrns7j3">Creative Army Five Sugars - clear</a><br><br>
											<a class="mediaLink" href="https://surfindustries.box.com/s/jd49w41156pjgvq7jcxkolgflqkcjwqm">Creative Army Huevo - khaki</a><br>
											<a class="mediaLink" href="https://surfindustries.box.com/s/buzi5j4tznj1sexmqpgl6r1n1zeetmql">Creative Army Huevo - stone</a><br>
							                <a class="mediaLink" href="https://app.box.com/s/macguepmt0kd9qmrjcdmuvd7xyscnit4">Creative Army Huevo - blue</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/1251rom3aszwcpuzoimz7uqtg6mb1voc">Creative Army Huevo - olive</a><br>
											<a class="mediaLink" href="https://surfindustries.box.com/s/gmh1ix2eg9ypse6gmp4d3k8ybbmga8tq">Creative Army Huevo - SLX</a><br><br>
                      						<a class="mediaLink" href="https://surfindustries.box.com/s/imxwdo3fc3usd1lwqd8g0h1tpj90g4hd">Creative Army Jive +  - SLX</a><br><br>
											<a class="mediaLink" href="https://surfindustries.box.com/s/pyx3s2nghsrr1zr1tnyvf2a438kgkjvr">Creative Army Jumbo Jet - SLX</a><br>
							              </p>
                                        </div>
                                      <div class=" content media-brands"> 
                                        <h6 class="inline-block mediaHeading  boldText mb0">LOGOS</h6>
                                        <p class="mediaText">
                                            Creative Army: <a class="mediaLink mediaLogoLink" href="creative-army/logos/creative-army-vector-2016-ai.zip">EPS</a><a class="mediaLink mediaLogoLink" href="creative-army/logos/creative-army-vector-2016-gif.zip">GIF</a><a class="mediaLink mediaLogoLink" href="creative-army/logos/creative-army-vector-2016-jpg.zip">JPG</a><a class="mediaLink mediaLogoLink" href="creative-army/logos/creative-army-vector-2016-tif.zip">TIF</a>                                            
                                        </p>
                                        
                                    </div>
                                    <div class=" content media-brands"> 
                                        <h6 class="inline-block mediaHeading  boldText mb0">ACTION IMAGES</h6>
                                        <p>
                                            <a class="mediaLink" href="https://app.box.com/s/8z0ecxhfa7fyx3gb1nivpy81p5v8q5k9">Huevo</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/jpm93akuyvmvlkrz1nw41qxxuampquhp">Jive</a><br>
                                          
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <h5 class="inline-block mb0 boldText">GLOBAL SURF INDUSTRIES</h5>
                                    </div>
                                    <div class="content media-brands">
                                        <h6 class="inline-block mediaHeading  boldText mb0 mt16">LOGOS</h6>
                                        <p class="mediaText">
                                            GSI logo - tall black: <a class="mediaLink mediaLogoLink" href="gsi/logos/gsi_logo_tall_blk_eps.zip">EPS</a><a class="mediaLink mediaLogoLink" href="gsi/logos/gsi_logo_tall_blk_gif.zip">GIF</a><a class="mediaLink mediaLogoLink" href="gsi/logos/gsi_logo_tall_blk_jpg.zip">JPG</a><a class="mediaLink mediaLogoLink" href="gsi/logos/gsi_logo_tall_blk_tif.zip">TIF</a><br>
                                            GSI logo - tall white: <a class="mediaLink mediaLogoLink" href="gsi/logos/gsi_logo_tall_white_eps.zip">EPS</a><a class="mediaLink mediaLogoLink" href="gsi/logos/gsi_logo_tall_white_gif.zip">GIF</a><a class="mediaLink mediaLogoLink" href="gsi/logos/gsi_logo_tall_white_jpg.zip">JPG</a><a class="mediaLink mediaLogoLink" href="gsi/logos/gsi_logo_tall_white_tif.zip">TIF</a><br>
                                            GSI logo - wide black: <a class="mediaLink mediaLogoLink" href="gsi/logos/gsi_logo_wide_blk_eps.zip">EPS</a><a class="mediaLink mediaLogoLink" href="gsi/logos/gsi_logo_wide_blk_gif.zip">GIF</a><a class="mediaLink mediaLogoLink" href="gsi/logos/gsi_logo_wide_blk_jpg.zip">JPG</a><a class="mediaLink mediaLogoLink" href="gsi/logos/gsi_logo_wide_blk_tif.zip">TIF</a><br>
                                            GSI logo - wide white: <a class="mediaLink mediaLogoLink" href="gsi/logos/gsi_logo_wide_white_eps.zip">EPS</a><a class="mediaLink mediaLogoLink" href="gsi/logos/gsi_logo_wide_white_gif.zip">GIF</a><a class="mediaLink mediaLogoLink" href="gsi/logos/gsi_logo_wide_white_jpg.zip">JPG</a><a class="mediaLink mediaLogoLink" href="gsi/logos/gsi_logo_wide_white_tif.zip">TIF</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <h5 class="inline-block mb0 boldText">GNARALOO</h5>
                                    </div>
                                    <div class="content media-brands">
                                       <h6 class="inline-block mediaHeading  boldText mb0 mt16">HI RES BOARD IMAGES</h6>
                                        <p>
											<a class="mediaLink" href="https://app.box.com/s/ve60v69wjb8e9c494pb3tg2d6hncwzi0">2020 Beach Cruiser - blue / blue</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/2fcdnoa5kqizrbvuvhzan34buyniycoy">2020 Beach Cruiser - orange / blue</a><br>
											<a class="mediaLink" href="https://app.box.com/s/9969lxdwcallcxonsg1sl9rw4mdrc9r3">2020 Beach Cruiser - torq / steel</a><br><br>
											<br>
                                            <a class="mediaLink" href="https://app.box.com/s/bcv5uf0w4t8krquge4i0mbg4ztmszz93">Beach Cruiser - yellow deck / lime bottom</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/vgfj2ypk7zqbmsh2qj0d2up7rv4lwbfr">Beach Cruiser - pilsner deck / steel bottom</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/6fq1afu06vwyr9zjl4zhgr5jugfjt6h7">Beach Cruiser - blue deck / yellow bottom</a><br><br>
                                            <br>
                                            <a class="mediaLink" href="https://app.box.com/s/aa78ck9htqw87t4h0b8md46nh65ibsw0">2020 Dune Buggy - blue / blue</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/g8gy2c6km3tdad80s01wdulzgdnne44g">2020 Dune Buggy  - orange / blue</a><br>
											<a class="mediaLink" href="https://app.box.com/s/tuhcizlpli10b1lw8jpjh5smp0707yzx">2020 Dune Buggy  - torq / steel</a><br><br>
											<br>
                                            <a class="mediaLink" href="https://app.box.com/s/3w1t18v9crg5ohj13vlr1j29fzjovud4">2020 Flounder Pounder - blue / blue</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/64754j2ljb3mlu2sxpkdipu0dv4k1smf">2020 Flounder Pounder - orange / blue</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/c3xmm14nf3zh9r98fbuae9lbl5oe1jou">2020 Flounder Pounder - torq / steele</a><br>
											<br>
                                            <a class="mediaLink" href="https://app.box.com/s/2flb85bg7d12f2ouhbch1z97w27t7zq9">Flounder Pounder - yellow deck / blue bottom</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/ypgyoiqjaknlpf5x3dpeni5exq09b0bu">Flounder Pounder - lime deck / purple bottom</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/1llgcsrjyqwah6pbeppocfkpmsodzldu">Flounder Pounder - blue deck / red bottom</a><br>
                                       
                                        </p>
                                        </div>
                                      <div class=" content media-brands"> 
                                        <h6 class="inline-block mediaHeading  boldText mb0">LOGOS</h6>
                                        <p class="mediaText">
											 Beach Cruiser: 
											<a class="mediaLink mediaLogoLink" href="https://app.box.com/s/lh65atjv7ya4hs7yb7psdruloisvu6k7">EPS</a> 
											<a class="mediaLink mediaLogoLink" href="https://app.box.com/s/8kmf479msac4l5cbvlhlx0s8u4lsnw0k">GIF</a> 
											<a class="mediaLink mediaLogoLink" href="https://app.box.com/s/ifv19734cie5a39srvwh1nshne2pzjf9">JPG</a> 
											<br>
                                            Dune Buggy: 
											<a class="mediaLink mediaLogoLink" href="https://app.box.com/s/4guddfx1b440zggxrtuxvzdfcrz63zab">EPS</a> 
											<a class="mediaLink mediaLogoLink" href="https://app.box.com/s/hobcixvf80x19991m1dfn03xqs2pu1wo">GIF</a> 
											<a class="mediaLink mediaLogoLink" href="">JPG</a> 
											<br>
                                            Gnaraloo: 
											<a class="mediaLink mediaLogoLink" href="https://surfindustries.box.com/s/ctg4v7e4wved6tm5g28u4wkte4f6xzd1">EPS</a> 
											<a class="mediaLink mediaLogoLink" href="https://surfindustries.box.com/s/krn3gy8lb7z5o9c50naqr39v7e172y4a">GIF</a> 
											<a class="mediaLink mediaLogoLink" href="https://surfindustries.box.com/s/h26ahzy17vjfd3zcetst52iakh04qqzr">PNG</a> 
											<a class="mediaLink mediaLogoLink" href="https://surfindustries.box.com/s/jpmnnj9w10zm2vcmld1xd4jnhj3dglmw">SVG</a> 
											<br>
                                            Flounder Pounder: 
											<a class="mediaLink mediaLogoLink" href="https://app.box.com/s/1ffylys33fw046z7a1afsrvchzan8iko">EPS</a> 
											<a class="mediaLink mediaLogoLink" href="https://app.box.com/s/fjl5i1l0idri6aha2v20k1gresvs4hh1">GIF</a> 
											<a class="mediaLink mediaLogoLink" href="https://app.box.com/s/0wcu5jnv8kb3bus4s6i0pasmpsiassq6">JPG</a> 
										<br>
                                        </p>
                                        </div>
                                      
                                </li>
                                
                                <li>
                                    <div class="title">
                                        <h5 class="inline-block mb0 boldText">MODERN SURFBOARDS</h5>
                                    </div>
                                    <div class="content media-brands">
                                      <h6 class="inline-block mediaHeading  boldText mb0 mt8">MEDIA PACK</h6>
                                      <p class="mb8">
                                            <a class="mediaLink" href="https://app.box.com/s/ws5q0731n4ef9mquid5jsaw033ej96z9">Modern Surfboards Media Pack</a>
                                            
                                        </p>
                                       <h6 class="inline-block mediaHeading  boldText mb0">HI RES BOARD IMAGES</h6>
                                        <p class=" mb8">
                                          <a class="mediaLink" href="https://surfindustries.box.com/s/emh25q5xnmgzg92cqkgjbihuai6p3824">Golden Rule - PU - Blue</a><br>
											<a class="mediaLink" href="https://surfindustries.box.com/s/83tmerpye2eg0q2w78aq1ou4kabhb41m">Golden Rule - PU - Clear w/pinlines</a><br> <br>
                                            <a class="mediaLink" href="https://app.box.com/s/gsi6l7y2zm25bi0hxejsm5oirb9lwx78">Highline - PU - Sea Tint</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/einoqs9sauze0sekkokz66g0pj58kjfd">Highline - PU - White Tint</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/akncxmomo0t88bnh9pfg5cq1922ersw8">Highline - XB<br><br>
                                            <a class="mediaLink" href="https://app.box.com/s/wzmx2mhw14gox9f96fa66xt3zetagul6">Love Child - PU - Psychadelic Kaleidoscope</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/roell8u0y88so9z0j3yc3kwsoiqf33yy">Love Child - PU - Grey / Orange pinlines</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/ds6tjz2g1bw57aer3mgin2zfehz4ee9a">Love Child - PU - Kaleidoscope</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/94uz394j2sy9n2j2zdb6ih4zjtocvqzg">Love Child - PU - White Pigment</a><br><br>
                                         	<a class="mediaLink" href="https://app.box.com/s/clom9kwuyyhfr7hiy5bh2j0iwen67x5d">Retro - PU - Two Tone Blue</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/3kbfnl1qtlx5s1nqukrchgi65zpekeud">Retro - PU - Two Tone Green</a><br>
											 <a class="mediaLink" href="https://app.box.com/s/cjja7n1lfig4bv8k634j73elf8131lsz">Retro - PU - Clear</a><br>	<br>
                                            <a class="mediaLink" href="https://app.box.com/s/99ivlvwhrtg86j0u9a1tnw3larmm9hoe">The Boss - PU - blue tint</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/t0o0a5jfqznxcoltqr3e4qjp9h7ld75a">The Boss - PU - green pinlines</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/hyf0j002aym8r7wpqk12tdzkk7seawy4">The Boss - XB</a><br>
												
												
												
												
												
												
                                          </p>
                                        </div>
                                      <div class="content media-brands"> 
                                        <h6 class="inline-block mediaHeading  boldText mb0">LOGOS</h6>
                                        <p class="mediaText">
                                            Modern Surfboards: <a class="mediaLink mediaLogoLink" href="https://surfindustries.box.com/s/oa570wc70bdqamdlrzh88r4nrdi7lfp8">EPS</a> <a class="mediaLink mediaLogoLink" href="https://surfindustries.box.com/s/6ll2zuywef7s01h2m7p3myoe6cqtspxb">GIF</a> <a class="mediaLink mediaLogoLink" href="https://surfindustries.box.com/s/ut1iztre5qgsyp8kfyleammw5qmcefpm">JPG</a> <a class="mediaLink mediaLogoLink" href="https://surfindustries.box.com/s/2fghuhoq1cje5j1kq5b1dt3vjy4csw7p">TIF</a><br>
											Modern Golden Rule: <a class="mediaLink mediaLogoLink" href="https://surfindustries.box.com/s/qsaicjzek21xkr9ibffvo3ecl64fxty6">EPS</a> <a class="mediaLink mediaLogoLink" href="https://surfindustries.box.com/s/16tt1ylgsbxdrgup02inr2i21myjc1fv">GIF</a> <a class="mediaLink mediaLogoLink" href="https://surfindustries.box.com/s/y3mnsuq55r9gtmj5wmyd7ibh19piv857">JPG</a> <a class="mediaLink mediaLogoLink" href="https://surfindustries.box.com/s/37qnwk3ja3qxivvycf2hhw6x0xykqafi">TIF</a><br>
                                            Modern Highline: <a class="mediaLink mediaLogoLink" href="modern/logos/modern-highline-logo-blk-eps.zip">EPS</a> <a class="mediaLink mediaLogoLink" href="modern/logos/modern-highline-logo-blk-gif.zip">GIF</a> <a class="mediaLink mediaLogoLink" href="modern/logos/modern-highline-logo-blk-jpg.zip">JPG</a> <a class="mediaLink mediaLogoLink" href="modern/logos/modern-highline-logo-blk-tif.zip">TIF</a><br>
                                            Modern Love Child: <a class="mediaLink mediaLogoLink" href="modern/logos/2015-love-child-eps.zip">EPS</a> <a class="mediaLink mediaLogoLink" href="modern/logos/2015-love-child-gif.zip">GIF</a> <a class="mediaLink mediaLogoLink" href="modern/logos/2015-love-child-jpg.zip">JPG</a> <a class="mediaLink mediaLogoLink" href="modern/logos/2015-love-child-tif.zip">TIF</a><br>
                                            Modern Retro: <a class="mediaLink mediaLogoLink" href="modern/logos/13_modern_retro_logo_eps.zip">EPS</a> <a class="mediaLink mediaLogoLink" href="modern/logos/13_modern_retro_logo_gif.zip">GIF</a> <a class="mediaLink mediaLogoLink" href="modern/logos/13_modern_retro_logo_jpg.zip">JPG</a> <a class="mediaLink mediaLogoLink" href="modern/logos/13_modern_retro_logo_tif.zip">TIF</a><br>
                                            Modern The Boss: <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/7184qj8tiwaze53rly2knjl5dvzvtdob">EPS</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/7wempuwxnlq7wpm2k4o8x9eslrooyllu">GIF</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/ox29993b6szaifmyp5oysj5oieutpk2p">JPG</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/l5zubf5wpjhayw4oat009j5a1hzxa538">TIF</a><br>
                                        </p>
                                        </div>
                                      <div class=" content media-brands"> 
                                        <h6 class="inline-block mediaHeading  boldText mb0">ACTION IMAGES</h6>
                                        <p>
                                            <a class="mediaLink" href="https://app.box.com/s/5x3hoilttnn3rgqehm35ogfsfrmmvmn0">Blackbird</a><br>
											<a class="mediaLink" href="https://app.box.com/s/apwbv7h5ec2s5k2xuza86t9nwza9rd2a">Double Wide</a><br>
											<a class="mediaLink" href="https://app.box.com/s/ogfz279ihdjbln3maqrz1ydq0lz215az">Falcon</a><br>
							                <a class="mediaLink" href="https://app.box.com/s/ue62z1ecbb5unbz7hvre664mk0xeom3n">Love Child</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/yal0mia468l9kkvurvgjcxrr49a6cwq8">Retro</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/nk94p7e0gsf60schdnngsnbyrcidl1v9">The Boss</a><br>
											
											
											
											
                                        </p>
                                    </div>
                                </li>
                                
                                
                                <li>
                                    <div class="title">
                                        <h5 class="inline-block mb0 boldText">SURFICA ACCESSORIES</h5>
                                    </div>
                                    <div class="content media-brands">
                                       <h6 class="inline-block mediaHeading  boldText mb0 mt16">HI RES BOARD BAG IMAGES</h6>
                                        <p>
                                            <a class=" mediaLink" href="surfica/boardbags/surfica-15-surfboard-board-bag.zip">SURFICA Surfboard Bag- hi res</a><br>			<a class=" mediaLink" href="surfica/boardbags/surfica-15-longboard-board.zip">SURFICA Longboard Bag - hi res</a><br>			<a class=" mediaLink" href="surfica/boardbags/surfica-15-sup-all-round-board.zip">SURFICA All Rounder SUP Bag - hi res</a><br>	<a class=" mediaLink" href="surfica/boardbags/surfica-15-sup-flat-water-board-bag.zip">SURFICA Flat Water SUP Bag - hi res</a>
                                        </div>
                                      <div class=" content media-brands"> 
                                        <h6 class="inline-block mediaHeading  boldText mb0">LOGOS</h6>
                                        <p class="mediaText">
                                            Surfice Logo - black: <a class="mediaLink mediaLogoLink" href="surfica/logos/surfica-blk-eps.zip">EPS</a> <a class="mediaLink mediaLogoLink" href="surfica/logos/surfica-blk-gif.zip">GIF</a> <a class="mediaLink mediaLogoLink" href="surfica/logos/surfica-blk-jpg.zip">JPG</a> <a class="mediaLink mediaLogoLink" href="surfica/logos/surfica-blk-tif.zip">TIF</a><br>
                                            Surfica Logo - white: <a class="mediaLink mediaLogoLink" href="surfica/logos/surfica-blk-eps.zip">EPS</a> <a class="mediaLink mediaLogoLink" href="surfica/logos/surfica-blk-gif.zip">GIF</a> <a class="mediaLink mediaLogoLink" href="surfica/logos/surfica-blk-jpg.zip">JPG</a> <a class="mediaLink mediaLogoLink" href="surfica/logos/surfica-blk-tif.zip">TIF</a>
                                        </p>
                                        </div>
                                      
                                </li>
								<li>
                                    <div class="title">
                                        <h5 class="inline-block mb0 boldText">SALT GYPSY</h5>
                                    </div>
									
                                    <div class="content media-brands">
										<h6 class="inline-block mediaHeading  boldText mb0 mt8">MEDIA PACK</h6>
                                      <p class="mb8">
                                            <a class="mediaLink" href="https://app.box.com/s/rthvmp8j8e7o7wqi9z3nf3osekad60d7">Salt Gypsy Media Pack</a>
                                            
                                        </p>
                                       <h6 class="inline-block mediaHeading  boldText mb0 mt16">HI RES BOARD IMAGES</h6>
                                        <p>
                                            <a class="mediaLink" href="https://app.box.com/s/2wv023i2alnaxa0y0580v0tbgnzteuem">Dusty - Longboard -Merlot</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/e36wiszprvfeyb75m4a0n0rdz018h6ez">Dusty - Longboard -Olive</a><br><br>
											<a class="mediaLink" href="https://app.box.com/s/ky7x4de8naem5ay1wv0k3cu370o9hil2">Mid Tide - Mid Length - Mustard</a><br>
											<a class="mediaLink" href="https://app.box.com/s/h1qtic7cx77zghk90s14in0wnx84ilc1">Mid Tide - Mid Length - Ocean Blue</a><br><br>
											<a class="mediaLink" href="https://app.box.com/s/ww0axn8476j10182l1bsxxjkb5o5bitt">Shorebird - Fish Twin - Dirty Pink</a><br>
										   <a class="mediaLink" href="https://app.box.com/s/cfhjkraykt41p903dvjj5bmb48xi6l16">Shorebird - Fish Twin - Mint</a><br><br>
										<a class="mediaLink" href="https://app.box.com/s/fzzxy2m1i70bxgile9oir5fipyf9kkyx">Paradise Punch - SUP - Mauve</a>
                                        </p>
                                        </div>
                                      <div class=" content media-brands"> 
                                        <h6 class="inline-block mediaHeading  boldText mb0">LOGOS</h6>
                                        <p class="mediaText">
                                            Salt Gypsy: <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/ebto1asig6j53jm8yqfham9ikfaae4kk">AI</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/3904oczo3kjevy739ggmwqivba0exse1">GIF</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/thng8rmzhdm9h2mlxjj29ya709lo7c4o">JPG</a> <br>
                                            Dusty: <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/m8zw11ddm9uog2fjhsfpg4d3kewuw5as">AI</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/0cawqgpqm61u0ggu10mf66w9pw4svjn3">GIF</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/qiwac1dcxsuei6daq378eczb4zwbazx6">JPG</a> <br>
											Mid Tide: <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/j6i0g96lyrlczeyecilhopmw4grtr9y2">AI</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/6buzt8942fnm8pjaffxgjkiun1d25232">GIF</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/5rr3j5ggz3vynx3r37czlgnxxxfs5n55">JPG</a> <br>
											Shorebird: <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/542t317yqixwinkb9bhsxmqkh92rlasx">AI</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/5u9k5x0y3u3m9oyafs7up0db0uy3hbrh">GIF</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/pd7t9nonbqz5mfzrsrqpd9pdba9up0yq">JPG</a> <br>
											Paradise Punch: <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/eys7llh3yr188t0nj8a5vygh5fo28q8j">AI</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/m9mw1ovwutjkn8e78nl1kfkyry2u6exy">GIF</a> <a class="mediaLink mediaLogoLink" href="https://app.box.com/s/jihzljsnx7hk0hvm304wcwnik0lpst00">JPG</a> <br>
                                           
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <h5 class="inline-block mb0 boldText">THE SEAGLASS PROJECT</h5>
                                    </div>
                                    <div class="content media-brands">
                                       <h6 class="inline-block mediaHeading  boldText mb0 mt16">HI RES BOARD IMAGES</h6>
                                        <p>
                                            <a class="mediaLink" href="SEAGLASS/boards/12_seaglass_albacore_411.zip">Albacore - 4'11 model</a><br>
                                            <a class="mediaLink" href="SEAGLASS/boards/12_seaglass_albacore_56.zip">Albacore - 5'6 model</a><br>
                                        </p>
                                        </div>
                                      <div class=" content media-brands"> 
                                        <h6 class="inline-block mediaHeading  boldText mb0">LOGOS</h6>
                                        <p class="mediaText">
                                            The Seaglass Project logo - grey: <a class="mediaLink mediaLogoLink" href="seaglass/logos/theSeaglassProject_logo_grey_eps.zip">EPS</a> <a class="mediaLink mediaLogoLink" href="seaglass/logos/theSeaglassProject_logo_grey_gif.zip">GIF</a> <a class="mediaLink mediaLogoLink" href="seaglass/logos/theSeaglassProject_logo_grey_jpg.zip">JPG</a> <a class="mediaLink mediaLogoLink" href="seaglass/logos/theSeaglassProject_logo_grey_tif.zip">TIF</a><br>
                                            The Seaglass Project logo - green: <a class="mediaLink mediaLogoLink" href="seaglass/logos/theSeaglassProject_logo_grn_eps.zip">EPS</a> <a class="mediaLink mediaLogoLink" href="seaglass/logos/theSeaglassProject_logo_grn_gif.zip">GIF</a> <a class="mediaLink mediaLogoLink" href="seaglass/logos/theSeaglassProject_logo_grn_jpg.zip">JPG</a> <a class="mediaLink mediaLogoLink" href="seaglass/logos/theSeaglassProject_logo_grn_tif.zip">TIF</a><br>
                                            Albacore logo:<a class="mediaLink mediaLogoLink" href="seaglass/logos/albacore_logo_eps.zip">EPS</a> <a class="mediaLink mediaLogoLink" href="seaglass/logos/albacore_logo_gif.zip">GIF</a> <a class="mediaLink mediaLogoLink" href="seaglass/logos/albacore_logo_jpg.zip">JPG</a> <a class="mediaLink mediaLogoLink" href="seaglass/logos/albacore_logo_tif.zip">TIF</a> 
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <h5 class="inline-block mb0 boldText">THREE PALMS BOARD CO</h5>
                                    </div>
                                    <div class="content media-brands">
                                       <h6 class="inline-block mediaHeading  boldText mb0 mt16">HI RES BOARD IMAGES</h6>
                                        <p>
                                           	<a class="mediaLink" href="https://app.box.com/s/fdnergw411xdjwtsjlbvk7tc8bje9u2c">Due Back - MX</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/nmhvz39t13xy1uvnr4ubnm45xv5e208g">Three Palms Board Co Soft Surfboard - BLUE</a><br>
											<a class="mediaLink" href="https://app.box.com/s/ujchpefodjjct1fjeluvaveqs4t7c4a4">Three Palms Board Co Soft SUP - BLUE</a><br>
											<a class="mediaLink" href="three-palms/boards/3-palms-16-sup-1006.zip">Three Palms Board Co 10'6 SUP</a><br>
											<a class="mediaLink" href="three-palms/boards/3-palms-16-sup-1106.zip">Three Palms Board Co 11'6 SUP</a>
                                        </p>
                                        </div>
                                      <div class=" content media-brands"> 
                                        <h6 class="inline-block mediaHeading  boldText mb0">LOGOS</h6>
                                        <p class="mediaText">
                                            Three Palms Board Co: <a class="mediaLink mediaLogoLink" href="three-palms/logos/3-palms-logo-eps.zip">EPS</a> <a class="mediaLink mediaLogoLink" href="three-palms/logos/3-palms-logo-gif.zip">GIF</a> <a class="mediaLink mediaLogoLink" href="three-palms/logos/3-palms-logo-jpg.zip">JPG</a> <a class="mediaLink mediaLogoLink" href="three-palms/logos/3-palms-logo-tif.zip">TIF</a> 
                                        </p>
                                        </div>
                                      <div class=" content media-brands"> 
                                        <h6 class="inline-block mediaHeading  boldText mb0">ACTION IMAGES</h6>
                                        <p>
                                            <a class="mediaLink" href="https://app.box.com/s/nbp3p6zxqcgvquswvjamwq9hpv4vdkqs">Soft Skin SUP</a><br>
											<a class="mediaLink" href="https://app.box.com/s/48d8xtb3tn6cu316ps3esj0dunpe0qcy">Soft Skin Surfboard</a><br>
						                </p>
                                    </div>
									
									
									
									
									
                                </li>
                                <li>
                                    <div class="title">
                                        <h5 class="inline-block mb0 boldText">TRIDENT PADDLES</h5>
                                    </div>
                                    <div class="content media-brands">
                                       <h6 class="inline-block mediaHeading  boldText mb0 mt16">HI RES BOARD IMAGES</h6>
                                        <p>
                                            <a class="mediaLink" href="https://app.box.com/s/8phqzd5nrkkemtn1nk8x6zd8hbbufhve">669CR-fixed</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/39dgmhnybn8mgqh4mzwtx1pw1pr48ly2">669CR-LL</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/bwyxtonmrmfpvn5naiq1np1tukh1ra34">588CR-LL</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/k7w3jshpfhfps5lpph9sghha6fqcw16o">669FG-LL</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/zzjjnpkb9fcu4rtpraj1tneugd86v7z6">588FG-LL</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/54k4mfb6gs9kud2nrmpqrfpvqwvmf81q">T6AL-LL</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/f5w6gc3suv8lnn6shbjg790ddc4ngbs7">T6FG-LL</a><br>
                                            <a class="mediaLink" href="https://app.box.com/s/zwks8sbxgvgcr4burdi1jg801bvwigjs">T6FG-LL3P</a>
                                        </p>
                                        </div>
                                      <div class=" content media-brands"> 
                                        <h6 class="inline-block mediaHeading  boldText mb0">LOGOS</h6>
                                        <p class="mediaText">
                                            <a class="mediaLink mediaLogoLink" href="">EPS</a> <a class="mediaLink mediaLogoLink" href="">GIF</a> <a class="mediaLink mediaLogoLink" href="">JPG</a> <a class="mediaLink mediaLogoLink" href="">TIF</a><br>
                                            <a class="mediaLink mediaLogoLink" href="">EPS</a> <a class="mediaLink mediaLogoLink" href="">GIF</a> <a class="mediaLink mediaLogoLink" href="">JPG</a> <a class="mediaLink mediaLogoLink" href="">TIF</a><br>
                                            <a class="mediaLink mediaLogoLink" href="">EPS</a> <a class="mediaLink mediaLogoLink" href="">GIF</a> <a class="mediaLink mediaLogoLink" href="">JPG</a> <a class="mediaLink mediaLogoLink" href="">TIF</a><br>
                                            <a class="mediaLink mediaLogoLink" href="">EPS</a> <a class="mediaLink mediaLogoLink" href="">GIF</a> <a class="mediaLink mediaLogoLink" href="">JPG</a> <a class="mediaLink mediaLogoLink" href="">TIF</a><br>
                                            <a class="mediaLink mediaLogoLink" href="">EPS</a> <a class="mediaLink mediaLogoLink" href="">GIF</a> <a class="mediaLink mediaLogoLink" href="">JPG</a> <a class="mediaLink mediaLogoLink" href="">TIF</a><br>
                                        </p>
                                        </div>
                                      
                                </li>
                                <li>
                                    <div class="title">
                                        <h5 class="inline-block mb0 boldText">TOM CARROLL PADDLE SURF</h5>
                                    </div>
                                    <div class="content media-brands">
                                       <h6 class="inline-block mediaHeading  boldText mb0 mt16">HI RES BOARD IMAGES</h6>
                                        <p>
                                            <a class="mediaLink" href="https://app.box.com/s/z2iojsq7kn6g8gpaobgb9hltftqtvpnv">Long Grain V2 - CX</a><br>
                            				<a class="mediaLink" href="https://app.box.com/s/6ykwbc9uwq8yi0addq0777mb62uzvq1l">Loose Leaf V2 - CX</a><br>
                            				<a class="mediaLink" href="https://app.box.com/s/6ykwbc9uwq8yi0addq0777mb62uzvq1l">Loose Leaf V2 - CX</a><br>
                            				<br>
                            				<a class="mediaLink" href="https://app.box.com/s/h4vxzullpy4i8hr7ylr5qq3kpa06mnq9">Outer Reef - MX (2019 Model)</a><br>
                            				<br>
                                        </p>
                                        </div>
                                      <div class=" content media-brands"> 
                                        <h6 class="inline-block mediaHeading  boldText mb0">LOGOS</h6>
                                        <p class="mediaText">
                                            Tom Carroll Paddle Surf - black: <a class="mediaLink mediaLogoLink" href="tom-carroll-paddle-surf/logos/TC-logo-black-eps.zip">EPS</a> <a class="mediaLink mediaLogoLink" href="tom-carroll-paddle-surf/logos/TC-logo-black-gif.zip">GIF</a> <a class="mediaLink mediaLogoLink" href="tom-carroll-paddle-surf/logos/TC-logo-black-jpg.zip">JPG</a> <a class="mediaLink mediaLogoLink" href="tom-carroll-paddle-surf/logos/TC-logo-black-tif.zip">TIF</a> <br>
                                            Tom Carroll Paddle Surf - white background: <a class="mediaLink mediaLogoLink" href="tom-carroll-paddle-surf/logos/TC-logo-white-eps.zip">EPS</a> <a class="mediaLink mediaLogoLink" href="tom-carroll-paddle-surf/logos/TC-logo-white-gif.zip">GIF</a> <a class="mediaLink mediaLogoLink" href="tom-carroll-paddle-surf/logos/TC-logo-white-jpg.zip">JPG</a> <a class="mediaLink mediaLogoLink" href="tom-carroll-paddle-surf/logos/TC-logo-white-tif.zip">TIF</a> <br>
                                        </p>
                                        </div>
                                      
                                </li>
                                
                                
                            </ul>
											
										
									</div>	 
									
									
					   			
						   			
									 
									
							   <!--end of row-->
							   </div>
							</div>
                     </div>
                     <!--begin side bar for distributers only-->
                     
                     <?php
							if ($userType == 'distributor'){
								echo '<div class="col-md-3 col-md-pull-9 hidden-sm">';
								include HOME . 'includes/dist-portal-left-menu.inc';
								echo '</div>';
								
							}
                            else {
							 echo '<div class="col-sm-10 col-sm-offset-1">';	
								
							}
                         ?> 
                     
                     
                     
                     <!--end of sidebar-->
                    </div>
                    <!--end of container row-->
                </div>
                <!--end of container-->
            </section>
            <?php include HOME . 'includes/footer.inc'; ?>
        </div>
        <?php include HOME . 'includes/site-scripts.inc'; ?>
      
      
      <script>
  ga('send', 'pageview');
</script>
      
    </body>
</html>