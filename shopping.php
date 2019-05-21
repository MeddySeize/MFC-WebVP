<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--Pour le responsive design-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--declaration des fichiers style: Bootstrap et fontawesome-->
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <!--declaration des fichiers javascript: JQUERY et bootstrap js-->
    <script type="text/javascript" src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <title>Accueil WebVp</title>
<head>

<body>
   <div id="top"><!-- top debut -->
      <div class="container"><!--container debut-->
        
          <div class="col-md-6 offre"><!--col md 6 offre debut-->
              <a href="#" class="btn btn-primary btn-sm">Bienvenue</a>
              <a href="Profil.php">4 Items dans votre Panier | Prix Total du Panier: 300€ </a>
          </div><!--col md 6 offre debut-->
        
          <div class="col-md-6"><!--col md 6 debut-->
            
              <ul class="menu"><!--cmenu debut-->
                  <li>
                      <a href="Index.php">Accueil</a>
                  </li>
                  <li>
                      <a href="shopping.php">Formation</a>
                  </li>
                  <li>
                      <a href="Profil.php">Mon compte</a>
                  </li>
                  <li>
                      <a href="Panier.php">Panier</a>
                  </li>
                  <li>
                      <a href="inscription.php">Inscription</a>
                  </li>
                  <li>
                      <a href="Profil.php">Se connecter</a>
                  </li>
              </ul><!--cmenu fin -->
            
          </div><!--col md 6 fin-->
        
      </div><!--container fin-->
    
   </div><!--top fin-->

   <div id="navbar" class="navbar navbar-default"><!--navbar debut-->

<div id="container"><!-- navbar container debut-->
       <div class="navbar-header"><!-- navbar  header debut-->
        <a href="index.php" class="navbar-brand home">
         <img src="Images/logo.png" alt="Logo Mfc">
        </a>
        <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
            <span class="sr-only">Basculer vers navigation</span>
            <i class="fa fa-align-justify"></i>
        </button>

        <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
        <span class="sr-only">Basculer vers recherche</span>
           <i class="fa fa-search"></i>
        </button>
       </div><!--navbar header fin-->
       <div class="navbar-collapse" id="navigation"><!-- debut navbar collapse -->
           <div class="padding-nav"> <!-- debut padding-nav -->
             <ul class="nav navbar-nav left">
                 <li>
                     <a href="index.php">Accueil</a>
                 </li>
                 <li class="active">
                     <a href="shopping.php">Formations</a>
                 </li>
                 <li>
                     <a href="Profil.php">Mon compte</a>
                 </li>
                 <li>
                     <a href="Panier.php">Mon Panier</a>
                 </li>
                 <li>
                     <a href="Contact.php">Contactez nous</a>
                 </li>
             </ul><!-- debut nav navbar-nav left -->

           </div><!-- fin padding-nav -->
       </div>
   </div><!-- navbar container fin-->
</div><!--navbar fin-->
<?php

?>

</body>