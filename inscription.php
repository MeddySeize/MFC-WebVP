<?php
session_start()


?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title> Inscription</title>
  <link rel="stylesheet" href="form.css">
</head>
<body>
<?php $bdd = new PDO('mysql:host=localhost;dbname=webvp2', 'root', ''); ?>

  <!-- Ce formulaire permet à l'utilisateur de s'inscrire -->
<form action="inscription.php" method="POST">
    <div class="container">
      <h1 style="text-align: center;">Inscription</h1>
      <hr>
      <div class="content">
      <p>Veuillez entrer vos informations pour créer un Compte</p>
      <label for= "Nom"><b>Nom</b></label><BR>
      <input type="text" placeholder="Entrez votre Nom" name="Nom" required>
       <br>
       <br>
      <label for= "Prenom"><b>Prénom</b></label><br>
      <input type="text" placeholder="Entrez votre Prénom" name="Prenom" required>
      <br>
      <br>
      <label for="Identifiant"><b>Identifiant</b></label><br>
      <input type="text" placeholder="Entrez votre Identifiant" name="Identifiant" required>
      <br>
      <br>
      <label for="Motdepasse"><b>Mot de passe</b></label><br>
      <input type="password" placeholder="Obligatoire" name="Motdepasse" required>
      <br>
      <br>
      <label for="VerifMdp"><b>Confirmation du mot de passe</b></label><br>
      <input type="password" placeholder="Obligatoire " name="VerifMdp" required>
      <br>
      <br>
      <button type="submit" name="envoi" class="validebtn">Valider</button>
    </div>

    <?php
    //Indication de la base de donnée à modifier
    if (isset($_POST['envoi']) AND 
			isset($_POST['Nom']) AND !empty($_POST['Nom']) AND 
			isset($_POST['Prenom']) AND !empty($_POST['']) AND
      isset($_POST['confmdp']) AND $_POST['confmdp'] == $_POST['mdp'])
      
    $req = $bdd->query('select * from utilisateur where nomUti = "'.$_POST['nom'].'"')->rowCount();

    if ($req == 0)
			{
				$sent = 'insert into utilisateur(nomUti, prenomUti, typeUti, identificationUti, Mdp) values(\''.$_POST['login'].'\',\''.$_POST['mdp'].'\',0)';
				$bdd->exec($sent);
		?>
    
			
		?>

</div>
</body>
</html>