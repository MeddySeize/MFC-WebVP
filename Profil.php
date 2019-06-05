<?php
session_start();
include('connexion_db.php');
/*Le nombre d'article dans le panier de l'utilisateur*/
if(isset($_SESSION['is_logged'])== FALSE){

}
else{
$iduser = $_SESSION['id'];
$cmdPanier = "SELECT count(*) as nbrEl FROM panier WHERE idutilisateur = '$iduser'";
$resPanier = $db->query($cmdPanier);
$dataPanier = $resPanier->fetch();
if ($dataPanier['nbrEl']){
  $_SESSION['Count'] = $dataPanier['nbrEl'];
}
else{
  $_SESSION['Count'] = '0';
}
}
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
    <title>Compte Webvp</title>
    
</head>
<!--Mettre showroom.php sur la page d'acceuil-->
<body>
   <div id="top"><!-- top debut -->
      <div class="container"><!--container debut-->
      <?php if(isset($_SESSION['is_logged'])== FALSE){
    echo"
     <div class='col-md-6 offre'><!--col md 6 offre debut-->
     <a href='#' class='btn btn-primary btn-sm'>Bienvenue</a>
    </div>";
     } else { ?>
          <div class="col-md-6 offre"><!--col md 6 offre debut-->
              <a href="AjouterFormation.php" class="btn btn-primary btn-sm">Ajouter une formation</a>
          </div><!--col md 6 offre debut-->
     <?php }  ?>
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
                      Bonjour <?php echo $_SESSION['name'] ;?>
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
        </div><!--navbar header fin-->
        <div class="navbar-collapse" id="navigation"><!-- debut navbar collapse -->
            <div class="padding-nav"> <!-- debut padding-nav -->
              <ul class="nav navbar-nav left"><!-- debut nav navbar-nav left -->
                  <li>
                      <a href="index.php">Accueil</a>
                  </li>
                  <li>
                      <a href="shopping.php?frm=1">Formations</a>
                  </li>
                  <li class="active">
                      <a href="Profil.php">Mon compte</a>
                  </li>
                  
                  <li>
                      <a href="#">Contactez-nous</a>
                  </li>
              </ul><!-- fin nav navbar-nav left -->

            </div><!-- fin padding-nav -->

            <a href="Panier.php" class="btn navbar-btn btn-primary right"><!-- debut btn navbar-btn btn-primary right -->
                <i class="fa fa-shopping-cart"></i>
            <?php if(!isset($_SESSION['is_logged'])== true)
                echo "<span>Panier</span>";
                    else{
                        echo "<span>Panier: ".$_SESSION['Count']." items</span>";
                    }
            ?>
            </a><!-- fin btn navbar-btn btn-primary right -->
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
<?php
      if(isset($_GET['Created'])==true)
      {
        echo "<div class='goodalert'><p style= color: green;>Votre compte a été créé.</p> </div>";
      }

      if(isset($_GET['BadID'])==true)
      {
        echo "<div class='alert'><p>Votre Identifiant ou Mot de passe est incorrect.</p> </div>";
      }
    ?>
<div id="content"><!--debut Content -->
    <div class="container"><!--debut Container -->
        <div class="col-md-12"><!--debut col-md-12 -->

            <ul class="breadcrumb"><!--debut breadcrumb -->
              <li>
                <a href="index.php">Accueil</a>
              </li>
            <li>
                Mon Compte
            </li>
            </ul><!--fin breadcrumb -->
        </div><!--fin col-md-12 -->

        <div class="col-md-12"><!--debut col-md-3 -->
        <?php if(!isset($_SESSION['is_logged']) == true){ ?>
            <?php include("Include/ConnexionForm.php"); ?>
        </div>
        <?php } else { ?>
        <div class="col-md-4">
            <?php include('Include/Menuprofil.php'); ?>
        <?php } ?>
        </div>
        <div class="col-md-8">
        <?php if(isset($_SESSION['is_logged'])== FALSE){

        } else { ?>
        <?php if(isset($_GET['Mcommandes']) != true){ ?>
        <?php echo "
        <h1>Mes Commandes</h1>
        <div class='panel panel-default'>
        <div class='panel-body'>";?>
            <?php
                $cmdCom = "SELECT * FROM commande WHERE idutilisateur = '$iduser' ORDER BY id_commande DESC LIMIT 2";
                $res = $db->query($cmdCom);
                $tablComn = $res->fetchall();
                foreach($tablComn as $line){ ?>
                <div class='panel panel-default'>
                <div class='panel-body'>
                <h3>Commandes récentes</h3>
                <hr>
                <?php echo "<br><b>Nom de la formation commmandée: </b> ".$line['nomFormation']." <br><b> Prix de la formation commandée:</b> ".$line['prixForma']."€</div></div>
                ";
                }
            ?>
        </div>
        </div>
            <?php } else { ?>
            <?php echo "<h1>Mon Profil</h1>";
        }
    }
        ?>

</body>