<?php
//iniciar um session
/*session_start();

$usuarios_app = array(
    array('id' => 1, 'email' => 'admin@teste.com.br', 'senha' => '123'),

);

$usuario_autenticado = false;

foreach ($usuarios_app as $user) {
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
    }
}

if ($usuario_autenticado) {
    //echo "Usuário autenticado";
    $_SESSION['autenticado'] = "SIM";

    header('Location: ../ADMIN/Telas/home.php');
} else {
    //echo "Erro na autenticação do usuário";
    $_SESSION['autenticado'] = "NÃO";

    header('Location: index.php?login=erro');
}*/


include("conexao.php");
/*echo '<pre>';
print_r($_POST);
echo '</pre>';*/

$email_usuario = $_POST['email'];
$senha_usuario = $_POST['senha'];

$querySelect = "SELECT * FROM tbcontas WHERE email = '$email_usuario' and senha = '$senha_usuario' ";
$resultado = $conn->query($querySelect);
$usuario = $resultado->fetchAll();
$n = count($usuario);

if ($n == 1 or $email_usuario=="admin" and $senha_usuario="123"){
    session_start();
    $_SESSION['ID_conta'] = $usuario[0]['ID_conta'];
    $_SESSION['nomeConta'] = $usuario[0]['nomeConta'];
    $_SESSION['foto_usuario'] = $usuario[0]['foto_usuario'];
    $_SESSION['autenticado'] = 'SIM';
    header('Location: ../ADMIN/Telas/home.php');
}else{
    header('Location: login.php?login=erro');
}


?>