<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Accueil.css"/>
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
                <li style="float:right"><a href="Vous2.php"><img src="Images/profile.png" alt="Profil" title="Profil"/></a></li>
                <li style="float:right"><a href="Emplois2.php"><img src="Images/employment.png" alt="Emplois" title="Emplois"/></a></li>
                <li style="float:right"><a href="Messagerie2.php"><img src="Images/message.png" alt="Messages" title="Messages"/></a></li>
                <li style="float:right"><a href="Notifications2.php"><img src="Images/notifications.png" alt="Notifications" title="Notifications"/></a></li>
                <li style="float:right"><a href="Reseau2.php"><img src="Images/network.png" alt="Réseau" title="Réseau"/></a></li>
                <li style="float:right"><a class="active" href="Accueil2.php"><img src="Images/home.png" alt="Acceuil" title="Acceuil"/></a></li>
                <li style="float:left"><img src="Images/icone.png" alt="Logo" title="Logo"/></li>
            </ul> 
         </div>

         <div class="row">
            <!--fil d'actualité-->
            <div class="main">
                <h2>Vos dernières publications</h2>
                <div class="fakeimg" style="height:60px;"></div>
                <?php



                    try
                    {
                     $bdd = new PDO('mysql:host=localhost;dbname=social_media_pro;charset=utf8', 'root', '');
                    }

                    catch(Exception $e)
                    {
                        die('Erreur : '.$e->getMessage());
                    }




                    $reponse = $bdd->query('SELECT titre, message FROM messagerie');




                    while ($donnees = $reponse->fetch())

                    {
                    ?>
                        <div class="publication">
                            <h3><?php echo htmlspecialchars($donnees['titre']);?></h3>
                            <p><?php echo nl2br(htmlspecialchars($donnees['message']));?></p></n>
                        </div>



                    <?php
                    } $reponse->closeCursor();
                    ?>

                <div class="footer">
                    <footer><a class="sign" href="Publications.php" >Commencer à publier !</a></footer>
                </div>
                
                
            </div>
        
            <div class="side">
            </div>
        </div>
    </body>
</html>