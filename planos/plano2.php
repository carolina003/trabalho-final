<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Plano 2</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<!-- Google fonte -->
	<link rel='stylesheet' id='google-font-css-css'  href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600' type='text/css' media='all'/>
	<link rel="stylesheet" href="estilos/font-awesome.min.css" type="text/css">

	<!-- Estilos --> <!-- css externos adequados para o estilo de site que eu queria -->  
	<link rel="stylesheet" href="../estilos/bootstrap.css"/>
	<link rel="stylesheet" href="../estilos/style.css"/>

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
			   
	
			<li><a>Português (BR)<img alt="Português"  title="Português" src="../imagens/BR.png"  style="position:relative;left:2px;top:-2px" alt=""/></a></li>
					 		
					
			</ul>
		</div>
	  <div class="topbar-right">
		<ul class="st-list topbar-items">
	 		<li><a class="top-right-link" href="login/login.php"><img src= "../imagens/user.png"></a></li>

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
					<img src="../imagens/menu-grid.gif" alt="Menu" style="position:relative;top:8px;left:5px"/>
				</button>
				<div class="logo">
		<a class="text-logo no-decoration" href="index.php"><h2 style="margin-top:25px">AH_BORDO</h2></a></div>

		</div>
		
		<style>
		.nav li
		{padding-top:20px;padding-left:15px;color:#1A2B48;font-size:16px}
		</style>
		
		<img class="show-md btn btn-primary float-right pull-right list-hotel" src="../imagens/logo.jpg" width="170" height="100"></a>

	
		<div class="collapse navbar-collapse" id="website-menu">
			<ul class="nav navbar-nav">
				
				<li><a class="custom-color" href="../index.php">Início</a></li> <!-- Criada para dar acesso para as outras partes do site --> 
				<li><a class="custom-color" href="../contato.php">Contato</a></li>
				<li><a class="custom-color" href="../propriedades.php">Propriedades</a></li>
				<li><a class="custom-color" href="../sobrenos.php">Quem somos</a></li>
				<li><a class="custom-color" href="../faq.php">FAQ</a></li>

				
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
		<div class="page-wrap">
	<div class="container">
	

<h3>
	Preencha os dados:</h3>
<hr/>
<strong>Plano 2</strong> - <strong>R$ 200.00 mensais</strong>
<br/><br/>
<h3>
	Insira os dados de seu hotel ou propriedade e contato.</h3>
<hr/>
	
	
	<div class="col-md-9">
	

	

	<script>
	function SubmitForm2(x)
	{

		if(x.username.value=="")
		{
			alert("Please enter an username!");
			x.username.focus();
			return false;
		}	
		
		if(x.password.value=="")
		{
			alert("Please enter your password!");
			x.password.focus();
			return false;
		}	
		
		
		if(x.first_name.value=="")
		{
			alert("Please enter your first name!");
			x.first_name.focus();
			return false;
		}	
		
		if(x.last_name.value=="")
		{
			alert("Please enter your last name!");
			x.last_name.focus();
			return false;
		}

		if(x.user_email.value=="")
		{
			alert("Please enter your email address!");
			x.user_email.focus();
			return false;
		}	

		
		if(!CheckValidEmail(x.user_email.value) )
		{
			alert(x.user_email.value+" is not a valid email address!");
			x.user_email.focus();
			return false;
		}
		
		return true;
	}

	function CheckValidEmail(strEmail) 
	{
			if (strEmail.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1)
			{
				return true;
			}
			else
			{
				return false;
			}
	}
	</script>


	
	<form id="main" action="index.php" method="post" onsubmit="return SubmitForm2(this)">
		<input type="hidden" name="lang" value="en"/>
			<input type="hidden" name="mod" value="hotel-registration"/>
	
	<input type="hidden" name="ProceedSend" value="1"/>
	<input type="hidden" name="package" value="2"/>

	<fieldset>
		
		<ol>
			<li>
				<label for="username">Nome:</label>
				
				<input type="text" onKeyUp="javascript:UserValueChanged(this)" name="username" value="" required size="30"/>
				<script>
				function UserValueChanged(x)
				{
					document.getElementById("selected_username").innerText=x.value;
				}
				</script>
				
				<span class="sub-text" style="display:none">
				<br/>
				Your hotel micro-site URL will be: <strong>http://<span id="selected_username">Sobrenome:</span>.phpscriptdemos.com/hotel-marketplace					</strong>
					
				</span>
			</li>	
		
		<li>
			<label for="password">
				Senha: 
			</label>
			<input type="password" name="password" required size="30"/>
		</li>
		<li>
			<label for="company">
			Tipo da propriedade: 
			</label>
			<select name="p_type" class="form-control">
				<option value="">Selecione</option>
					<option  value="M_HOTEL">Hotel</option><option  value="M_APARTMENT">Pousada</option></option></select>	
			
		</li>
		<li>
			<label for="company">
			Nome da propriedade: 
			</label>
			<input type="text" name="company" value="" required size="30"/>
		</li>
		<li>	
			<label for="description">
			Descrição:
			</label>
			<textarea rows="5" cols="40" name="description"></textarea>
			
		</li>
		<li>
			<label for="company">
			Número de estrelas:
			</label>
			<select name="stars" class="form-control">
				<option value="">Selecione</option>
					<option  value="5">5 estrelas</option><option  value="4">4 estrelas</option><option  value="3">3 estrelas</option><option  value="2">2 estrelas</option><option  value="1">1 estrela</option>
				
			</select>	
			
		</li>
		
		<script>var loc_type="main";var m_all="Please Select";</script>
							
			
					
			
			
			
						<li>
					<div class="div_label">
						Localização:
					</div>
						
					<div class="div_field">
						<select  onChange="sub_loc_select(this.value,'location','include/suggest_location.php?lang=en','en')" type="text" class="form-control" id="location_0" name="location_0" style="background:white !important"><option value="">Todas</option><option  value="229" >Amapá</option><option  value="110" >Amazonas</option><option  value="113" >Pará</option><option  value="1" >Roraima</option><option  value="2" >Alagoas</option><option  value="130" >Bahia</option><option  value="3" >Ceará</option><option  value="38" >Rio Grande do Norte</option><option  value="43" >Espírito Santo</option><option  value="47">Minas Gerais</option><option  value="4" >São Paulo</option><option  value="5" >Rio de Janeiro</option><option  value="6" >Paraná</option><option  value="7" >Santa Catarina</option><option  value="8" >Rio Grande do Sul</option></select><div id="s_location_0"></div><div id="s_location_1"></div><div id="s_location_2"></div><div id="s_location_3"></div><div id="s_location_4"></div></div>
					<div class="clearfix"></div>
		
				</li>
				
								<li id="add-map">
					<div class="div_label">
						Localização da propriedade:
					
					</div>
					
				
					<div class="div_field">
						<input name="address" required value="" onkeyup="javascript:UserKeyUp()" id="address" type="text" placeholder="Insira o endereço"/>
					</div>
					<br/>
					
		
		
			<li>
			<label for="email">
			E-mail:
			</label>
			 <input type="email" name="email" value="" required size="30"/>
			 <br/>
			 <span class="sub-text">Seu e-mail não será publicado no site.</span>
		</li>
		<li>	
			<label for="phone">
			Telefone:
			</label>
			<input type="text" name="phone" value="" required size="30">
		</li>
		
		<li>
			<label for="first_name">
			Primeiro nome: 
			</label>
			<input type="text" name="first_name" value="" required size="30"/>
		</li>
		<li>
			<label for="last_name">
			Sobrenome: 
			</label>
			<input type="text" name="last_name" value="" required size="30"/>
		</li>
		
	
		
					
				<li>
				<label for="code">
				<img src="../php/codigo.php"/>
				</label>
				<input id="code" name="code" placeholder="Insira o código" type="text" required/>
				<div class="clearfix"></div>
			</li>
				</ol>
	</fieldset>

	<div class="left-margin-40">
		<input type="checkbox" name="newsletter"  value="1"/>
		Eu gostaria de assinar o boletim informativo do AH_BORDO.					
	</div>	
		<br/><br/>
	<fieldset>
		<legend>
			Selecione seu método de pagamento		</legend>
		<ol>
						<li>
				<input checked value="paypal" type="radio" name="payment_option"/>
				<img src="../imagens/paypal.gif"/>
			</li>
							
							
		</ol>
	</fieldset>
		<fieldset>
		<button class="btn btn-primary pull-right" type="submit">Enviar</button>
	</fieldset>
	</form>

			

	</div>
</div>  </div> 
<div class="clearfix"></div>
<br/><br/>

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
                                <img class="media-object" src="../imagens/email.png" alt="newsletter"/>
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
						<a href="../index.php">Início</a>
					</li>
				
					<li>
						<a href="../propriedades.php">Propriedades</a>
					</li>
							
					<li>
						<a href="../faq.php">FAQ</a>
					</li>
				
					<li>
						<a href="../sobrenos.php">Quem somos</a>
					</li>
				
					<li>
						<a href="../contato.php">Contato</a>
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
	                  <a href="https://twitter.com/"><img src="../imagens/twitter.png"></a> <!-- Acesso ao twitter e ao instagram -->
	                  <a href="https://www.instagram.com/"><img src="../imagens/instagram.png"></a> 
	                  <a href="https://www.facebook.com/"><img src="../imagens/facebook.png"></a>  
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