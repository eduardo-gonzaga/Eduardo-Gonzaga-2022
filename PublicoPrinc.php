<?php if (session_status() !== PHP_SESSION_ACTIVE) { //Verificar se a sessão não já está aberta.
//  echo "<script>window.location.href='erro.html';
// </script>";
}else{
     echo "<script>window.location.href='erro.html';
</script>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola Aprender</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">



    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->
    <script>
        function abrirModal() { var myModal = new bootstrap.Modal(document.getElementById('Popup'), focus); myModal.show(); }

    </script>

</head>
<!-- Página para o público  -->
<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
    }

    /* Style the header */
    .header {
        background-color: #f1f1f1;
        padding: 20px;
        text-align: center;
    }

    /* Style the top navigation bar */
    .topnav {
        overflow: hidden;
        background-color: #333;
    }

    /* Style the topnav links */
    .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }


    /* Change color on hover */
    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    .column {
        float: left;
        width: 33.33%;
        padding: 15px;
    }



    .row:after {
        content: "";
        display: table;
        clear: both;

    }


    @media screen and (max-width:600px) {
        .column {
            width: 100%;
        }
    }

    /* 
    .row {
        margin: -4%;
    } */
</style>

<body onload="abrirModal()">



    <div class="modal" tabindex="-1" id="Popup" name="Popup">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Seja Bem-vindo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Esse site contém as informações da Escola para o público, alunos e professores</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-sm bg-primary bg-gradient navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand">Escola Lorem</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse float-end" id="collapsibleNavbar">
                <ul class="navbar-nav float-right">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#sobreNos">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#infor">Mais informações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#localizar">Localização</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="btn btn-warning" href="#" role="button" data-bs-toggle="dropdown">Portal
                            Acadêmico </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="loginP.html">Professor</a></li>
                            <li><a class="dropdown-item" href="loginA.html">Aluno(a)</a></li>
                        
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Final do Cabecalho  -->
    <!-- Carrosel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/PlaygroundEscola.jpg" alt="Los Angeles" class="d-block" style="width:100%">
                <div class="carousel-caption bg-primary bg-gradient">
                    <h1>Melhor ambiente para seu filho!</h1>

                </div>
            </div>
            <div class="carousel-item">
                <img src="img/labo.jpg" alt="Chicago" class="d-block" style="width:100%">
                <div class="carousel-caption bg-primary bg-gradient">
                    <h1>Aulas em laboratorio</h1>

                </div>
            </div>
            <div class="carousel-item ">
                <img src="img/escol3.jpg" alt="New York" class="d-block" style="width:100%">
                <div class="carousel-caption bg-primary bg-gradient">
                    <h1>Ensino de qualidade</h1>

                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <br>
    <br>

    <!-- Sobre nós -->
    <div class="form-row" id="sobreNos">
        <table>
            <tr>
                <td>
                    <img class="imgem" src="img/sobrenos.jpg">
                </td>
                <td
                    style="text-align: justify; vertical-align: middle; padding: 10%; font-family: Copperplate, Papyrus, fantasy;">
                    <h1>Sobre nossa Escola</h1>
                    <p>Estamos de portas abertas, com uma estrutura completa e ensino focado em valores que desenvolvem
                        e
                        preparam as crianças, desde a Educação Infantil, para esse novo mundo.
                        São novos métodos de ensino aliados à tradição de educar pensando numa formação sólida, humana e
                        de
                        qualidade.
                        Venha para a Escola Lorem e prepare-se para ganhar o mundo.
                        Com uma história de 20 anos a Nossa Escola adquiriu um trabalho de excelência em educação
                        infantil, ou seja, somos especialistas nessa área. Nosso currículo é diferenciado, pois é
                        elaborado para respeitar e atender devidamente essa faixa etária a qual sabemos que é
                        fundamental para o desenvolvimento emocional e cognitivo de todo ser humano.
                    </p>
                </td>
            </tr>
        </table>

    </div>

    <!-- Sobre nós (final)-->

    <div id="infor" class="container mt-5">
        <div class="row">

            <div class="col-sm-4 ">
                <h2>Matriculos Abertas</h2>
                <img class="img-fluid h-50" src="img/matriculas.jpg">
            </div>

            <div class="col-sm-4">
                <h2>Bolsas de Estudo</h2>
                <img class="img-fluid h-50" src="img/bolsa.jpg">
            </div>

            <div class="col-sm-4">
                <h2>Material Utilizado</h2>
                <img class="img-fluid h-50" src="img/livrosEscola.jpg">
            </div>

        </div>
    </div>
    <div class=" mx-auto" align="center">
        <iframe id="localizar" width="800px" height="250px"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15925.782738272452!2d-38.56365647365583!3d-3.712514394032243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c747ddecb1c6cf%3A0x5269afb364c3b488!2sEscola%20de%20Aprendizes%20Marinheiros%20do%20Cear%C3%A1!5e0!3m2!1spt-BR!2sbr!4v1636745564849!5m2!1spt-BR!2sbr"
            allowfullscreen="" loading="lazy"></iframe>
    </div>
    <footer class="bg-primary text-light">
        </div>
        <div class="text-center" style=" padding: 20px;">
            &copy 2010 Todos os direitos reservados <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram"
                viewBox="0 0 16 16">
                <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook"
                viewBox="0 0 16 16">
                <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
            </svg>
        </div>
    </footer>
    <a href="https://api.whatsapp.com/send?phone=5519999999999&text=Texto%20aqui" target="_blank"
        style="position:fixed;bottom:20px;right:30px;">
        <svg enable-background="new 0 0 512 512" width="50" height="50" version="1.1" viewBox="0 0 512 512"
            xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104  l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z"
                fill="#4CAF50" />
            <path
                d="m405.02 361.5c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.62-127.46-112.58-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016 0.16 8.576 0.288 7.52 0.32 11.296 0.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744s-7.36 7.68-11.136 12.352c-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z"
                fill="#FAFAFA" />
        </svg>
    </a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</body>

</html>
<?php

?>