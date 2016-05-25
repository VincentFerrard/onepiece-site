<?php 

try

{

	$u116017242_vinc = new PDO('mysql:host=mysql.hostinger.fr;dbname=u116017242_site;charset=utf8', 'u116017242_vinc', 'Vincent0908');

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}
    $result = $u116017242_vinc->query("UPDATE `membres` SET `password` = '".$_POST['password']."' WHERE `pseudo` = '".$_POST['pseudo']."' AND `email` = '".$_POST['email']."' ");
	$donnees = $result->fetch();

	if (($_POST['pseudo'] == ' ') || ($_POST['password'] == ' ') || ($_POST['confirmPassword'] == ' ') || ($_POST['email'] == ' ')){
		header('Location: mdpOublie.php?error=true');
	}else{
		header('Location: login.php?mdp=true');
	}
    $result->closeCursor();
?>