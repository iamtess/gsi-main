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
     

   
  
           
            
            
               
                     
    </head>
    <body class="scroll-assist">
        <!-- include header -->
        <?php include HOME . 'includes/header-nav-items.inc'; ?>
        
        <div class="main-container">
            <section class="page-title page-title-2 image-bg overlay">
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
                        <div class="lrg-heading-title">LA VIE EST MIEUX QUAND VOUS SURFERIEZ LE PROGRAMME DE BOURSES - APPLICATION<br><hr></div>
						</div>
                        <div class="col-md-9 col-sm-10 ">
							<p class="regularText">Avant de remplir et de soumettre ce formulaire, vous aurez besoin des éléments suivants: 
							<ul class="bullets">
						 		<li>Une courte dissertation (200 mots maximum) expliquant pourquoi la vie est meilleure lorsque vous surfez</li>
								<li>Un court reportage vidéo ou photo nous montrant pourquoi vous méritez cette bourse</li>
								<li>Une lettre de recommandation de votre enseignant, entraîneur ou mentor</li>
								<li>Et bien sûr, la permission de votre parent / tuteur légal de demander cette bourse</li>
							</ul>
							NB: NB: Tous les champs sont obligatoires, sauf indication contraire.
							</p>
						</div>
                       <div class="col-md-10 col-sm-10 ">
			       		  <div class="heading-title">DÉTAILS PERSONNELS<br><hr></div>
					   </div><form action="gsi-scholarship-application-confirmation.php" enctype="multipart/form-data" method="post" name="gsiScholApp" id="gsiScholApp" >
			      	<input type="hidden" name="languageType" value="english">
				      <div class="col-md-6 col-sm-10 ">
				        <label>Prénom</label>
					    <input type="text" placeholder="first name" name="firstname" required />
					    <label>Nom de famille</label>
						<input type="text" placeholder="last name" name="lastname" required/>
						<label>Date de naissance</label>
						<input type="text" placeholder="date of birth" name="dob" id="dob" required/>
						<label>Adresse e-mail</label>
						<input type="text" placeholder="email address" name="email" required/>
						<label>Adresse 1</label>
						<input type="text" placeholder="address line 1" name="address1" required/>
						<label>Adresse 2 (optionnel)</label>
						<input type="text" placeholder="address line 2" name="address2" />
						<label>Ville</label>
						<input type="text" placeholder="city" name="city" required/>
						<label>Etat</label>
						<input type="text" placeholder="state" name="state" required/>
						<label>Code Postal </label>
						<input type="text" placeholder="post/zip code" name="pcode" required/>
						<label>Numéro de telephone</label>
						<input type="text" placeholder="contact number" name="phone" required/>
					  </div>
					  <div class="col-md-10 col-sm-10 ">
			       		  <div class="heading-title">DÉTAILS PARENTS / GARDIENS<br><hr></div>
					   </div>
				      <div class="col-md-6 col-sm-10 ">
				       <label>Prénom du Parent / Tuteur</label>
				      	<input type="text" placeholder="parent/guardian first name" name="pfirstname" required />
				      	<label>Nom du Parent / Tuteur</label>
						<input type="text" placeholder="parent/guardian last name" name="plastname" required/>
						  <label>Parent / Tuteur Email</label>
						<input type="text" placeholder="parent guardian email" name="pemail" required/>
						  <label>Numéro de telephone du Parent / Tuteur</label>
						<input type="text" placeholder="parent/guardian contact number" name="pcontact" required/>
					  </div>	
					  <div class="col-md-10 col-sm-10 ">
			       		  <div class="heading-title">AU PROPOS DE VOUS<br><hr></div>
					   </div>
				      <div class="col-md-6 col-sm-10 ">
						<label>Quelle école fréquenterez-vous en 2018-19?</label>
				      	<input type="text" placeholder="" name="school" required />
				      	<label>Depuis combien d'années surfez-vous?</label>
						<input type="text" placeholder="" name="surfyears" required/>
						<label>Quels sont vos endroits préférés pour surfer?</label>
						<input type="text" placeholder="" name="favspot" required/>
						<label>Nom Instagram (facultatif)</label>
						<input type="text" placeholder="" name="instagram"/>
						<label>Facebook (facultatif)</label>
						<input type="text" placeholder="" name="facebook"/>
						<label>Veuillez soumettre un court essai (200 mots maximum) sur les raisons pour lesquelles la vie est meilleure lorsque vous surfez</label>
						 <textarea class="mb0" placeholder="200 words max" name="essay" id="essay" required/></textarea>
						 <div class="mb16">
						  <span class="after-amount">Vous avez <span class="wordcount">0</span> mots.</span></span>
						 </div>
						<label>Veuillez indiquer ce que vous utiliserez pour une bourse de 1000 $ (frais de scolarité, voyage scolaire, équipement, ordinateur, etc.) et quelle planche de surf vous souhaitez recevoir en premier (200 mots maximum)</label>
						 <textarea class="mb0" placeholder="200 mots maximum" name="moneyuse" id="moneyuse" required/></textarea>
						 <div class="mb16">
						 <span class="after-amount">Vous avez <span class="wordcount">0</span> mots.</span></span>
						 </div>
						 <label>Veuillez soumettre un court reportage vidéo ou photo (2 minutes maximum) nous montrant pourquoi vous méritez la bourse 2018 Life is Better When Your Surf®. Faites preuve de créativité et décrivez pourquoi vous devriez recevoir la bourse d'études GSI. Parlez-nous de vous, de votre famille, d'un souvenir de surf significatif, d'un exemple de contribution à votre communauté locale, de votre planche de surf actuelle, de votre plage locale et (si possible) de vos séquences de surf. S'il vous plaît télécharger la vidéo (2 minutes maximum) à <a class="labelLink"  href="https://account.box.com">Box</a>, <a class="labelLink" href="https://www.youtube.com">Youtube</a>, <a class="labelLink" href="https://vimeo.com">Vimeo</a> ou plate-forme préférée et collez le lien ici:</label>
						 <input type="text" placeholder="" name="video" required/>
						 <label>Veuillez soumettre une lettre de recommandation d'un enseignant, d'un entraîneur ou d'un mentor (200 mots maximum). La lettre doit contenir le nom et les coordonnées de votre enseignant, entraîneur ou mentor:</label>
						 <input type="file" name="reference" >
						 <label>Veuillez soumettre une photo claire et de qualité de vous-même pour votre profil, que vous seriez heureux d’afficher sur le site Web de GSI:</label>
						  <input type="file"  name="selfie" >
						  
					  </div>	
					  <div class="col-md-10 col-sm-10 ">
			       		  <div class="heading-title">RENDEZ-LE OFFICIEL<br><hr></div>
					   </div>
				      <div class="col-md-6 col-sm-10 ">
				      <label>Signature - Prénom et nom de famille</label>
						<input type="text" placeholder="" name="appsignature" required/>
					  </div>	
					  <div class="col-md-10 col-sm-10 ">
						<label><input type="checkbox" name="appsignatureagree"required>&nbsp;&nbsp;En signant ici, je confirme que les informations sur le formulaire de demande de bourse Life is Better When You Surf® sont exactes. J'accepte les conditions générales du programme de bourses d'études Life Is Better When You Surf *. Je confirme que j'ai 15 ans ou moins et que je suis actuellement inscrit à l'école. Je m'engage à utiliser les fonds de bourses de Global Surf Industries à des fins éducatives. J'autorise la publication en ligne de mon nom et de ma photo de profil en tant que boursier.</label>
					  </div>
					   <div class="col-md-6 col-sm-10 ">
				      <label>Nom complet du Parent / Tuteur</label>
						<input type="text" placeholder="" name="parentsignatureagree" required/>
					  </div>	
					  <div class="col-md-10 col-sm-10 ">
						<label><input type="checkbox" name="parentsignature"required>&nbsp;&nbsp;Consentement parental - Je confirme que les détails de cette demande de bourse Global Surf Industries Life Is Better When You Surf® sont vrais et exacts et je consent à ce que cette demande soit soumise. J'accepte les termes et conditions du programme de bourses Life Is Better When You Surf®*.</label>
					  </div>
					  <div class="col-md-6 col-sm-10 ">
					    <label>Date de signature:</label>
						<input type="text" placeholder="" name="sigdate"  id="sigdate" required/>
					  </div>
				       <div class="col-md-10 col-sm-10 ">
					    <a class="labelLink" href="#fins" onclick="toggle_visibility('list1');"><strong>*Termes et conditions</strong></a>
							<div id="list1" class="alist" style="display:none;"><br>
							<p>PAS D'ACHAT NÉCESSAIRE!</p>
 							<p>Sous réserve de la vérification de l'âge, du consentement parental et de la signature d'un affidavit d'admissibilité, les candidats à la bourse sélectionnés pour gagner le prix (chacun un «bénéficiaire») recevront de Global Surf Industries les éléments suivants::
							<ul class="bullets">
								<li>Une première planche de surf de leur choix dans la gamme Global Surf Industries.</li>
								<li>Un paiement en espèces de 1 000 $ (dans la monnaie courante du gagnant) à utiliser uniquement pour les frais d’études. Les récipiendaires recevront des instructions de Global Surf Industries sur la façon de recevoir les fonds de la bourse.</li>
								<li>Dès réception par Global Surf Industries des preuves sous forme de reçus démontrant que les fonds de paiement en espèces ont été dépensés pour des dépenses d’éducation de bonne foi, une deuxième planche de surf de leur choix.. </li>
								</ul></p>
								<p>Les frais de scolarité signifient la papeterie, les frais de scolarité, les frais d’excursion et de sortie scolaire, les frais d’uniforme scolaire et le matériel informatique. Global Surf Industries déterminera, à sa seule discrétion, si une dépense est qualifiée de dépense éducative en vertu des présentes. </p><p>Global Surf Industries choisira ses gagnants selon les critères subjectifs suivants: les gagnants du concours seront choisis en fonction de leur dévouement a la phrase GSI «La vie est meilleure quand vous surfez» , ils auront une histoire personnelle qui correspond bien à ces critères, ainsi que d'autres critères subjectifs tels que le style d'écriture, les jeunes très prometteurs, une belle histoire et même un besoin perçu. La décision de Global Surf Industries est et doit être intrinsèquement subjective, et est définitive et exécutoire une fois faite.</p><p>Si un destinataire ne fournit pas de preuves suffisantes que le paiement en espèces a été utilisé pour les frais de scolarité, Global Surf Industries se réserve le droit d’annuler la bourse et / ou de ne pas fournir la deuxième planche de surf au destinataire.</p><p>Nonobstant ce qui précède, Global Surf Industries ne garantit pas que la planche sélectionnée par le destinataire sera disponible ou fournie au destinataire. Le bénéficiaire reconnaît que Global Surf Industries peut fournir une autre planche de surf à sa seule discrétion.</p><p>
								Le surf est une activité dangereuse et potentiellement mortelle. Chaque planche de surf devrait être utilisée uniquement avec ceux qui ont la santé, la capacité athlétique et la connaissance de l'océan requises pour atténuer les dangers inhérents au sport. Global Surf Industries et ses filiales, agents et employés ne seront pas tenus responsables de toute blessure ou perte subie lors de l'utilisation d'une planche de surf. Seulement vous êtes responsable de vos actions dans l'océan avec une planche de surf. Considérez le risque et votre responsabilité avant d’aller surfer.</p><p>Par la présente, chaque bénéficiaire accorde à Global Surf Industries le droit, mais non l'obligation, de publier le nom, la ville et la photo de profil du bénéficiaire sur le site Web et les plateformes de médias sociaux (Facebook, Instagram, twitter) a des fins commerciales et fourni à Global Surf Industries et à ses sociétés affiliées et partenaires commerciaux une licence pour utiliser à toute fin que ce soit les droits de la personnalité et la propriété intellectuelle qui ont ete fournis par le destinataire dans son application.</p><p>Si Global Surf Industries estime qu'un bénéficiaire ne peut être candidat à une bourse, Global Surf Industries peut annuler la bourse. Cette promotion n'est pas ouverte aux employés de Global Surf Industries et à leurs proches. Nous ne serons pas responsables des inscriptions ou des soumissions perdues, volées, mal acheminées, retardées, détruites ou illisibles ou de toute défaillance de l'Internet. Ce concours est soumis au présent règlement officiel et à toute autre règle que nous publions à tout moment. Global Surf Industries se réserve le droit de modifier ces règles à tout moment à sa seule discrétion.</p><p>
								Candidats français, espagnols, anglais et portugais: candidatures clôturées le 30 septembre 2018. Les candidats doivent être citoyens de la France, de l'Espagne, de l'Angleterre ou du Portugal. Ce concours est ANNULÉ LORSQU'IL EST INTERDIT ou lorsque des exigences de permis, d'enregistrement et / ou de cautionnement sont requises. Les récipiendaires recevront les fonds de la bourse et la première planche de surf au plus tard le 30 octobre 2018 et, si possible, la deuxième planche de surf au plus tard le 30 avril 2019..</p>
								<p>Déclaration de confidentialité<br>						
								1.	Vos informations personnelles sont collectées par Global Surf Industries Pty Ltd ("GSI").<br>
								2.	Vos informations personnelles sont collectées par GSI dans le but de vous vendre nos produits ou de vous fournir nos services. Vos informations personnelles peuvent être utilisées à des fins commerciales, y compris le marketing et la vente de nos produits et services et pour l'enregistrement de données statistiques en vue d'une analyse du marché. Si GSI n'est pas en mesure de collecter vos informations personnelles, GSI peut être incapable de vous vendre des produits et / ou de vous fournir des services..<br>
								3.	Vos informations personnelles peuvent être divulguées à d'autres sociétés du groupe GSI et à des sociétés du groupe autres que GSI, telles que des fournisseurs de services, en Australie ou dans les pays suivants: Australie, Nouvelle-Zélande, États-Unis d'Amérique.<br>
								4.	Vous consentez à notre divulgation de vos informations personnelles à des tiers dans le but de vous fournir les fonds de bourses et les planches de surf.<br>
								5.	Notre politique de confidentialité contient des informations sur la manière dont vous pouvez accéder aux informations personnelles vous concernant et demander la correction de ces informations.<br>
								6.	Notre politique de confidentialité contient des informations sur la manière dont vous pouvez déposer une plainte pour violation des principes de confidentialité australiens et sur la manière dont GSI traitera une telle plainte.<br>
								Lisez notre politique de confidentialité dans son intégralité <?php echo '<a class="underlineLink" href="'.HOME.'gsi-privacy-french.php" target="new">'; ?> ici</a>.</p>
								
							</div>	
					</div>	
					<div class="col-md-3 col-sm-10 mt24 ">	
						<div class="g-recaptcha" data-sitekey="6LcUjQsTAAAAAO7wZYdEYvQ7hpnZu1NNpD-eBPMy"></div><br><br>
						<input class="hollow" type="submit" value="Bouton de soumission" />
					</div></form>
				</div>
				<!--end of row-->
				</div>
				<!--end of container-->
				
				
				
				
				
				
				
				
				
				
				
				
				
				
                      
                      
                      
                     
                      
                      
                      
            </section>
            
            
             <?php include HOME . 'includes/footer.inc'; ?>
            
        </div>
        
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
        
        
        
	<script src='https://www.google.com/recaptcha/api.js'></script>
       	
        
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/smooth-scroll.min.js"></script>
        <script src="../js/parallax.js"></script>
        <script src="../js/scripts.js"></script>
    </body>
</html>