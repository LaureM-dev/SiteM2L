<?php 
require_once("Connect_bdd.php"); 
require_once("Onglets.php");
?>

		<div class="contact">
			<form method="POST" action="InfosContact.php">
			
			<p>Ligues</p>
			<select name="Ligues">
			<option name="Ligues"></option>
			<?php $recup_ligues=mysqli_query($bdd,"SELECT Nom, Email, Id FROM ligues") OR DIE ("ERREUR RECUP_LIGUES");
						while($data = mysqli_fetch_assoc($recup_ligues)) { 
						$Email=$data['Email'];
						$Id=$data['Id'];
							echo '<option name="Ligues" value="'.utf8_encode($Email).'">' .utf8_encode($data['Nom']) .'</option>';
						} ?>
			</select>
			
	
			<p>Nom</p>
			<input type="text" name="Nom">
			<p>Prénom</p>
			<input type="text" name="Prenom">
			<p>E-mail</p>
			<input type="e-mail" placeholder="MonsieurDupont@gmail.com" size="30" name="Mail">
			<p>Object</p>
			<input type="text" size="48" name="Titre">
			<p>Message</p>
			<textarea rows="5" cols="50" name="Message"></textarea>
			
		<p><input type="submit" name="mail" value="Valider"></p>
			</form>
		</div>
