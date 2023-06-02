<?php   
    session_start();

    include $_SERVER['DOCUMENT_ROOT']."/pages/components/header.php";
    unset($_SESSION['loggedUser']);
    echo '<script>window.location.href = "/index.php";</script>';
    exit();
?>