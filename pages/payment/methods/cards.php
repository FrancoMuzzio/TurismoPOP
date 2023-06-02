<?php
  session_start();

  $json_banners = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data/banners.json');
  $json_packages = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data/packages.json');
  $banners = json_decode($json_banners, true);
  $packages = json_decode($json_packages, true);
?>
<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TurismoPOP - Tarjeta de crédito/débito</title>
  <link rel="shortcut icon" href="/assets/img/logos/logo_trans.png" type="image/x-icon">
  <body class="d-flex flex-column h-100"  style="min-height: 100vh;"> 
<?php include $_SERVER['DOCUMENT_ROOT']."/pages/components/imports.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/pages/components/header.php"; ?>
<!-- Titulo -->
<?php
  $randomImage = $banners['ads'][array_rand($banners['ads'])]['img'];
?>
<div class="container mt-3" style="background-image: url('<?php echo $randomImage; ?>'); background-size: cover; min-height: 200px;">
  <div class="row align-items-center justify-content-center" style="min-height: 200px;">
      <div class="col-12 text-center">
        <h1 class="text-black-stroke text-white font-weight-bold">Tarjeta de crédito/débito</h1>
      </div>
  </div>
</div>

<div class="container mt-3">
    <h1>Formulario de Pago</h1>
    <form action="/pages/payment/success.php" method="post">
      <input type="hidden" name="personas" value="<?php echo $_POST['personas'] ?>">
      <input type="hidden" name="package_id" value="<?php echo $_POST['package_id'] ?>">
      <div class="form-group mt-2">
        <label for="tipoTarjeta">Tipo de Tarjeta</label>
        <select name="payment_method" class="form-control" id="tipoTarjeta" required>
          <option disabled hidden selected value="">Elige un tipo de tarjeta</option>
          <option>Tarjeta de crédito</option>
          <option>Tarjeta de débito</option>
        </select>
      </div>
      <div class="form-group mt-2">
        <label for="titular">Titular de Tarjeta</label>
        <input type="text" class="form-control" id="titular" placeholder="Esteban Julio Ricardo Montoya de la Rosa Ramírez" required>
      </div>
      <div class="form-group mt-2">
        <label for="numeroTarjeta">Número de Tarjeta</label>
        <input name="numeroTarjeta" type="number" class="form-control" id="numeroTarjeta" minlength="13" maxlength="18" placeholder="XXXXXXXXXXXXX" required>
      </div>
      <div class="form-group row mt-2">
                    <label class="col-md-12">Fecha de vencimiento</label>
                    <div class="col-md-1">
                        <select class="form-control" required>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                    <div class="col-md-1">
                        <select class="form-control">
                            <option>2023</option>
                            <option>2024</option>
                            <option>2025</option>
                            <option>2026</option>
                            <option>2027</option>
                            <option>2028</option>
                            <option>2029</option>
                        </select>
                    </div>
                </div>
      <div class="form-group mt-2">
        <label for="codigoSeguridad">Código de Seguridad</label>
        <input type="number" class="form-control" id="codigoSeguridad" minlength="3" maxlength="4" placeholder="XXX" required>
      </div>
      <div class="form-check mt-2">
        <input type="checkbox" class="form-check-input" id="recordarTarjeta">
        <label class="form-check-label" for="recordarTarjeta">Recordar tarjeta para uso en el futuro</label>
      </div>
      <button type="submit" class="btn btn-info text-white fw-bold btn-block mt-2">Pagar Ahora</button>
    </form>
  </div>


<?php include $_SERVER['DOCUMENT_ROOT']."/pages/components/footer.php"; ?>


