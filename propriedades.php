<!DOCTYPE html> <!--Declaração-->
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Promoções</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<!-- Google fonte -->
	<link rel='stylesheet' id='google-font-css-css'  href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600' type='text/css' media='all'/>

	<!-- Estilos --> <!-- css externos adequados para o estilo de site que eu queria -->  
		<link rel="stylesheet" href="estilos/bootstrap.css"/>
		<link rel="stylesheet" href="estilos/style.css"/>

	<!--Biblioteca Jquery -->
	<script src="js/jquery.min.js"></script>

		<style>

html {
    font-family: Lato, 'Helvetica Neue', Arial, Helvetica, sans-serif;
    font-size: 14px;
}

h5 {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
    margin: 0;
}

.card {
    font-size: 1em;
    overflow: hidden;
    padding: 0;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
}

.card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;
}

.card-img-top {
    display: block;
    width: 100%;
    height: auto;
}

.card-title {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
}

.card-text {
    clear: both;
    margin-top: .5em;
    color: rgba(0, 0, 0, .68);
}

.card-footer {
    font-size: 1em;
    position: static;
    top: 0;
    left: 0;
    max-width: 100%;
    padding: .75em 1em;
    color: rgba(0, 0, 0, .4);
    border-top: 1px solid rgba(0, 0, 0, .05) !important;
    background: #fff;
}

.card-inverse .btn {
    border: 1px solid rgba(0, 0, 0, .05);
}

.profile {
    position: absolute;
    top: -12px;
    display: inline-block;
    overflow: hidden;
    box-sizing: border-box;
    width: 25px;
    height: 25px;
    margin: 0;
    border: 1px solid #fff;
    border-radius: 50%;
}

.profile-avatar {
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 50%;
}

.profile-inline {
    position: relative;
    top: 0;
    display: inline-block;
}

.profile-inline ~ .card-title {
    display: inline-block;
    margin-left: 4px;
    vertical-align: top;
}

.text-bold {
    font-weight: 700;
}

.meta {
    font-size: 1em;
    color: rgba(0, 0, 0, .4);
}

.meta a {
    text-decoration: none;
    color: rgba(0, 0, 0, .4);
}

.meta a:hover {
    color: rgba(0, 0, 0, .87);
}


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

	 <div class="row">
		
		<div class="col-md-9">
			<div class="style-list"> 

        <div class="row">


	</div></div>


	<div class="col-md-3 sidebar-filter">
		<!-- buscar pelos filtros de cada propriedade cadastrada -->
		<form action="index.php" method="post">
			<input type="hidden" name="mod" value="search"/>
		<input type="hidden" name="refine" value="1"/>
		<input type="hidden" name="start_time" value="0"/>
		<input type="hidden" name="end_time" value="0"/>
				
				<h3 class="aside-header">Resultados encontrados</h3>
			<hr class="margin-top-bottom-10"/>
			
						<script>
				var min_price=52;
				var max_price=52;
				</script>
						<link rel="stylesheet" href="css/jquery-ui.css">
			<script src="js/jquery-ui.js"></script>

			
			  <script>
			  $(function() {
			  
			   $( "#slider-range" ).slider({
				  range: true,
				  min: min_price,
				  max: max_price,
				  values: [ min_price, max_price ],
				  slide: function( event, ui ) {
					$( "#amount" ).val( "$" + number_format(ui.values[0],0,'',',') + " - $" + number_format(ui.values[1],0,'',',') );
				  }
				});
				
			  });
			  </script>
				
			<div id="price_range_wrap">
				<p>
				  Price range / night:
				  <input type="text" value="$52 - $52 " name="amount" id="amount" readonly class="custom-color form-control" style="margin-top:5px;margin-bottom:5px;border:0 !important; box-shadow:none;">
				</p>
				 <div style="padding-left:10px;padding-right:10px;">
						<div id="slider-range"></div>
				</div>
				<br/>
			</div>
			
			<script>
			if(min_price==max_price) document.getElementById("price_range_wrap").style.display="none";
			</script>
						
			
			
					
					
				<br/>
			
					
						<strong>Localização</strong>
				<br/>
				<input type="checkbox" class="filter_check" name="locations[]"  value="110"/>
					
				Amapá (1)
				<br>

				<input type="checkbox" class="filter_check" name="locations[]"  value="110"/>
				Amazonas (1)
				<br>

				<input type="checkbox" class="filter_check" name="locations[]"  value="110"/>
				Pará (1)
				<br>

				<input type="checkbox" class="filter_check" name="locations[]"  value="110"/>
				Roraima (1)
				<br>

				<input type="checkbox" class="filter_check" name="locations[]"  value="110"/>
				Alagoas (1)
				<br>

				<input type="checkbox" class="filter_check" name="locations[]"  value="110"/>
				Bahia (1)
				<br>

				<input type="checkbox" class="filter_check" name="locations[]"  value="110"/>
				Ceará (1)
				<br>

				<input type="checkbox" class="filter_check" name="locations[]"  value="110"/>
				Rio Grande do Norte (1)
				<br>

				<input type="checkbox" class="filter_check" name="locations[]"  value="110"/>
				Espírito Santo (1) 
				<br>

				<input type="checkbox" class="filter_check" name="locations[]"  value="110"/>
				Minas Gerais (1)
				<br>

				<input type="checkbox" class="filter_check" name="locations[]"  value="110"/>
				São Paulo (1)
				<br>

				<input type="checkbox" class="filter_check" name="locations[]"  value="110"/>
				Rio de Janeiro (1)
				<br>

				<input type="checkbox" class="filter_check" name="locations[]"  value="110"/>
				Paraná (1)
				<br>

				<input type="checkbox" class="filter_check" name="locations[]"  value="110"/>
				Rio Grande do Sul (1)
				<br>

				<input type="checkbox" class="filter_check" name="locations[]"  value="110"/>
				Santa Catarina (1)

					</a><br/>
							<br/>
					
						<strong>Tipo da propriedade</strong>
				<br/>
				<input type="checkbox" class="filter_check" name="types[]"  value="M_HOTEL"/> Hotel<br/><br/>
				<input type="checkbox" class="filter_check" name="types[]"  value="M_POUSADA"/> Pousada<br/><br/>
					
			
			
					
			<input type="submit" class="btn btn-primary btn-md" value="Enviar"/> <!-- back-end -->
			<div class="clearfix"></div>
			<br/>
			</form>
		
		<!-- final dos filtros -->
		</div>



		
		<div class="clearfix"></div>

        <div class="row">


            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cd/La_grande_plage_de_Nazar%C3%A9_-_panoramio_%2820%29.jpg/1200px-La_grande_plage_de_Nazar%C3%A9_-_panoramio_%2820%29.jpg">
                    <div class="card-block">
                        <figure class="profile profile-inline">
                            <img src="https://picsum.photos/200/150/?random" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title">Fernando de Noronha</h4>
                        <div class="card-text">
                           <p>Pacote promocional para Rio de Janeiro - RJ.</p> 
                         <p>   Hospedagem</p> 
                         <p>   Café da manhã e almoço</p> 
                          <p>  R$ 800.00</p> 
                         <p>   Oferta por pessoa.</p> 
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-info btn-sm">Adicionar ao Carrinho</button>
                    </div>
                </div>
            </div>

             <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="https://www.melhoresdestinos.com.br/wp-content/uploads/2020/04/praias-desertas-em-ubatuba.jpg">
                    <div class="card-block">
                        <figure class="profile profile-inline">
                            <img src="https://www.melhoresdestinos.com.br/wp-content/uploads/2020/04/praias-desertas-em-ubatuba.jpg" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title">Capitolio</h4>
                        <div class="card-text">
                         <p>   Pacote promocional para Capitolio -MG</p> 
                         <p>    Hospedagem</p> 
                         <p>   Café da manhã e almoço</p> 
                          <p>  R$ 570,00</p> 
                         <p>   Oferta por pessoa.</p> 
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-info btn-sm">Adicionar ao carrinho </button>
                    </div>
                </div>
            </div>
      

        <div class="col-sm-6 col-md-2 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="https://media-cdn.tripadvisor.com/media/photo-s/15/09/cf/18/iriri-praia-deserta.jpg">
                    <div class="card-block">
                        <figure class="profile profile-inline">
                            <img src="https://media-cdn.tripadvisor.com/media/photo-s/15/09/cf/18/iriri-praia-deserta.jpg" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title">Campo Grande</h4>
                        <div class="card-text">
                         <p>   Pacote promocional para Campo Grande : indaia parque hotel -MGS</p> 
                         <p>    Hospedagem</p> 
                         <p>   Café da manhã e almoço</p> 
                         <p>  R$  620.00</p> 
                         <p>  Oferta por pessoa.</p> 
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-info btn-sm">Adicionar ao Carrinho</button>
                    </div>
                </div>
            </div>

        <div class="col-sm-6 col-md-2 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="https://s3.amazonaws.com/media.viajenaviagem.com/wp-content/uploads/2019/11/praia-taipu-de-fora.jpg">
                    <div class="card-block">
                        <figure class="profile profile-inline">
                            <img src="https://s3.amazonaws.com/media.viajenaviagem.com/wp-content/uploads/2019/11/praia-taipu-de-fora.jpg" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title">Paraná</h4>
                        <div class="card-text">
                           <p> Pacote promocional para  ilha do mel - pousada ilha do mel -Paraná</p> 
                          <p>   Hospedagem</p> 
                          <p>  Café da manhã e almoço</p> 
                          <p>  R$ 740.00</p> 
                          <p>  Oferta por pessoa.</p> 
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-info btn-sm">Adicionar ao carrinho</button>
                    </div>
                </div>
            </div>            
        </div>

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
				
				<h4>Links úteis</h4> <!-- configurar as informações acerca do site-->
														
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
	                  <a href="https://twitter.com/"><img src="imagens/twitter.png"></a> <!-- Acesso as redes sociais -->
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