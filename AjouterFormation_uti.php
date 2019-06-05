<?php
 session_start();
 require_once('connexion_db.php');

if(isset($_POST['envoi']))
{

    $id_formation  =  $_POST['id_formation'];
    $nomForma =  $_POST['nomForma'];
    $descriptionForma    =  $_POST['descriptionForma'];
    $prixForma = $_POST['prixForma'];
    $lieuxForma = $_POST['lieuxForma'];
    $valideForma  =  $_POST['valideForma'];
    $dureeForma =$_POST['dureeForma'];
    $id_categorie  =  $_POST['id_categorie'];

    //echo  des colonnes de la formation
    $req = $db->query('SELECT * from formation where nomForma = "'.$_POST['nomForma'].'"')->rowCount();

    if ( $req == 0)
    {
    //Créer une formation
    $cmd = "INSERT INTO formation(id_formation, nomForma, descriptionForma, prixForma, lieuxForma, valideForma, dureeForma, id_categorie)
    VALUES(NULL, '$nomForma', '$descriptionForma','$prixForma',' $lieuxForma', '0','$dureeForma','1');";
    $res= $db->query($cmd);
    header("Location:AjouterFormation.php?Created=true");
    }
    //Le panneau s'affiche quand  la page s'actualise. 0 R2PARERE è_é. 
     if ($req !=0 and !empty($_POST['nomForma']))
      {
        //echo "<div class='alert'> Cet identifiant est déjà pris. Merci de choisir un autre.</div>";
        //$_SESSION['message'] = "<div class='alert'> Cet identifiant est déjà pris. Merci de choisir un autre.</div>";
        //debuggage de ajoutformation
        echo "cette formation existe déjà";
        header("Location:AjouterFormation.php? Taken=true");
      }

}
?>