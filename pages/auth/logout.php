<?php   
    session_start();

    include $_SERVER['DOCUMENT_ROOT']."/pages/components/header.php";
    unset($_SESSION['loggedUser']);
    header('Location: /index.php');
    exit();
?>