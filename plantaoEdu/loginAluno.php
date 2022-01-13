<?php
include_once 'conexaodb.php';
  $nome = isset( $_POST['nome_'] ) ? $_POST['nome_'] : '' ;
  $turma =  isset($_POST['turma_'] ) ? $_POST['turma_'] : ''; 
  $entrar= isset( $_POST['entrar'] )? $_POST['entrar'] : '';
  $mysqli = new mysqli('127.0.0.1','root','','plantao_edu');

  if (isset($entrar)){
    $verifica = mysqli_query($mysqli,"select nome_,turma_ from usuarios where nome_ = '$nome' and turma_='$turma'");
  
    $valor = 0;
    $valor = $verifica->num_rows;
    $array = mysqli_fetch_array($verifica);

    if ($valor > 0){ 
      $nome  = $array['nome_'];
      $turma = $array['turma_'];
      setcookie("nome_",$nome);
      header("Location:Principal.php");
    }
     else
    {
      echo "<script language='javascript' type='text/javascript'>
             alert('Login e/ou senha incorretos');
             window.location.href='loginAluno.html';
             </script>";
      
    }


}


?>