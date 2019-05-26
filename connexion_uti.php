<?php
 //connexion
 session_start();
 include 'connexion_db.php';
 $IdUti = (isset($_POST["UtiID"]))? $_POST["UtiID"] : "";
 $MPUti = (isset($_POST["Utimdp"]))? $_POST["Utimdp"] : "";

 $cmd = "SELECT count(*) as nbr, nomUti, prenomUti , id_utilisateur FROM utilisateur
 WHERE identUti = '$IdUti' and
 mdpUti = '$MPUti' ;";

 $res = $db->query($cmd);
 $data = $res->fetch();

 if ($data['nbr'] == 1)
 {
   echo
   session_start();
    $_SESSION["is_loged"] = "true";
    $_SESSION["id"] = $data['id_utilisateur']    ;
    $_SESSION["type"] = "user";
    $_SESSION["name"] = $data['nomUti'] . " " .$data['prenomUti'];
    header("location: index.php");
}
else
{
  header("Location:Showroom.php?BadID=True");
}
 ?>