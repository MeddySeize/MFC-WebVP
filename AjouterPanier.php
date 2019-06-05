<?php
    $status = session_status();
    if($status == PHP_SESSION_NONE){
        //There is no active session
        session_start();
    }
    else
    if($status == PHP_SESSION_ACTIVE){
        //Destroy current and start new one
        session_destroy();
        session_start();
    }

include('connexion_db.php');

 $NomForma = $_GET['NomForma'];
 $PrixForma = $_GET['PrixForma'];
 $username = $_SESSION['name'];
 $Categ = $_GET['IdCateg'];

 $Connect = mysqli_connect('localhost', 'root','', 'webvp3');

 $SelectIdUser = 'SELECT id_utilisateur FROM utilisateur WHERE prenomUti = "'.$username.'"';
    $ExecuteIdUser = mysqli_query( $Connect , $SelectIdUser);
    $TakeLineId = mysqli_fetch_array($ExecuteIdUser);
    $ValueId = $TakeLineId['id_utilisateur'];



 $cmd = "INSERT INTO panier (idutilisateur, nomFormation, prixForma) VALUES ('$ValueId','$NomForma','$PrixForma')";
 echo $cmd;
 $res = $db->query($cmd);

 header("Location: shopping.php?frm=$Categ")
?>