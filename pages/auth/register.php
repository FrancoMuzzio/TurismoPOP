<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TurismoPOP - Registrarse</title>
  <link rel="shortcut icon" href="$_SERVER['DOCUMENT_ROOT'].'/assets/img/logos/logo_trans.png" type="image/x-icon">
  <body class="d-flex flex-column h-100"  style="min-height: 100vh;"> 
<?php include $_SERVER['DOCUMENT_ROOT']."/pages/components/imports.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/pages/components/header.php"; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $json_users = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data/users.json');
  $users = json_decode($json_users, true);
  $users[] = [
    'name' => $_POST['name'],
    'surname' => $_POST['surname'],
    'role' => 'user',
    'username' => $_POST['username'],
    'password' => $_POST['password'],
  ];
  file_put_contents($_SERVER['DOCUMENT_ROOT'].'/data/users.json', json_encode($users));
  header('Location: /pages/auth/login.php');
  exit();
}
?>
<!-- Register form -->
<div class="container-fluid">
  <div class="row justify-content-center mt-5">
    <div class="col-lg-6">
      <h4 class="text-center mb-4">Registro</h4>
      <form method="POST" action="">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input name="name" type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
        </div>
        <div class="mb-3">
          <label for="apellido" class="form-label">Apellido</label>
          <input name="surname" type="text" class="form-control" id="apellido" placeholder="Ingresa tu apellido">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Correo electrónico</label>
          <input name="username" type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input name="password" type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña">
        </div>
        <div class="mb-3">
          <label for="repetir-password" class="form-label">Repetir contraseña</label>
          <input type="password" class="form-control" id="repetir-password" placeholder="Repite tu contraseña">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Registrarse</button>
        </div>
      </form>
    </div>
  </div>
</div>



<?php include $_SERVER['DOCUMENT_ROOT']."/pages/components/footer.php"; ?>


