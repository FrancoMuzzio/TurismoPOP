<header>
  <nav class="navbar sticky-top navbar-expand-lg navbar-info bg-info">
    <div class="container-fluid">
      <a class="navbar-brand navbar-dark fw-bold" href="/index.php">
        <img src="/assets/img/logos/logo_trans_blanco.png" alt="Bootstrap" width="30" height="24"> TurismoPOP
      </a>
      <button class="navbar-toggler navbar-info" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
<?php
if (isset($_SESSION['loggedUser'])) {
  echo '<li class="nav-item">';
  echo '<a class="nav-link text-white" href="/pages/auth/logout.php">Cerrar sesión</a>';
  echo '</li>';
}else{
  echo '<li class="nav-item">';
  echo '<a class="nav-link text-white" href="/pages/auth/login.php">Iniciar sesión</a>';
  echo '</li>';
  echo '<li class="nav-item">';
  echo '<a class="nav-link text-white" href="/pages/auth/register.php">Registrarse</a>';
  echo '</li>';
}
?>

        </ul>
      </div>
    </div>
  </nav>
</header>
<div class="container d-flex flex-column bg-light">
    <main class="flex-grow-1">
    <div class="container">
