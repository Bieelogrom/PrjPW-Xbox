<?php

/*session_start();
unset($_SESSION['login']);
unset($_SESSION['senha']);
session_destroy();
header('Location: login.php')*/


if(isset($_SESSION['foto_usuario'])) {
  $foto_usuario = $_SESSION['$foto_usuario'];
}

?>



<header class="  text-white  align-items-center justify-content-center d-flex"
  style="height: 12%; background-color: #009fb7;" >
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="../index.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
        <img src="https://i.pinimg.com/564x/01/d3/f1/01d3f16b2bdab39a69d2e0f2019dd696.jpg" width="40" height="40" class="d-inline-block align-top" alt="">
      </a>
      <div class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ms-3 fw-bold">
        Microsoft_ADM
      </div>
      <div class="dropdown text-end">
        <a href="../" class="d-block text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
          aria-expanded="false">
          <img src="../ADMIN/Fotos/<?=$_SESSION['$foto_usuario']!="" ? $_SESSION['$foto_usuario'] : 'perfil.png';?>"
            alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small">
          <li>
            <form action="../Usuario/registro.php" method="post">
              <input type="hidden" class="form-control" id="id_usuario" name="id_usuario">
              <button type="submit" class="dropdown-item">Perfil</button>
            </form>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="../conexaoBanco/logoff.php">Sign out</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>