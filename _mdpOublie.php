<form action="interactionMdpOublie.php" method="POST">
	    <table style="background-color:blue;width:25%">
		  <tbody>
		   <!--Premiere ligne-->
		   <tr>
		   <!--Premiere colonne-->
		   <td> <div style="margin-left:8px"> Pseudo </div> </td>
		   <!--Seconde colonne-->
		   <td> <input style="color:black;margin-top:8px;margin-bottom:8px;margin-right:4px" id="name" type="text" placeholder="Pseudo" name="pseudo" /></td>
		 </tr>
		 <!--Seconde ligne-->
		 <tr>
		   <td> <div style="margin-left:8px"> Email </div> </td>
		   <td> <input style="color:black;margin-bottom:8px" id="email" type="email" placeholder="Email" name="email"/></td>
		 </tr>
		 <!--Troisieme ligne-->
		 <tr>
		   <td> <div style="margin-left:8px"> Mot de passe </div> </td>
		   <td> <input style="color:black;margin-bottom:8px" id="password" type="password" placeholder="Mot de passe" name="password" /></td>
		 </tr>
		 <!--Quatrieme ligne-->	
         <tr>
		   <td> <div style="margin-left:8px"> Confirmer mot de passe </div> </td>
		   <td> <input style="color:black;margin-bottom:8px" id="password" type="password" placeholder="Confirmer mot de passe" name="confirmPassword" /></td>
		 </tr>
		 <!--Cinquième ligne-->
		 <tr>
		   <td> <input style="margin-top:8px;margin-bottom:8px;margin-left:150px;color:black" type="submit" value="Envoyer" onclick="mdpOublie()" /> </td>
		 </tr>
	   </tbody>
	  </table>
</form>