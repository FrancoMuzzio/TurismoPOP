<?php
  $json_packages = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/TurismoPOP/data/packages.json');
  $packages = json_decode($json_packages, true);

  $package = null;
  foreach ($packages as $place) {
    foreach ($place as $aux_package) {
        if ($aux_package['id'] == $_GET['id']) {
          $package = $aux_package;
          break 2; // Romper ambos bucles
        }
    }
  }
  file_put_contents('test.log', print_r($package, true));
  if ($package==null){
    header('Location: /TurismoPOP/pages/404.php');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TurismoPOP - <?php echo $package['name']; ?></title>
  <link rel="shortcut icon" href="/TurismoPOP/assets/img/logos/logo_trans.png" type="image/x-icon">
  <body class="d-flex flex-column h-100"  style="min-height: 100vh;"> 
<?php include "./components/imports.php"; ?>
<?php include "./components/header.php"; ?>

<!-- Titulo -->
<div class="container mt-3" style="background-image: url('<?php echo $package['img']; ?>'); background-size: cover; min-height: 200px;">
  <div class="row align-items-center justify-content-center" style="min-height: 200px;">
      <div class="col-12 text-center">
        <h1 class="text-black-stroke text-white font-weight-bold"><?php echo $package['name']; ?></h1>
      </div>
  </div>
</div>


<?php include "./components/footer.php"; ?>


