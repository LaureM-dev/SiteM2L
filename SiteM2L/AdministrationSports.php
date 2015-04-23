<?php session_start();
require_once("Connect_bdd.php"); 
require_once("OngletsAdministration.php"); 
?>

	
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="CSS/body.css" /> 
		<script type="text/javascript" src="Description_xhr.js" charset="iso_8859-1"></script>	
		<title>Administration M2L</title>
		<script language="javascript">
		function confirme( Id )
      {
        var confirmation = confirm( "Voulez vous vraiment supprimer cet enregistrement ?" ) ;
	if( confirmation )
	{
	  document.location.href = "SupprimerSports.php?Id=";
	}
      }
	</script>
	</head>
	<body>
		<div class="activites">
		<form name="insertion" action="InsertionSports.php" method="POST">
  <table border="0" align="center" cellspacing="2" cellpadding="2">
    	<th>Créer une sport</th>
		<tr align="center">
      <td>Nom</td>
      <td><input type="text" name="NomNewSports"></td>
    </tr>
    <tr align="center">
      <td>Description</td>
      <td><input type="text" name="DescriptionNewSports"></td>
    </tr>
    <tr align="center">
      <td colspan="2"><input type="submit" name="NewSports" value="Enregistrer"></td>
    </tr>
  </table>

			<p>Modifier un sport</p>
			<select name="sports" size="1" onClick="getDescription(this.value);">
			<option name="sports"></option>
			<?php $modif_sports=mysqli_query($bdd,"SELECT Nom, Id FROM sports") OR DIE ("ERREUR MODIF_SPORTS");
							while($data = mysqli_fetch_assoc($modif_sports)) { 
							$Id=$data['Id'];
								echo '<option name="sports" value="'.$Id.'">' .utf8_encode($data['Nom']) .'</option>'; 
							}
					?>
			</select>
			<span id="blocDescription"></span>
			
			
			<p>Supprimer un sport</p>
			<?php
			//requête SQL:
				$recup_sports=mysqli_query($bdd,"SELECT Nom, Id FROM sports") OR DIE ("ERREUR RECUP_SPORTS");
	
			//affichage des données:
				while( $result = mysqli_fetch_object( $recup_sports ) )
				{
					echo("<div align=\"center\">".utf8_encode($result->Nom)." <a href=\"#\" onClick=\"confirme('".$result->Id."')\" >Supprimer</a><br>\n") ;
				}
			?>
			</form>
		</div>
	</body>
</html>