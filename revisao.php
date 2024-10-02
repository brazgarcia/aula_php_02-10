<?php

if (isset($_POST['nome'])) {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $numero = isset($_POST['numero']) ? $_POST['numero'] : -1;
    $sorteio = rand(0,10); //Gera um número aleatório de 0 a 10

    if($numero == $sorteio) {
    
        $class = ' text-while bg-success ';
?>
        <div class="alert alert-success" role="alert">
            Você ganhou!
        </div>
<?php
    } else {

        $class = ' text-while bg-danger ';
?>
        <div class="alert alert-danger" role="alert">
            Você perdeu!
        </div> 
<?php 
    }
}

?>



<!doctype html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Bet do Tio Ronan</title>
  </head>

  <body class="container p-5">
    <?php
    if(isset($nome)) {
    ?>    
    
    <h1>Olá, <?= $nome ?></h1>

    <div class="card <?= $class ?> " style="width: 50%;">
        <div class="card-body">
            <div class="card-title">
                <strong>Número sorteado:</strong>
                <?= $sorteio ?>
            </div>
            <div class="card-text">
                <strong>Você apostou em:</strong>
                <?php echo '<span class="badge">' . $numero . '</span>'; ?>
            </div>
        </div>
    </div>
    
    <?php
    }
    ?>


    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    
  </body>
</html>