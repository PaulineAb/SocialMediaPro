<!DOCTYPE html>
<html>
    <head>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8" />
		<link rel="stylesheet" href="ajouteretudiant.css"/>
		<link rel="icon" type="image/png" href="Images/icon.png"/>

		<title>Enregistrement </title>
    </head>

    <body>
		
		
		<img id="logo" src="Images/Icon.png"></br>
		
		<h1 class="title">Inscription étudiant</h1></br></br>
		
		<form action="validerajouterinscription.php" method="post">

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
	
			<label>Promotion</label>
			<select class="promo" name="reponse"> 
				<option > Sélectionnez votre promotion </option> 
				<option value="ing1"> ING 1</option> 
				<option value="ing2"> ING 2 </option>
				<option value="ing3"> ING 3 </option>
				<option value="ing4"> ING 4 </option>
				<option value="ing5"> ING 5 </option>
	 			<option value="autre"> Autre </option>
			</select> <br></br>
			
			<input class="pseudo" type="text" name="pseudo" placeholder="Pseudo"></br></br>
			<input class="email" type="email" name="mail" placeholder="Email"></br></br> 
			<input class="mdp" type="password" name="motdepasse" placeholder="Mot de passe"></br></br> 
			<input class="confirm" type="password" name="motdepasseconf" placeholder="Confirmer mot de passe"></br></br></br></br></br>

			
			<center><input type="submit" value="Inscription" class="sign"></center></br></br>
			
		</form>
    <center><a href="Admin.php" class="modifier">Retour</a></center> </br></br>
        <!--fond de page-->
        <div class="footer">
            <footer>
                <form method="post" action="disconnect.php">
                    <center><input type="submit" value="Se déconnecter"/></center>
                </form>
            </footer>
        </br>
        </div>

	</body>

</html>