<?php 
    session_start();
    unset($_SESSION['usuarioCodigo']);
    unset($_SESSION['permissao']);
    header('Location: login.php');
?>