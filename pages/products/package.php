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
  if ($package==null){
    header('Location: /TurismoPOP/pages/error/404.php');
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
<?php include $_SERVER['DOCUMENT_ROOT']."/TurismoPOP/pages/components/imports.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/TurismoPOP/pages/components/header.php"; ?>

<!-- Titulo -->
<div class="container mt-3 border" style="background-image: url('<?php echo $package['img']; ?>'); background-size: cover; min-height: 200px;">
  <div class="row align-items-center justify-content-center" style="min-height: 300px;">
      <div class="col-12 text-center">
        <h1 class="text-black-stroke text-white font-weight-bold"><?php echo $package['name']; ?></h1>
      </div>
  </div>
</div>
<div class="container mt-3">
  <div class="row">
    <div class="col-6">
        <h3>Descripción:</h3>
        <p><?php echo $package['desc'] ?></p>
        <br>

        <h3>Actividades:</h3>
        <ul>
        <?php 
        foreach ($package['activities'] as $activity) {
          echo "<li>".$activity."</li>";
        }      
        ?>
        </ul>
        <br>
        <h3>Beneficios:</h3>
        <ul>
        <?php 
        foreach ($package['benefits'] as $benefit) {
          echo "<li>".$benefit."</li>";
        }      
        ?>
        </ul>
        <br>
      </div>
    <div class="col-6"> 
      <div class="card">
        <div class="card-body text-center">
          <img src="<?php echo $package['img'] ?>" class="img-fluid border" alt="<?php echo $package['desc'] ?>">
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Precio:</h4>
          <h3 class="card-text fw-bold text-success"><?php echo $package['price'] ?> U$D por persona</h3>
          <div class="row justify-content-end">
            <div class="col-auto">
              <form class="d-flex align-items-center justify-content-end" action="/TurismoPOP/pages/payment/payment_method.php" method="post">
                <div class="form-group mb-0 col-auto">
                  <div class="input-group">
                    <input name="personas" type="number" class="form-control" id="personas" min=1 value=1 placeholder="Numero de personas">
                    <input type="hidden" name="package_id" value="<?php echo $package['id'] ?>">
                    <button type="submit" class="btn btn-outline-success fw-bold">COMPRAR</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/TurismoPOP/pages/components/footer.php"; ?>


