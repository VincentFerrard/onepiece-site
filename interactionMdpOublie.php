<?php 

try
{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=siteonepiece;charset=utf8', 'root', '');
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
    $result = $bdd->query("UPDATE `inscription` SET `password` = '".$_POST['password']."' WHERE `pseudo` = '".$_POST['pseudo']."' AND `email` = '".$_POST['email']."' ");
	$donnees = $result->fetch();

	if (($_POST['pseudo'] == ' ') || ($_POST['password'] == ' ') || ($_POST['confirmPassword'] == ' ') || ($_POST['email'] == ' ')){
		header('Location: mdpOublie.php?error=true');
	}else{
		header('Location: login.php?mdp=true');
	}
    $result->closeCursor();
?>