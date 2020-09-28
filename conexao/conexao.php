<?php


  $hostname = "localhost";
  $user = "root";
  $password = "";
  $database = "cadastro";
  $conexao = mysqli_connect($hostname, $user, $password, $database);

  mysql_select_db("cadastro");

  if (!$conexao) 
  {
      
      echo "Falha na conexão com o Banco de Dados";
  }
?>