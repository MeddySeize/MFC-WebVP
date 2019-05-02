<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title> Inscription</title>
  <link rel="stylesheet" href="/form.css">
</head>
<body>

  <!-- Ce formulaire permet à l'utilisateur de s'inscrire -->
  <!--Mettre une autocomplete: off quand page inscription fini-->
<form action="inscription.php" method="POST">
    <div class="container">
      <h1 style="text-align: center; color:white">Inscription</h1>
      <hr>
      <div class="content">
      <p style="color:white;">Veuillez entrer vos informations pour créer un Compte</p>
      <label for= "NomLab"><b>Nom</b></label><BR>
      <input style="color:black;" type="text" placeholder="Entrez votre Nom" name="Nom" required>
       <br>
       <br>
      <label style="color:white;"for= "PrenomLab"><b>Prénom</b></label><br>
      <input  type="text" placeholder="Entrez votre Prénom" name="Prenom" required>
      <br>
      <br>
      <label style="color:white;" for="IdentifiantLab"><b>Identifiant</b></label><br>
      <input type="text" placeholder="Entrez votre Identifiant" name="user_id" required>
      <br>
      <br>
      <label style="color:white;" for="MotdepasseLab"><b>Mot de passe</b></label><br>
      <input type="password" placeholder="Obligatoire" name="user_mdp" required>
      <br>
      <br>
      <label style="color:white;" for="VerifMdpLab"><b>Confirmation du mot de passe</b></label><br>
      <input  type="password" placeholder="Obligatoire " name="confmdp" required>
      <br>
      <br>
      <!--Mettre une autre couleur quand souris passe. ça fait beau :)-->
      <input style="color:white;" type="hidden" name="envoi" class="validebtn" value="true">
      <input type="submit" class="validebtn" value="Valider">
      

    </div>

 
    <!--Indication de la base de donnée à modifier
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
  -->


</div>
</body>
</html>