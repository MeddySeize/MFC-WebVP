<?php
 //connexion
 session_start();
 //Assigner une valeur au cases du formulaire
 include('connexion_db.php');
 $_SESSION["is_logged"] = FALSE;
 $IdUti = (isset($_POST["UtiID"]))? $_POST["UtiID"] : "";
 $MPUti = (isset($_POST["Utimdp"]))? $_POST["Utimdp"] : "";

 $cmd = "SELECT count(*) as nbr, nomUti, prenomUti , id_utilisateur FROM utilisateur
 WHERE identUti = '$IdUti' and
 mdpUti = '$MPUti' ;";

 $res = $db->query($cmd);
 $data = $res->fetch();

 if ($data['nbr'])
 {
    $_SESSION["is_logged"] = true;
    $_SESSION["id"] = $data['id_utilisateur'];
    $_SESSION["type"] = "user";
    $_SESSION['name'] = $data['prenomUti'];
    header("location: shopping.php?frm=0");
}
else
{
  header("Location:Profil.php?BadID=True");
}


 ?>