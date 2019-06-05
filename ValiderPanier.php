<?php 
session_start();
include('connexion_db.php');

$idUser = $_SESSION['id'];
$ValideFormation = "INSERT INTO commande SELECT * FROM panier WHERE idutilisateur = '$idUser'";
$ViderPanier = "DELETE FROM panier WHERE idutilisateur = '$idUser'";

$res = $db->query($ValideFormation);
$res2 = $db->query($ViderPanier);

header("Location: Remerciement.php");
?>