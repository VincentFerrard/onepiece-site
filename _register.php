<form action="interactionRegist.php" method="POST">
	    <table style="background-color:blue">
		  <tbody>
		   <!--Première ligne-->
		   <tr>
		   <!--Première colonne-->
		   <td> <div style="margin-left:8px"> Nom </div> </td>
		   <!--Seconde colonne-->
		   <td> <input style="color:black;margin-top:8px;margin-bottom:8px;margin-right:4px" id="nom" type="text" placeholder="Nom" name="nom" ></td>
		 </tr>
		 <!--Seconde ligne-->
		 <tr>
		   <td> <div style="margin-left:8px"> Prenom </div> </td>
		   <td> <input style="color:black;margin-bottom:8px" id="firstName" type="text" placeholder="Prenom" name="firstName" ></td>
		 </tr>
		 <!--Troisième ligne-->
		 <tr>
		   <td> <div style="margin-left:8px"> Date de naissance </div> </td>
		       <td>
                   <select style="color:black;margin-bottom:8px" name="Jour"id="jour">
                     <option selected="selected">Jour</option>
                     <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="6">6</option>
					 <option value="7">7</option> <option value="8">8</option> <option value="9">9</option> <option value="10">10</option> <option value="11">11</option> <option value="12">12</option>
					 <option value="13">13</option> <option value="14">14</option> <option value="15">15</option> <option value="16">16</option> <option value="17">17</option> <option value="18">18</option>
					 <option value="19">19</option> <option value="20">20</option> <option value="21">21</option> <option value="22">22</option> <option value="23">23</option> <option value="24">24</option>
                     <option value="25">25</option> <option value="26">26</option> <option value="27">27</option> <option value="28">28</option> <option value="29">29</option> <option value="30">30</option>
					 <option value="31">31</option>
				   </select>
				
                   <select style="color:black;margin-bottom:8px" name="Mois" id="mois" style="margin-left:10px">
                     <option selected="selected">Mois</option>
                     <option value="Janvier">Janvier</option> <option value="Fevrier">Fevrier</option> <option value="Mars">Mars</option> <option value="Avril">Avril</option> <option value="Mai">Mai</option> <option value="Juin">Juin</option>
					 <option value="Juillet">Juillet</option> <option value="Aout">Aout</option> <option value="Septembre">Septembre</option> <option value="Octobre">Octobre</option> <option value="Novembre">Novembre</option> <option value="Decembre">Decembre</option>
				   </select>
				   
                   <select style="color:black;margin-bottom:8px" name="Annee" id="annee" style="margin-left:10px">
                     <option selected="selected">Annee</option>
                     <option value="2005">2005</option> <option value="2004">2004</option> <option value="2003">2003</option> <option value="2002">2002</option> <option value="2001">2001</option> <option value="2000">2000</option>
					 <option value="1999">1999</option> <option value="1998">1998</option> <option value="1997">1997</option> <option value="1996">1996</option> <option value="1995">1995</option> <option value="1994">1994</option>
					 <option value="1993">1993</option> <option value="1992">1992</option> <option value="1991">1991</option> <option value="1990">1990</option> <option value="1989">1989</option> <option value="1988">1988</option>
					 <option value="1987">1987</option> <option value="1986">1986</option> <option value="1985">1985</option> <option value="1984">1984</option> <option value="1983">1983</option> <option value="1982">1982</option>
                     <option value="1981">1981</option> <option value="1980">1980</option> <option value="1979">1979</option> <option value="1978">1978</option> <option value="1977">1977</option> <option value="1976">1976</option>
					 <option value="1975">1975</option> <option value="1974">1974</option> <option value="1973">1973</option> <option value="1972">1972</option> <option value="1971">1971</option> <option value="1970">1970</option>
					 <option value="1969">1969</option> <option value="1968">1968</option> <option value="1967">1967</option> <option value="1966">1966</option> <option value="1965">1965</option> <option value="1964">1964</option>
					 <option value="1963">1963</option> <option value="1962">1962</option> <option value="1961">1961</option> <option value="1960">1960</option>
				   </select>
                </td>
		 </tr>
		 <!--Quatrième ligne-->
		 <tr>
		   <td> <div style="margin-left:8px"> Pseudo </div> </td>
		   <td> <input style="color:black;margin-bottom:8px" id="pseudo" type="text" placeholder="Pseudo" name="pseudo" ></td>
		 </tr>
		 <!--Cinquième ligne-->
		 <tr>
		   <td> <div style="margin-left:8px;margin-right:8px;margin-bottom:5px"> Mot de passe </div> </td>
		   <td> <input style="color:black;margin-bottom:8px" id="password2" type="password" placeholder="Mot de passe" name="password2" ></td>
		 </tr>
		 <!--Sixième ligne-->
		 <tr>
		   <td> <div style="margin-left:8px; margin-right:8px"> Confirmation mot de passe </div> </td>
		   <td> <input style="color:black;margin-bottom:8px" id="confirmPassword" type="password" placeholder="Confirmer mot de passe" name="confirmPassword" ></td>
		 </tr>
		 <!--Septième ligne-->
		 <tr>
		   <td> <div style="margin-left:8px"> Email </div> </td>
		   <td> <input style="color:black;margin-bottom:8px" id="email2" type="email" placeholder="Email" name="email2"></td>
		 </tr>
		 <!--Huitième ligne-->	
		 <tr>    
		   <td> <input style="margin-top:8px;margin-bottom:8px;margin-left:17px;color:black" type="submit" name="bouton" value="Annuler"> </td>
		
		   <td> <input style="margin-top:8px;margin-bottom:8px;margin-left:190px;color:black" type="submit" name="bouton" value="Register" onclick="register()"> </td>
		 </tr>
	   </tbody>
	  </table>
</form>
	