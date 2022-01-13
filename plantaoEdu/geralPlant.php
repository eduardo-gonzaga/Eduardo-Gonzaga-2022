
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Cabin:ital@1&display=swap" rel="stylesheet">

<script>
        function abrirModal() { var myModal = new bootstrap.Modal(document.getElementById('Popup'), focus); myModal.show(); }
    </script>
</head>

    <body onload="abrirModal()">
                <!--COMEÇO DA MODAL :EEEEEEEEEEEEEEEEEE -->
    <div class="modal" tabindex="-1" id="Popup" name="Popup">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Seja Bem-vindo Alunos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><h3>!Atenção ALUNOS!</h3> NÃO DIVULGAR O LINK DO PLANTÃO PARA QUEM NÃO É ALUNO DO TM  </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
                  
                </div>
            </div>
        </div>
    </div>
    <!-- FIM DA MODAL :EEEEEEEEEEEEEEEEEE -->

    <div class="body">
    <div class="card text-white bg-success mb-3" style="max-width: 90rem;">
  <div class="card-header">PLANTÃO-TM</div>
  <div class="card-body">
    <h5 class="card-title">Contagem Regressiva para o plantão:</h5>
    <!-- <p class="card-text">informações......</p> -->
    <div class="cronometro">
    <ul class="Countdown">
        <li>
            <span data-time>00</span>
        <div>Dia(s)</div>
        </li>
        <li>
            <span data-time>00</span>
        <div>Hora(s)</div>
        </li>
        <li>
            <span data-time>00</span>
        <div>Min(s)</div>
        </li>
        <li>
            <span data-time>00</span>
        <div>Seg(s)</div>
        </li>








    </ul>
    <br>
    <br>
    <form method="$_POST" action="geralPlant.php">
   Selecionar Arquivo<input name="arquivo" type="file" enctype="multipart/form-data">
</form> 
</div>
</div>
</div>
<!-- <hr>
<br>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Já Arrumei o Canto de Estudos 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Separei minhas dúvidas para o plantão 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    O café ? Pronto. 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Distrações já tirei . 
  </label>
</div> -->







<script type= "module" src="timeScript.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>

 <!-- Defer: o html carrega primeiro para só depois o Js vim e rodar -->