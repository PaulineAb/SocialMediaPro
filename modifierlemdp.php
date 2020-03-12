    <?php


session_start();
$id=$_SESSION['id'];

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
            
    	$mot_de_passe=isset($_POST['motdepasse'])?$_POST['motdepasse']:"";


        $sql = "UPDATE etudiant SET mot_de_passe = '".$mot_de_passe."' WHERE id=$id;";
        

        $res = mysqli_query($Connect,$sql);
	
        mysqli_close($Connect);
    }
	//echo $sql;


	header('location: vous.php');
	?>