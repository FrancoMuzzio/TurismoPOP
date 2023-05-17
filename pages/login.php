<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TurismoPOP - Ingresar</title>
  <link rel="shortcut icon" href="../../assets/img/logos/logo_trans.png" type="image/x-icon">
  <body class="d-flex flex-column h-100"  style="min-height: 100vh;"> 
<?php include "./components/imports.php"; ?>
<?php include "./components/header.php"; ?>

<!-- Log in form -->
<div class="container-fluid">
  <div class="row justify-content-center mt-5">
    <div class="col-lg-6">
      <h4 class="text-center mb-4">Ingresar</h4>
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico">
        </div>
        <div class="mb-3">
          <label for="contraseña" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="contraseña" placeholder="Ingresa tu contraseña">
        </div>
        <div class="text-center mb-3">
          <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </div>
      </form>
      <div class="text-center">
        <a class="text-danger " href="#">Olvide mi contraseña</a> | <a  href="/TurismoPOP/pages/register.php">Registrarse</a>
      </div>
    </div>
  </div>
</div>



<?php include "./components/footer.php"; ?>


