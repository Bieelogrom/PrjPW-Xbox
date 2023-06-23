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

<header class=" border-bottom text-white shadow align-items-center justify-content-center d-flex" style="height: 10%; ">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="home.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
        <img src="../imgs/Xbox.png" width="60" height="60" class="d-inline-block align-top" alt="Xbox">
      </a>
      <div class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ms-3 fw-bold">
      </div>
      <div class="dropdown text-end">
        <a href="#" class="d-block text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
          aria-expanded="false">
          <img src="../ADMIN/Fotos/<?=$_SESSION['foto_usuario']!="" ? $_SESSION['foto_usuario'] : 'perfil.png';?>" alt="mdo" width="62" height="62" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small">
          <li>
            <form action="../ADMIN/Telas/GamePass/registro.php" method="post">
              <input type="hidden" class="form-control" id="id_usuario" name="id_usuario" value="<?=$_SESSION['id_usuario']?>">
              <button type="submit" class="dropdown-item">Perfil</button>
            </form>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="../conexaoBanco/logoff.php">Sair</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>