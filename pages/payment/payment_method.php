<?php
  $json_banners = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/TurismoPOP/data/banners.json');
  $json_packages = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/TurismoPOP/data/packages.json');
  $banners = json_decode($json_banners, true);
  $packages = json_decode($json_packages, true);
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
        <h1 class="text-black-stroke text-white font-weight-bold">Forma de pago</h1>
      </div>
  </div>
</div>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $package = null;
  $cantidadPersonas = $_POST['personas'];
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
<div class="container">
  <div class="row justify-content-center align-items-center mt-3">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title"><?php echo $package['name']; ?></h2>
          <p class="card-text"><b>Descripción:</b> <?php echo $package['desc']; ?></p>
          <p class="card-text"><b>Precio unitario:</b> <?php echo $package['price']; ?></p>
          <p class="card-text"><b>Personas:</b> <?php echo $cantidadPersonas; ?></p>
          <p class="card-text" style="font-size: 1.5rem;"><b>Precio final:</b> <?php echo $package['price']*$cantidadPersonas; ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center mt-4">
    <div class="col-md-6">
      <h4>Elige un método de pago:</h4>
      <div class="d-grid gap-2 mt-3">
        <form action="/TurismoPOP/pages/payment/methods/cards.php" method="post">
          <input type="hidden" name="personas" value="<?php echo $_POST['personas'] ?>">
          <input type="hidden" name="package_id" value="<?php echo $_POST['package_id'] ?>">
          <button type="submit" class="btn btn-info btn-block text-white fw-bold btn-lg w-100">Tarjeta de crédito/débito</button>
        </form>
        <form action="/TurismoPOP/pages/payment/methods/mercadopago.php" method="post">
          <input type="hidden" name="personas" value="<?php echo $_POST['personas'] ?>">
          <input type="hidden" name="package_id" value="<?php echo $_POST['package_id'] ?>">
          <button type="submit" class="btn btn-info btn-block text-white fw-bold btn-lg w-100">Mercado Pago</button>
        </form>
        <form action="/TurismoPOP/pages/error/under_construction.php" method="post">
          <input type="hidden" name="personas" value="<?php echo $_POST['personas'] ?>">
          <input type="hidden" name="package_id" value="<?php echo $_POST['package_id'] ?>">
          <button type="submit" class="btn btn-info btn-block text-white fw-bold btn-lg w-100">PayPal</>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT']."/TurismoPOP/pages/components/footer.php"; ?>


