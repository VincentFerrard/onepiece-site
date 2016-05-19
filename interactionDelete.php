<?php 

try
{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=siteonepiece;charset=utf8', 'root', '');
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
    $result = $bdd->query("DELETE FROM `inscription` WHERE `pseudo` = '".$_POST['pseudo']."' AND `password` = '".$_POST['password']."' AND `email` = '".$_POST['email']."' ");
	$donnees = $result->fetch();

	if (($_POST['pseudo'] == ' ') || ($_POST['password'] == ' ') || ($_POST['email'] == ' ')){
		header('Location: delete.php?error=true');
	}else{
		header('Location: delete.php?delete=true');
	}
    $result->closeCursor();
?>