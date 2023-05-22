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
  <title>TurismoPOP - Mercadopago</title>
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
        <h1 class="text-black-stroke text-white font-weight-bold">Mercadopago</h1>
      </div>
  </div>
</div>

<div class="row justify-content-center mt-4">
  <div class="col-md-6">
    <div class="mt-2">
      <a class="btn btn-info btn-block text-white fw-bold btn-lg w-100" href="/TurismoPOP/pages/error/under_construction.php">Con celular, e-mail o nombre</a>
    </div>
    <div class="mt-2">
      <a class="btn btn-info btn-block text-white fw-bold btn-lg w-100" href="/TurismoPOP/pages/error/under_construction.php">Con CBU, CVU, o alias</a>
    </div>
  </div>
</div>
<div class="row justify-content-center mt-2">
  <div class="col-md-6">
  <div class="text-center mt-2 mb-4">
    <h4>Escaneá el QR</h4>
  </div>
  <div class="text-center mt-2">
      <img src="/TurismoPOP/assets/img/QR_code.png" alt="Codigo QR" class="img-fluid">
    </div>
  </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/TurismoPOP/pages/components/footer.php"; ?>


