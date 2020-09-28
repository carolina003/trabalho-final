<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel='stylesheet' id='google-font-css-css'  href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600' type='text/css' media='all'/>
	<link rel="stylesheet" href="../estilos/bootstrap.css"/>
	<link rel="stylesheet" href="../estilos/style.css"/>
	<script src="js/jquery.min.js"></script>

	<style>

      body 
      {
        font-family: Arial, Helvetica, sans-serif;
      }

      * 
      {
        box-sizing: border-box;
      }

      /* estilizar recipiente */
      .container 
      {
        position: relative;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 50px 0 10px 0;
      } 

      /* botões de link */
      input,
      .btn
       {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 4px;
        margin: 5px 0;
        opacity: 0.9  ;
        display: inline-block;
        font-size: 17px;
        line-height: 20px;
        text-decoration: none; /* remover sublinhados  */
      }

      input:hover,
      .btn:hover 
      {
        opacity: 1;
      }

      /* adicionar cores para os botes do face e do google  */
      .fb 
      {
        background-color: #30AACE;
        color: white;
      }

      .google
      {
        background-color: #F23535;
        color: white;
      }

      /* botão de envio */
      input[type=submit] 
      {
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
      }

      input[type=submit]:hover 
      {
        background-color: #35D349;
      }

      /* layout das colunas  */
      .col 
      {
        float: left;
        width: 50%;
        margin: auto;
        padding: 0 50px;
        margin-top: 6px;
      }

      /* Clear floats after the columns */
      .row:after 
      {
        content: "";
        display: table;
        clear: both;
      }

      /* vertical line */
      .vl 
      {
        position: absolute;
        left: 50%;
        transform: translate(-50%);
        border: 2px solid #ddd;
        height: 175px;
      }

      /* text inside the vertical line */
      .vl-innertext 
      {
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        background-color: #f1f1f1;
        border: 1px solid #ccc;
        border-radius: 50%;
        padding: 8px 10px;
      }

      /* esconder texto em telas médias e grandes  */
      .hide-md-lg 
      {
        display: none;
      }

      /* recipiente inferior  */
      .bottom-container 
      {
        text-align: center;
        background-color: #393939;
        border-radius: 0px 0px 4px 4px;
     	margin-left: 75px;
     	margin-right: 75px;
      }

      /* Para empilhar as colunas uma em baixo da outra quando estiver a tela 650px*/
      @media screen and (max-width: 650px)
       {
        .col 
        {
          width: 100%;
          margin-top: 0;
        }
        /*  coluna vertical  */
        .vl 
        {
          display: none;
        }
        /*mostrar o texto oculto */
        .hide-md-lg 
        {
          display: block;
          text-align: center;
        }
      }

      h2 
      {
        font-size: 30px;
        margin-left: 60px;

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
      <li><a class="top-right-link" href="../login/login.php"><img src= "../imagens/user.png"></a></li>

  <li>

      <a class="top-right-link" href="../registro/registro.php">Cadastro</a>
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
    <a class="text-logo no-decoration" href="../index.php"><h2 style="margin-top:25px">AH_BORDO</h2></a></div>

    </div>
    
    <style>
    .nav li
    {padding-top:20px;padding-left:15px;color:#1A2B48;font-size:16px}
    </style>
    

  
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
	<br>
	<br>			
			
    <div class="container">
      <form action="/action_page.php">
        <div class="row">
          <h2 >Login</h2>
          <div class="vl">
            <span class="vl-innertext">ou</span>
          </div>

          <div class="col">
            <a href="entrarcomface.php" class="fb btn">
              <i class="fa fa-facebook fa-fw"></i>Facebook
             </a>
            
            <a href="entrarcomgoogle.php" class="google btn"><i class="fa fa-google fa-fw">
              </i>Google+
            </a>
          </div>

          <div class="col">

            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Email" />
            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="Senha"/>
            <input type="submit" value="Entrar">
          </div>
          
        </div>
      </form>
    </div>

    <div class="bottom-container">
      <div class="row">
        <div class="col">
          <a href="..\senha\senha.php" style="color:white" class="btn">Inscreva-se</a>
        </div>
        <div class="col">
          <a href="loginprivado.php" style="color:white" class="btn">Administrativo</a>
        </div>
      </div>
    </div>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
		
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
  <!-- código pego no w3schools e adaptado por Stefany Teles -->
  <!-- acrescentado cabeçalho e rodapé por Camila Machado e feita pequenas modificações no css -->    