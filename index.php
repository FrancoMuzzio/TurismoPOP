<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TurismoPOP</title>
  <link rel="shortcut icon" href="./assets/img/logos/logo_trans.png" type="image/x-icon">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script></head>
  <body class="d-flex flex-column h-100"  style="min-height: 100vh;">
    <header>
    <?php include "./components/header.php"; ?>
    </header>
    <div class="container d-flex flex-column bg-light">
    <main class="flex-grow-1">
    <div class="container">
        <!-- Carrousel de imagenes -->
        <div id="carouselPublicidad" class="carousel slide">
          <div class="carousel-indicators">
            <?php
              $json = file_get_contents('data/banners.json');
              $banners = json_decode($json, true);
              $json = file_get_contents('data/packages.json');
              $packages = json_decode($json, true);
              foreach ($banners['ads'] as $key => $value) {
                if ($key == 0) {
                  echo '<button type="button" data-bs-target="#carouselPublicidad" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
                } else {
                  echo '<button type="button" data-bs-target="#carouselPublicidad" data-bs-slide-to="'.$key.'" aria-label="Slide '.($key+1).'"></button>';
                }
              }
            ?>
          </div>
          <div class="carousel-inner">
            <?php
              foreach ($banners['ads'] as $key => $value) {
                if ($key == 0) {
                  echo '<div class="carousel-item active">';
                } else {
                  echo '<div class="carousel-item">';
                }
                echo '<img src="'.$value['img'].'" class="d-block w-100" alt="'.$value['desc'].'">';
                echo '</div>';
              }
            ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselPublicidad" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselPublicidad" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!-- Buscador -->
        <div class="container mt-3">
          <form>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="origen">Origen</label>
                <input type="text" class="form-control" id="origen" placeholder="Ciudad de origen" required>
              </div>
              <div class="col-md-3 mb-3">
                <label for="destino">Destino</label>
                <input type="text" class="form-control" id="destino" placeholder="Ciudad de destino" required>
              </div>
              <div class="col-md-2 mb-3">
                <label for="fecha-ida">Fecha de ida</label>
                <input type="date" class="form-control" id="fecha-ida" required>
              </div>
              <div class="col-md-2 mb-3">
                <label for="fecha-vuelta">Fecha de vuelta</label>
                <input type="date" class="form-control" id="fecha-vuelta" required>
              </div>
              <div class="col-md-2 mb-3">
                <label for="cantidad-turistas">Cantidad de turistas</label>
                <input type="number" class="form-control" id="cantidad-turistas" min="1" max="10" required>
              </div>
              <button class="btn btn-info" type="submit">Busca tu próximo viaje</button>
            </div>
          </form>
        </div>

        <!-- Banners de ayuda -->
        <div class="container mt-3">
          <div class="row">
            <?php
              foreach ($banners['help']['first'] as $key => $value) {
                echo '<div class="col text-center">';
                echo '<img src="'.$value['img'].'" alt="'.$value['desc'].'" class="img-fluid">';
                echo '</div>';
              }
            ?>
          </div>
        </div>

        <!-- Banners de ayuda 2 -->
        <div class="container mt-3">
          <div class="row">
            <?php
              foreach ($banners['help']['second'] as $key => $value) {
                echo '<div class="col text-center">';
                echo '<img src="'.$value['img'].'" alt="'.$value['desc'].'" class="img-fluid">';
                echo '</div>';
              }
            ?>
            </div>
        </div>

        <?php
        foreach ($packages as $key => $value){
          echo '<!-- Carrousel Paquetes '.$key.'-->';
          echo '<div class="container mt-3">';
          echo '<div id="carouselPaquetes'.$key.'" class="carousel carousel-dark slide" data-bs-ride="false">';
          echo '<div class="carousel-indicators">';
          $counter = 0;
          foreach ($packages[$key] as $k => $v) {
            if ($k == 0) {
              echo '<button type="button" data-bs-target="#carouselPaquetes'.$k.'" data-bs-slide-to="'.$counter.'" class="active" aria-current="true" aria-label="Slide '.($counter+1).'"></button>';
              $counter++;
            }else if ($k % 3 == 0) {
              echo '<button type="button" data-bs-target="#carouselPaquetes'.$k.'" data-bs-slide-to="'.$counter.'" aria-label="Slide '.($counter+1).'"></button>';
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
            echo '<div class="card">
                    <img src="'.$v['img'].'" class="card-img-top" alt="'.$v['name'].'">
                    <div class="card-body">
                        <h5 class="card-title">'.$v['name'].'</h5>
                        <p class="card-text">'.$v['desc'].'</p>
                    </div>
                  </div>';
          }
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '<button class="carousel-control-prev" type="button" data-bs-target="#carouselPaquetes'.$key.'" data-bs-slide="prev">';
          echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
          echo '<span class="visually-hidden">Anterior</span>';
          echo '</button>';
          echo '<button class="carousel-control-next" type="button" data-bs-target="#carouselPaquetes'.$key.'" data-bs-slide="next">';
          echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
          echo '<span class="visually-hidden">Siguiente</span>';
          echo '</button>';
          echo '</div>';
          echo '</div>';
        }
        ?>
        
        <!-- banners about us -->
        <div class="container mt-3">
          <div class="row">
            <div class="col text-center">
              <img src="..." alt="About us 1" class="img-fluid">
            </div>
            <div class="col text-center">
              <img src="..." alt="About us 2" class="img-fluid">
            </div>
          </div>
        </div>

      </div>
    <div class="container mt-5"></div>
    </main>
    <?php include "./components/footer.php"; ?>

  </body>
</html>
