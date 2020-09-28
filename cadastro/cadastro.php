<!DOCTYPE html>

<html>
 <head>
   <style type="text/css">
  
   {
    color:red;
   }

   #logo {
        width:50%;
        height:50%;
   }

   .panel-heading{
    font-size:100%;
    }
    </style>
    <title>  Cadastro de Clientes </title>
    <body>

      
       <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
       <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <!------ Include the above in your HEAD tag ---------->

       <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
       <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
       <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
       <!------ Include the above in your HEAD tag ---------->
 </head>
 
   <meta charset="utf-8">
   <form class="form-horizontal">
      <fieldset>
      <div class="panel panel-primary">
        <div class="panel-heading">Cadastro de Cliente</div>
    
          <div class="panel-body">
            <div class="form-group">

              <div class="col-md-11 control-label">
              <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
           </div>
         </div>

         <!-- Text input-->
         <form method="POST"   action="processa.php">
          <div class="form-group">
            <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>  
            <div class="col-md-8">
              <input id="Nome" name="nome" placeholder="" class="form-control input-md" required type="text" maxlength="30">
           </div>
         </div>
         <br>

         <!-- Text input-->
         <div class="form-group">
            <label class="col-md-2 control-label" for="nome">CPF <h11>*</h11></label>  
            <div class="col-md-2">
              <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$" maxlength="30">
           </div>
  
           <label class="col-md-1 control-label" for="Nome">Data_Nascimento<h11>*</h11></label>  
           <div class="col-md-2">
              <input id="datanascimento" name="datanascimento" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()" maxlength="30">
           </div>

           <!-- Multiple Radios (inline) -->

           <label class="col-md-1 control-label" for="radios">Gênero <h11>*</h11></label>
            <div class="col-md-4"> 
              <label required="" class="radio-inline" for="radios-0" >
              <input name="genero" id="genero" value="feminino" type="radio" required maxlength="30">
              Feminino </label> 
              <label class="radio-inline" for="radios-1">
              <input name="genero" id="genero" value="masculino" type="radio" maxlength="12">
              Masculino</label>
           </div>
         </div>

         <!-- Prepended text-->
         <div class="form-group">
            <label class="col-md-2 control-label" for="telefone">Telefone <h11>*</h11></label>
            <div class="col-md-2">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input id="telefone" name="telefone" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"OnKeyPress="formatar('## #####-####', this)" maxlength="30">
             </div>
         </div>
  
         <label class="col-md-1 control-label" for="telefone">Telefone</label>
         <div class="col-md-2">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
              <input id="telefone" name="telefone" class="form-control" placeholder="XX XXX-XXXX" type="text" maxlength="11"  pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"OnKeyPress="formatar('## #####-####', this)" maxlength="30">
           </div>
         </div>
       </div> 

        <!-- Prepended text-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="email">Email <h11>*</h11></label>
          <div class="col-md-5">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input id="email" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" maxlength="36">
           </div>
         </div>
       </div>


       <!-- Search input-->
       <div class="form-group">
          <label class="col-md-2 control-label" for="cep">CEP <h11>*</h11></label>
          <div class="col-md-2">
            <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$" maxlength="30">
         </div>
         <div class="col-md-2">
            <button type="button" class="btn btn-primary" onclick="pesquisarcep(cep)">Pesquisar</button>
         </div>
       </div>

       <!-- Prepended text-->
       <div class="form-group">
          <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
          <div class="col-md-4">
            <div class="input-group">
              <span class="input-group-addon">Rua</span>
              <input id="rua" name="rua" class="form-control" placeholder="" required=""  type="text" maxlength="30">
           </div>
         </div>
         <div class="col-md-2">
            <div class="input-group">
              <span class="input-group-addon">Nº <h11>*</h11></span>
              <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text" maxlength="10">
           </div>
         </div>
         <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon">Bairro</span>
              <input id="bairro" name="bairro" class="form-control" placeholder="" required="" type="text" maxlength="30">
           </div>
         </div>
       </div>

       <div class="form-group">
          <label class="col-md-2 control-label" for="prependedtext"></label>
          <div class="col-md-4">
            <div class="input-group">
              <span class="input-group-addon">Cidade</span>
              <input id="cidade" name="cidade" class="form-control" placeholder="" required=""  type="text" maxlength="30">
           </div>
         </div>
  
         <div class="col-md-2">
            <div class="input-group">
              <span class="input-group-addon">Estado</span>
              <input id="estado" name="estado" class="form-control" placeholder="" required=""   type="text" maxlength="30">
           </div>
         </div>
       </div>

       <!-- Select Basic -->
       <div class="form-group">
          <label class="col-md-2 control-label" for="Estado Civil">Estado Civil <h11>*</h11></label>
          <div class="col-md-2">
            <select required id="estadocivil" name="estadocivil" class="form-control">
              <option value=""></option>
              <option value="Solteiro(a)">Solteiro(a)</option>
              <option value="Casado(a)">Casado(a)</option>
              <option value="Divorciado(a)">Divorciado(a)</option>
              <option value="Viuvo(a)">Viuvo(a)</option>
           </select>
         </div>
  
         <!-- Prepended checkbox -->

         <label class="col-md-1 control-label" for="Filhos">Filhos<h11>*</h11></label>
         <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon">     
              <label class="radio-inline" for="radios-0">
              <input type="radio" name="filhos" id="filhos" value="nao" onclick="desabilita('Filhos_qtd')" required>Não</label> 
              <label class="radio-inline" for="radios-1">
              <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('Filhos_qtd')">Sim</label></span>
              <input id="filhosqtd" name="filhosqtd" class="form-control" type="text" placeholder="Quantos?" pattern="[0-9]+$" maxlength="12">
           </div>
         </div>
       </div>


       <!-- Select Basic -->
       <div class="form-group">
    
          <label class="col-md-2 control-label" for="selectbasic">Escolaridade <h11>*</h11></label>
  
          <div class="col-md-3">
            <select required id="escolaridade" name="escolaridade" class="form-control">
              <option value=""></option>
              <option value="Analfabeto">Analfabeto</option>
              <option value="Fundamental Incompleto">Fundamental Incompleto</option>
              <option value="Fundamental Completo">Fundamental Completo</option>
              <option value="Médio Incompleto">Médio Incompleto</option>
              <option value="Médio Completo">Médio Completo</option>
              <option value="Superior Incompleto">Superior Incompleto</option>
              <option value="Superior Completo">Superior Completo</option>
           </select>
         </div>


         <!-- Text input-->

         <label class="col-md-1 control-label" for="profissao">Profissão<h11>*</h11></label>  
         <div class="col-md-4">
         <input id="profissao" name="profissao" type="text" placeholder="" class="form-control input-md" required="" maxlength="30">


         <div class="form-group">
           <div class="col-md-4">
             <label class="col-md-1 control-label" for="Senha">Senha<h11>*</h11></label>
             <input id="senha" name="senha" type="varchar" placeholder="" class="form-control input-md" required="" maxlength="30"> <br>
            </div>
         </div>

         <div id="newpost">
            <div class="form-group">
              <div class="col-md-2 control-label">
      
                <!-- Button (Double) -->
                <div class="form-group">
                  <label class="col-md-2 control-label" for="Cadastrar"></label>
                  <div class="col-md-8">
                    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Enviar Cadastro</button>
                    <button  onclicck="document.location.href = 'Login.php'" name="Cancelar" class="btn btn-danger" type="button">Cancelar </button>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </fieldset>
 </form>
 </div>
</div>
</form>
 
  
  </body>
</html>