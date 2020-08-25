<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - LIFE IS BETTER WHEN YOU SURF SCHOLARSHIP</title>
         <?php 
		define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		include HOME . 'includes/header-includes.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 

	?>
    <META NAME='author' CONTENT="Global Surf Industries" >
    <META NAME='subject' CONTENT="global surf industries - life is better when you surf scholarship program" >
    <META NAME='Description' CONTENT="The Life Is Better When You Surf® Scholarship Program has been set up to give kids across the USA, Australia and New Zealand the chance to get a step up with their surfing and schooling.">
    <META NAME='Classification' CONTENT="Global Surf Industries - the world's premier distributor of surfboards - find product information, local surfboard shops or buy surfboards online." >
    <META NAME='Keywords' CONTENT="surfboards, surfboard, surfing, mark kelly, life is better when you surf, scholarship program, scholarship" >
    <META NAME='Language' CONTENT='English' >
    <META HTTP-EQUIV='CACHE-CONTROL' CONTENT='PUBLIC' > 
    <META HTTP-EQUIV='Expires' CONTENT='never' >`
    <META NAME='Copyright' CONTENT='global surf industries. All rights reserved.' >
    <META NAME='Designer' CONTENT='surfindustries.com' >
    <META NAME='Publisher' CONTENT='Mark Kelly, Mark Kelly, Global Surf Industries' >
    <META NAME='Revisit-After' CONTENT='4' >
    <META NAME='distribution' CONTENT='Global' >
    <META NAME='Robots' CONTENT='INDEX,FOLLOW' >
    <META NAME='country' CONTENT='USA, United States, United States Of America, America' >
    <META NAME='organization' content='Global Surf Industries' >
    <META NAME='viewport' CONTENT='width = device-width'>
    <link rel='SHORTCUT ICON' href='https://www.surfindustries.com/favicon.ico' >   
    
    
    <?php 
			//this script os required for this particualr form to show/hide the divs as the user progresses through the form
			echo "<script src='".HOME."js/jquery-1.7.2.min.js' type='text/javascript' charset='utf-8'></script>"; 
		?>
    <script>
		$(function() {
    $('#spandiv').hide(); 
	$('#portdiv').hide(); 
	$('#frenchdiv').hide(); 
    $('#languageSelect').change(function(){
        if($('#languageSelect').val() == 'span') {
            $('#spandiv').show(); 
			$('#engdiv').hide(); 
			$('#portdiv').hide();
			$('#frenchdiv').hide(); 
        }
		else if ($('#languageSelect').val() == 'port') {
            $('#portdiv').show(); 
			$('#engdiv').hide(); 
			$('#spandiv').hide(); 
			$('#frenchdiv').hide(); 
        }
		else if ($('#languageSelect').val() == 'french') {
            $('#portdiv').hide(); 
			$('#engdiv').hide(); 
			$('#spandiv').hide(); 
			$('#frenchdiv').show(); 
        }
		
		else {
			$('#frenchdiv').hide(); 
			$('#portdiv').hide();
            $('#spandiv').hide(); 
			$('#engdiv').show(); 
        } 
    });
});
		</script>
     
    </head>
    <body class="scroll-assist">
        <!-- include header -->
        <?php include HOME . 'includes/header-nav-items.inc'; ?>
        
        <div class="main-container">
            <section class="page-title page-title-2 image-bg overlay">
                <div class="background-image-holder">
                 <?php echo "<img src='" . IMAGES_DIR ."gsi-scholarship-header-2019.jpg' class='background-image' alt='Global Surf Industries - Life is Better When You Surf'>"; ?>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
							<h2 class="uppercase mb8"><?php echo "<img src='" . IMAGES_DIR ."gsi-scholarship-program-logo-white.png' class='background-image' alt='Global Surf Industries - Life is Better When You Surf'>"; ?></h2>
                            
                        </div>
                        
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section>
               <!--<div class="container">
                    <div class="row">
                    	<div class="col-md-12 col-sm-10 ">
							<div class="heading-title">
							 CHANGE LANGUAGE</label><br><hr></div>
						
						<div class="select-option">
									<i class="ti-angle-down"></i>
									<select id="languageSelect" name="languageSelect">
										<option class="eng" value="eng">English</option>
										<option class="french" value="french">French</option>
										<option class="port" value="port">Portuguese</option>
										<option class="span" value="span">Spanish</option>
								   </select>
									 </div>
						<hr></br>			 
					   </div>
				   </div> -->
                    <!--end of row-->
               <!-- </div> -->
                <!--end of container-->
                
                
                <div id="engdiv">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 text-center">
                            <h3 class="mb16 mb-xs-12">The Life Is Better When You Surf<sup class="smallText">&#174;</sup> Scholarship Program is going to give kids across the USA, Australia and New Zealand the chance to get a step up with their surfing and schooling.</h3>
							<h4 class="mb64 mb-xs-24">Global Surf Industries and Partners will award $1000 to be used for educational purposes and two surfboards to each scholarship recipient. This is an amazing opportunity to take their surfing and education to the next level.</h4>
                            </div>
                        <div class="col-md-12 col-sm-10 ">
							<p class="regularText">The Life Is Better When You Surf<sup class="smallText">&#174;</sup> (LIBWYS) Scholarship Program is focused on surfing enjoyment and reaching out to help students take the next step towards reaching their potential. LIBWYS Scholarship recipients will showcase the positive values of surfing among their peers and in their community. Scholarships are not awarded on competitive surfing achievement, but on encouraging kids towards a bright future in surfing and education.</p>
							
							<p class="regularText">Unfortunately the Australia / New Zealand the Life is Better When You Surf® Scholarship program will not be running in 2020</p>
						
							<p>You can checkout past Scholarship recipients on our <a href="gsi-scholarship-alumni.php">Scholarship Alumni page</a>.</p>
						</div>	<a name="schVideo"></a>
						<div class="col-md-12 col-sm-10 mb32">	
						 	<p class="regularText mb16">
                                A word from our past Scholarship recipients:
                            </p>
							 <div class="embed-video-container embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://youtube.com/embed/oQhRJt2eb_Q/?showinfo=0&rel=0" allowfullscreen="allowfullscreen"></iframe>
                            </div>
                            <!--end of embed video container-->
							</div>
							<div class="col-md-12 col-sm-10 ">
							
                           
							
                           
                            
						<p class="regularText">For more information please email <a class="underlineLink" href="mailto:gsischolarship@surfindustries.com">gsischolarship@surfindustries.com</a> or hit the live chat button at the bottom of the screen </p>
                           <!-- //apply button
                           <p class="regularText"><a class="btn" href="gsi-scholarship-application.php">CLICK HERE TO APPLY</a></p>     -->                      
							</div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
				</div> <!-- end Eng div -->
           
           <!-- blocking out languages other than English -->
           
           	<!--	<div id="spandiv">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 text-center">
                            <h3 class="mb16 mb-xs-12">El programa de becas La Vida es Mejor Cuando Surfeas va a brindar a los niños de EE. UU., Australia, Nueva Zelanda, Costa Rica, Sudáfrica, Inglaterra, Francia, España y Portugal la oportunidad de dar un paso adelante en su surf y educación.</h3>
							<h4 class="mb64 mb-xs-24">Global Surf Industries y sus socios otorgarán $ 1000 USD para fines educativos y dos tablas de surf para cada becario. Esta es una oportunidad increíble para llevar su navegación y educación al próximo nivel.</h4>
                            </div>
                        <div class="col-md-12 col-sm-10 ">
							<p class="regularText">El programa de becas La Vida es Mejor Cuando Surfeas (LVMCS) se centra en el disfrute del surf y en ayudar a los alumnos a dar el siguiente paso para alcanzar su potencial. Los beneficiarios de becas LVMCS mostrarán los valores positivos del surf entre sus compañeros y en su comunidad. Las becas no se otorgan en el logro de surf competitivo, sino en alentar a los niños a un futuro brillante en el surf y la educación.</p>
							<p class="regularText ">Las becas 2018/19 La Vida es Mejor Cuando Surfeas® irán a:<br>
							    16 destinatarios en <strong>USA</strong>. Y 2 destinatarios en <strong>Costa Rica</strong> - solicitudes abiertas del 15 de Julio al 16 de Septiembre de 2018.<br>
								1 Destinatario en <strong>Inglaterra</strong>, <strong>Francia</strong>, <strong>España</strong> y <strong>Portugal</strong> - solicitudes abiertas del 1 al 30 de Septiembre de 2018.<br>
								1 destinatario en Inglaterra, Francia, España y Portugal - solicitudes abiertas del 1 al 30 de Septiembre de 2018.<br>
							14 destinatarios en <strong> Australia </strong> y 6 destinatarios en <strong> Nueva Zelanda </strong>: solicitudes abiertas del 15 de Diciembre de 2018 al 17 de Febrero de 2019</p>
						</div>	
						<div class="col-md-12 col-sm-10 mb32">	
						 	<p class="regularText mb16">
                                Una palabra de nuestros destinatarios de Becas 2017:
                            </p>
							 <div class="embed-video-container embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://youtube.com/embed/oQhRJt2eb_Q/?showinfo=0&rel=0" allowfullscreen="allowfullscreen"></iframe>
                            </div> -->
                            <!--end of embed video container-->
							<!--</div>
							<div class="col-md-12 col-sm-10 ">
							
                           
							<p class="regularText"><strong>¿Tienes 12-15 años y te encanta el surf y la escuela? ¿Quieres dos nuevas tablas de surf y $ 1000 USD para un viaje escolar, un equipo nuevo o una computadora? Nos encantaría saber de usted!</strong></p>
                           
							<p class="regularText">Hay un par de cosas que deberá preparar antes de aplicar:
                          	<ul class="bullets">
								<li>Un breve ensayo (máximo de 200 palabras) sobre por qué la vida es mejor cuando surfeas.</li>
                         		<li>Un video corto o un ensayo fotográfico que nos muestra por qué se merece esta beca.</li>
                         		<li>Una carta de recomendación de tu Maestro, Entrenador o Mentor.</li>
                         		<li>Y, por supuesto, el permiso de su padre / tutor para solicitar esta beca.</li>
							</ul>
                          	</p>
                           
                            
						<p class="regularText">Para obtener más información, envíe un correo electrónico a  <a class="underlineLink" href="mailto:gsischolarshipapplications@surfindustries.com">gsischolarshipapplications@surfindustries.com</a>.</p> -->
                        
                          
                          <!-- <p class="regularText"><a class="btn" href="gsi-scholarship-application-spanish.php">Haga Clic Aquí Para Aplicar</a></p> -->
                            
						<!--	</div>
                    </div> -->
                    <!--end of row-->
               <!--  </div> -->
                <!--end of container-->
			<!--	</div> --> <!-- end spanish div -->
          
          
         <!--  <div id="portdiv">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 text-center">
                            <h3 class="mb16 mb-xs-12">A Vida é Melhor Quando Você Surfa Programa de Bolsas de Estudo vai dar aos alunos em todo os EUA, Austrália, Nova Zelândia, Costa Rica, África do Sul, Inglaterra, França, Espanha e Portugal a oportunidade de obter um passo para cima com o seu surf e escolaridade.</h3>
							<h4 class="mb64 mb-xs-24">A Global Surf Industries e seus parceiros concederão US $ 1.000 para serem usados para fins educacionais e duas pranchas de surfe para cada bolsista. Esta é uma oportunidade incrível para levar o seu surf e educação para o próximo nível.</h4>
                            </div>
                        <div class="col-md-12 col-sm-10 ">
							<p class="regularText">A Vida é Melhor Quando Você Surfa Programa de Bolsas de Estudo (VMQVSPBE) é focado no prazer de surfar e procura ajudar os alunos a dar o próximo passo para alcançar seu potencial. Os bolsistas da VMQVSPBE mostrarão os valores positivos do surf entre seus pares e em sua comunidade. As bolsas de estudos não são concedidas em termos de desempenho competitivo no surfe, mas sim em encorajar as crianças a um futuro brilhante no surfe e na educação.</p>
							<p class="regularText ">A vida de 2018/19 é melhor quando você surfa bolsas de estudos irá para:<br>
							    16 destinatários nos <strong>EUA</strong> e 2 destinatários na <strong>Costa Rica</strong> - inscrições abertas de 15 de Julho a 16 de Setembro de 2018.<br>
								1 destinatário em <strong>Inglaterra</strong>, <strong>França</strong>, <strong>Espanha</strong> e <strong>Portugal</strong> - as candidaturas estão abertas de 1 a 30 de Outubro de 2018.<br>
								10 destinatários na <strong>Austrália</strong>, 4 destinatários na <strong>Nova Zelândia</strong> abrem de 15 de Dezembro a 17 de Fevereiro de 2019.</p>
						</div>	<a name="schVideo"></a>
						<div class="col-md-12 col-sm-10 mb32">	
						 	<p class="regularText mb16">
                                Uma palavra de nossos bolsistas de 2017:
                            </p>
							 <div class="embed-video-container embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://youtube.com/embed/oQhRJt2eb_Q/?showinfo=0&rel=0" allowfullscreen="allowfullscreen"></iframe>
                            </div> -->
                            <!--end of embed video container-->
							<!--</div>
							<div class="col-md-12 col-sm-10 ">
							
                           
							<p class="regularText"><strong>Você tem 12-15 anos e adora surfar e estudar? Você quer duas novas pranchas de surf e US $ 1000 para uma viagem escolar, um novo equipamento ou um computador? Gostaríamos muito de ouvir você!</strong></p>
                           
							<p class="regularText">Há algumas coisas que você precisa preparar antes de se inscrever:
                          	<ul class="bullets">
								<li>Um pequeno ensaio (máximo de 200 palavras) sobre por que a vida é melhor quando você surfa</li>
                         		<li>Um breve vídeo ou ensaio fotográfico nos mostrando porque você merece esta bolsa</li>
                         		<li>Uma carta de recomendação do seu professor, treinador ou mentor</li>
                         		<li>E, claro, permissão do seu pai / responsável para se candidatar a esta bolsa de estudos</li>
							</ul>
                          	
                          	
                          	
                          	</p>
                           
                            
						<p class="regularText">Para mais informações, por favor envie um e-mail para <a class="underlineLink" href="mailto:gsischolarshipapplications@surfindustries.com">gsischolarshipapplications@surfindustries.com</a>.</p> -->
                           
                          <!--  <p class="regularText"><a class="btn" href="gsi-scholarship-application-portuguese.php">CLIQUE AQUI PARA APLICA</a></p> -->
                            
						<!--	</div>
                    </div> -->
                    <!--end of row-->
             <!--   </div> -->
                <!--end of container-->
			<!--	</div> --> <!-- end portuguese div -->
          
          
         <!--  <div id="frenchdiv">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 text-center">
                            <h3 class="mb16 mb-xs-12">Le programme de bourses Life Is Better When You Surf® offrira aux enfants des États-Unis, d’Australie, de Nouvelle-Zélande, du Costa Rica, d’Afrique du Sud, d’Angleterre, de France, d’Espagne et du Portugal la chance de progresser..</h3>
							<h4 class="mb64 mb-xs-24">Global Surf Industries et ses partenaires décerneront 1 000 dollars à des fins éducatives et deux planches de surf à chaque boursier. C'est une formidable opportunité de faire passer leur surf et leur éducation au niveau supérieur.</h4>
                            </div>
                        <div class="col-md-12 col-sm-10 ">
							<p class="regularText">Le programme de bourses d'études «La vie est meilleure quand vous surfez» (LIBWYS) est axé sur le plaisir de surfer et de tendre la main pour aider les élèves à franchir la prochaine étape vers l'atteinte de leur potentiel. Les boursiers LIBWYS présenteront les valeurs positives du surf chez leurs pairs et dans leur communauté. Les bourses ne sont pas accordées pour des performances de surf compétitives, mais pour encourager les jeunes à un avenir prometteur en matière de surf et d'éducation.</p>
							<p class="regularText ">Les bourses 2018/19 Life Is Better When You Surf iront à:<br>
							    16 destinataires aux Etats-Unis et 2 destinataires au Costa Rica - candidatures ouvertes du 15 juillet au 16 Septembre 2018.<br>
								1 destinataire en Angleterre, en France, en Espagne et au Portugal - candidatures ouvertes du 1er au 30 Septembre 2018.<br>
								10 destinataires en Australie, 4 récipiendaires en Nouvelle-Zélande et 2 destinataires en Afrique du Sud présentent des demandes ouvertes du 15 Décembre au 17 Février 2019.</p>
						</div>	<a name="schVideo"></a>
						<div class="col-md-12 col-sm-10 mb32">	
						 	<p class="regularText mb16">
                               Un mot de nos boursiers 2017:
                            </p>
							 <div class="embed-video-container embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://youtube.com/embed/oQhRJt2eb_Q/?showinfo=0&rel=0" allowfullscreen="allowfullscreen"></iframe>
                            </div> -->
                            <!--end of embed video container-->
							<!--</div>
							<div class="col-md-12 col-sm-10 ">
							
                           
							<p class="regularText"><strong>Avez-vous 12-15 ans et aimez-vous le surf et l'école? Voulez-vous deux nouvelles planches de surf et 1000 $ pour une sortie scolaire, un nouvel équipement ou un ordinateur? Nous aimerions recevoir de vos nouvelles!</strong></p>
                           
							<p class="regularText">Il y a plusieurs choses que vous devrez préparer avant d'appliquer:
                          	<ul class="bullets">
								<li>Une courte dissertation (200 mots maximum) expliquant pourquoi la vie est meilleure lorsque vous surfez</li>
                         		<li>Un court reportage vidéo ou photo nous montrant pourquoi vous méritez cette bourse</li>
                         		<li>Une lettre de recommandation de votre enseignant, entraîneur ou mentor</li>
                         		<li>Et bien sûr, la permission de votre Parent / Tuteur légal de demander cette bourse</li>
							</ul>
                          	
                          	
                          	
                          	</p>
                           
                            
						<p class="regularText">Pour plus d'informations nous vous prions de nous contacter par email: <a class="underlineLink" href="mailto:gsischolarshipapplications@surfindustries.com">gsischolarshipapplications@surfindustries.com</a>.</p> -->
                           
                          <!-- <p class="regularText"><a class="btn" href="gsi-scholarship-application-french.php">CLIQUEZ ICI POUR POSTULER</a></p> -->
                            
						<!--	</div>
                    </div> -->
                    <!--end of row-->
               <!-- </div> -->
                <!--end of container-->
				<!-- </div> --> <!-- end French div -->
          
          
          
          
          
           
            </section>
            
            
             <?php include HOME . 'includes/footer.inc'; ?>
            
        </div>
        <?php include HOME . 'includes/site-scripts.inc'; ?>
    </body>
</html>