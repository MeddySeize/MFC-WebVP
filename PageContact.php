<!DOCTYPE html>
<html>
    <div id="main">
    <head>
        <title>Contact</title>
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
                </select>
                    <ul id="nav">
                        <li><a class="nav" href="PageAccueil.php">Accueil</a></li>
                        <li><a class="nav" href="PageFormation.php">Formation</a></li> 
                        <li><a class="nav active" href="PageContact.php">Contact</a></li> 
                        <li><a class="nav-right" href="#">Autres</a></li> 
                    </ul>
            </nav>
    
            <div name="Entete">
                    <h1>WEBVP</h1>
                    <h5>Formation pour tous</h5>
            </div>
    
            <div name="ColonneGauche">
    
            </div>
    
            <div name="ColonneDroite">
    
    
            </div>
    
            <footer>
                <p>texte du footer</p>
            </footer>
    </body>
    </div>
</html>