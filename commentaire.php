<?php
if($_POST) {

$message=$_POST['avis'];
$note=$_POST['note'];

mail("siteonepiece69@gmail.com", "Les avis du site", $message, $note);

}
?>


<!doctype html>
<html>
   <head>
       <title> One Piece : The best manga ever ! </title>
	   <meta name=viewport content="width=device-width, initial-scale=1">
	   <link href="css/style.css" rel="stylesheet" type="text/css"/>
	   <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
	   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	   <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
	   <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
	   <link rel="icon"  type="image/png" href="Img/one_piece.png" />
	   <script type="text/javascript"  src="js/jquery-1.11.3.min.js" > </script>
	   <script type="text/javascript"  src="js/script.js" > </script>
	   <script type="text/javascript"  src="bootstrap/js/bootstrap.js" > </script>
	   <script type="text/javascript"  src="bootstrap/js/bootstrap.min.js" > </script>
	   <script type="text/javascript"  src="bootstrap/js/npm.js" > </script>
	   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
       <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   </head>
   <body id="affichage">
   
      <?php include('_titre.php'); ?>
	  
	  <div id="subtitle">
	     <b><u>Vos avis</u></b>
	  </div>
	  
	  <div style="margin-bottom:25px;"></div>
	  
	  <?php include('_nav.php'); ?>
	  
	  <div style="margin-bottom:50px;margin-top:10%;"></div>
	  
	<div class="error" style="color:red;text-align:center;">
	<?php 
		if (isset($_GET['error']))
		{
	    	if ($_GET['error'] == true){
				echo '<div class="alert alert-danger" role="alert"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                      <span class="sr-only">Error:</span> Vous n avez rien saisi ! </div>';
		  }
		}
		
		if (isset($_GET['thanks']))
		{
				if ($_GET['thanks'] == true){
					echo '<div class="alert alert-success" role="success"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                      <span class="sr-only">Error:</span> Votre avis a bien été envoyé ! Merci pour votre aide !!! </div>';
		  }
		}
	?>
	</div>
	
	<div style="color:white;margin-left:2%;margin-top:2%;margin-bottom:2%;font-size:20px"> <u> Vous pouvez envoyer vos commentaires ici grâce à la notation et à un espace de communication </u> </div>
	
	<div style="margin-bottom:8%;"></div>
	  
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
	    <table style="background-color:blue;">
		  <tbody>
		   <!--Premiere ligne-->
		   <tr>
		   <!--Premiere colonne-->
		   <td>
		   <div style="color:white;margin-left:2%;margin-top:2%;margin-bottom:2%"> Vous pouvez noter le site ici : </div>
		   <input style="color:black;margin-bottom:8px;margin-left:6%" id="note" type="radio" name="note" value="1/10"> <label for="1">1</label>
		   <input style="color:black;margin-bottom:8px;margin-left:4%" id="note" type="radio" name="note" value="2/10"> <label for="2">2</label>
		   <input style="color:black;margin-bottom:8px;margin-left:4%" id="note" type="radio" name="note" value="3/10"> <label for="3">3</label>
		   <input style="color:black;margin-bottom:8px;margin-left:4%" id="note" type="radio" name="note" value="4/10"> <label for="4">4</label>
		   <input style="color:black;margin-bottom:8px;margin-left:4%" id="note" type="radio" name="note" value="5/10"> <label for="5">5</label>
		   <div style="margin-right:12%"></div>
		   </td>
		   </tr>
		   
		   <tr>
		   <td>
		   <input style="color:black;margin-bottom:8px;margin-left:6%" id="note" type="radio" name="note" value="6/10"> <label for="6">6</label>
		   <input style="color:black;margin-bottom:8px;margin-left:4%" id="note" type="radio" name="note" value="7/10"> <label for="7">7</label>
		   <input style="color:black;margin-bottom:8px;margin-left:4%" id="note" type="radio" name="note" value="8/10"> <label for="8">8</label>
		   <input style="color:black;margin-bottom:8px;margin-left:4%" id="note" type="radio" name="note" value="9/10"> <label for="9">9</label>
		   <input style="color:black;margin-bottom:8px;margin-left:4%" id="note" type="radio" name="note" value="10/10"> <label for="10">10</label>
		   <div style="margin-right:12%"></div>
		   </td>
		   </tr>
		   <!--Seconde ligne-->
		   <tr>
		   <td> <textarea style="color:black;margin-top:8px;margin-bottom:8px;margin-left:2%;width:96%" id="avis" type="text" placeholder="Pour nous aider à améliorer le site, vous pouvez nous donner votre avis ici." name="avis"> </textarea> </td>
		   </tr>
		   <!--Troisième ligne-->	
		   <tr>
		   <td> <input style="margin-top:8px;margin-bottom:8px;margin-left:40%;color:black;" type="submit" value="Envoyer" onclick="self.location.href='interactionCom.php'" /> </td>
		   </tr>
	   </tbody>
	  </table>
    </form>
	
     <div style="margin-bottom:30%;"></div>
	
	<?php include('_footer.php'); ?>
	
   </body>
</html>