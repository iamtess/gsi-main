<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GLOBAL SURF INDUSTRIES - LIFE IS BETTER WHEN YOU SURF</title>
         <?php 
		session_start();
		define( "HOME", "../" ); 
		define( "IMAGES_DIR",   HOME . "images/" );
		include HOME . 'includes/geo-locator-script.inc'; 
		include HOME . 'includes/header-includes.inc'; 
		include HOME . 'includes/googleAnalyticsTrackingCode.inc'; 

		
	?>
     
   <META NAME='author' CONTENT="Global Surf Industries" >
    <META NAME='subject' CONTENT="global surf industries - life is better when you sruf scholarship program" >
    <META NAME='Description' CONTENT="The Life Is Better When You Surf® Scholarship Program has been set up to give kids across the USA, Australia and New Zealand the chance to get a step up with their surfing and schooling.">
    <META NAME='Classification' CONTENT="Global Surf Industries - the world's premier distributor of surfboards - find product information, local surfboard shops or buy surfboards online." >
    <META NAME='Keywords' CONTENT="surfboards, surfboard, surfing, mark kelly, life is better when you surf, scholarship program, scholarship" >
    <META NAME='Language' CONTENT='English' >
    <META HTTP-EQUIV='CACHE-CONTROL' CONTENT='PUBLIC' > 
    <META HTTP-EQUIV='Expires' CONTENT='never' >
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
     
<!--date picker-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
  	$("#dob").datepicker({   maxDate: new Date(2008, 11, 31)});
	$("#sigdate").datepicker({ minDate: 0});
	
  } );
  </script>
<!--end date picker-->
   <!-- word counter -->

 <script type="text/javascript">
   $(function(){
    $('textarea').on('keyup', function(){
        var wordsLength = $(this).val().trim().split(' ').length
        $(this).next().find('.wordcount').html(wordsLength);
    });
});
	 </script> 
  <!-- t & c open/close -->
	<script type="text/javascript">

	function toggle_visibility(id) {
	    var list = document.getElementsByClassName("alist");
	    for (var i = 0; i < list.length; i++) {
	        list[i].style.display = 'none';
	    }
	    var e = document.getElementById(id);
	    if(e.style.display == 'block') {
	        e.style.display = 'hide';
	    } else {
	        e.style.display = 'block';
	    }
	}

	</script>
 
 
<!-- word counter -->

 <script type="text/javascript">
   $(function(){
    $('textarea').on('keyup', function(){
        var wordsLength = $(this).val().trim().split(' ').length
        $(this).next().find('.wordcount').html(wordsLength);
    });
});
	 </script> 
   
            
               
                     
    </head>
    <body class="scroll-assist">
        <!-- include header -->
        <?php include HOME . 'includes/header-nav-items.inc'; ?>
        
        <div class="main-container">
            <section class="page-title page-title-2 image-bg overlay ">
                <div class="background-image-holder">
                 <?php echo "<img src='" . IMAGES_DIR ."gsi-scholarship-header-4.jpg' class='background-image' alt='Global Surf Industries - Life is Better When You Surf'>"; ?>
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
               
				
                <div class="container">
                    <div class="row">
                       <div class="col-md-10 col-sm-10 ">
                        <div class="lrg-heading-title">LA VIDA ES MEJOR CUANDO SURFEAS PROGRAMA DE BECAS - APLICACIÓN<br><hr></div>
						</div>
                        <div class="col-md-9 col-sm-10 ">
							<p class="regularText">Antes de completar y enviar este formulario, necesitará los siguientes artículos: 
							<ul class="bullets">
						 		<li>Un breve ensayo (máximo de 200 palabras) sobre por qué La Vida es Mejor Cuando Surfeas</li>
								<li>Un video corto o un ensayo fotográfico que nos muestra por qué se merece esta beca</li>
								<li>Una carta de recomendación de tu Maestro, Entrenador o Mentor</li>
								<li>Y, por supuesto, el permiso de su padre / tutor para solicitar esta beca</li>
							</ul>
							Nota: Todos los campos son obligatorios excepto donde se indique como Opcional.
							</p>
						</div>
                       <div class="col-md-10 col-sm-10 ">
			       		  <div class="heading-title">DETALLES PERSONALES<br><hr></div>
					   </div><form action="gsi-scholarship-application-confirmation.php" enctype="multipart/form-data" method="post" name="gsiScholApp" id="gsiScholApp" >
			      			<input type="hidden" name="languageType" value="spanish">
				      <div class="col-md-6 col-sm-10 ">
				        <label>Nombre de pila</label>
					    <input type="text" placeholder="nombre de pila" name="firstname" required />
					    <label>Apellido</label>
						<input type="text" placeholder="apellido" name="lastname" required/>
						<label>Fecha de nacimiento</label>
						<input type="text" placeholder="fecha de nacimiento" name="dob" id="dob" required/>
						<label>Dirección de correo electrónico</label>
						<input type="text" placeholder="dirección de correo electrónico" name="email" required/>
						<label>Dirección Línea 1</label>
						<input type="text" placeholder="dirección Línea 1" name="address1" required/>
						<label>Línea de dirección 2 (opcional)</label>
						<input type="text" placeholder="línea de dirección 2" name="address2" />
						<label>Ciudad / Pueblo</label>
						<input type="text" placeholder="Ciudad / Puebl" name="city" required/>
						<label>Estado</label>
						<input type="text" placeholder="Estado" name="state" required/>
						<label>Código Postal / Postal</label>
						<input type="text" placeholder="Código Postal / Postal" name="pcode" required/>
						<label>Número de contacto</label>
						<input type="text" placeholder="Número de contacto" name="phone" required/>
					  </div>
					  <div class="col-md-10 col-sm-10 ">
			       		  <div class="heading-title">DETALLES PARA PADRES / TUTORES<br><hr></div>
					   </div>
				      <div class="col-md-6 col-sm-10 ">
				       <label>Nombre de padre / tutor</label>
				      	<input type="text" placeholder="Nombre de padre / tutor" name="pfirstname" required />
				      	<label>Apellido de padre / tutor</label>
						<input type="text" placeholder="Apellido de padre / tutor" name="plastname" required/>
						  <label>Padre / Tutor Correo electrónico</label>
						<input type="text" placeholder="Padre / Tutor Correo electrónico" name="pemail" required/>
						  <label>Número de contacto de padre / tutor</label>
						<input type="text" placeholder="Número de contacto de padre / tutor" name="pcontact" required/>
					  </div>	
					  <div class="col-md-10 col-sm-10 ">
			       		  <div class="heading-title">ACERCA DE TI<br><hr></div>
					   </div>
				      <div class="col-md-6 col-sm-10 ">
						<label>¿A qué escuela asistirás en 2018-19?</label>
				      	<input type="text" placeholder="" name="school" required />
				      	<label>¿Cuántos años has estado surfeando?</label>
						<input type="text" placeholder="" name="surfyears" required/>
						<label>¿Cuáles son tus lugares locales favoritos para surfear?</label>
						<input type="text" placeholder="" name="favspot" required/>
						<label>Nombre de Instagram (opcional)</label>
						<input type="text" placeholder="" name="instagram"/>
						<label>Facebook (opcional)</label>
						<input type="text" placeholder="" name="facebook"/>
						<label>Envíe un ensayo corto (200 palabras como máximo) sobre por qué la vida es mejor cuando surfeas.</label>
						 <textarea class="mb0" placeholder="200 palabras máx." name="essay" id="essay" required/></textarea>
						 <div class="mb16">
						 <span class="after-amount">Tienes <span class="wordcount">0</span> palabras.</span></span>
						 </div>
						<label>Indique para qué usará el dinero de la beca de $1000 (por ejemplo, aranceles escolares, viaje escolar, equipo, computadora) y qué tabla de surf le gustaría recibir primero (200 palabras como máximo)</label>
						 <textarea class="mb0" placeholder="200 palabras máx." name="moneyuse" id="moneyuse" required/></textarea>
						 <div class="mb16">
						 <span class="after-amount">Tienes <span class="wordcount">0</span> palabras.</span></span>
						 </div>
						 <label>Envíe un video corto o un ensayo fotográfico (2 minutos como máximo) mostrándonos por qué se merece la Beca 2018 La Vida es Mejor Cuando Surfeas®. Sea creativo y describa por qué debería recibir la Beca GSI. Cuéntenos acerca de usted, su familia, un recuerdo significativo surfeando, un ejemplo de contribución a su comunidad local, su tabla de surf actual, su playa local y (si es posible) imágenes de su navegación. Cargue el video (2 minutos como máximo) <a class="labelLink" href="https://www.youtube.com">Youtube</a>, <a class="labelLink" href="https://vimeo.com">Vimeo</a> o la plataforma preferida y pegue el enlace aquí.</label>
						 <input type="text" placeholder="" name="video" required/>
						 <label>Por favor, envíe una carta de recomendación de un profesor, entrenador o mentor (máximo 200 palabras). La carta debe contener el nombre y los datos de contacto de su profesor, entrenador o mentor:</label>
						 <input type="file" placeholder="" name="reference" >
						 <label>Envíe una foto clara y de calidad de usted mismo para su perfil que le gustaría publicar en el sitio web de GSI:: *</label>
						  <input type="file"  name="selfie" >
						  
					  </div>	
					  <div class="col-md-10 col-sm-10 ">
			       		  <div class="heading-title">HAGALO OFICIAL<br><hr></div>
					   </div>
				      <div class="col-md-6 col-sm-10 ">
				      <label>Firma - Nombre y apellido</label>
						<input type="text" placeholder="" name="appsignature" required/>
					  </div>	
					  <div class="col-md-10 col-sm-10 ">
						  <label><input type="checkbox" name="appsignatureagree"required>&nbsp;&nbsp;Al firmar aquí, confirmo que la información en el formulario de solicitud de beca La Vida es Mejor Cuando Surfeas es verdadera y correcta. Acepto los Términos y Condiciones del Programa de Becas La Vida es Mejor Cuando Surfeas*. Confirmo que tengo 15 años o menos y que actualmente estoy inscrito en la escuela. Me comprometo a utilizar los fondos de la beca de Global Surf Industries con fines educativos. Doy permiso para que mi nombre y mi foto de perfil se publiquen en línea como destinatarios de la beca..</label>
					  </div>
					   <div class="col-md-6 col-sm-10 ">
				      <label>Nombre completo de padre / tutor</label>
						<input type="text" placeholder="" name="parentsignatureagree" required/>
					  </div>	
					  <div class="col-md-10 col-sm-10 ">
						<label><input type="checkbox" name="parentsignature"required>&nbsp;&nbsp;Consentimiento de los padres: confirmo que los detalles de esta solicitud de beca de Global Surf Industries La Vida es Mejor Cuando Surfeas son verdaderos y correctos, y doy mi consentimiento para que se envíe esta solicitud. Acepto los Términos y Condiciones del Programa de Becas La Vida es Mejor Cuando Surfeas*.</label>
					  </div>
					  <div class="col-md-6 col-sm-10 ">
					    <label>Fecha de firma:</label>
						<input type="text" placeholder="" name="sigdate"  id="sigdate" required/>
					  </div>
				       <div class="col-md-10 col-sm-10 ">
					    <a class="labelLink" href="#fins" onclick="toggle_visibility('list1');"><strong>*Términos y Condiciones</strong></a>
							<div id="list1" class="alist" style="display:none;"><br>
							<p>¡NO SE REQUIERE COMPRA!</p>
 							<p>ujeto a la verificación de la edad, el consentimiento de los padres y la ejecución de una Declaración Jurada de Elegibilidad, los solicitantes de la beca que sean seleccionados para ganar el paquete del premio (cada uno un "Destinatario") recibirán de Global Surf Industries lo siguiente:
							<ul class="bullets">
								<li>Una primera tabla de surf de su elección de la gama Global Surf Industries.</li>
								<li>Un pago en efectivo de $ 1000 (en la moneda local del ganador) para ser utilizado solo para Gastos Educativos. Los destinatarios recibirán instrucciones de Global Surf Industries sobre cómo recibir los fondos de la beca..</li>
								<li>Una vez que Global Surf Industries haya recibido pruebas en forma de recibos que demuestren que los fondos de pago en efectivo se han gastado en gastos educativos de buena fe, una segunda tabla de surf de su elección. </li>
								</ul></p>
								<p>Gastos Educativos significará estacionaria, matrícula, aranceles escolares, excursiones escolares / costos de viaje de campo, costos de uniformes escolares y hardware de computadora. Global Surf Industries determinará a su exclusivo criterio si un gasto califica como un gasto educativo en virtud del presente. </p><p>Global Surf Industries elegirá sus ganadores de acuerdo con los siguientes criterios subjetivos: los ganadores del concurso se elegirán en función de su dedicación al lema de GSI "La Vida es Mejor Cuando Surfeas®" y tendrán una historia personal que se ajuste bien a ese criterio, ya que así como algunos otros criterios subjetivos como el estilo de escritura, los niños que muestran una gran promesa, una gran historia e incluso la necesidad percibida. La decisión de Global Surf Industries es y será intrínsecamente subjetiva, y es definitiva y vinculante una vez hecha.</p><p>Si un Destinatario no proporciona evidencia suficiente de que el pago en efectivo se ha utilizado para Gastos Educativos, Global Surf Industries se reserva el derecho de cancelar la beca y / o no proporcionar la segunda tabla de surf al Destinatario.</p><p>No obstante lo anterior, Global Surf Industries no garantiza que la tabla de surf seleccionada por el Destinatario estará disponible o será proporcionada al Destinatario. El destinatario reconoce que Global Surf Industries puede proporcionar una tabla de surf alternativa a su exclusivo criterio.</p><p>EL SURF ES UNA ACTIVIDAD PELIGROSA Y POTENCIALMENTE MUERTA. Cada tabla de surf con premios solo debe usarse con aquellos que tengan la salud, la capacidad atlética y el conocimiento del océano para mitigar los peligros inherentes del deporte. Global Surf Industries y sus afiliados, agentes y empleados no serán responsables de ninguna lesión o pérdida sufrida durante el uso de una tabla de surf con premio. Solo tú eres responsable de tus acciones en el océano con una tabla de surf. Considere el riesgo y su responsabilidad antes de remar.</p><p>Cada Beneficiario otorga a Global Surf Industries el derecho, pero no la obligación, de publicar el nombre, la ciudad y la fotografía de perfil del Destinatario en el sitio web de Global Surf Industries y en las redes sociales (p. Ej. Facebook, Instagram, Twitter) con fines promocionales. proporcionar a Global Surf Industries y sus afiliadas y socios comerciales una licencia para utilizar con cualquier fin los derechos de personalidad y la propiedad intelectual del Receptor en su aplicación.</p><p>Si Global Surf Industries considera que un Receptor no es elegible para ser un solicitante de beca, Global Surf Industries puede cancelar la beca. Esta promoción no está abierta a empleados de Global Surf Industries y sus familiares. No nos hacemos responsables de las entradas o presentaciones perdidas, robadas, mal dirigidas, retrasadas, destruidas o ilegibles o cualquier falla de Internet. Este concurso está sujeto a estas Reglas oficiales y a cualquier otra norma en cualquier momento que promulguemos. Global Surf Industries se reserva el derecho de modificar estas reglas en cualquier momento a su exclusivo criterio.</p><p>Solicitantes de los EE. UU. Y de Costa Rica: las solicitudes se cierran el 16 de Septiembre de 2018. Los solicitantes deben ser ciudadanos de los Estados Unidos de América. Este concurso es NULA DONDE ESTÉ PROHIBIDO o donde se requieran requisitos de permiso, registro y / o vinculación. Los destinatarios recibirán los fondos de la beca y la primera tabla de surf antes del 30 de sSeptiembre de 2018 y, si es elegible, la segunda tabla de surf antes del 28 de Febrero de 2019.Solicitantes de Australia y Nueva Zelanda: las solicitudes cierran el 13 de enero de 2019. Los solicitantes deben ser ciudadanos de Australia o Nueva Zelanda. El destinatario recibirá los fondos de la beca y la primera tabla de surf antes del 3 de Febrero de 2019 y la segunda tabla de surf antes del 30 de Junio de 2019.</p>
								<p>Declaración de colección de privacidad<br>						
								1.	Su información personal puede ser divulgada a otras compañías del grupo GSI y compañías del grupo no GSI, tales como proveedores de servicios, ya sea en Australia o en los siguientes países: Australia, Nueva Zelanda, Estados Unidos de América.<br>
								2. GSI recopila su información personal con el propósito de venderle nuestros productos o brindarle nuestros servicios. Su información personal puede ser utilizada para fines comerciales, incluido el marketing y las ventas de nuestros productos y servicios, y para registrar datos estadísticos para el análisis de mercado. Si GSI no puede recopilar su información personal, es posible que GSI no pueda venderle sus productos y / o brindarle servicios.<br>
								3. Su información personal puede ser divulgada a otras compañías del grupo GSI y compañías del grupo no GSI, tales como proveedores de servicios, ya sea en Australia o en los siguientes países: Australia, Nueva Zelanda, Estados Unidos de América..<br>
								4. Usted acepta que divulguemos su información personal a terceros con el fin de proporcionarle los fondos de la beca y las tablas de surf.<br>
								5. La información sobre cómo puede acceder a la información personal que se tiene sobre usted y buscar la corrección de dicha información se encuentra en nuestra Política de privacidad.<br>
								6. Nuestra Política de privacidad contiene información sobre cómo puede presentar una queja sobre una violación de los Principios de privacidad australianos y cómo GSI se ocupará de dicha queja.<br>
								<?php echo '<a class="underlineLink" href="'.HOME.'gsi-privacy-es.php" target="new">'; ?> Lea nuestra Política de privacidad en su totalidad.</a></p>
								<p>Solicitantes de Costa Rica: Las solicitudes se cierran el 16 de septiembre de 2018. Los solicitantes deben ser ciudadanos de Costa Rica. Este concurso es NULO DONDE ESTÁ PROHIBIDO o donde se requieren requisitos de permiso, registro y / o enlace. Los destinatarios recibirán los fondos de la beca antes del 30 de Septiembre de 2018, la primera tabla de surf antes del 28 de Febrero de 2019 y, si es elegible, la segunda tabla de surf antes del 15 de Septiembre de 2019.</p>
							</div>	
					</div>	
					<div class="col-md-3 col-sm-10 mt24 ">	
						<div class="g-recaptcha" data-sitekey="6LcUjQsTAAAAAO7wZYdEYvQ7hpnZu1NNpD-eBPMy"></div><br><br>
						<input class="hollow" type="submit" value="Botón de enviar" />
					</div></form>
				</div>
				<!--end of row-->
				</div>
				<!--end of container-->
				
				
				
				
				
				
				
                      
                      
                      
                     
                      
                      
                      
            </section>
            
            
             <?php include HOME . 'includes/footer.inc'; ?>
            
        </div>
	<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
       	
        
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/smooth-scroll.min.js"></script>
        <script src="../js/parallax.js"></script>
        <script src="../js/scripts.js"></script>
    </body>
</html>