<?php 
include "./components/header.php";
unset($_SESSION['loggedUser']);
header('Location: /TurismoPOP/index.php');
exit();
?>