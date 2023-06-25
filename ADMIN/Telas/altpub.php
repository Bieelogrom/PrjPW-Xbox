<?php
include "../../conexaoBanco/validador_acesso.php";

include('../../conexaoBanco/conexao.php');

$querySelect = "SELECT * FROM tbpublicidade";

$resultado = $conn->query($querySelect);

$publicidade = $resultado->fetchAll();


?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Publicidade</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../../img/logo.png" />
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">

    <?php include("cabecalho.php") ?>
    <!-- cabeçalho -->
    <div class="container-fluid " style="height: 90%;">
        <div class="row h-100">
            <!-- depoimento -->
            <?php include("../../componentes/menu.php") ?>
            <div class="col-md-10  p-4">
                <div class="row align-items-center mb-4">
                    <div class="col fs-3 fw-semibold">
                       Alterar Publicidade
                    </div>
                </div>
                <div class=" row">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="col-md-1">Publicidade</th>
                                <th class="col-md-1">Imagem-1</th>
                                <th class="col-md-1">Imagem-2</th>
                                <th class="col-md-1">Imagem-3</th>
                                <th class="text-center col-md-1">Alterar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($publicidade as $pbulicidade) { ?>
                                <tr>
                                    <td>
                                        <?= $pbulicidade[0] ?>
                                    </td>
                                    <td>
                                        <?= $pbulicidade[1] ?>
                                    </td>
                                    <td>
                                        <?= $pbulicidade[2] ?>
                                    </td>
                                    <td>
                                        <?= $pbulicidade[3] ?>
                                    </td>
                                    <td class="text-center">
                                    <form action="publicidade/registrar.php" method="POST">
                                        <input type="hidden" class="form-control" id="id_usuario" name="id_usuario" value="<?= $pbulicidade[0] ?>">
                                        <button type="submit" class="dropdown-item"><i class="fas fa-edit fa-lg text-secondary"></i>
                                        </button>
                                    </form>
                                    </td>
                                </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalExcluir" role="dialog">
        <div class=" modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body  ">
                    <form action="GamePass/remover.php" method="POST">
                        <input type="hidden" class="form-control" id="id_usuarioUp" name="id_usuarioUp">
                        <p>Tem certeza que deseja excluir o item selecionado?</p>
                        <div class=" text-end">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Não</button>
                            <button type="submit" class="btn btn-warning ms-3">Sim </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='../../PastaCSS/personalizar.js'></script>

</body>

</html>