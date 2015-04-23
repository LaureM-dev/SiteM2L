<?php
require_once('Connect_bdd.php');
require_once("Onglets.php");
$msgE="";
//test si un login et un mot de passe ont bien été entrés
			if(isset($_POST['mdp']) && $_POST['mdp']!='' && isset($_POST['Id']) && $_POST['Id']!=''){
					
					$login=$_POST['Id'];
					addslashes($login);
					$mdp=$_POST['mdp'];
					addslashes($mdp);
					
					
					//requete pour savoir si dans la base de donnée on a un utilisateur avec le mot de passe et le login entrés
					$compte=mysqli_query($bdd,"SELECT * FROM users WHERE Id='$login' AND Password='$mdp'") or die ("erreur compte");
					
					//si il n'y en a pas :
					if(mysqli_num_rows($compte)==0){
						$msgE= "Le mot de passe ne correspond pas à l'identifiant saisi.";

					}
					//sinon on ouvre sa session
					else {
						$user = mysqli_fetch_assoc($compte);

						$cpt = 0;
						$cpt2 = 0;
						// test les majuscules et les minuscules et les caractères spéciaux
						for ($i = 0 ; $i < strlen($login) ; $i++) {
					

							$ligne1 = "";
							$ligne2 = "";

							$code1 = ord(substr($login, $i, 1)); 
							if (($code1 >= 65) && ($code1 <= 99)){ $ligne1 .= "majuscule"; }
							else if (($code1 >= 97) && ($code1 <= 122)) { $ligne1 .= "minuscule"; }
							else { $ligne1 .= "autre";}


							$code2 = ord(substr($user['Id'], $i, 1)); 
							if (($code2 >= 65) && ($code2 <= 99)) {$ligne2 .= "majuscule"; }
							else if (($code2 >= 97) && ($code2 <= 122)) { $ligne2 .= "minuscule"; }
							else { $ligne2 .= "autre";}

							if ($ligne1 == $ligne2){
							$cpt+=1;
	
							}


						} 
						
							for ($j = 0 ; $j < strlen($mdp) ; $j++) {
					

							$ligne1 = "";
							$ligne2 = "";

							$code1 = ord(substr($mdp, $j, 1)); 
							if (($code1 >= 65) && ($code1 <= 99)){ $ligne1 .= "majuscule"; }
							else if (($code1 >= 97) && ($code1 <= 122)) { $ligne1 .= "minuscule"; }
							else { $ligne1 .= "autre";}


							$code2 = ord(substr($user['Password'], $j, 1)); 
							if (($code2 >= 65) && ($code2 <= 99)) {$ligne2 .= "majuscule"; }
							else if (($code2 >= 97) && ($code2 <= 122)) { $ligne2 .= "minuscule"; }
							else { $ligne2 .= "autre";}

							if ($ligne1 == $ligne2){
							$cpt2+=1;
	
							}
						
						}
						// fin du test des majuscules et minuscules et les caractères spéciaux 
						
						
						
						
						//test final pour se connecter : se connecte uniquement si le mot de passe est correcte : maj, min, spéciaux...
						if ($cpt == strlen($login) && $cpt2 == strlen($mdp)){
							session_start();
							$_SESSION['Id'] = $user['Id'];
							
							echo $user['Id'];
							mysqli_free_result($compte);	
						
							mysqli_close($bdd);
							
							if ($_SESSION['Id'] == 'Admin') {
								header("Location: Administration.php");
							}
							else {
								header("Location: Index.php");
							}
						}
						else {
							$msgE="Le mot de passe ne correspond pas à l'identifiant saisi. <br>";
						 }
					}
			}
?>






<html>
	<head>
		<link rel = "stylesheet" type="text/css"/>
			<link rel="stylesheet" type="text/css" href="CSS/body.css" />
		<title>connexion</title>
	</head>
	
	<body>
	<div align="center">
			<div>
				<div class="form">
					<h3>Login</h3>
					<form action="connexion.php" method="POST">
					<div>
							<label><?php echo $msgE; ?></label>
					</div>
						<div>
							<label>Identifiant:</label></br>
							<input type="text" name="Id" required/>
						</div>
						<div>
						</br>
							<label>Mot de passe:</label></br>
							<input type="password" name="mdp" required/>
						</div>
						<div>
						</br>
							<input type="submit" value="Connexion"/>
							<div></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>