<?php
    /* echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */

    function formataNome(){
        echo time()-5;
    }

include('../../../conexaoBanco/conexao.php');

//VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
if ($_POST) {
    //passando todos os itens do post para as sua variaveis
    $publi = trim($_POST['id_usuario']);
    $imgUm = trim($_POST['img1']);
    $imgDois = trim($_POST['img2']);
    $imgTres = trim($_POST['img3']);
    ;

    

    echo empty($_FILES['foto1']['size']);
    //a foto vem com a extenção $_FILES
    if (empty($_FILES['foto1']['size']) != 1) {
        //pegar as extensão do arquivo
        $extensao = strtolower(substr($_FILES['foto1']['name'], -4));
        if ($imgUm == "") {
            //Ciando um nome novo
            $imgUm = md5(time()-6) . $extensao;
        }
        //definindo o diretorio
        $diretorio = "../Fotos/";
        //juntando o nome com o diretorio
        $nomeCompleto1 = $diretorio . $imgUm;
        //efetuando o upload
        move_uploaded_file($_FILES['foto1']['tmp_name'], $nomeCompleto1);
    }

    echo empty($_FILES['foto2']['size']);
    //a foto vem com a extenção $_FILES
    if (empty($_FILES['foto2']['size']) != 1) {
        //pegar as extensão do arquivo
        $extensao = strtolower(substr($_FILES['foto2']['name'], -4));
        if ($imgDois == "") {
            //Ciando um nome novo
            $imgDois = md5(time()-2) . $extensao;
        }
        //definindo o diretorio
        $diretorio = "../Fotos/";
        //juntando o nome com o diretorio
        $nomeCompleto2 = $diretorio . $imgDois;
        //efetuando o upload
        move_uploaded_file($_FILES['foto2']['tmp_name'], $nomeCompleto2);
    }

    echo empty($_FILES['foto3']['size']);
    //a foto vem com a extenção $_FILES
    if (empty($_FILES['foto3']['size']) != 1) {
        //pegar as extensão do arquivo
        $extensao = strtolower(substr($_FILES['foto3']['name'], -4));
        if ($imgTres == "") {
            //Ciando um nome novo
            $imgTres = md5(time()-4) . $extensao;
        }
        //definindo o diretorio
        $diretorio = "../Fotos/";
        //juntando o nome com o diretorio
        $nomeCompleto3 = $diretorio . $imgTres;
        //efetuando o upload
        move_uploaded_file($_FILES['foto3']['tmp_name'], $nomeCompleto3);
    }




    if (is_numeric($publi)) {
        $sql = "
        UPDATE tbpublicidade SET
            img1 = '$imgUm',
            img2 = '$imgDois',
            img3 = '$imgTres'
        WHERE pbIndex = $publi
        ";
    } else {
        $sql = "
        INSERT INTO tbpublicidade (img1 , img2 , img3) VALUES
        (
            '$imgUm',
            '$imgDois',
            '$imgTres'
        )
        ";
    }
    $query = $conn->prepare($sql);
    $query->execute();
}
header('Location: ../altpub.php');
exit;



?>