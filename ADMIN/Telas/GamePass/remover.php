<?php
include('../../../conexaoBanco/conexao.php');
/* echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */
    //VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
   if($_POST) {
    $id_usuario = $_POST['id_usuarioUp'];
    $querySelect = "DELETE  FROM tbgamepass  WHERE ID_jogo = $IdJogo";
    $resultado = $conn->query($querySelect);
  }
  header('Location: ./');
  exit;

?>