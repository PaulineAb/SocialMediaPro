    <?php

$server = "localhost";
$log = "root";
$mdp = "";
$bdd = "social_media_pro";
$Connect = mysqli_connect($server,$log,$mdp,$bdd);

	if(!$Connect)
    	{
    		echo"Erreur de connection";
    	}
        else
        {
    	$titre=isset($_POST['titre'])?$_POST['titre']:"";
    	$societe=isset($_POST['societe'])?$_POST['societe']:"";
		$typecontrat=isset($_POST['contrat'])?$_POST['contrat']:"";
    	$activite=isset($_POST['reponse'])?$_POST['reponse']:"";
    	$description=isset($_POST['description'])?$_POST['description']:"";
		$lieu=isset($_POST['lieu'])?$_POST['lieu']:"";
    	$salaire=isset($_POST['salaire'])?$_POST['salaire']:"";
    	$debut=isset($_POST['debut'])?$_POST['debut']:"";
    	$fin=isset($_POST['fin'])?$_POST['fin']:"";
    	
        
		$sql = "INSERT INTO `emplois` (`id_emploi`, `titre`, `societe`,`typecontrat`,`activite`,`description`, `lieu`, `salaire`, `debut`, `fin`) VALUES (NULL, '".$titre."', '".$societe."','".$typecontrat."','".$activite."','".$description."','".$lieu."', '".$salaire."', '".$debut."', '".$fin."');";
        $res = mysqli_query($Connect,$sql);
	
        mysqli_close($Connect);
    }
	//echo $sql;
	
	header('location: propositionemploi.php');
	?>