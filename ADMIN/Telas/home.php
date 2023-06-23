<?php
include "../../conexaoBanco/validador_acesso.php";
include "../../conexaoBanco/conexao.php";
$querySelect = "SELECT * FROM tbgamepass";
$resultado = $conn->query($querySelect);
$jogos = $resultado->fetchAll();
$n_jogos = count($jogos);

$querySelect = "SELECT * FROM tbmensagens";
$resultado = $conn->query($querySelect);
$mensagem = $resultado->fetchAll();
$n_mensagem = count($mensagem);


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
    <link rel="stylesheet" href="../../PastaCSS/gradientes.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
    <?php include "../../componentes/cabecalho.php" ?>


    <div class="container-fluid " style="height: 90%;">
        <div class="row h-100">
            <?php include("../../componentes/menu.php") ?>
            <div class="col-md-10  p-4">
                <div class="row align-items-center mb-4 justify-content-around">
                    <div class="card sunset" style="width: 18rem;">
                        <div class="card-body text-light">
                            <h5 class="card-title ">Catálogo do Gamepass</h5>
                            <p class="card-text fw-bold fs-4"><?=$n_jogos?></p>
                            <a href="altgp.php" class="btn btn-primary">Verificar</a>
                        </div>
                    </div>

                    <div class="card sunset" style="width: 18rem;">
                        <div class="card-body text-light">
                            <h5 class="card-title ">Mensagens</h5>
                            <p class="card-text fw-bold fs-4"><?=$n_mensagem?></p>
                            <a href="email.php" class="btn btn-primary">Verificar</a>
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