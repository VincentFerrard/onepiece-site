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
   <body style="background-color:black">
   
      <?php include('_titre.php'); ?>
	  	  
	  <div id="subtitle">
	     <b><u>Images</u></b>
	  </div>
	  
	  <div style="margin-bottom:25px;"></div>
	  
	  <?php include('_nav.php'); ?>
	  
	  <div style="margin-bottom:50px;"></div>

	   <div>
	    <div id="intro">
	       <u>Des images</u>
	    </div>
		
		<div style="margin-bottom:25px;"></div>
		
		<div style="margin-left:5%">
		   <input style="margin-bottom:2%;color:black" type="button" onclick="random()" value="Load"/>
		   <input style="margin-bottom:2%;color:black" type="submit" onclick="next()" value="Width"/>
		   <input style="margin-bottom:2%;color:black" type="submit" value="Height"/>
		   <input style="color:black;margin-right:5%" type="submit" name="bouton" value="Valider"/>
		   <div id="imageContener"></div>
		</div>
		

	<div style="margin-bottom:50px;"></div>

	   <?php include('_footer.php'); ?>
   </body>
</html>