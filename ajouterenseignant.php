<!DOCTYPE html>
<html>
    <head>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8" />
		<link rel="stylesheet" href="ajouterenseignant.css"/>
		<link rel="icon" type="image/png" href="Images/icon.png" />

		<title>Enregistrement </title>
    </head>

    <body>
		
		
		<img id="logo" src="Images/Icon.png"></br>
		
		<h1 class="title">Inscription enseignant</h1></br></br>
		
		<form action="validerajouterinscription2.php" method="post">

			<input class="nom" type="text" name="nom" placeholder="Nom"></br></br>
			<input class="prenom" type="text" name="prenom" placeholder="Prénom"></br></br> 
			<input class="tel" type="tel" name="telephone" placeholder="Téléphone"></br></br>
			<input class="add" type="text" name="adresse" placeholder="Adresse"></br></br>
			<input class="postal" type="text" name="postal" placeholder="Code postal"></br></br>
			<input class="ville" type="text" name="ville" placeholder="Ville"></br></br>

		 	<label>Sexe</label>
		 	<input class="femme" type="radio" name="sexe" value="Femme"><strong>Femme</strong>
		 	<input class="homme" type="radio" name="sexe" value="homme"><strong>Homme</strong> 
		 	<input class="autre" type="radio" name="sexe" value="autre"><strong>Autre</strong></br></br>

		 	<label>Date de naissance</label>
			<input class="birth" type="date" name="datedenaissance"></br></br>
	
			<label>Matière enseignées</label>
			<select class="promo" name="reponse"> 
				<option value="selectionmatiere"> Sélectionnez votre matière </option> 
				<option value="mathematiques"> Mathématiques </option> 
				<option value="physique"> Physique </option>
				<option value="electronique"> Eléctronique </option>
				<option value="informatique"> Informatique </option>
				<option value="langues"> Langues </option>
	 			<option value="autrematiere"> Autre </option>
			</select> <br></br>
			
			<input class="pseudo" type="text" name="pseudo" placeholder="Pseudo"></br></br>
			<input class="email" type="email" name="mail" placeholder="Email"></br></br> 
			<input class="mdp" type="password" name="motdepasse" placeholder="Mot de passe"></br></br> 
			<input class="confirm" type="password" name="motdepasseconf" placeholder="Confirmer mot de passe"></br></br></br></br></br>

			
			<center><input type="submit" value="Inscription" class="sign"></center></br></br>
			
		</form>

		<center><a href="Admin.php" class="modifier">Retour</a></center></br></br>
        <!--fond de page-->
        <div class="footer">
            <footer>
                <form method="post" action="disconnect.php">
                    <center><input type="submit" value="Se déconnecter"/></center>
                </form>
            </footer>
        </div>
    </br>
    </body>
</html>