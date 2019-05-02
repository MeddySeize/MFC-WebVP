<!DOCTYPE html>
<html>
    <div id="main">
        <head>
            <title>Page d'accueil WEBVP</title>
            <meta charset="utf-8"/>
            <link rel="stylesheet" type="text/css" href="css/style.css">
        </head>
        <body>
            <nav>
                <select class="select" onchange="location = this.options[this.selectIndex].value" >
                    <option value="">Accueil</option>
                    <option value="css/style.css">Accueil</option>
                    <option value="PageFormation.htm">Formation</option>
                    <option value="PageContact.htm">Contact</option>
                    <option value="">Autres</option>
                </select><!--C'est pour pouvoir réduire la barre de nav quand la fenetre est réduite ou pour le format mobile-->
                <ul id="nav">
                    <li><a class="nav active" href="PageAccueil.htm">Accueil</a></li>
                    <li><a class="nav" href="PageFormation.htm">Formation</a></li> 
                    <li><a class="nav" href="PageContact.htm">Contact</a></li> 
                    <li><a class="nav-right" href="Showroom.php">Autres</a></li> 
                </ul><!--C'est la barra de navigation-->
                </nav>

            <div name="Entete">
                <h1>WEBVP</h1>
                <h5>Formation pour tous</h5>
            </div>

            <div name="ColonneGauche">
                <div id="BlockA">Vous proposer une formation ?</div>
                <div name="BlockB">Vous voulez suivre une formation ?</div>
                <div name="BlockC">???</div>

            </div>
            <h3>Nos Formations</h3>

            <div name="ColonneDroite">


            </div>

            <footer>
                <p>texte du footer</p>
            </footer>
        </body>
    </div>
</html>