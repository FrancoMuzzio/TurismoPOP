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
            <button type="button" data-bs-target="#carouselPublicidad" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselPublicidad" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselPublicidad" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselPublicidad" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselPublicidad" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselPublicidad" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselPublicidad" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#carouselPublicidad" data-bs-slide-to="7" aria-label="Slide 8"></button>
            <button type="button" data-bs-target="#carouselPublicidad" data-bs-slide-to="8" aria-label="Slide 9"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./assets/img/fondos/fondo_001.png" class="d-block w-100" alt="Puente">
            </div>
            <div class="carousel-item">
              <img src="./assets/img/fondos/fondo_002.png" class="d-block w-100" alt="Venecia">
            </div>
            <div class="carousel-item">
              <img src="./assets/img/fondos/fondo_003.png" class="d-block w-100" alt="Cañon">
            </div>
            <div class="carousel-item">
              <img src="./assets/img/fondos/fondo_004.png" class="d-block w-100" alt="Ruinas">
            </div>
            <div class="carousel-item">
              <img src="./assets/img/fondos/fondo_005.png" class="d-block w-100" alt="Amigos">
            </div>
            <div class="carousel-item">
              <img src="./assets/img/fondos/fondo_006.png" class="d-block w-100" alt="Fondo ruido">
            </div>
            <div class="carousel-item">
              <img src="./assets/img/fondos/fondo_007.png" class="d-block w-100" alt="Fondo rosa">
            </div>
            <div class="carousel-item">
              <img src="./assets/img/fondos/fondo_008.png" class="d-block w-100" alt="Fondo pintura">
            </div>
            <div class="carousel-item">
              <img src="./assets/img/fondos/fondo_009.png" class="d-block w-100" alt="Fondo violeta">
            </div>
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
            <div class="col text-center">
              <img src="./assets/img/banners/banner_universal_assistance.png" alt="Activa tu tranquilidad" class="img-fluid">
            </div>
            <div class="col text-center">
              <img src="./assets/img/banners/banner_web_checkin.png" alt="Web checkin" class="img-fluid">
            </div>
          </div>
        </div>

        <!-- Banner largo -->
        <div class="container mt-3">
          <div class="row">
            <div class="col text-center">
              <img src="./assets/img/banners/banner_feriados.png" alt="Viaja en feriado" class="img-fluid">
            </div>
        </div>

      </div>
      
    </main>
    <?php include "./components/footer.php"; ?>

  </body>
</html>
