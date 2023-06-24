<?php
    /* echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */

include('../../../conexaoBanco/conexao.php');

//VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
if ($_POST) {
    //passando todos os itens do post para as sua variaveis
    $Id_POST = trim($_POST['id_usuario']);
    $nomePost = trim($_POST['nomePost']);
    $tipoDoPost = trim($_POST['motivodocontato']);
    $descricaoPost = trim($_POST['descPost']);
    ;


    if (is_numeric($Id_POST)) {
        $sql = "
        INSERT INTO tbcomunidade (nomePost , tipoPost , descPost ) VALUES
        (
            '$nomePost',
            '$tipoDoPost',
            '$descricaoPost'

        )
        ";
    }
    $query = $conn->prepare($sql);
    $query->execute();
}
header('Location: ../altcom.php');
exit;



?>