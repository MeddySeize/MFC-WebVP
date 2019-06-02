<?php
session_start();
?>
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
    <title>Formation Webvp</title>
<head>

<body class="shopping-body">
   <div id="top"><!-- top debut -->
      <div class="container"><!--container debut-->
        
          <div class="col-md-6 offre"><!--col md 6 offre debut-->
              <a href="#" class="btn btn-primary btn-sm">Bienvenue</a>
              <a href="Profil.php">4 Items dans votre Panier | Prix Total du Panier: 300€ </a>
          </div><!--col md 6 offre debut-->
        
          <div class="col-md-6"><!--col md 6 debut-->
              <ul class="menu"><!--cmenu debut-->
              <?php if(!isset($_SESSION['is_logged']) == true){ ?>
                    <li>
                      <a href="inscription.php">Inscription</a>
                  </li>
                  <li>
                      <a href="Profil.php">Se connecter</a>
                  </li>
                  <?php } else{ ?>
                  <li>
                      <a href="Profil.php">
                      Bienvenue <?php echo $_SESSION['name'] ;?>
                      </a>
                  </li>
                  <li>
                      <a href="deconnexion.php">Déconnexion</a>
                  </li>
                  <?php } ?>
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
             <ul class="nav navbar-nav left"><!-- debut nav navbar-nav left -->
                 <li>
                     <a href="index.php">Accueil</a>
                 </li>
                 <li class="active">
                   <a href="shopping.php?frm=1">Formations</a>
                 </li>
                 <li>
                     <a href="Profil.php">Mon compte</a>
                 </li>
                 <li>
                     <a href="Contact.php">Contactez-nous</a>
                 </li>
             </ul><!-- fin nav navbar-nav left -->

           </div><!-- fin padding-nav -->

           <a href="Panier.php" class="btn navbar-btn btn-primary right"><!-- debut btn navbar-btn btn-primary right -->
               <i class="fa fa-shopping-cart"></i>
               <span>Panier: 4 Items</span>
           </a><!-- fin btn navbar-btn btn-primary right -->

           <div class="navbar-collapse collapse right"><!-- debut navbar-collapse collapse right -->
           <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
               <span class="sr-only">Toggle Search</span>
               <i class="fa fa-search"></i>
               <span>Rechercher</span>
           </button>
           </div><!--fin navbar-collapse collapse right -->
           <div class="collapse clearfix" id="search"><!--debut collapse clearfix -->
               <form method="get" action="resultat.php" class="navbar-form"><!--debut navbar-form -->
                    <div class="input-group"><!--debut input-group -->
                        <input type="text" class="form-control" placeholder="Quelle Formation?" name="user_query" required><!--debut form-control -->
                        <span class="input-group-btn"><!-- debut input-group-btn -->
                        <button type="submit" name="search" value="Chercher" class="btn btn-primary"><!--debut btn btn-primary -->
                            <i class="fa fa-search"></i>
                        </button><!--fin btn btn-primary -->
                        </span><!-- fin input-group-btn -->
                    </div><!--fin input-group -->
               </form><!--fin navbar-form -->
           </div><!--fin collapse clearfix -->
       </div><!-- fin navbar collapse -->
   </div><!-- navbar container fin-->
</div><!--navbar fin-->

<div id="content"><!--debut Content -->
    <div class="container"><!--debut Container -->
        <div class="col-md-12"><!--debut col-md-12 -->

            <ul class="breadcrumb"><!--debut breadcrumb -->
              <li>
                <a href="index.php">Accueil</a>
              </li>
            <li>
                Formations
            </li>
            </ul><!--fin breadcrumb -->
        </div><!--fin col-md-12 -->

        <div class="col-md-3"><!--debut col-md-3 -->
        <?php
        include("Include/MenuCote.php");
        ?>
        </div><!--fin col-md-3 -->

        <!-- La partie ou s'affiche les formations -->
        <div class="col-md-9"><!--debut col-md-9 -->
            <div class="box"><!--debut box-->
            <?php
            /*
            début d'alternative:
            $cmd = "SELECT nomCat FROM categorie WHERE id_categorie =".$_GET['frm']."";
            $res = $db->query($cmd);
            $nomCateg = $res->fetchAll();
            echo "<h1>$nomCateg</h1>"
            */
            /*code trop long, trouver alternative*/
            if  ($_GET['frm'] == 0) {
                echo"<h1>Toutes les formations</h1>";
                print_r($_SESSION["is_logged"]);
            }
            if ($_GET['frm']== 1) {
                echo "<h1>Management des SI</h1>";
            } elseif ($_GET['frm'] == 2) {
                echo "<h1>Projet</h1>";
            } elseif ($_GET['frm'] == 3) {
                echo "<h1>Infrastructure</h1>";
            }
            elseif ($_GET['frm'] == 4) {
                echo "<h1>Réseau</h1>";
            }
            elseif ($_GET['frm'] == 5) {
                echo "<h1>Développement</h1>";
            }
            elseif ($_GET['frm'] == 6) {
                echo "<h1>Bureautique</h1>";
            }
            /*Mettre la description*/
          ?>
            </div><!--fin box-->
            <div class="row">
                <div class="col-md-12 col-sm-6 center-responsive">
                    <?php
                    /*requete pour mettre toutes les info dans un tableau*/
                    if(isset($_GET['frm'])){
                        $id = $_GET['frm'];
                        $cmd = "SELECT * FROM formation WHERE id_categorie='$id';";
                        $res = $db->query($cmd);
                        $tableFrm = $res->fetchAll();
                    }
                    elseif ($_GET['frm'] == 0){
                        $id = $_GET['frm'];
                        $cmd = "SELECT * FROM formation;";
                        $res = $db->query($cmd);
                        $tableFrmAll = $res->fetchAll();
                    }
                    /* affichage de la formation à partir de base de donnée*/
                    //Ajouter l'id de formation dans le tableau  Panier;
                    if(isset($_GET['frm'])){
                      foreach($tableFrm as $line){
                        //$idForma =  $line['id_formation'];
                        //echo $idForma;
                        echo "<div class='panel panel-default espace'>
                        <div class='panel-heading'>".$line['nomForma']."</div>
                        <div class='panel-body'>
                        <i>".$line['descriptionForma']."</i><br><hr>
                        <b>Prix de la Formation:</b> ".$line['prixForma']."€<br>
                        <b>Lieu:</b> ".$line['lieuxForma']."<br>
                        <b>Durée:</b> ".$line['dureeForma']." Jours
                        </div>
                        <p class='right-cart'>
                        <a href='AjouterPanier.php' class='btn btn-primary a'>
                            <i class='fa fa-shopping-cart'>
                            Ajouter au Panier
                            </i>
                        </a>
                        </p>
                      </div>"
                    ;
                    }
                }
                    ?>
                </div>
            </div>
        </div><!--fin col-md-9 -->
    </div> <!--fin Container -->
</div><!--fin Content -->
</body>