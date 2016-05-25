<?php
	if ((isset($_POST['nom']) 
		&& ($_POST['firstName']) 
		&& ($_POST['Jour']) && ($_POST['pseudo']) && ($_POST['password2']) 
		&& ($_POST['email2'])) && (!empty($_POST['nom']) && ($_POST['firstName']) && ($_POST['Jour']) 
		&& ($_POST['pseudo']) && ($_POST['password2']) && ($_POST['email2']))){
		
	try
{
	$u116017242_vinc = new PDO('mysql:host=mysql.hostinger.fr;dbname=u116017242_site;charset=utf8', 'u116017242_vinc', 'Vincent0908');
}

  catch(\Exception $e){
	   die('Connection perdu ! Veuillez réessayer.');
	}
	    $reponse = "INSERT INTO `u116017242_site`.`membres` (`id`, `nom`, `prenom`, `date de naissance`, `pseudo`, `password`, `email`) VALUES (NULL,'".$_POST['nom']."','".$_POST['firstName']."', '".$_POST['Jour'].$_POST['Mois'].$_POST['Annee']."','".$_POST['pseudo']."','".$_POST['password2']."','".$_POST['email2']."');";
		
	    $insertion = $u116017242_vinc->query($reponse);
		
	}

	if (($_POST['nom'] == "") || ($_POST['firstName'] == "") || ($_POST['Jour'] == "Jour") || ($_POST['Mois'] == "Mois") || ($_POST['Annee'] == "Année") || ($_POST['pseudo'] == "") || ($_POST['password2'] == "") || ($_POST['confirmPassword'] == "") || ($_POST['email2'] == "")){
		header('Location: register.php?error=true');
	}else{
		header('Location: register.php?sucess=true');
	}
?>