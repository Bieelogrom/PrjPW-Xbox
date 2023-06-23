<?php 

    //destruir a SESSION
   // session_destroy();

    //forçar um redirecionamento para a página index
   // header('Location: index.php');

session_start();
unset($_SESSION['login']);
unset($_SESSION['senha']);
session_destroy();
header('Location: ../ADMIN/Telas/index.php')



?>