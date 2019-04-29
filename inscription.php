<?php
session_start();
include 'connexion_db.php';
    $envoi = (isset($_POST['envoi'])) ? $_POST['envoi']: '';
    $Nom = (isset($_POST['Nom'])) ? $_POST['Nom']: '';
    $Prenom = (isset($_POST['Prenom'])) ? $_POST['Prenom']: '';
    $user_id = (isset($_POST['user_id'])) ? $_POST['user_id']: '';
    $user_mdp = (isset($_POST['user_mdp'])) ? $_POST['user_mdp']: '';
    $confmdp = (isset($_POST['confmdp'])) ? $_POST['confmdp']: '';

    if(isset($_POST['envoi']) AND
    isset($_POST['Nom']) AND !empty($_POST['Nom']) AND
    isset($_POST['Prenom']) AND !empty($_POST['Prenom']) AND
    isset($_POST['user_id']) AND !empty($_POST['user_id']) AND
    isset($_POST['user_mdp']) AND !empty($_POST['user_mdp']) AND
    isset($_POST['confmdp']) AND $_POST['confmdp'] == $_POST['user_mdp']
    ){

      if ($envoi == true)
      {
        $req =  $bdd->query('SELECT * FROM utilisateur WHERE IdentUti = "'.$_POST['user_id'].'"')->rowCount();

       if($req == 0)
       {
        $cmd = "INSERT INTO utilisateur(id_utilisateur, nomUti, prenomUti, identUti, mdpUti,typeUti)
        VALUES(NULL, '$Nom', '$Prenom','$user_id','$user_mdp','0');";
        $bdd->query($cmd);
        header("location: Showroom.php");
       }
      }
    }


?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title> Inscription</title>
  <link rel="stylesheet" href="/form.css">
</head>
<body>


  <!-- Ce formulaire permet à l'utilisateur de s'inscrire -->
<form action="inscription.php" method="POST">
    <div class="container">
      <h1 style="text-align: center; color:white">Inscription</h1>
      <hr>
      <div class="content">
      <p style="color:white;">Veuillez entrer vos informations pour créer un Compte</p>
      <label style="color:white;" for= "Nom"><b>Nom</b></label><BR>
      <input style="color:white;"type="text" placeholder="Entrez votre Nom" name="Nom" required>
       <br>
       <br>
      <label style="color:white;"for= "Prenom"><b>Prénom</b></label><br>
      <input style="color:white;" type="text" placeholder="Entrez votre Prénom" name="Prenom" required>
      <br>
      <br>
      <label style="color:white;" for="Identifiant"><b>Identifiant</b></label><br>
      <input style="color:white;" type="text" placeholder="Entrez votre Identifiant" name="user_id" required>
      <br>
      <br>
      <label style="color:white;" for="Motdepasse"><b>Mot de passe</b></label><br>
      <input style="color:white;"type="password" placeholder="Obligatoire" name="user_mdp" required>
      <br>
      <br>
      <label style="color:white;" for="VerifMdp"><b>Confirmation du mot de passe</b></label><br>
      <input style="color:white;" type="password" placeholder="Obligatoire " name="confmdp" required>
      <br>
      <br>
      <input style="color:white;" type="hidden" name="envoi" class="validebtn" value="true">
      <input style="color:white;" type="submit" class="validebtn" value="Valider">
      

    </div>

  <?php
    //Indication de la base de donnée à modifier
    /*$envoi = (isset($_POST['save'])) ? $_POST['save']: '';
    $nom = (isset($_POST['nom'])) ? $_POST['nom']: '';
    $prenom = (isset($_POST['prenom'])) ? $_POST['prenom']: '';
    $login = (isset($_POST['login'])) ? $_POST['login']: '';
    $pass1 = (isset($_POST['pass'])) ? $_POST['pass']: '';
    $pass2 = (isset($_POST['pass'])) ? $_POST['pass']: '';

    if($save == 'true'){
      //todo verif
      $cmd = // Récuperer de la base de donnée
      $dbc->query(cmd);
    }
    */
    ?>


</div>
</body>
</html>