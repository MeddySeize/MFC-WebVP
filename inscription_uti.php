<?php
 session_start();
 require_once('connexion_db.php');

if(isset($_POST['envoi']))
{

  /*Mettre du JQUERY: La page se reactualise quand il y une faute.
  L'utilisateur doit re-rentrer ces infos. Moins d'accessibilité.*/

    $Nom       =  $_POST['Nom'];
    $Prenom    =  $_POST['Prenom'];
    $user_id   =  $_POST['user_id'];
    $user_mdp  =  $_POST['user_mdp'];
    $confmdp   =  $_POST['confmdp'];

    //echo $Nom." ".$Prenom." ".$user_id." ".$user_mdp." ".$confmdp." ";
    $req = $db->query('SELECT * from utilisateur where identUti = "'.$_POST['user_id'].'"')->rowCount();

    if ( $req == 0 and $confmdp == $user_mdp)
    {
    //Créer utilisateur
    //penser à hasher le mot de passe
    $cmd = "INSERT INTO utilisateur(id_utilisateur, nomUti, prenomUti, identUti, mdpUti,typeUti)
    VALUES(NULL, '$Nom', '$Prenom','$user_id','$user_mdp','0');";
    $res= $db->query($cmd);
    header("Location:Showroom.php?Created=true");
    }
    //Le panneau s'affiche quand  la page s'actualise. 0 R2PARERE è_é.
     if ($req !=0 and !empty($_POST['user_id']))
      {
        //echo "<div class='alert'> Cet identifiant est déjà pris. Merci de choisir un autre.</div>";
        //$_SESSION['message'] = "<div class='alert'> Cet identifiant est déjà pris. Merci de choisir un autre.</div>";
        header("Location:inscription.php? Taken=true");
      }

      if ($req =! 0 and $_POST['confmdp'] != $_POST['user_mdp'])
      {
        echo "<div class='alert'> La confirmation est incorrecte.</div>";
    }
}
?>