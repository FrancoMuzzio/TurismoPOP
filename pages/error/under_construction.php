<?php
  // IMPORTACIONES
  $json_banners = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/TurismoPOP/data/banners.json');
  $banners = json_decode($json_banners, true);
?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TurismoPOP - En mantenimiento</title>
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
      <h1 class="text-black-stroke text-white font-weight-bold">En mantenimiento</h1>
    </div>
    <img src="/TurismoPOP/assets/img/under_construction.png" alt="Sitio en construcción" class="img-fluid w-25 mb-2">
  </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/TurismoPOP/pages/components/footer.php"; ?>


