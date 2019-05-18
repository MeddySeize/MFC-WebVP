<!DOCTYPE html>
<html>
    <div id="main">
        <head>
            <title>Page d'accueil WEBVP</title>
            <meta charset="utf-8"/>
            <link rel="stylesheet" type="text/css" href="css/Willstyle.css">
        </head>
        <body>
            <nav>
                <select class="select" onchange="location = this.options[this.selectIndex].value" >
                    <option value="">Accueil</option>
                    <option value="css/style.css">Accueil</option>
                    <option value="PageFormation.php">Formation</option>
                    <option value="PageContact.php">Contact</option>
                    <option value="">Autres</option>
                </select><!--C'est pour pouvoir réduire la barre de nav quand la fenetre est réduite ou pour le format mobile-->
                <ul id="nav">
                    <li><a class="nav active" href="PageAccueil.php">Accueil</a></li>
                    <li><a class="nav" href="PageFormation.php">Formation</a></li> 
                    <li><a class="nav" href="PageContact.php">Contact</a></li> 
                    <li><a class="nav-right" href="Showroom.php">Autres</a></li> 
                </ul><!--C'est la barra de navigation-->
                </nav>

            <div name="Entete">
                <h1>WEBVP</h1>
                <h5>Formation pour tous</h5>
            </div>

            <div class="ColonneGauche">
                <div class="BlockA">Vous proposer une formation ?</div>
                <div class="BlockB" href="PageFormation.php">Vous voulez suivre une formation ?</div>
                <div class="BlockC">???</div>

            </div>
            

            <div name="ColonneDroite">
            <h3>Nos Formations</h3>

            </div>

            <footer>
                <p>texte du footer</p>
            </footer>
        </body>
    </div>
</html>