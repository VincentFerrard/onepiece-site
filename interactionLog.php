<?php 

try

{

	$u116017242_vinc = new PDO('mysql:host=mysql.hostinger.fr;dbname=u116017242_site;charset=utf8', 'u116017242_vinc', 'Vincent0908');

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}
    $result = $u116017242_vinc->query("SELECT `pseudo`, `password`, `email` FROM `membres` WHERE `pseudo` = '".$_POST['prenom']."' AND `password` = '".$_POST['password']."' AND `email` = '".$_POST['email']."' ");
	$donnees = $result->fetch();

	if (($donnees['pseudo'] != $_POST['prenom']) || ($donnees['password'] != $_POST['password']) || ($donnees['email'] != $_POST['email'])){
		header('Location: login.php?error=true');
	}else{
		header('Location: menuConnect.php?login=true');
	}
    $result->closeCursor();
?>