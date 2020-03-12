<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Admin.css"/>
        <link rel="icon" type="image/png" href="Images/icon.png"/>
        <title>Administration</title>
    </head>

    <body>

        <img id="logo" src="Images/Icon.png"></br>
        
        <h1 class="title">Administration</h1></br></br>

        <div class="ajout">

                <h2>Ajouter un etudiant</h2>
                <center><a href="ajouteretudiant.php" class="modifier">Ajouter</a></center>
                
                <h2>Ajouter un enseignant</h2>
                <center><a href="ajouterenseignant.php" class="modifier">Ajouter</a></center>

        </div>

        <!--

        <div class="modifie">

                <h2>Modifier un etudiant</h2>
                <center><a href="modifieretudiant.php" class="modifier">Modifier</a></center>
                
                <h2>Modifier un enseignant</h2>
                <center><a href="modifierenseignant.php" class="modifier">Modifier</a></center>

        </div>

    	-->
    	
        <div class="supprime">

                <h2>Supprimer un etudiant</h2>
                <center><a href="supprimeretudiant.php" class="modifier">Supprimer</a></center>
                
                <h2>Supprimer un enseignant</h2>
                <center><a href="supprimerenseignant.php" class="modifier">Supprimer</a></center>

        </div>

    	</br></br></br></br>
        <div class="footer">
            <footer>
                <form method="post" action="disconnect.php">
                    <center><input type="submit" value="Se déconnecter"/></center>
                </form>
            </footer>
        </div>
    </body>
</html>