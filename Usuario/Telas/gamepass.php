<?php 

include('../../conexaoBanco/conexao.php');

$querySelect = "SELECT * FROM tbgamepass";
$resultado = $conn->query($querySelect);
$jogos = $resultado->fetchAll();

?>


<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Biblioteca de jogos do Xbox Game Pass | Xbox</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="../../PastaCSS/gradientes.css">
  <link rel="stylesheet" href="../../PastaCSS/configsEAfins.css">
  
</head>

<body class="midnight-city">

  <header>
    <?php include "../../componentes/barradeNav.php" ?>
  </header>


  <main class="d-flex flex-wrap mx-auto p-4 grid gap-3 flex-grow-1">
  <?php foreach ($jogos as $jogo) { ?>
    </div>
    <div class="card card_configs" style="width: 20rem;">
      <img src="../../ADMIN/Fotos/<?= $jogo[4] ?>" width="300"  height="300" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="fw-bold fs-4"><?= $jogo[1] ?></p>
        <p class="card-text"><?= $jogo[3] ?></p>
      </div>
    </div>
    <?php } ?>

  </main>











  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>