<!DOCTYPE html> <!--Declaração -->
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FAQ</title>
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
	</style>

</head>
<body>
	<header id="header">  <!-- classes criadas para configurar o menu inicial juntamente com a logo -->
	<div id="topbar" class="custom-back-color">
		 <div class="topbar-left">
		   
			<ul class="st-list topbar-items">
			   
	
			<li><a href="index.php?lang=en">Português (BR)<img alt="Português"  title="Português" src="imagens/BR.png"  style="position:relative;left:2px;top:-2px" alt=""/></a></li>
					 		
					
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

				
			</ul>
		</div>		
		
	</nav>
	</div>
	</header>

	<!-- Final do cabeçalho -->

	    <div id="st-content-wrapper" class="search-result-page">
	        <div>
	       
			

			<div class="vc_row-full-width vc_clearfix"></div>

			<site info_panel/>
			<div class="page-wrap" style="padding-left:50px;padding-right:50px">
				<script>
				function ShowFaq(x)
				{
					
					if(document.getElementById("faq"+x).style.display=="none")
					{
						document.getElementById("faq"+x).style.display="block";
					}
					else
					{
						document.getElementById("faq"+x).style.display="none";
					}
				}
				</script>

			<h3>Perguntas frequentes</h3>
			<br>
			<br>

			1. <a class="custom-color" href='javascript:ShowFaq(1)'>Existe reembolso da compra dos pacotes?</a>
				<br>
					<div id="faq1" style="display:none">
					<br>
					Sim, caso surja um transtorno justificável ocorrerá o reembolso conforme solicitado.
					<br>
					<br>
					</div>
					<br>
			2. <a class="custom-color" href='javascript:ShowFaq(2)'>É permitido levar animais de estimação?</a>
				<br>
					<div id="faq2" style="display:none">
					<br>
					Sim, somos totalmente "pet friendly".
					<br>
					<br>
					</div>
					<br>
			3. <a class="custom-color" href='javascript:ShowFaq(3)'>Quais documentos devo levar na viagem?</a>
				<br>
					<div id="faq3" style="display:none">
					<br>
					Os documentos de identidade, passagens aéreas e os cartões de seguro viagem.
					<br>
					<br>
					</div>
					<br>
			4. <a class="custom-color" href='javascript:ShowFaq(4)'>Quanto de dinheiro devo reservar?</a>
				<br>
					<div id="faq4" style="display:none">
					<br>
					Como possuímos pacotes em conta para até mesmo jovens que pretendem viajar sozinhos sugerimos um valor de 300-500 reais no mínimo para serem gastos durantes os passeios, sabendo sempre como economizar.
					<br>
					<br>
					</div>
					<br>
			5. <a class="custom-color" href='javascript:ShowFaq(5)'>É possível viajar de graça com o AH_BORDO?</a>
				<br>
					<div id="faq5" style="display:none">
					<br>
					É possível cadastrar sua propriedade, porém a realização da reserva dos pacotes possui seus respectivos valores.
					<br>
					<br>
					</div>
					<br>
	
			6. <a class="custom-color" href='javascript:ShowFaq(6)'>Devo tirar minhas próprias fotos?</a>
				<br>
					<div id="faq6" style="display:none">
					<br>
					É sempre bom deixar marcado lugares com belas paisagens e os momentos incríveis. Garantimos que irá ser inesquecível!
					<br>
					<br>
					</div>
					<br>

			7. <a class="custom-color" href='javascript:ShowFaq(7)'>Devo levar meus remédios?</a>
				<br>
					<div id="faq7" style="display:none">
					<br>
					Os de uso diário com toda certeza!
					<br>
					<br>
					</div>
					<br>
	






				</div>

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