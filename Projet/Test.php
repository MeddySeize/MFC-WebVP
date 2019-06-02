<?php 
    session_start();
     include('connexion_db.php');
    include('connexion_uti.php');
    echo " ".$_SESSION['name']." ";
?>