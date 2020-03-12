<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Connexion</title>
        <link rel="stylesheet" href="connexionAdmin.css"/>
        <link rel="icon" type="image/png" href="Images/icon.png" />
    </head>

    <body>

        <img id="logo" src="Images/Icon.png"></br>
        
        <h1 class="title">Se connecter en tant qu'administrateur</h1></br></br>

        <form method="post" action="verifconnectadmin.php">
            <center><input class="id" type="text" name="pseudo" placeholder="Pseudo" size="40"></center></br></br>
            <center><input class="mdp" type="password" name="mot_de_passe" placeholder="Mot de passe" size="40"></center></br></br>

            <center><input type="submit" value="Connexion" class="sign"/></center>
        </form>
       
        <p><a href="MDPOublie.php"/>Mot de passe oublié ?</a></p></br></br>
       
    </body>
</html>