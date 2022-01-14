<?php
 if (session_status() !== PHP_SESSION_ACTIVE) { //Verificar se a sessão não já está aberta.
    session_cache_expire(); //Definindo o prazo para a cache expirar em 60 minutos.
    session_start(); //inicia a sessão.

  $id = session_id(); 
//session_unset(); session_destroy(); 
  }

  
   date_default_timezone_set('America/Sao_Paulo'); 

  $login_cookie = $_SESSION["USUARIO"]["ALU_NOME"];

    if(isset($login_cookie)){
      
      echo"Bem-Vindo, $login_cookie  <i class='glyphicon glyphicon-user'></i> <br>";
      echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
    //   echo "<script> alert('$login_cookie')</script>";
      // echo "<script>document.getElementById('BVAluno').innerHTML =  'bem vindo $login_cookie' ;</script>" ;
      
      
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
      echo"<br><a href='loginA.html'>Faça Login</a> Para ler o conteúdo";
    }
 

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Aluno</title>
    
    <script>
        function abrirModal() { var myModal = new bootstrap.Modal(document.getElementById('modal'), focus); myModal.show(); }
    
    </script>
    <script type="text/javascript">

/* Mostra a Imagem de Carregamento */
function loading_show(div) {
  $(div).html("<img src='img/imagens-e-gifs-de-loading-4.gif' style=width:'5px'; height:'3px'>").fadeIn('fast'); 
}

/* Oculta a Imagem de Carregamento */
function loading_hide(div) {
  $(div).fadeOut('fast');  
}

/* aqui a funcao ajax que busca os dados em outra pagina do tipo html, nao é json */
function load_(val, pag, div) {
  $.ajax({
    type: 'POST',
    dataType: 'html',
    url: pag,
    beforeSend: function() { //Chama o loading antes do carregamento
     if (div != "#null"){ loading_show(div); }
    },
    data: val,
    success: function(msg) {
     if (div != "#null"){ loading_hide(div); } /* Oculta a imagem de Carregamento */
      $(div).html(msg).fadeIn(); /* Mostra o resultado na div especificada */        
      console.log(msg); 
      console.log(val); 
      console.log(pag); 
    }
  });
}
</script>


</head>
<style>
   body{

         background-color: #fff;
         margin: 0;
        padding: 0;
        /* background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
        width: 100%;     
        margin: 0; */
       font-family:  "Roboto", sans-serif;   
  } 


    .sidebar{
      background:  #0C0D11 ;
          margin-top: 8px;
          padding-top: 30px;
          position: fixed;
          left: 0;
          width: 250px;
          height: 100%;
          transition: 0.5s;
          transition-property:left;
    }
    .sidebar a{
        color: #fff;
        display: block;
        width: 100%;
        line-height: 60px;
        text-decoration: none;
        padding-left: 10px;
        box-sizing: border-box;
        transition: 0.5s;
        transition-property:background;   
    }
    .sidebar a:hover{
        background: #0C4AE3  ;
     

    }
    .sidebar i{
      padding-right: 1px;
    }
    label #sb_{
        z-index: 1;
        color: #fff;
        position:fixed;
        cursor: pointer;
        left: 25px;
        font-size:20px;
        margin: 5px 0;
        transition: 0.5s;
        transition-property:color;
    }
    label #sb_:hover{
      color:#000000;
    }
    #box:checked ~.sidebar{
      left: -300px;
    }
    #box:checked ~.sidebar a span{
      display:none;
      
    }
    #box:checked ~.sidebar a{
      font-size:20px;
      margin-left: 170px;
      width: 80px;
    }
    #box{
      display:none;
      
    }
    .content{
      padding: 5px;
      margin-left:800px;
      background-position:center;
      background-size: cover;
      transition: 0.5s;

      
    
    }
    #box:checked ~ .content{
          margin-left: 10px;
    }
    header{
      position:fixed;
      background:#AEB6BF;
      padding:20px;
      width: 100%;
      height: 58px;
      margin-top:-50px;
    }
    h3{
        margin-left: 50px;
    }
  </style>


<!-- <input type="checkbox" id="box"> -->
<!-- <label for="box">
  <i class="fas fa-bars" id="sb_" ></i> -->
  <body>
    <!-- Box para o sidebar -->
    <input type="checkbox" id="box">
    <!-- fimmmm -->
                          <!-- Começo da header : header é o cabeçalho da página -->
       <header>
       <label for="box">
                <i class="fas fa-bars" id="sb_" ></i>
                </label> 
                <div class="CabecalhoText">
                  <h3 class="textAluno"><?php echo $login_cookie; ?><i class="fas fa-user-graduate"></i></h3> 
                 </div>
              
        </header>
                            <!-- fim da header :E -->

                        <!-- começo do sidebar : barra lateral -->
        <div class="sidebar">
                          <ul>
                              <i>
                              <a  href="abaluno.php?pag=1&acao=teste"><i class="fas fa-folder-open"></i> Boletim</a>
                              </i>
                              <i>
                                  <a  href="abaluno.php?pag=2&acao=teste"><i class="fas fa-user"></i> Perfil</a>
                              </i>
                              <i>
                              <a href="abaluno.php?pag=3&acao=teste"><i class="fas fa-chart-line"></i> Desempenho</a> 
                              </i>
                          </ul>
                      </div>
                                   <!-- fim sidebar :E  -->
                                   
              <!-- Parte central :E -->
              <div class="content">
             
              <div class="card" style="width: 18rem; margin-top:20px; border-radius:5px;">
              <div class="shadow-sm p-3 mb-5 bg-body rounded">
  <img src="img/provas.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Simulados 2022</h5>
    <p class="card-text bg-danger" >Não deixe de fazer os simulados!</p>
    <a href="#" class="btn btn-primary">Simulados</a>
  </div>
  </div>
  </div>

  </div>
           



      <!-- Div final -->
    
        <!--fim da parte central  -->
    

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

</body>

</html>






<?php 

$link = isset( $_GET['pag'] ) ? $_GET['pag'] : 0 ;
$acao = isset( $_GET['acao'] ) ? $_GET['acao'] : '' ;

/*echo $link;*/

  $page[0] = "bemvindoAluno.php";
  $page[1] = "boletimAluno.php";
  $page[2] = "meusDados.php";
  $page[3] = "graficoDesempenho.php";

 

 if(!empty($acao) && !empty($link)){
  if ( file_exists( $page[$link] ) ){
   include $page[$link]; 
   echo "<script>abrirModal()</script>";

  }
   else
  {
   echo "erro"; 
  }

 }
 else
 {
  include $page[0]; 
  echo "<script>abrirModal()</script>";

 }

?>
