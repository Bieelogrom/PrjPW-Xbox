<?php
include('../../../conexaoBanco/conexao.php');
/*echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */
    //VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
    //se colocar aspas simples na área do $_POST, o código leva pro header.
   if($_POST) {
    $iddojogo = $_POST['id_usuarioUp'];
    $querySelect = "DELETE  FROM tbgamepass  WHERE ID_jogo = $iddojogo";
    $resultado = $conn->query($querySelect);
  }
  header('Location: ../altgp.php');
  exit;

?>
