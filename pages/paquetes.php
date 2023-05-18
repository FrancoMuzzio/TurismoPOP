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
  <title>TurismoPOP - Paquetes</title>
  <link rel="shortcut icon" href="/TurismoPOP/assets/img/logos/logo_trans.png" type="image/x-icon">
  <body class="d-flex flex-column h-100"  style="min-height: 100vh;"> 
<?php include "./components/imports.php"; ?>
<?php include "./components/header.php"; ?>
<!-- Titulo -->
<?php
  $randomImage = $banners['ads'][array_rand($banners['ads'])]['img'];
?>
<div class="container mt-3" style="background-image: url('<?php echo $randomImage; ?>'); background-size: cover; min-height: 200px;">
  <div class="row align-items-center justify-content-center" style="min-height: 200px;">
      <div class="col-12 text-center">
        <h1 class="text-black-stroke text-white font-weight-bold">Paquetes</h1>
      </div>
  </div>
</div>
<!-- Carrouseles de paquetes -->
<?php
  foreach ($packages as $key => $value){
    echo '<!-- Carrousel Paquetes '.str_replace(' ', '', $key).'-->';
    echo '<div class="container mt-3">';
    echo '<h4>'.ucfirst($key).'</h4>';
    echo '</div>';
    echo '<div class="container mt-3">';
    echo '<div id="carouselPaquetes'.str_replace(' ', '', $key).'" class="carousel carousel-dark slide" data-bs-ride="false">';
    echo '<div class="carousel-indicators">';
    $counter = 0;
    foreach ($packages[$key] as $k => $v) {
      if ($k == 0) {
        echo '<button type="button" data-bs-target="#carouselPaquetes'.str_replace(' ', '', $key).'" data-bs-slide-to="'.$counter.'" class="active" aria-current="true" aria-label="Slide '.($counter+1).'"></button>';
        $counter++;
      }else if ($k % 3 == 0) {
        echo '<button type="button" data-bs-target="#carouselPaquetes'.str_replace(' ', '', $key).'" data-bs-slide-to="'.$counter.'" aria-label="Slide '.($counter+1).'"></button>';
        $counter++;
      }
    } 
    echo '</div>';
    echo '<div class="carousel-inner">';
    foreach ($packages[$key] as $k => $v) {
      if ($k == 0) {
        echo '<div class="carousel-item active">';
        echo '<div class="card-group">';
      } else if ($k % 3 == 0) {
        echo '</div>';
        echo '</div>';
        echo '<div class="carousel-item">';
        echo '<div class="card-group">';
      }
      echo '<a href="/TurismoPOP/pages/paquete.php" class="card text-decoration-none">
              <img src="'.$v['img'].'" class="card-img-top" alt="'.$v['name'].'">
              <div class="card-body">
                  <h5 class="card-title">'.$v['name'].'</h5>
                  <p class="card-text">'.$v['desc'].'</p>
              </div>
            </a>';
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<button class="carousel-control-prev" type="button" data-bs-target="#carouselPaquetes'.str_replace(' ', '', $key).'" data-bs-slide="prev">';
    echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
    echo '<span class="visually-hidden">Anterior</span>';
    echo '</button>';
    echo '<button class="carousel-control-next" type="button" data-bs-target="#carouselPaquetes'.str_replace(' ', '', $key).'" data-bs-slide="next">';
    echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
    echo '<span class="visually-hidden">Siguiente</span>';
    echo '</button>';
    echo '</div>';
    echo '</div>';
  }
  include "./components/footer.php"; ?>


