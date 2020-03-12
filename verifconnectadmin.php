<?php

/// on se connecte à la bdd

try

{

    $bdd = new PDO('mysql:host=localhost;dbname=social_media_pro;charset=utf8', 'root', '');

}

catch (Exception $e)

{

        die('Erreur : ' . $e->getMessage());

}

// on récupère le mot de passe et les identififiants

$pseudo=$_POST['pseudo'];
$mdp=$_POST['mot_de_passe'];
$verify=0;

$reponse = $bdd->query('SELECT idadmin, pseudo, motdepasse FROM administration');

while (($donnees = $reponse->fetch()) && ($verify==0))
{
    if($donnees['motdepasse']==$mdp && $donnees['pseudo']==$pseudo)
    {
        session_start();
        $_SESSION['idadmin'] = $donnees['idadmin'];
        $_SESSION['pseudo'] = $pseudo;
        echo 'Vous êtes connecté. Bonjour '  .$_SESSION['pseudo'];
        $verify=1;
        header('location:Admin.php');
    }
    else
    {
        echo 'Mauvais identifiants ou mot de passe !';
    }
}


