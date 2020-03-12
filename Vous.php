<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Vous.css"/>
        <link rel="icon" type="image/png" href="Images/icon.png"/>
        <title>Vous</title>
    </head>

    <body>
        
        <!--barre de navigation-->
        <ul>
            <li style="float:right"><a href="Garde.php"><img src="Images/power.png" alt="Déconnexion" title="Déconnexion"/></a></li>
            <li style="float:right"><a class="active" href="Vous.php"><img src="Images/profile.png" alt="Profil" title="Profil"/></a></li>
            <li style="float:right"><a href="Emplois.php"><img src="Images/employment.png" alt="Emplois" title="Emplois"/></a></li>
            <li style="float:right"><a href="Messagerie.php"><img src="Images/message.png" alt="Messages" title="Messages"/></a></li>
            <li style="float:right"><a href="Notifications.php"><img src="Images/notifications.png" alt="Notifications" title="Notifications"/></a></li>
            <li style="float:right"><a href="Reseau.php"><img src="Images/network.png" alt="Réseau" title="Réseau"/></a></li>
            <li style="float:right"><a href="Accueil.php"><img src="Images/home.png" alt="Acceuil" title="Acceuil"/></a></li>
            <li style="float:left"><img src="Images/icone.png" alt="Logo" title="Logo"/></li>
        </ul> 
        

         <div class="row">
            <!--colonne infos-->
            
            <div class="infos">

            	<?php
                session_start();
                $id=$_SESSION['id'];
					try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=social_media_pro;charset=utf8', 'root', '');
					}
					catch(Exception $e)
					{
					        die('Erreur : '.$e->getMessage());
					}
					$reponse = $bdd->query('SELECT * FROM etudiant');
                    $verify=0;

					while ($donnees = $reponse->fetch())
					{
                        while($donnees['id']==$id && $verify==0)
                        {
				?>


                <h3>Nom:</h3>  <?php echo $donnees['nom']; ?>
                <h3>Prénom:</h3> <?php echo $donnees['prenom']; ?>
                <h3>Date de naissance:</h3> <?php echo $donnees['date_naissance']; ?>
                <h3>Promotion:</h3> <?php echo $donnees['promotion']; ?>
                <h3>Adresse:</h3> <?php echo $donnees['adresse']; ?>
                <h3>Code postal:</h3> <?php echo $donnees['code_postal']; ?>
                <h3>Ville:</h3> <?php echo $donnees['ville']; ?>
                <h3>Téléphone:</h3> <?php echo $donnees['telephone']; ?>
                <h3>Email:</h3> <?php echo $donnees['email']; ?>
                <?php $verify=1; ?>
                    <?php
                    }
				}
				$reponse->closeCursor();
?>
            </div>
        
            <!--colonne cv-->
            <div class="cv">
                <center><img id="selfie" src="Images/profile.png"/></br></center>
                
                <h2>CV</h2>
                <center><a href="#" class="telecharger">Télécharger</a></center></br></br></br></br>
                
                <h2>Lettre de motivation</h2>
                <center><a href="#" class="telecharger">Télécharger</a></center>
            </div>

            <div class="plus">
                <h2>Emplois</h2>
                <div class="fakeimg" style="height:200px;">Image</div>
                
                <h2>Modifier le mot de passe</h2>
                <center><a href="ModifMDP.php" class="modifier">Modifier</a></center>
                
            </div>
        </div>

        <!--fond de page-->
        <div class="footer">
            <footer>
                <form method="post" action="disconnect.php">
                    <center><input type="submit" value="Se déconnecter"/></center>
                </form>
            </footer>
        </div>
    </body>
</html>