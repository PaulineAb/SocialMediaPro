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

$reponse = $bdd->query('SELECT id, pseudo, mot_de_passe FROM etudiant');

while (($donnees = $reponse->fetch()) && ($verify==0))
{
    if($donnees['mot_de_passe']==$mdp && $donnees['pseudo']==$pseudo)
    {
        session_start();
        $_SESSION['id'] = $donnees['id'];
        $_SESSION['pseudo'] = $pseudo;
        echo 'Vous êtes connecté. Bonjour '  .$_SESSION['pseudo'];
        $verify=1;
        header('location:Vous.php');
    }
    else
    {
        echo 'Mauvais identifiants ou mot de passe !';
    }
}


