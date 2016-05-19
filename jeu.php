<!doctype html>
<html>
   <head>
       <title> One Piece : The best manga ever ! </title>
	   <meta charset="UTF-8"/>
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
	     <b><u>Jeu</u></b>
	  </div>
	  
	  <div style="margin-bottom:25px;"></div>
	  
	  <?php include('_navConnect.php'); ?>
	  
	  <div style="margin-bottom:10%;"></div>
	  
      <div style="background-color:white; height:500px; widht:500px; margin-left:20%; margin-right:20%;">
        <img src="Img/one_piece.png" alt="" title="" id="bouger" style="position:absolute; height:50px; width:50px; left:30%; top:40%"/>&nbsp;
		<img src="Img/one_piece.png" alt="" title="" id="fin" style="position:absolute; height:50px; width:50px; left:68%; top:79%"/>
      </div>
	  
	  <div style="margin-bottom:5%;"></div>
	  
      <div style="text-align:center">
        <input type="button" value="&uArr;" onClick="deplace(0,-20)">
      </div>
	  
      <div style="text-align:center">
        <input type="button" value="&lArr;" onClick="deplace(-20,0)">
        <input type="button" value="&dArr;" onClick="deplace(0,20)">
        <input type="button" value="&rArr;" onClick="deplace(20,0)">
      </div>
	  
	 <div style="margin-bottom:10%;"></div>
	
	 <?php include('_footer.php'); ?>
</body>
</html>