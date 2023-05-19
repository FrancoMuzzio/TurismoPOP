<?php
  $json_banners = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/TurismoPOP/data/banners.json');
  $json_packages = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/TurismoPOP/data/packages.json');
  $banners = json_decode($json_banners, true);
  $packages = json_decode($json_packages, true);
  file_put_contents("test.log", print_r($_POST, true));
?>
<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TurismoPOP - Forma de pago</title>
  <link rel="shortcut icon" href="/TurismoPOP/assets/img/logos/logo_trans.png" type="image/x-icon">
  <body class="d-flex flex-column h-100"  style="min-height: 100vh;"> 
<?php include $_SERVER['DOCUMENT_ROOT']."/TurismoPOP/pages/components/imports.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/TurismoPOP/pages/components/header.php"; ?>
<!-- Titulo -->
<?php
  $randomImage = $banners['ads'][array_rand($banners['ads'])]['img'];
?>
<div class="container mt-3" style="background-image: url('<?php echo $randomImage; ?>'); background-size: cover; min-height: 200px;">
  <div class="row align-items-center justify-content-center" style="min-height: 200px;">
      <div class="col-12 text-center">
        <h1 class="text-black-stroke text-white font-weight-bold">Pago aceptado</h1>
      </div>
  </div>
</div>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // file_put_contents("test.log", print_r($_POST, true));
  $package = null;
  $cantidadPersonas = $_POST['personas'];
  $paymentMethod = $_POST['payment_method'];
  $numeroTarjeta = $_POST['numeroTarjeta'];
  foreach ($packages as $place) {
    foreach ($place as $aux_package) {
        if ($aux_package['id'] == $_POST['package_id']) {
          $package = $aux_package;
          break 2; // Romper ambos bucles
        }
    }
  }
  if ($package==null){
    header('Location: /TurismoPOP/pages/error/404.php');
    exit();
  }
}
?>
<div class="row justify-content-center align-items-center mt-3">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title"><?php echo $package['name']; ?></h2>
        <p class="card-text"><b>Descripción:</b> <?php echo $package['desc']; ?></p>
        <p class="card-text"><b>Precio unitario:</b> <?php echo $package['price']; ?></p>
        <p class="card-text"><b>Personas:</b> <?php echo $cantidadPersonas; ?></p>
        <p class="card-text"><b>Precio final:</b> <?php echo $package['price']*$cantidadPersonas; ?></p>
        <p class="card-text"><b>Metodo de pago:</b> <?php echo $paymentMethod; ?></p>
<?php
if ($paymentMethod == 'Tarjeta de crédito') {
  echo '<p class="card-text"><b>Tarjeta:</b> '.substr_replace($numeroTarjeta, str_repeat('X', strlen($numeroTarjeta) - 4), 0, strlen($numeroTarjeta) - 4).'</p>';
}
?>
        <b><span class="text-success display-4">¡El producto ya es tuyo!</span></b>
      </div>
    </div>
  </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT']."/TurismoPOP/pages/components/footer.php"; ?>


