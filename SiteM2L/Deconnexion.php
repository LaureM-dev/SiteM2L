<?php
	//on démarre la session
	session_start();
	
	if(isset($_SESSION['Id'])){
	
	//on détruit les variables de notre session
	session_unset();

	//on détruit notre sessesion
	session_destroy();
	
	//redirection vers la page d'accueil
	header('location: Index.php');
	
	 } else { echo "vous devez vous connecter pour accèder à cette page. <br/> Pour vous connecter cliquez <a href='Connexion.php' >ici</a>"; } 
	

?>