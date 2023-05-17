<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TurismoPOP</title>
  <link rel="shortcut icon" href="../../assets/img/logos/logo_trans.png" type="image/x-icon">
  <body class="d-flex flex-column h-100"  style="min-height: 100vh;"> 
<?php include "./components/imports.php"; ?>
<?php include "./components/header.php"; ?>

<!-- Register form -->
<div class="container-fluid">
  <div class="row justify-content-center mt-5">
    <div class="col-lg-6">
      <h4 class="text-center mb-4">Registro</h4>
      <form>
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
        </div>
        <div class="mb-3">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="text" class="form-control" id="apellido" placeholder="Ingresa tu apellido">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico">
        </div>
        <div class="mb-3">
          <label for="contraseña" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="contraseña" placeholder="Ingresa tu contraseña">
        </div>
        <div class="mb-3">
          <label for="repetir-contraseña" class="form-label">Repetir contraseña</label>
          <input type="password" class="form-control" id="repetir-contraseña" placeholder="Repite tu contraseña">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Registrarse</button>
        </div>
      </form>
    </div>
  </div>
</div>



<?php include "./components/footer.php"; ?>


