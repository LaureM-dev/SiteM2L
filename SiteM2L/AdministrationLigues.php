<?php session_start();
require_once("Connect_bdd.php"); 
require_once("OngletsAdministration.php"); 

?>

<html>
	<head>
		<meta charset="utf-8" />
		<title>Administration M2L</title>
		<script language="javascript">
		function confirme( Id )
      {
        var confirmation = confirm( "Voulez vous vraiment supprimer cet enregistrement ?" ) ;
	if( confirmation )
	{
	  document.location.href = "SupprimerLigues.php?Id=";
	}
      }
	</script>
	</head>
	<body>
		<div class="ligues">
				<form name="insertion" action="InsertionLigues.php" method="POST">
  <table border="0" align="center" cellspacing="2" cellpadding="2">
    	<th>Créer une ligue</th>
		<tr align="center">
      <td>Nom</td>
      <td><input type="text" name="NomNewLigues"></td>
    </tr>
    <tr align="center">
      <td>President</td>
      <td><input type="text" name="PresidentNewLigues"></td>
    </tr>
	<tr align="center">
      <td>Adresse</td>
      <td><input type="text" name="AdresseNewLigues"></td>
    </tr>
	<tr align="center">
      <td>Site</td>
      <td><input type="text" name="SiteNewLigues"></td>
    </tr>
	<tr align="center">
      <td>Email</td>
      <td><input type="text" name="EmailNewLigues"></td>
    </tr>
    <tr align="center">
      <td colspan="2"><input type="submit" name="NewLigues" value="Enregistrer"></td>
    </tr>
  </table>
</form>
			
			<p>Modifier une ligues</p>
			<select name="ligues" size="1" onClick="getPresident(this.value);">
			<option name="ligues"></option>
			<?php $recup_ligues=mysqli_query($bdd,"SELECT Nom, President, Adresse, Site, Email, Id FROM ligues") OR DIE ("ERREUR RECUP_LIGUES");
						while($data = mysqli_fetch_assoc($recup_ligues)) { 
						$Id=$data['Id'];
							echo '<option name="ligues" value="'.$Id.'">' .utf8_encode($data['Nom']) .'</option>';
						} ?>
			</select>
			
			<span id="blocPresident"></span>
			<!--<span id="blocAdresse"></span>
			<span id="blocSite"></span>
			<span id="blocEmail"></span>-->
			
			<input type="submit" name="ModifNewLigues" value="Valider">
			
			<p>Supprimer une ligues</p>
				<?php
			//requête SQL:
				$recup_ligues=mysqli_query($bdd,"SELECT Nom, Id FROM ligues") OR DIE ("ERREUR RECUP_LIGUES");
	
			//affichage des données:
				while( $result = mysqli_fetch_object( $recup_ligues ) )
				{
					echo("<div align=\"center\">".utf8_encode($result->Nom)." <a href=\"#\" onClick=\"confirme('".$result->Id."')\" >Supprimer</a><br>\n") ;
				}
			?>
		</div>
	</body>
</html>

<?php mysqli_close($bdd); ?>