<?php

include('../../../conexaoBanco/conexao.php');
/* echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */
//VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
if ($_POST) {
    $id_usuario = $_POST['id_usuario'];
    $querySelect = "SELECT * FROM tbcomunidade  WHERE ID_post = $id_usuario";
    $resultado = $conn->query($querySelect);
    $contato = $resultado->fetch();

    $id_usuario = $contato["ID_post"];
    $nome_post = $contato["nomePost"];
    $tipoDePost = $contato["tipoPost"];
    $descDoPost = $contato["descPost"];
} else {
    $id_usuario = "";
    $nome_post = "";
    $tipoDePost = "";
    $descDoPost = "";
}

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Escola Virtual - Registro</title>
    <link rel="stylesheet" href="../../../PastaCSS/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../../img/logo.png" />
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
    <?php
    include('../../../Componentes/cabecalho.php');
    ?>
    <div class="container-fluid " style="height: 90%;">
        <div class="row h-100">
            <?php
            include('../../../Componentes/menu.php');
            ?>
            <div class="col-md-10  p-4">
                <div class="card">
                    <form method="post" action="salvar.php" enctype="multipart/form-data">
                        <div class="card-header">
                            <strong>INFORMAÇÕES DO DEPOIMENTO</strong>
                        </div>
                        <div class="card-body row " style="align-items: center; justify-content: center;">
                            <div class=" col-md-10">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="recipient-name" class="col-form-label">Nome do usuário:</label>
                                        <input type="text" class="form-control" name="nomePost" maxlength="50" value="<?= $nome_post ?>">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="recipient-name" class="col-form-label">Tipo de depoimento:</label>
                                        <select name="motivodocontato" class="form-control">
                                            <option value="Comentário para comunidade" selected>Comentário</option>
                                            <option value="Sugestão de jogo">Sugestão de jogo</option>
                                            <option value="Reclamações">Reclamações</option>
                                            <option value="Elogios">Elogios</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="row  ">
                                    <div class="col-md-9">
                                        <label for="recipient-name" class="col-form-label">Descrição:</label>
                                        <input class="form-control" type="text" name="descPost" value="<?= $descDoPost ?>">
                                    </div>
                                </div>
                            </div>
                            <div class=" text-end p-3">
                                <input type="hidden" id="id_usuario" name="id_usuario" value="<?= $id_usuario ?>">
                                <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="../altcom.php">Voltar</i></a>
                                <input type="submit" class=" btn btn-success" value="Salvar">
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../../Bootstrap5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src='../../../PastaCSS/personalizar.js'></script>

</body>

</html>