<?php
include "../../conexaoBanco/validador_acesso.php";
include "../../conexaoBanco/conexao.php";
$querySelect = "SELECT * FROM tbgamepass";
$resultado = $conn->query($querySelect);
$jogos = $resultado->fetchAll();
$n_jogos = count($jogos);


?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../../img/logo.png" />
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
    <?php include "../../componentes/cabecalho.php" ?>


    <div class="container-fluid " style="height: 90%;">
        <div class="row h-100">
            <?php include("../../componentes/menu.php") ?>
            <div class="col-md-10  p-4">
                <div class="row align-items-center mb-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../../Bootstrap5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src='../../js/personalizar.js'></script>

</body>

</html>