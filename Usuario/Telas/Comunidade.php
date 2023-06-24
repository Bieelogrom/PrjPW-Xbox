<?php 

include('../../conexaoBanco/conexao.php');

$querySelect = "SELECT * FROM tbcomunidade";
$resultado = $conn->query($querySelect);
$contatos = $resultado->fetchAll();

?>


<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Comunidade</title>
  <link rel="stylesheet" href="../../PastaCSS/gradientes.css">
  <link rel="stylesheet" href="../../PastaCSS/configsEAfins.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="midnight-city">

  <header>
    <?php include "../../componentes/barradeNav.php" ?>
  </header>


  <main class="d-flex flex-wrap mx-auto p-4 grid gap-3 flex-grow-1">
  <?php foreach ($contatos as $contato ) { ?>
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $contato[1]?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $contato[2]?></h6>
        <p class="card-text"><?= $contato[3]?></p>
      </div>
    </div>
    <?php } ?>
  </main>












  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>