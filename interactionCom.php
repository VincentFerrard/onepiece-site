<?php 
	if ($_POST['note'] != ""){
		header('Location: commentaire.php?error=true');
	}else{
		header('Location: commentaire.php?thanks=true');
	}
?>