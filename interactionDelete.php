<?php 

try

{

	$u116017242_vinc = new PDO('mysql:host=mysql.hostinger.fr;dbname=u116017242_site;charset=utf8', 'u116017242_vinc', 'Vincent0908');

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}
    $result = $u116017242_vinc->query("DELETE FROM `membres` WHERE `pseudo` = '".$_POST['pseudo']."' AND `password` = '".$_POST['password']."' AND `email` = '".$_POST['email']."' ");
	$donnees = $result->fetch();

	if (($_POST['pseudo'] == " ") || ($_POST['password'] == " ") || ($_POST['email'] == " ")){
		header('Location: delete.php?error=true');
	}else{
		header('Location: delete.php?delete=true');
	}
    $result->closeCursor();
?>