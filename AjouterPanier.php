<?php
session_start();

include('connexion_db.php');
 array_push($_SESSION['Panier'],$line['id_formation']);
print_r($_SESSION['Panier']);

?>