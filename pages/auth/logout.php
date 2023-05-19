<?php 
include $_SERVER['DOCUMENT_ROOT']."/TurismoPOP/pages/components/header.php";
unset($_SESSION['loggedUser']);
header('Location: /TurismoPOP/index.php');
exit();
?>