<?php

include('../../../conexaoBanco/conexao.php');
/* echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */
//VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
if ($_POST) {
    $id_usuario = $_POST['id_usuario'];
    $querySelect = "SELECT * FROM tbpublicidade  WHERE pbIndex  = $id_usuario";
    $resultado = $conn->query($querySelect);
    $publi = $resultado->fetch();

    $id_usuario = $publi["pbIndex"];
    $img1 = $publi["img1"];
    $img2 = $publi["img2"];
    $img3 = $publi["img3"];

} else {
    $id_usuario = "";
    $img1 = "";
    $img2 = "";
    $img3 = "";
}

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Publicidade</title>
    <link rel="stylesheet" href="../../../PastaCSS/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../../img/logo.png" />
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
    <?php
    include('../cabecalho.php');
    ?>
    <div class="container-fluid " style="height: 90%;">
        <div class="row h-100">
            <?php
            include('../../../Componentes/menu.php');
            ?>
            <div class="col-md-10  p-4">
                <div class="card">
                    <form method="post" action="salvar.php" enctype="multipart/form-data">
                        <div class="card-header ">
                            <strong>ALTERAR PUBLICIDADE</strong>
                        </div>

                        <div class="card-body row " style="align-items: center; justify-content: center;">

                            <div class="col-md-4 mt-5">
                                <label for="foto1">Primeira Imagem
                                <input type="file" id="foto1" name="foto1" accept="image/*" class="custom-file-input">
                                </label>
                            </div>
                            <div class="col-md-4 mt-5">
                                <label for="foto2">Segunda Imagem
                                <input type="file" id="foto2" name="foto2" accept="image/*" class="custom-file-input">
                                </label>
                            </div>
                            <div class="col-md-4 mt-5">
                            <label for="foto2">Terceira Imagem
                                <input type="file" id="foto2" name="foto3" accept="image/*" class="custom-file-input">
                                </label>
                            </div>

                            <input type="hidden" id="foto1" name="foto1" value="<?= $foto_usuario ?>">
                        </div>
                        <div class=" text-end p-3">
                            <input type="hidden" id="id_usuario" name="id_usuario" value="<?= $id_usuario ?>">
                            <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="../altpub.php">Voltar</i></a>
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