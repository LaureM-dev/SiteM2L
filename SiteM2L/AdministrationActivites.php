<?php session_start();
require_once("Connect_bdd.php"); 
require_once("OngletsAdministration.php"); 

$NomNewSports=$_POST['NomNewSports'];
$DescriptionNewActivites=$_POST['DescriptionNewSports'];

if (isset($_POST['NomNewSports']) && isset($_POST['DescriptionNewSports']) && ($_POST['NomNewSports'] != '') && ($_POST['DescriptionNewSports'] !='')){
mysqli_query($bdd,"INSERT INTO sports(Nom, Description) VALUES ('$NomNewSports','$DescriptionNewSports')") OR DIE ("erreur insertion sports");
echo 'Vos informations ont bien été enregistrées.';
}
?>

<html>
	<head>
		<meta charset="utf-8" />
		<script type="text/javascript" src="Description_xhr.js" charset="iso_8859-1"></script>	
		<title>Administration M2L</title>
	</head>
	<body>
		<div class="activites">
			<form method="POST" action="AdministrationActivites.php">
			<p>Créer un sport</p>
			<p>Nom</p><input type="text" name="NomNewSports">
			<p>Description</p><input type="text" name="DescriptionNewSports">
			<input type="submit" name="NewActivités" value="Enregistrer">
			<p>Modifier un sport</p>
			<select name="sports" size="1" onClick="getDescription(this.value);">
			<option name="sports"></option>
			<?php $recup_sports=mysqli_query($bdd,"SELECT Nom, Id FROM sports") OR DIE ("ERREUR RECUP_SPORTS");
							while($data = mysqli_fetch_assoc($recup_sports)) { 
							$Id=$data['Id'];
								echo '<option name="sports" value="'.$Id.'">' .$data['Nom'] .'</option>'; 
							}
					?>
			</select>
			<span id="blocDescription"></span>
			
			<input type="submit" name="ModifNewActivites" value="Valider">
			<p>Supprimer un sport</p>
			<select name="sports" size="1">
			<?php $recup_sports=mysqli_query($bdd,"SELECT Nom, Id FROM sports") OR DIE ("ERREUR RECUP_SPORTS");
							while($data = mysqli_fetch_assoc($recup_sports)) { 
								echo '<option name="sports" value="'.$data['Id'].'">' .$data['Nom'] .'</option>'; 
							}
					?>
			</select>
			<input type="submit" name="SupprNewSports" value="Valider">
			</form>
		</div>
	</body>
</html>