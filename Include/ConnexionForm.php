<div class="panel">
    <div class="box-header">
        <center>
            <h1>Connexion</h1>
            <p>Vous avez un êtes déjà inscrit?</p>
        </center>
    </div>
    <form action="connexion_uti.php" method="POST">
      <div class="form-group">
          <div>
            <label>Identifiant:</label>
            <br>
            <input type="text"  class="form-control" name ="UtiID"Required/>
          </div>
          <div>
            <label>Mot de passe:</label>
            <br>
            <input type="password" class="form-control" name="Utimdp" Required/>
          </div>
          <div class="text-center">
            <button class="btn btn-primary">
              <i class="fa fa-user-md">
                    Connexion
             </i>
            </button>
          <div>
          </div>
          <div>
            <a href="inscription.php">Pas inscrit? Cliquer ici!</a>
          </div>
        </form>
        </div>
</div>

