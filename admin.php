<?php
    session_start();
    if(!isset($_SESSION['logged'])){
        header("location:inicio");
    }

?>

<a href="logout"> Sair </a>