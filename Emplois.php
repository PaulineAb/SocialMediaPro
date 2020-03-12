<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Emplois.css"/>
        <title>Social Media Pro</title>
    </head>

    <body>
        <!--en-tête
        <div class="header">
            <h1>Accueil</h1>
        </div>
        -->
        <!--barre de navigation-->
         <div class="navbar">
            <ul>
                <li style="float:right"><a href="Garde.php"><img src="Images/power.png" alt="Déconnexion" title="Déconnexion"/></a></li>
                <li style="float:right"><a href="Vous.php"><img src="Images/profile.png" alt="Profil" title="Profil"/></a></li>
                <li style="float:right"><a class="active" href="Emplois.php"><img src="Images/employment.png" alt="Emplois" title="Emplois"/></a></li>
                <li style="float:right"><a href="Messagerie.php"><img src="Images/message.png" alt="Messages" title="Messages"/></a></li>
                <li style="float:right"><a href="Notifications.php"><img src="Images/notifications.png" alt="Notifications" title="Notifications"/></a></li>
                <li style="float:right"><a href="Reseau.php"><img src="Images/network.png" alt="Réseau" title="Réseau"/></a></li>
                <li style="float:right"><a href="Accueil.php"><img src="Images/home.png" alt="Acceuil" title="Acceuil"/></a></li>
                <li style="float:left"><img src="Images/icone.png" alt="Logo" title="Logo"/></li>
            </ul> 
         </div>

         <div class="row">
            <!--fil d'actualité-->
            <div class="main">
                <h2>Propositions d'emplois</h2>
               <div class="fakeimg" style="height:60px;" name="proposition"></div><br>
				<!--<div class="fakeimg" style="height:60px;">Image</div><br>-->
                <!--<div class="fakeimg" style="height:60px;">Image</div>-->
						
                
				<?php
					try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=social_media_pro;charset=utf8', 'root', '');
					}
					catch(Exception $e)
					{
					        die('Erreur : '.$e->getMessage());
					}
					$reponse = $bdd->prepare('SELECT titre, societe, typecontrat, activite, description, lieu, salaire, debut, fin FROM `emplois` WHERE typecontrat=?');
                    $reponse->execute(array($_POST['recherche']));

					while ($donnees = $reponse->fetch())
					{
				?>


                <h3>Nom de l'offre:</h3> <?php echo $donnees['titre']; ?> 
                <h3>Societe:</h3> <?php echo $donnees['societe']; ?>
                <h3>Type de contrat:</h3> <?php echo $donnees['typecontrat']; ?>
				<h3>Secteur:</h3> <?php echo $donnees['activite']; ?>
                <h3>Description de l'offre:</h3> <?php echo $donnees['description']; ?>
				<h3>Lieu:</h3> <?php echo $donnees['lieu']; ?>
                <h3>Salaire proposé:</h3> <?php echo $donnees['salaire']; ?>
                <h3>Date de début:</h3> <?php echo $donnees['debut']; ?>
                <h3>Date de fin:</h3> <?php echo $donnees['fin']; ?>
				<center><button class="postuler">Postuler</button></center> 
                <?php
				}
				$reponse->closeCursor();
				?>
				</div>
        
            <!--partenaires et contacts-->
            <div class="side">
			
                <h2>Recherche d'emplois</h2>
				<form action="Emplois.php" method="post">		
                <input class="recherche" type="text" name="recherche" placeholder="Recherche..." >
                <input type="submit" class="valid" name="valid"> 
				</form>
				</div>
            </div> 
			
        </div>

        <!--fond de page-->
        <div class="footer">
            <footer>Crédits</footer>
        </div>
    </body>
</html>