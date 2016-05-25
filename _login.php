<form action="interactionLog.php" method="POST">
	    <table style="background-color:blue;width:25%">
		  <tbody>
		   <!--Premiere ligne-->
		   <tr>
		   <!--Premiere colonne-->
		   <td> <div style="margin-left:8px"> Pseudo </div> </td>
		   <!--Seconde colonne-->
		   <td> <input style="color:black;margin-top:8px;margin-bottom:8px;margin-right:4px" id="name" type="text" placeholder="Pseudo" name="prenom" /></td>
		 </tr>
		 <!--Seconde ligne-->
		 <tr>
		   <td> <div style="margin-left:8px"> Mot de passe </div> </td>
		   <td> <input style="color:black;margin-bottom:8px" id="password" type="password" placeholder="Mot de passe" name="password" /></td>
		 </tr>
		 <!--Troisieme ligne-->
		 <tr>
		   <td> <div style="margin-left:8px"> Email </div> </td>
		   <td> <input style="color:black;margin-bottom:8px" id="email" type="email" placeholder="Email" name="email"/></td>
		 </tr>
		 <!--Quatrieme ligne-->	
		 <tr>
		   <td> <input style="margin-top:8px;margin-bottom:8px;margin-left:150px;color:black" type="submit" value="Login" onclick="login()" /> </td>
		 </tr>
		 <tr>
		 <td> <a style="color:red;margin-left:2%;" href="mdpOublie.php">Mot de passe oublié ?</a> </td>
		 </tr>
	   </tbody>
	  </table>
</form>