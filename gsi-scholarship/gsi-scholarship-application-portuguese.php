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
                        <div class="lrg-heading-title">A VIDA É MELHOR QUANDO VOCÊ SURFA PROGRAMA DE BOLSAS DE ESTUDO - APLICAÇÃO<br><hr></div>
						</div>
                        <div class="col-md-9 col-sm-10 ">
							<p class="regularText">Antes de preencher e enviar este formulário, você precisará dos seguintes itens: 
							<ul class="bullets">
						 		<li>Um pequeno ensaio (máximo de 200 palavras) sobre por que a vida é melhor quando você surfa</li>
								<li>Um breve vídeo ou ensaio fotográfico nos mostrando porque você merece esta bolsa</li>
								<li>Uma carta de recomendação do seu professor, treinador ou mentor</li>
								<li>E, claro, permissão do seu pai / responsável para se candidatar a esta bolsa de estudos</li>
							</ul>
							NB: Todos os campos são obrigatórios, exceto quando indicado como opcional.
							</p>
						</div>
                       <div class="col-md-10 col-sm-10 ">
			       		  <div class="heading-title">DETALHES PESSOAIS<br><hr></div>
					   </div><form action="gsi-scholarship-application-confirmation.php" enctype="multipart/form-data" method="post" name="gsiScholApp" id="gsiScholApp" >
			      			<input type="hidden" name="languageType" value="portuguese">
				      <div class="col-md-6 col-sm-10 ">
				        <label>Nome</label>
					    <input type="text" placeholder="first name" name="firstname" required />
					    <label>Sobrenome</label>
						<input type="text" placeholder="last name" name="lastname" required/>
						<label>Data de nascimento</label>
						<input type="text" placeholder="date of birth" name="dob" id="dob" required/>
						<label>Endereço de e-mail</label>
						<input type="text" placeholder="email address" name="email" required/>
						<label>Endereço Linha 1</label>
						<input type="text" placeholder="address line 1" name="address1" required/>
						<label>Endereço linha 2 (opcional)</label>
						<input type="text" placeholder="address line 2" name="address2" />
						<label>Cidade</label>
						<input type="text" placeholder="city" name="city" required/>
						<label>Estado</label>
						<input type="text" placeholder="state" name="state" required/>
						<label>Código postal</label>
						<input type="text" placeholder="post/zip code" name="pcode" required/>
						<label>Número de contato</label>
						<input type="text" placeholder="contact number" name="phone" required/>
					  </div>
					  <div class="col-md-10 col-sm-10 ">
			       		  <div class="heading-title">DETALHES DOS PAIS / GUARDIÕES<br><hr></div>
					   </div>
				      <div class="col-md-6 col-sm-10 ">
				       <label>Nome do pai / guardião</label>
				      	<input type="text" placeholder="parent/guardian first name" name="pfirstname" required />
				      	<label>Sobrenome dos pais / responsáveis</label>
						<input type="text" placeholder="parent/guardian last name" name="plastname" required/>
						  <label>E-mail dos pais / responsáveis</label>
						<input type="text" placeholder="parent guardian email" name="pemail" required/>
						  <label>Número de contato dos pais / responsáveis</label>
						<input type="text" placeholder="parent/guardian contact number" name="pcontact" required/>
					  </div>	
					  <div class="col-md-10 col-sm-10 ">
			       		  <div class="heading-title">SOBRE VOCÊ<br><hr></div>
					   </div>
				      <div class="col-md-6 col-sm-10 ">
						<label>Qual escola você participará em 2018-19?</label>
				      	<input type="text" placeholder="" name="school" required />
				      	<label>Há quantos anos você surfa?</label>
						<input type="text" placeholder="" name="surfyears" required/>
						<label>Quais são os seus locais favoritos para surfar?</label>
						<input type="text" placeholder="" name="favspot" required/>
						<label>Nome do Instagram (opcional)</label>
						<input type="text" placeholder="" name="instagram"/>
						<label>Facebook (opcional)</label>
						<input type="text" placeholder="" name="facebook"/>
						<label>Por favor, envie um pequeno ensaio (máximo de 200 palavras) sobre por que a vida é melhor quando você surfa</label>
						 <textarea class="mb0" placeholder="Máximo de 200 palavras" name="essay" id="essay" required/></textarea>
						 <div class="mb16">
						 <span class="after-amount">Você tem <span class="wordcount">0</span> palavras.</span></span>
						 </div>
						<label>Por favor, diga o que você usará para receber $ 1.000 em dinheiro (por exemplo, taxas escolares, viagem escolar, equipamento, computador) e qual prancha você gostaria de receber primeiro (máximo de 200 palavras)</label>
						 <textarea class="mb0" placeholder="Máximo de 200 palavras" name="moneyuse" id="moneyuse" required/></textarea>
						 <div class="mb16">
						 <span class="after-amount">Você tem <span class="wordcount">0</span> palavras.</span></span>
						 </div>
						 <label>Por favor, envie um pequeno vídeo ou ensaio fotográfico (2 minutos no máximo) mostrando-nos por que você merece 2018 A Vida é Melhor Quando Você Surfa Programa de Bolsas de Estudo. Seja criativo e descreva por que você deve receber a bolsa GSI. Conte-nos sobre você, sua família, uma significativa lembrança do surfe, um exemplo de contribuição para a sua comunidade local, sua prancha de surfe atual, sua praia local e (se possível) imagens de seu surfe. Por favor, envie um vídeo (máximo de 2 minutos) para  <a class="labelLink"  href="https://account.box.com">Box</a>, <a class="labelLink" href="https://www.youtube.com">Youtube</a>, <a class="labelLink" href="https://vimeo.com">Vimeo</a> ou plataforma preferida e cole o link aqui.</label>
						 <input type="text" placeholder="" name="video" required/>
						 <label>Por favor, envie uma carta de recomendação de um professor, treinador ou mentor (max 200 palavras). A carta deve conter os detalhes do Nome e Contato do seu Professor, Treinador ou Mentor:</label>
						 <input type="file" name="reference" >
						 <label>Por favor, envie uma foto clara e de qualidade para o seu perfil que você ficaria feliz em ser postado no site da GSI:</label>
						  <input type="file"  name="selfie" >
						  
					  </div>	
					  <div class="col-md-10 col-sm-10 ">
			       		  <div class="heading-title">FAÇA OFICIAL<br><hr></div>
					   </div>
				      <div class="col-md-6 col-sm-10 ">
				      <label>Assinatura - Primeiro e sobrenome</label>
						<input type="text" placeholder="" name="appsignature" required/>
					  </div>	
					  <div class="col-md-10 col-sm-10 ">
						<label><input type="checkbox" name="appsignatureagree"required>&nbsp;&nbsp;Ao assinar aqui, confirmo que as informações sobre o pedido de A Vida é Melhor Quando Você Surfa Programa de Bolsas de Estudo é verdadeiro e correto. Eu concordo com os Termos e Condições do A Vida é Melhor Quando Você Surfa Programa de Bolsas de Estudo*. Confirmo que tenho 15 anos ou menos e atualmente estou matriculado na escola. Eu me comprometo a usar os fundos de bolsas de estudos da Global Surf Industries para fins educacionais. Dou permissão para que meu nome e foto de perfil sejam publicados on-line como um bolsista.</label>
					  </div>
					   <div class="col-md-6 col-sm-10 ">
				      <label>Nome Completo dos Pais / Responsável</label>
						<input type="text" placeholder="" name="parentsignatureagree" required/>
					  </div>	
					  <div class="col-md-10 col-sm-10 ">
						<label><input type="checkbox" name="parentsignature"required>&nbsp;&nbsp;Consentimento dos Pais - Confirmo que os detalhes deste Global Surf Industries A Vida é Melhor Quando Você Surfa Programa de Bolsas de Estudo são verdadeiras e corretas e concordam com o envio dessa inscrição. Eu concordo com os Termos e Condições do A Vida é Melhor Quando Você Surfa Programa de Bolsas de Estudo.*</label>
					  </div>
					  <div class="col-md-6 col-sm-10 ">
					    <label>Data Assinada</label>
						<input type="text" placeholder="" name="sigdate"  id="sigdate" required/>
					  </div>
				       <div class="col-md-10 col-sm-10 ">
					    <a class="labelLink" href="#fins" onclick="toggle_visibility('list1');"><strong>*Termos e Condições</strong></a>
							<div id="list1" class="alist" style="display:none;"><br>
							<p>NENHUMA COMPRA NECESSÁRIA!</p>
 							<p>Sujeito à verificação da idade, consentimento dos pais e execução de uma Declaração de Elegibilidade, os candidatos a bolsas de estudo que forem selecionados para ganhar o pacote de prêmios (cada um "Recipiente") receberão da Global Surf Industries o seguinte:
							<ul class="bullets">
								<li>Uma primeira prancha de surf à sua escolha da gama Global Surf Industries.</li>
								<li>Um pagamento em dinheiro de $ 1000 (na moeda local do vencedor) para ser usado apenas para despesas educacionais. Os destinatários receberão instruções da Global Surf Industries sobre como receber os fundos da bolsa de estudos.</li>
								<li>Após o recebimento pela Global Surf Industries de evidências na forma de recibos demonstrando que os fundos de pagamento em dinheiro foram gastos em Despesas Educacionais de boa-fé, uma segunda prancha de surfe de sua escolha.</li>
								</ul></p>
								<p>Despesas Educacionais significam estacionário, mensalidades escolares, taxas escolares, custos de excursões escolares / viagens de campo, custos de uniformes escolares e hardware de computadores. A Global Surf Industries deve, a seu exclusivo critério, determinar se uma despesa é ou não qualificada como Despesa Educacional.</p><p>A Global Surf Industries escolherá seus vencedores de acordo com os seguintes critérios subjetivos: os vencedores do concurso serão escolhidos com base em sua dedicação ao mantra "A vida é melhor quando você surfa" e terão uma história pessoal que se enquadre bem a esse critério. bem como alguns outros critérios subjetivos, como estilo de escrita, crianças mostrando uma grande promessa, uma ótima história e até uma necessidade percebida. A decisão da Global Surf Industries é e deve ser inerentemente subjetiva, e é final e obrigatória uma vez feita.</p><p>Se um Recipiente não fornecer evidências suficientes de que o pagamento em dinheiro foi usado para despesas educacionais, a Global Surf Industries reserva-se o direito de cancelar a bolsa de estudos e / ou não fornecer a segunda prancha de surfe ao Destinatário.</p><p>Não obstante o acima exposto, a Global Surf Industries não garante que a prancha selecionada pelo Destinatário estará disponível ou será fornecida ao Destinatário. O Destinatário reconhece que a Global Surf Industries pode fornecer uma prancha de surfe alternativa a seu exclusivo critério.</p><p>SURFAR É UMA ATIVIDADE PERIGOSA E POTENCIALMENTE MORTA. Cada prancha de prêmio só deve ser usada com aqueles que têm a saúde, habilidade atlética e conhecimento do oceano necessários para mitigar os perigos inerentes do esporte. A Global Surf Industries e suas afiliadas, agentes e funcionários não serão responsáveis por qualquer dano ou perda sofridos durante o uso de uma prancha de prêmio. Só você é responsável por suas ações no oceano com uma prancha de surfe. Considere o risco e sua responsabilidade antes de remar.</p><p>Cada Destinatário concede à Global Surf Industries o direito, mas não a obrigação, de publicar o nome do destinatário, a cidade e a foto do perfil no site da Global Surf Industries e nas plataformas de mídia social (por exemplo, Facebook, Instagram, twitter) para fins promocionais. fornecer à Global Surf Industries e suas afiliadas e parceiros comerciais uma licença para usar, para qualquer finalidade, quaisquer direitos de personalidade e propriedade intelectual de e fornecidos pelo Destinatário em sua aplicação.</p><p>Se a Global Surf Industries formar a opinião de que um Destinatário é inelegível para ser um candidato a uma bolsa de estudos, a Global Surf Industries poderá cancelar a bolsa de estudos. Esta promoção não está aberta a funcionários da Global Surf Industries e seus parentes. Não nos responsabilizamos por entradas ou envios perdidos, roubados, extraviados, atrasados, destruídos ou ilegíveis ou por qualquer falha da Internet. Este concurso está sujeito a estas Regras Oficiais e quaisquer outras regras a qualquer momento promulgadas por nós. A Global Surf Industries reserva-se o direito de alterar essas regras a qualquer momento, a seu exclusivo critério.</p><p>
								Candidatos Franceses, Espanhóis, Ingleses e Portugueses: as inscrições encerram em 30 de Setembro de 2018. Os candidatos devem ser cidadãos da França, Espanha, Inglaterra ou Portugal. Este concurso é ANULADO ONDE PROIBIDO ou quando são necessários requisitos de licença, registro e / ou ligação. Os beneficiários receberão os fundos da bolsa de estudos e a primeira prancha de surfe até 30 de outubro de 2018 e, se assim for possível, a segunda prancha de surfe até 30 de abril de 2019.</p>
								<p>Declaração de coleta de privacidade<br>						
								1. Suas informações pessoais estão sendo coletadas pela Global Surf Industries Pty Ltd ("GSI").<br>
								2. Suas informações pessoais são coletadas pela GSI com o objetivo de vender nossos produtos ou fornecer nossos serviços. Suas informações pessoais podem ser usadas para fins comerciais, incluindo marketing e vendas de nossos produtos e serviços e para o registro de dados estatísticos para análise de mercado. Se o GSI não puder coletar suas informações pessoais, o GSI poderá não conseguir vender seus produtos e / ou fornecer seus serviços.<br>
								3. Suas informações pessoais podem ser divulgadas para outras empresas do grupo GSI e empresas do grupo não GSI, como prestadores de serviços, na Austrália ou nos seguintes países: Austrália, Nova Zelândia, Estados Unidos da América.<br>
								4. Você concorda com a divulgação de suas informações pessoais a terceiros para fins de fornecimento de fundos de bolsas de estudo e pranchas de surfe para você.<br>
								5. Informações sobre como você pode acessar as informações pessoais mantidas sobre você e buscar a correção de tais informações estão contidas em nossa Política de Privacidade.<br>
								6. Nossa Política de Privacidade contém informações sobre como você pode fazer uma reclamação sobre uma violação dos Princípios de Privacidade Australianos e sobre como a GSI lidará com tal reclamação.<br>
								Leia a nossa <?php echo '<a class="underlineLink" href="'.HOME.'gsi-privacy-portuguese.php" target="new">'; ?> Política de Privacidade na íntegra</a>.</p>
								
							</div>	
					</div>	
					<div class="col-md-3 col-sm-10 mt24 ">	
						<div class="g-recaptcha" data-sitekey="6LcUjQsTAAAAAO7wZYdEYvQ7hpnZu1NNpD-eBPMy"></div><br><br>
						<input class="hollow" type="submit" value="Botão de envio" />
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