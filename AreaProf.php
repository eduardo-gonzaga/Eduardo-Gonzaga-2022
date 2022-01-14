<?php
if (session_status() !== PHP_SESSION_ACTIVE) { //Verificar se a sessão não já está aberta.
    session_cache_expire(60); //Definindo o prazo para a cache expirar em 60 minutos.
    session_start(); //inicia a sessão.
   
    }
    $ID_PROF = $_SESSION["USUARIO"]["ID_PROF"]; 
   
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <title>Area do Professor</title>


    <script>

        //Aqui uso o evento key up para comecar a pesquisar, se valor for maior q 0 ele faz a pesquisa
        function enviar() {
            load_("acao=alunos&pesquisa=alunos&pro_id=<?php echo  $ID_PROF ?>", 'FomularioAjax.php', '#alunos_');
            load_("acao=materias&pesquisa=materias&pro_id=<?php echo  $ID_PROF ?>", 'FomularioAjax.php', '#prof_');
        };

    </script>


    <script type="text/javascript">

        function PeganNome(){
            var select   = document.getElementById('alunos_');
            var option   = select.options[select.selectedIndex];
            var Nome = option.text;
            $('#NOTA_NOME').val(Nome); 
        };

        function PeganMateria(){
            var select   = document.getElementById('prof_');
            var option   = select.options[select.selectedIndex];
            var Nome = option.text;
            $('#NOTA_MATERIA').val(Nome); 
        }
        /* Mostra a Imagem de Carregamento */
        function loading_show(div) {
            $(div).html("<img src='' style=width:'5px'; height:'3px'>").fadeIn('fast');
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
                beforeSend: function () { //Chama o loading antes do carregamento
                    if (div != "#null") { loading_show('#loading'); }
                },
                data: val,
                success: function (msg) {
                    if (div != "#null") { loading_hide('#loading'); } /* Oculta a imagem de Carregamento */
                    $(div).html(msg).fadeIn(); /* Mostra o resultado na div especificada */
                    console.log(msg);
                    console.log(val);
                    console.log(pag);
                }
            });
        }
    </script>

</head>

<body onload="enviar()" >

    <div id="loading" name="loading"></div>
    <div class="container mt-3">
        <h2>Professor:  <?php echo  $_SESSION["USUARIO"]["usua"] ; ?></h2>
        <p>Insira Abaixo:</p>
        <form action="notas.php" method="POST" name="entrar" id="entrar">
        <input type="text" class="form-control mt-3" placeholder="Bimestre 1" name="NOTA_B1" id="NOTA_B1" step=".00"  />
        <input type="text" class= "form-control mt-3" placeholder="Bimestre 2" name="NOTA_B2" id="NOTA_B2" step=".00"/>
        <input type="text" class= "form-control mt-3" placeholder="Bimestre 3" name="NOTA_B3" id="NOTA_B3" step=".00"/>
        <input type="date" class="form-control mt-3" placeholder="Data" name="NOTA_DATA" id="NOTA_DATA"/>
        <select name="alunos_" id="alunos_" class="form-control mt-3" onclick="PeganNome()"></select>
        <input type="text" class="form-control mt-3" placeholder="Nome do Aluno"  id="NOTA_NOME" name="NOTA_NOME"/>
        <select name="prof_" id="prof_" class="form-control mt-3" onclick="PeganMateria()"></select>
        <input type="text" class="form-control mt-3" placeholder="Materia"  id="NOTA_MATERIA" name="NOTA_MATERIA"/>
        
    
         <br>
        <button type="submit" class="btn btn-primary" id="entrarP" name="entrarP" >Registrar</button>
       

            <!-- <button type="button" class="btn btn-primary" onclick="enviar()">Registrar</button> -->
    </div>

    </form>


    


</body>

</html>

