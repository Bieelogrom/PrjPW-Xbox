<?php
/*     echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */

include('../../../conexaoBanco/conexao.php');

//VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
if ($_POST) {
    //passando todos os itens do post para as sua variaveis
    $Id_jogo = trim($_POST['id_usuario']);
    $nomeJogo = trim($_POST['nomejogo']);
    $generoJogo = trim($_POST['genero']);
    $descricaoJogo = trim($_POST['descricao']);
    $capaJogo = trim($_POST['foto_usuario']);
    ;




    echo empty($_FILES['foto']['size']);
    //a foto vem com a extenção $_FILES
    if (empty($_FILES['foto']['size']) != 1) {
        //pegar as extensão do arquivo
        $extensao = strtolower(substr($_FILES['foto']['name'], -4));
        if ($capaJogo == "") {
            //Ciando um nome novo
            $capaJogo = md5(time()) . $extensao;
        }
        //definindo o diretorio
        $diretorio = "../../Fotos/";
        //juntando o nome com o diretorio
        $nomeCompleto = $diretorio . $capaJogo;
        //efetuando o upload
        move_uploaded_file($_FILES['foto']['tmp_name'], $nomeCompleto);
    }

    if (is_numeric($Id_jogo)) {
        $sql = "
        UPDATE tbgamepass SET
            nomeJogo = '$nomeJogo',
            generoJogo = '$generoJogo',
            descricaoJogo = '$descricaoJogo'
            capaJogo = '$capaJogo'
        WHERE ID_jogo = $Id_jogo
        ";
    } else {
        $sql = "
        INSERT INTO tbgamepass (nomeJogo , generoJogo , descricaoJogo , capaJogo ) VALUES
        (
            '$nomeJogo',
            '$generoJogo',
            '$descricaoJogo',
            '$capaJogo'
        )
        ";
    }
    $query = $conn->prepare($sql);
    $query->execute();
}
header('Location: ../altgp.php');
exit;



?>