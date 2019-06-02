<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title> Inscription</title>
  <link rel="stylesheet" href="css/form.css">
</head>
<body>

<?php

  if(isset($_GET['Taken'])==true)
  {
    $mess = "<div class='alert'> Cette formation existe déjà.</div>";
    echo $mess;
  }

  if(isset($_GET['Created'])==true)
  {
    $mess = "<div class='goodalert'> Formation créée</div>";
    echo $mess;
  }

?>
  <!-- Ce formulaire permet à l'utilisateur de s'inscrire -->
  <!--Mettre une autocomplete: off quand page inscription fini-->
<form action="AjouterFormation_uti.php" method="POST">
    <div class="container">
      <h1 style="text-align: center; color:white">Ajouter une formation</h1>
      <hr>
        <div class="content">
        <p style="color:white;">Veuillez entrer vos informations pour créer une Formation</p>
        <label for= "NomLab"><b>Nom de la formation</b></label><BR>
        <input style="color:black;" type="text" placeholder="Entrez le nom de la formation" name="nomForma" required>
        <br>
        <br>
        <label style="color:white;"for= "Formation_descripstion"><b>Description de la formation</b></label><br>
        <input  type="text" placeholder="Entrez une description de la formation" name="descriptionForma" required>
        <br>
        <br>
        <label style="color:white;" for="Formation_prix"><b>Prix</b></label><br>
        <input type="text" placeholder="Entrez le prix" name="prixForma" required>
        <br>
        <br>
        <label style="color:white;" for="FormationLieux"><b>Lieux</b></label><br>
        <input type="text" placeholder="Entrez la localisation de la formation" name="lieuxForma" required>
        <br>
        <br>
        <label style="color:white;" for="Formation_duree"><b>Duree de la formation</b></label><br>
        <input  type="text" placeholder="Duree en jours " name="dureeForma" required>
        <br>
        <br>
        <!--Mettre une autre couleur quand souris passe. ça fait beau :)-->
        <input style="color:white;" type="hidden" name="envoi" class="validebtn" value="true">
        <input type="submit" class="validebtn" value="Valider">
        </div>
    </div>
</form>
</body>
</html>