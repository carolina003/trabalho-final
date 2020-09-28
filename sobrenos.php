<!DOCTYPE html><!--Declaração -->
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quem somos</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<!-- Google fonte -->
	<link rel='stylesheet' id='google-font-css-css'  href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600' type='text/css' media='all'/>

	<!-- Estilos --> <!-- css externos adequados para o estilo de site que eu queria -->  
	<link rel="stylesheet" href="estilos/bootstrap.css"/>
	<link rel="stylesheet" href="estilos/style.css"/>

	<!-- Biblioteca Jquery -->
	<script src="js/jquery.min.js"></script>

	<style>
		.custom-back-color,.btn-primary
		{
			background:#d14836 !important;
			background-color:#d14836 !important;
			border-color:#d14836 !important;
		}
		.btn-primary{color:#ffffff !important}
		
		.custom-back-color-light
		{
			background:#f16856 !important;
			background-color:#f16856 !important;
		}
		.custom-color,h1,h2,h3
		{
			color:#d14836 !important;
		}
		.custom-color-light
		{
			color:#f16856 !important;
		}

		.box{
			position: relative;
			width: 400px;
			height: 400px;
			background: linear-gradient: (#6ab9ff, #0090d2);		
			
		}
		.plane
		{
	 		position: absolute;
	 		top: 0;
	 		left: 0;
	 		right: 0;
	 		bottom: 0;
	 		display: flex;
	 		justify-content: center;
	 		align-items: center;
	 		animation: animate-plane 1s linear infinite;
		}
		.plane img{
			position: relative;
			z-index: 3;
		}
		@keyframes animate-plane

		{
			0%
			{
				transform: translate(2px, 2px);
			}
			50%
			{
				transform: translate(-2px, -2px);
			}
			100%
			{
				transform: translate(2px, 2px);
			}
		}
		.cloud{
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
		}
		.cloud img{
			position: absolute;
			top: 0;
			left: 0;	
			opacity: .8;
			animation: animate-cloud 1s linear infinite;
		}
		@keyframes animate-cloud
		{
			0%
			{
				transform: translateX(400px);
			}
			40%, 100%
			{
				transform: translateX(-400px);
			}
		}
		.cloud img:nth-child(1){
			top: 50px;
			animation-delay: -1s;
			animation: animate-cloud 1.25s linear infinite;
		}
		.cloud img:nth-child(2){
			top: 180px;
			animation-delay: -2s;
			animation: animate-cloud 1.25s linear infinite;
		}
		.cloud img:nth-child(3){
			top: 100px;
			animation-delay: -2.5s;
			animation: animate-cloud .75s linear infinite;
		}




	 </style>
</head>
<body>
		<!--Cabeçalho-->

<header id="header">  <!-- classes criadas para configurar o menu inicial juntamente com a logo -->
	<div id="topbar" class="custom-back-color">
		 <div class="topbar-left">
		   
			<ul class="st-list topbar-items">
			   
	
			<li><a>Português (BR)<img alt="Português"  title="Português" src="imagens/BR.png"  style="position:relative;left:2px;top:-2px" alt=""/></a></li>
					 		
					
			</ul>
		</div>
	  <div class="topbar-right">
		<ul class="st-list topbar-items">
	 		<li><a class="top-right-link" href="login/login.php"><img src= "imagens/user.png"></a></li>

	<li>

			<a class="top-right-link" href="registro/registro.php">Cadastro</a>
	</li>

	   </ul>
	</div>
</div>
	<div class="container-fluid" style="padding-left:50px;padding-right:50px;">
	    
		   <nav class="navbar">
		
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#website-menu" aria-expanded="false">
					<img src="imagens/menu-grid.gif" alt="Menu" style="position:relative;top:8px;left:5px"/>
				</button>
				<div class="logo">
		<a class="text-logo no-decoration" href="index.php"><h2 style="margin-top:25px">AH_BORDO</h2></a></div>

		</div>
		
		<style>
		.nav li
		{padding-top:20px;padding-left:15px;color:#1A2B48;font-size:16px}
		</style>
		
		<img class="show-md btn btn-primary float-right pull-right list-hotel" src="imagens/logo.jpg" width="170" height="100"></a>

	
		<div class="collapse navbar-collapse" id="website-menu">
			<ul class="nav navbar-nav">
				
				<li><a class="custom-color" href="index.php">Início</a></li> <!-- Criada para dar acesso para as outras partes do site --> 
				<li><a class="custom-color" href="contato.php">Contato</a></li>
				<li><a class="custom-color" href="propriedades.php">Propriedades</a></li>
				<li><a class="custom-color" href="sobrenos.php">Quem somos</a></li>
				<li><a class="custom-color" href="faq.php">FAQ</a></li>
				<li><a class="custom-color" href="carrinho.php">Carrinho</a></li>

				
			</ul>
		</div>		
		
	</nav>
	</div>
	</header>

	<!-- Final do cabeçalho -->

	<style> 
		.paragrafo
			{
				padding: 25px;
			}
	</style>
		<div class="paragrafo">
	<!-- div criada para conter as informações a respeito do site, explicando do que se trata e quais seus aprendizados -->
		<h3>Quem somos?</h3>
		<br>
		<p> Bem-vindos ao AH_BORDO!!!! Nosso site apesar de recente - criado em 2020 - procura oferecer com toda segurança, respeito e carinho possível excelentes reservas de viagens aos nossos clientes. Além do mais, oferece preços imperdíveis tanto àqueles interessados em uma viagem acessível quanto para àqueles que desejam cadastrar seus estabelecimentos para a efetivação dessas viagens.<br>
		<br>

		Em primeiro lugar, trabalhamos para a concretização de momentos inesquecíveis e desejos de diversas culturas, histórias e condições sociais, aprendendo com elas cada vez mais.<br>
		<br>

		E assim, durante nossa jornada, aprendemos que o conforto e a segurança são, independentemente do custo, os pilares mais importantes de uma viagem, sempre em primeiro lugar.<br>
		<br>

		Dito isto, agradecemos pela oportunidade de colocar este projeto em prática e torcemos para a realização de muitas viagens no futuro por um bom preço, comodidade e, assim, deixar nossos clientes satisfeitos e com momentos totalmente marcantes.</p>


 		<center><div class="box">
 			
 			<div class="plane">

 				<img src="imagens/aviao.png">

 			</div>
 			<div class="cloud">
 				
 				<img src="imagens/cloud.png">
 				<img src="imagens/cloud.png">
 				<img src="imagens/cloud.png">

 			</div>
 		</div></center>
 	</div>


	    <div id="st-content-wrapper" class="search-result-page">
	        <div>
	       
			

			<div class="vc_row-full-width vc_clearfix"></div>

			<site info_panel/>
			<div class="page-wrap"><div class="container"><br/><p></p>

			<p></p>

			<p></p>
			</div></div>

			</div>
	    </div>

		
		<div class="mailchimp">
	    <div class="container">
	        <div class="row">
	            <div class="col-xs-12 col-lg-10 col-lg-offset-1">
	                <div class="row">
				    <div class="col-xs-12  col-md-7 col-lg-6">
                       <div class="media ">
                            <div class="media-left pr30 hidden-xs">
                                <img class="media-object" src="imagens/email.png" alt="newsletter"/>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading st-heading-section f24">Assine nosso boletim informativo</h4>
                                <p class="f16 c-grey">Receba ofertas exclusivas e as últimas notícias diretamente em sua caixa postal</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5 col-lg-6">
                            <form action="index.php" method="post" class="subcribe-form">
							<input type="hidden" name="proceed_newsletter" value="1"/>							
                                    <div class="form-group">
                                        <input name="newsletter_mail" type="text" class="form-control" placeholder="Insira seu e-mail">
                                        <input type="submit" name="submit" value="Inscrever">
                                    </div>
                            </form>
                                
                    </div>
					
				 </div>
            </div>
        </div>
    </div>
</div>	
	<br>
	<br>
	<br>

<!-- Rodapé-->

<footer id="main-footer" class="clearfix">
	<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row st bg-holder vc_custom_1542265299369 vc_row-has-fill">
		<div class='container '>
			<div class='row'>

	<div class="column_container col-md-4">
		<div class="vc_column-inner">
			
			<h4>Links úteis</h4> <!-- configurar as informações acerca da loja-->
													
				 <ul class="bottom-menu">
				   
					<li>
						<a href="index.php">Início</a>
					</li>
				
					<li>
						<a href="propriedades.php">Propriedades</a>
					</li>
							
					<li>
						<a href="faq.php">FAQ</a>
					</li>
				
					<li>
						<a href="sobrenos.php">Quem somos</a>
					</li>
				
					<li>
						<a href="contato.php">Contato</a>
					</li>									
				</ul>	
		</div>
	</div> 

	<div class="column_container col-md-4">
		<div class="vc_column-inner">
			
			<h4>Observações</h4>
			<p>- Trabalho ilustrativo e adaptado, acrescentando ou retirando partes de código fonte.
				<br>
				<br>
				- Feito por 4 alunas estudantes de programação para conclusão de curso.
			</p>
								
				
		</div>
	</div> 

	<div class="column_container col-md-4"> <!-- Div criada para mostrar as redes sociais do ah_bodo -->
		<div class="vc_column-inner">
				
				<h4 class="widget-title">Siga nossas redes sociais</h4>

				 <div class="footer__social">
	                  <a href="https://twitter.com/"><img src="imagens/twitter.png"></a> <!-- Acesso ao twitter e ao instagram -->
	                  <a href="https://www.instagram.com/"><img src="imagens/instagram.png"></a> 
	                  <a href="https://www.facebook.com/"><img src="imagens/facebook.png"></a>  
	            </div>							
		</div>
	</div> 

		    </div>
		</div>
	</div>
</footer>
     <center>
            <div class="col-lg-12">
                <!-- Direitos autorais -->
                <div class="footer__copyright__text">
                    <p>Direitos autorais &copy; <script>document.write(new Date().getFullYear());</script> Todos os direitos reservados <i aria-hidden="true"></i>  | AH_BORDO <a href="https://colorlib.com" target="_blank"></a></p>
                </div>    
            </div>
        </center>
<!-- Final do Rodapé-->

<!-- Js --> 
        <script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-datepicker.min.js"></script>
		<script src="js/jquery.parallax-1.1.3.js"></script>
		<script src="js/script.js"></script>
</body>
</html>     