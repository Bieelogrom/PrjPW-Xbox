<?php
include('../../../conexaoBanco/conexao.php');
/*echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */
    //VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
    //se colocar aspas simples na área do $_POST, o código leva pro header.
   if($_POST) {
    $iddoPost = $_POST['id_apagarItem'];
    $querySelect = "DELETE  FROM tbusuarios  WHERE ID_usuarios = $iddoPost";
    $resultado = $conn->query($querySelect);
  }
  header('Location: ../email.php');
  exit;

?>