<!DOCTYPE html> <!--Declaração -->
<html lang="pt-br"> <!-- linguagem da minha página -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AH_BORDO</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<!-- Google fonte -->
	<link rel='stylesheet' id='google-font-css-css'  href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600' type='text/css' media='all'/>
	<link rel="stylesheet" href="estilos/font-awesome.min.css" type="text/css">

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
				<li><a class="custom-color" href="../trabalho_php/carrinho/carrinho.php">Carrinho</a></li>

				
			</ul>
		</div>		
		
	</nav>
	</div>
	</header>

	<!-- Final do cabeçalho -->

	    <div id="st-content-wrapper" class="search-result-page">
	        <div>
	       
	       
	       <!-- Responsabilidade do back-end -->
			
	<div class="book-form" style="background-image:url('imagens/img.jpg') !important;">
		<div class="container">
			<div class="row">
				
				<div class="col-md-12">
					<div class="bn-forms">
					
					
					<div class="text-center" style="padding-top:70px">

					
						<h1 style="font-size:54px" class="white-font">AS MELHORES RESERVAS</h1>
						<h4 class="white-font">Adquira pacotes com excelentes preços</h4>
					
					</div>
					
					<script>
					function ValidateForm(form)
					{
						if(form.start_time.value=="")
						{
							alert("Preencha todos os dados de forma correta!");
							form.start_time.focus();
							return false;
						}
						
						if(form.end_time.value=="")
						{
							alert("Não deixe de selecionar a data!");
							form.end_time.focus();
							return false;
						}
						
						var start_time = Date.parse(form.start_time.value);
						var end_time = Date.parse(form.end_time.value);
						
						if(start_time>end_time)
						{
							alert("O check-in deve ser antes do check-out.");
							return false;
						}
						
						if(form.guests.value=="")
						{
							alert("Não deixe de selecionar a quantidade de pessoas!");
							form.guests.focus();
							return false;
						}
						
						return true;
					}
					</script>
						<form action="index.php" onsubmit="return ValidateForm(this)" method="post">
											<input type="hidden" name="lang" value="en"/>
											<input type="hidden" name="location" id="location" value=""/>
				
						<input type="hidden" name="mod" value="search"/>
							<div class="row" style="background:white;margin-top:20px;border-radius:6px">
								<div class="right-border-column col-md-3">
									<div class="column-padding">
									
										<img src="imagens/icon-location-4.jpg" style="position:absolute;left:15px;top:28px"/>
										
										<input autocomplete="off" onkeyup="javascript:SuggestLocation(this);" id="book_location" name="book_location" type="text" class="main-control form-control form-control-lg" placeholder="Destino"/>
										
										
										<div id="location_suggest" class="dropdown-menu">

										</div>
						
									
									</div>
								</div>
								
								<div class="right-border-column col-md-2">
								
								<div class="column-padding-side">
								
								
									<div class="input-group date check-in">
									<div style="background:white;border:0" class="input-group-addon"><img src="imagens/calendar-2.jpg" alt="Calendar"/></div>
									<input autocomplete="off" name="start_time" type="text" class="main-control form-control" placeholder="Ida">
								</div>
								
							</div>
							
							</div>
							<div class="right-border-column col-md-2">
							<div class="column-padding-side">
							
								<div class="input-group date check-out">
									<div style="background:white;border:0" class="input-group-addon"><img src="imagens/calendar-2.jpg" alt="Calendar"/></div>
									<input autocomplete="off" name="end_time" type="text" class="main-control form-control" placeholder="Volta">
								</div>
							
							</div>
							</div>
							
							
							<div class="right-border-column col-md-2">
							<div class="column-padding-side">
								
										<select autocomplete="off" name="guests" id="guests" class="main-control form-control">
											<option value="" disabled selected>Adultos</option>
											<option value="1" class="black-font">1</option>
											<option value="2" class="black-font">2</option>
											<option value="3" class="black-font">3</option>
											<option value="4" class="black-font">4</option>
											<option value="5" class="black-font">5</option>
											<option value="6" class="black-font">6</option>
											<option value="7" class="black-font">7</option>
											<option value="7" class="black-font">8</option>
										</select>
							</div>
							</div>
							
					<div class="col-md-1">
						<div class="column-padding-side">
								
								
										<select autocomplete="off" name="children" id="children" class="main-control form-control">
											<option value="" disabled selected>Crianças</option>
											
											<option value="1" class="black-font">1</option>
											<option value="2" class="black-font">2</option>
											<option value="3" class="black-font">3</option>
											<option value="3" class="black-font">4</option>
										</select>							
								
							</div>
							</div>
							
							<div class="col-md-2">
							<div class="column-padding-side">
								<button type="submit" style="padding:15px;text-transform:uppercase;max-width:140px;position:relative;top:-5px" class="btn btn-primary btn-block pull-right">Buscar</button>
								
							</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
  <!-- Final -->

		<div class="vc_row-full-width vc_clearfix"></div>

		<div class="vc_row wpb_row st bg-holder vc_custom_1542955832597"><div class='container '><div class='row'>
	<div class="column_container col-md-4"><div class="vc_column-inner">
			<div class="st-featured-item image-left">
    <div class="image">
        <img src="imagens/home.png" class="img-responsive" alt="Hundreds of Properties"/>    </div>
    <div class="content">
        <h4 class="title">As melhores reservas</h4>
        <div class="desc"></div>
    </div>
</div>
</div>
	</div> 

	<div class="column_container col-md-4"><div class="vc_column-inner">
			<div class="st-featured-item image-left">
    <div class="image">
        <img src="imagens/avaliacao.png" class="img-responsive" alt="Thousands of Reviews"/></div>
    <div class="content">
        <h4 class="title">Ótimas avaliações</h4>
        <div class="desc"></div>
    </div>
</div>
</div>
	</div> 

	<div class="column_container col-md-4"><div class="vc_column-inner">
			<div class="st-featured-item image-left">
    <div class="image">
        <img src="imagens/price.png" class="img-responsive" alt="Best Price Guarantee"/>    </div>
    <div class="content">
        <h4 class="title">Preços em conta</h4>
        <div class="desc"></div>
    </div>
</div>
</div>
	</div> 
</div></div>

</div>


</div>
<div class="vc_row-full-width vc_clearfix"></div>
<br>
<br>
<br>
<div class="container">
<h3>Destinos</h3>
<br/>
	<div class="row">
	<div class="col-md-3  home-category-wrap">
		<a href="location-australia-113.html" class="home-img-category"><div class="home-img-category" style="background-image:url('imagens/norte.jpg');">
		Norte
		
		
		</div></a>		
	</div>
	<div class="col-md-3  home-category-wrap">
		<a href="location-united-states-229.html" class="home-img-category"><div class="home-img-category" style="background-image:url('imagens/nordeste.jpg');">
		Nordeste
		
		
		</div></a>		
	</div>
	<div class="col-md-3  home-category-wrap">
		<a href="location-united-kingdom-32.html" class="home-img-category"><div class="home-img-category" style="background-image:url('imagens/sudeste.jpg');">
		Sudeste
		
		
		</div></a>		
	</div>

	<div class="col-md-3  home-category-wrap">
		<a href="location-united-kingdom-32.html" class="home-img-category"><div class="home-img-category" style="background-image:url('imagens/sul.jpg');">
		Sul
		
		
		</div></a>		
	</div>



	</div>
	<div class="row" style="margin-top:20px">
	<div class="col-md-3 home-category-wrap">
	
		<a href="hoteis/amapa.html" class="main_category_link" title="Argentina">Amapá</a> <span class="listing-count">(1)</span>	</div>
	<div class="col-md-3 home-category-wrap">
	
		<a href="hoteis/alagoas.html" class="main_category_link" title="Austria">Alagoas</a> <span class="listing-count">(1)</span>	</div>
	<div class="col-md-3 home-category-wrap">
	
		<a href="hoteis/espiritosanto.html" class="main_category_link" title="Belgium">Espírito Santo</a> <span class="listing-count">(1)</span>	</div>
	<div class="col-md-3 home-category-wrap">
	
		<a href="hoteis/parana.html" class="main_category_link" title="Brazil">Paraná</a> <span class="listing-count">(1)</span>	</div>
	<div class="col-md-3 home-category-wrap">
	
		<a href="hoteis/amazonas.html" class="main_category_link" title="Bulgaria">Amazonas</a> <span class="listing-count">(1)</span>	</div>
	<div class="col-md-3 home-category-wrap">
	
		<a href="hoteis/bahia.html" class="main_category_link" title="Canada">Bahia</a> <span class="listing-count">(1)</span>	</div>
	<div class="col-md-3 home-category-wrap">
	
		<a href="hoteis/minasgerais.html" class="main_category_link" title="Chile">Minas Gerais</a> <span class="listing-count">(1)</span>	</div>
	<div class="col-md-3 home-category-wrap">
	
		<a href="hoteis/riograndesul.html" class="main_category_link" title="Colombia">Rio Grande do Sul</a> <span class="listing-count">(1)</span>	</div>
	<div class="col-md-3 home-category-wrap">
	
		<a href="hoteis/para.html" class="main_category_link" title="Cyprus">Pará</a> <span class="listing-count">(1)</span>	</div>
	<div class="col-md-3 home-category-wrap">
	
		<a href="hoteis/ceara.html" class="main_category_link" title="Czech Republic">Ceará</a> <span class="listing-count">(1)</span>	</div>
	<div class="col-md-3 home-category-wrap">
	
		<a href="hoteis/saopaulo.html" class="main_category_link" title="Denmark">São Paulo</a> <span class="listing-count">(1)</span>	</div>
	<div class="col-md-3 home-category-wrap">
	
		<a href="hoteis/santacatarina.html" class="main_category_link" title="Estonia">Santa Catarina</a> <span class="listing-count">(1)</span>	</div>
	<div class="col-md-3 home-category-wrap">
	
		<a href="hoteis/roraima.html" class="main_category_link" title="Faroe Islands">Roraima</a> <span class="listing-count">(1)</span>	</div>
	<div class="col-md-3 home-category-wrap">
	
		<a href="hoteis/riograndenorte.html" class="main_category_link" title="Finland">Rio Grande do Norte</a> <span class="listing-count">(1)</span>	</div>
	<div class="col-md-3 home-category-wrap">
	
		<a href="hoteis/riodejaneiro.html" class="main_category_link" title="France">Rio de Janeiro</a> <span class="listing-count">(1)</span>	</div>
	<div class="col-md-3 home-category-wrap">

</div>

<div class="vc_row-full-width vc_clearfix"></div>
  <br/>
  <br/>
		
		</div>
    </div>
    <br>
    <br>
    <br>
	
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