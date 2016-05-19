/*
 * Appel de JQuery
 */
 
function deplace(dx,dy) {
document.getElementById('bouger').style.top
  = parseInt(document.getElementById('bouger').style.top)+dy+'px';
document.getElementById('bouger').style.left
  = parseInt(document.getElementById('bouger').style.left)+dx+'px';

var messageFin = "Tu as réussi !";

if((document.getElementById('bouger').style.left == document.getElementById('fin').style.left) && (document.getElementById('bouger').style.top == document.getElementById('fin').style.top)){
   alert(messageFin);
}
}
	
	
   
/*
 * Fin de l'appel JQuery
 */
 
 
 
 function random(){
	 $.post('rand.php', function(data){
	 
	   $('#imageContener').html(data);
	 }
	 );
 }
 