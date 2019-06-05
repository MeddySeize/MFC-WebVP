<?php 
 session_start();
include('connexion_db.php');

$IdElementPanier = $_GET['idPanier'];
echo $IdElementPanier;

$cmd = "DELETE FROM panier WHERE id_panier = '$IdElementPanier' ";
$res = $db->query($cmd);

header("Location: Panier.php");
?>

