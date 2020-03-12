<!DOCTYPE html>
<html>
    <head>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8" />
		<link rel="stylesheet" href="propositionemploi.css"/>
		<link rel="icon" type="image/png" href="Images/icon.png"/>

		<title> Ajouter proposition d'emploi </title>
    </head>

    <body>
		
		
		<img id="logo" src="Images/Icon.png"></br>
		
		<h1 class="title">Ajouter une proposition d'emploi </h1></br></br>
		
		<form action="ajoutpropositionemploi.php" method="post">

			<input class="titre" type="text" name="titre" placeholder="Nom de l'offre"></br></br>
			<input class="societe" type="text" name="societe" placeholder="Societe"></br></br> 
			<label> Type de contrat</label>
			<input type="radio" name="contrat" value="stage"> Stage
			<input type="radio" name="contrat" value="cdd"> CDD
			<input type="radio" name="contrat" value="alternance"> Alternance 
			<input type="radio" name="contrat" value="autre"> Autre </br></br>

			<label>Secteur</label>
			<select class="secteur" name="reponse"> 
				<option > Sélectionnez le secteur d'activité </option> 
				<option value="agroalimentaire"> Agroalimentaire</option> 
				<option value="banque"> Banque / Assurance</option>
				<option value="chimie"> Chimie / Parachimie</option>
				<option value="commerce"> Commerce / Négoce / Distribution</option>
				<option value="communication"> Édition / Communication / Multimédia </option>
				<option value="electronique"> Électronique / Électricité </option>
				<option value="enseignement"> Enseignement </option>
				<option value="etudes"> Études et conseils</option>
				<option value="pharmaceutique"> Industrie pharmaceutique</option>
				<option value="informatique"> Informatique / Télécoms </option>
				<option value="machines"> Machines et équipements / Automobile </option>
				<option value="metallurgie"> Métallurgie / Travail du métal</option>
				<option value="service"> Services aux entreprises</option>
				<option value="textile"> Textile / Habillement / Chaussure</option>
				<option value="transports"> Transports / Logistique </option>
				<option value="banque"> Banque / Assurance</option>
				<option value="autre"> Autre </option>
			</select> <br></br>		
			<input class="description" type="text" name="description" placeholder="Ajouter une description à votre offre"></br></br>			
			<input class="lieu" type="text" name="lieu" placeholder="Lieu"></br></br>
			<input class="salaire" type="number" name="salaire" placeholder="Salaire proposé"></br></br>
			<input class="debut" type="date" name="debut" placeholder="Date de début"></br></br>
			<input class="fin" type="date" name="fin" placeholder="Date de fin"></br></br>

			
			<center><input type="submit" value="Ajouter Offre" class="sign"></center></br></br>
			
			<center><a href="Vous2.php">Retour</a></center></br></br>
			
		</form>
    

	</body>

</html>