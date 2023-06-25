<?php
include "../../conexaoBanco/validador_acesso.php";
include "../../conexaoBanco/conexao.php";
$querySelect = "SELECT * FROM tbgamepass";
$resultado = $conn->query($querySelect);
$jogos = $resultado->fetchAll();
$n_jogos = count($jogos);

$querySelect = "SELECT * FROM tbusuarios";
$resultado = $conn->query($querySelect);
$mensagem = $resultado->fetchAll();
$n_mensagem = count($mensagem);

$querySelect = "SELECT * FROM tbcomunidade";
$resultado = $conn->query($querySelect);
$post = $resultado->fetchAll();
$n_post = count($post);


?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="../../PastaCSS/gradientes.css">

    <title>Tela de ADM</title>
</head>


<body style="justify-content: center; align-items: center; height: 100vh ">
<style>
        .cards {
            background-color: #f6cc5c;
        }

        .card-contents {
            padding: 20px;
            color: #fff;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.3s, transform 0.3s;
        }

        .cards:hover .card-contents {
            opacity: 1;
            transform: translateY(0);
        }
</style>
<?php include("cabecalho.php") ?>


    <div class="container-fluid " style="height: 90%;">
        <div class="row h-100">
            <?php include("../../componentes/menu.php") ?>
            <div class="col-md-10  p-4">
                <div class="row align-items-center mb-4">

                    <div class="row align-items-center mb-4 justify-content-around">
                        <div class="card " style="width: 18rem; background-color: #cf262d">
                            <div class="card-body text-light ">
                                <h5 class="card-title ">Catálogo do Gamepass</h5>
                                <p class="card-text fw-bold fs-4"><?= $n_jogos ?></p>
                                <a href="altgp.php" class="btn fw-bold" style="background-color: #f6cc5c; color: white;">Verificar</a>
                            </div>
                        </div>

                        <div class="card cards" style="width: 18rem; background-color: #cf262d">
                            <div class="card-body text-light">
                                <h5 class="card-title ">E-mails</h5>
                                <p class="card-text fw-bold fs-4"><?= $n_mensagem ?></p>
                                <a href="email.php" class="btn fw-bold" style="background-color: #f6cc5c; color: white;">Verificar</a>
                            </div>
                        </div>

                        <div class="card cards" style="width: 18rem; background-color: #cf262d">
                            <div class="card-body text-light">
                                <h5 class="card-title ">Posts</h5>
                                <p class="card-text fw-bold fs-4"><?= $n_post ?></p>
                                <a href="altcom.php" class="btn fw-bold " style="background-color: #f6cc5c; color: white;">Verificar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <script src='../../PastaCSS/personalizar.js'></script>

</body>


</html>