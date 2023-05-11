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

        <!-- Carrousel Paquetes Caribe-->
        <div class="container mt-3">
          <div id="carouselPaquetesCaribe" class="carousel carousel-dark slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselPaquetesCaribe" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselPaquetesCaribe" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="card-group">
                      <div class="card">
                        <img src=".\assets\img\banners\caribe\bayahibe_1.jpg" class="card-img-top" alt="bayahibe">
                        <div class="card-body">
                            <h5 class="card-title">Bayahibe</h5>
                            <p class="card-text">Bayahíbe es una ciudad turística en la costa del Caribe de República Dominicana. Es conocida por sus playas de arena y sus sitios para el buceo.</p>
                        </div>
                      </div>
                      <div class="card">
                        <img src=".\assets\img\banners\caribe\cataloniagrandominicus-beach-terrace-400x240-crop.jpg" class="card-img-top" alt="catalonia gran dominicus">
                        <div class="card-body">
                            <h5 class="card-title">Catalonia Gran Dominicus</h5>
                            <p class="card-text">Catalonia Gran Dominicus es un resort en Bayahibe, República Dominicana, con instalaciones como piscinas, restaurantes, bares, deportes acuáticos y actividades de entretenimiento.</p>
                        </div>
                      </div>
                      <div class="card">
                        <img src=".\assets\img\banners\caribe\htl_coral_y_turquesa-400x240-crop.jpg" class="card-img-top" alt="Ocean Coral & Turquesa">
                        <div class="card-body">
                            <h5 class="card-title">Ocean Coral & Turquesa</h5>
                            <p class="card-text">Ocean Coral & Turquesa es un resort en la Riviera Maya, México, con servicios como piscinas, restaurantes, spa y actividades de entretenimiento para sus huéspedes.</p>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="card-group">
                      <div class="card">
                        <img src=".\assets\img\banners\caribe\iberostarhd-pool-400x240-crop.jpg" class="card-img-top" alt="Iberostar Dominicana Punta Cana">
                        <div class="card-body">
                            <h5 class="card-title">Iberostar</h5>
                            <p class="card-text">Iberostar Dominicana Punta Cana es un resort todo incluido en Punta Cana, República Dominicana, con una variedad de instalaciones y servicios, como piscinas, restaurantes, spa y entretenimiento.</p>
                        </div>
                      </div>
                      <div class="card">
                        <img src=".\assets\img\banners\caribe\ib_csp2-400x240-crop.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">RIU Hotel</h5>
                            <p class="card-text">RIU Hotels es una cadena hotelera española con presencia en varios destinos turísticos de todo el mundo.</p>
                        </div>
                      </div>
                      <div class="card">
                        <img src=".\assets\img\banners\caribe\riviera-maya_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Riviera Maya</h5>
                            <p class="card-text">La Riviera Maya​ es una zona turística de México, situada en la costa del mar Caribe, en el estado de Quintana Roo.</p>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPaquetesCaribe" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselPaquetesCaribe" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
            </button>
          </div>
        </div>

        <!-- Carrousel Paquetes Brasil-->
        <div class="container mt-3">
          <div id="carouselPaquetesBrasil" class="carousel carousel-dark slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselPaquetesBrasil" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselPaquetesBrasil" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="card-group">
                      <div class="card">
                        <img src=".\assets\img\banners\brasil\ANGRA-DOS-REIS-con-Aerolineas-Argentinas-2021_14.jpg" class="card-img-top" alt="bayahibe">
                        <div class="card-body">
                            <h5 class="card-title">Angra dos Reis</h5>
                            <p class="card-text">Angra dos Reis es un municipio de Río de Janeiro con 365 islas, playas y biodiversidad en la Isla Grande, donde se encuentra Vila do Abraão y la Iglesia de San Sebastián, además de ruinas de la prisión Cândido Mendes.</p>
                        </div>
                      </div>
                      <div class="card">
                        <img src=".\assets\img\banners\brasil\Buzios-con-AEROLINEAS-ARGENTINAS_16.jpg" class="card-img-top" alt="catalonia gran dominicus">
                        <div class="card-body">
                            <h5 class="card-title">Buzios</h5>
                            <p class="card-text">Armação dos Búzios es un destino turístico de lujo con numerosas playas, incluyendo Ferradura y Geribá, y la Rua das Pedras, que ofrece restaurantes y vida nocturna. Está ubicado en una península al este de Río de Janeiro.</p>
                        </div>
                      </div>
                      <div class="card">
                        <img src=".\assets\img\banners\brasil\Costa-Do-Sauipe--Semana-Santa-2021---Cupos-Latam_77.jpg" class="card-img-top" alt="Ocean Coral & Turquesa">
                        <div class="card-body">
                            <h5 class="card-title">Costa Do Sauipe</h5>
                            <p class="card-text">Costa do Sauípe es un complejo turístico en Bahía, Brasil, con alojamiento, restaurantes, tiendas y actividades de ocio y entretenimiento para sus huéspedes, además de un centro de convenciones y eventos.</p>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="card-group">
                      <div class="card">
                        <img src=".\assets\img\banners\brasil\porto-de-galinhas_1.jpg" class="card-img-top" alt="Iberostar Dominicana Punta Cana">
                        <div class="card-body">
                            <h5 class="card-title">Porto de Galinhas</h5>
                            <p class="card-text">Puerto de Gallinas es un pueblo y playa de la municipalidad de Ipojuca en el estado de Pernambuco, Brasil.</p>
                        </div>
                      </div>
                      <div class="card">
                        <img src=".\assets\img\banners\brasil\SALVADOR---VAC-DE-INVIERNO-JULIO---Cupos-Latam_26.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Salvador de Bahía</h5>
                            <p class="card-text">Salvador es la capital de Bahía, Brasil, conocida por su arquitectura colonial portuguesa, cultura afrobrasileña y costa tropical. Pelourinho es el centro histórico con calles de adoquines, edificios coloridos e iglesias barrocas como la de San Francisco, con trabajos en madera bañados en oro.</p>
                        </div>
                      </div>
                      <div class="card">
                        <img src=".\assets\img\banners\brasil\SALVADOR---VAC-DE-INVIERNO-JULIO---Cupos-Latam_58.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ibis Salvador Aeroporto Hangar</h5>
                            <p class="card-text">Ibis Salvador Aeroporto Hangar es un hotel económico ubicado cerca del aeropuerto de Salvador, en Brasil. Ofrece alojamiento básico con habitaciones sencillas y funcionales, además de servicios como desayuno, Wi-Fi gratuito, estacionamiento y transporte al aeropuerto.</p>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPaquetesBrasil" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselPaquetesBrasil" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
            </button>
          </div>
        </div>

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
