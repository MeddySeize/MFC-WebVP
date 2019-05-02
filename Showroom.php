<?php
 session_start();
?>
<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" href="/css/Show.css">
  <meta charset="UTF-8"/>
  <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <title>Bienvenue sur WEBVP</title>
 </head>

 <body>
     <!--La navigation qui est collée en de la page. elle est constituée de 4 éléments: Accueil, A propos, Insc/Co,Contact.
    Elle permet de rendre à la section demandée.-->
    <div id="container">
      <nav class="navbar">
        <ul>
            <li><a href="#Accueil">Accueil</a></li>
            <li><a href="#Info">à Propos</a></li>
            <li><a href="#Contact">Contact</a></li>
            <li><a href="#">Inscription/Connexion</a></li>
        </ul>
      </nav>
    </div>
    <!--utiliser un slide Down de javascript Jquery-->
    <!--le message continue de s'afficher. Trouver une solution-->
    <?php
      if(isset($_GET['Created'])==true)
      {
        echo "<div class='goodalert'><p style= color: green;>Votre Compte à été créé.</p> </div>";
      }

      if(isset($_GET['BadID'])==true)
      {
        echo "<div class='alert'><p>Votre Identifiant ou Mot de passe est incorrect.</p> </div>";
      }
    ?>

    <div class="login_form">
        <form action="connexion_uti.php" method="POST">
          <div>
            <label>Identifiant:</label>
            <br>
            <input type="text"  name = "UtiID"Required/>
          </div>
          <div>
            <label>Mot de passe:</label>
            <br>
            <input type="password" name="Utimdp" Required/>
          </div>
          <div>
            <input type="submit" value="Connexion"/>
          </div>
          <div>
            <a href="inscription.php">Pas inscrit? Cliquer ici!</a>
          </div>
        </form>
    </div>
    <!--Représente chaque compartiment de la page Ex: Bienvenue sur WebVP, MFC,Nous Contacter-->
    <section id="Accueil">
     <h1>Bienvenue sur WebVP</h1>
    <p>Avec plus de 70  formateurs et plus de 10000 personnes formées par an ,
        nous offrons la chance d'être un(e) acteur/trice dans le secteur de la formation.</p>
       <p>Que vous voulez <strong>enseigner</strong> ou <strong>étudier</strong>, Notre plateforme <strong>"WEBVP"</strong> à votre disposition. </p>
       <a href="PageFormation.htm" class="button">Voir nos Formations</a>
     </section>
     <section id="Info">
     <h1>MFC, Formation pour tous</h1>
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit felis eget sapien vehicula convallis.
    Nullam tincidunt risus a felis tincidunt, nec consequat eros ultricies. Curabitur sit amet maximus diam</p>
    <a href="PageFormation.htm" class="button">En savoir plus</a>
    </section>
    <section id="Contact">
    <h1>Nous Contacter</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit felis eget sapien vehicula convallis.
    Nullam tincidunt risus a felis tincidunt, nec consequat eros ultricies. Curabitur sit amet maximus diam</p>
    </section>
 </body>
</html>