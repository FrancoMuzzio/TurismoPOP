<?php
  $json_banners = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/TurismoPOP/data/banners.json');
  $banners = json_decode($json_banners, true);
?>
<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TurismoPOP - Ingresar</title>
  <link rel="shortcut icon" href="/TurismoPOP/assets/img/logos/logo_trans.png" type="image/x-icon">
  <body class="d-flex flex-column h-100"  style="min-height: 100vh;"> 
<?php include $_SERVER['DOCUMENT_ROOT']."/TurismoPOP/pages/components/imports.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/TurismoPOP/pages/components/header.php"; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $json_users = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/TurismoPOP/data/users.json');
  $users = json_decode($json_users, true);
  $username = $_POST['username'];
  $password = $_POST['password'];
  foreach ($users as $user) {
    if ($user['username'] == $username) {
      $_SESSION['loggedUser'] = $user;
      header('Location: /TurismoPOP/index.php');
      exit();
    }
  }
}
?>
<!-- Titulo -->
<?php
  $randomImage = $banners['ads'][array_rand($banners['ads'])]['img'];
?>
<div class="container mt-3" style="background-image: url('<?php echo $randomImage; ?>'); background-size: cover; min-height: 200px;">
  <div class="row align-items-center justify-content-center" style="min-height: 200px;">
      <div class="col-12 text-center">
        <h1 class="text-black-stroke text-white font-weight-bold">Ingresar</h1>
      </div>
  </div>
</div>
<!-- Log in form -->
<div class="container-fluid" id="login-form">
  <div class="row justify-content-center mt-5">
    <div class="col-lg-6">
      <form method="POST" action="">
        <div class="mb-3">
          <label for="username" class="form-label">Correo electrónico</label>
          <input name="username" type="email" class="form-control" id="username" placeholder="Ingresa tu correo electrónico">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input name="password" type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña">
        </div>
        <div class="text-center mb-3">
          <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </div>
      </form>
      <div class="text-center">
        <a class="text-danger " href="#">Olvide mi contraseña</a> | <a  href="/TurismoPOP/pages/auth/register.php">Registrarse</a>
      </div>
    </div>
  </div>
</div>



<?php include $_SERVER['DOCUMENT_ROOT']."/TurismoPOP/pages/components/footer.php"; ?>


