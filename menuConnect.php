<!doctype html>
<html>
   <head>
       <title> One Piece : The best manga ever ! </title>
	   <meta charset="UTF-8"/>
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
	     <b><u>Menu principal</u></b>
	  </div>
	  
	  <div style="margin-bottom:25px;"></div>
	  
	  <?php include('_navConnect.php'); ?>
	  
	  <div style="margin-bottom:35px;"></div>
	  
	  <div class="error" style="color:red;text-align:center;">
	<?php 
		if (isset($_GET['login']))
		{
				if ($_GET['login'] == true){
					echo '<div class="alert alert-success" role="success"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                          <span class="sr-only">Error:</span> Vous êtes désormais connecté </div>';
		  }
		}
	?>
	</div>
	
	<div style="margin-bottom:35px;"></div>
	  
		<div>
		 <img src="Img/background_onepiece.jpg" alt="" title="" id="image"  />
		</div>
		
	 <div style="margin-bottom:30px;"></div>
	
	 <?php include('_footer.php'); ?>
   </body>
</html>