<?php
  $json_packages = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/TurismoPOP/data/packages.json');
  $packages = json_decode($json_packages, true);
?>
<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TurismoPOP - Ingresar</title>
  <link rel="shortcut icon" href="/TurismoPOP/assets/img/logos/logo_trans.png" type="image/x-icon">
  <body class="d-flex flex-column h-100"  style="min-height: 100vh;"> 
<?php include "./components/imports.php"; ?>
<?php include "./components/header.php"; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $json_users = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/TurismoPOP/data/users.json');
  $users = json_decode($json_users, true);
  $username = $_POST['username'];
  $password = $_POST['password'];
  foreach ($users as $user) {
    if ($user['username'] == $username) {
      $_SESSION['loggedUser'] = $user;
      header('Location: /TurismoPOP/index.php');
      exit();
    }
  }
}
?>
<!-- Titulo -->
<?php
  $randomImage = $banners['ads'][array_rand($banners['ads'])]['img'];
?>
<div class="container mt-3" style="background-image: url('<?php echo $randomImage; ?>'); background-size: cover; min-height: 200px;">
  <div class="row align-items-center justify-content-center" style="min-height: 200px;">
      <div class="col-12 text-center">
        <h1 class="text-black-stroke text-white font-weight-bold">Ingresar</h1>
      </div>
  </div>
</div>

<?php include "./components/footer.php"; ?>


