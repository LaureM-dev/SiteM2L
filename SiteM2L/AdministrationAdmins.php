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
	  document.location.href = "SupprimerAdmins.php?Id=";
	}
      }
	</script>
	</head>
	<body>
		<div class="admins">
					<form name="insertion" action="InsertionAdmins.php" method="POST">
  <table border="0" align="center" cellspacing="2" cellpadding="2">
    	<th>Créer un administrateur</th>
		<tr align="center">
      <td>Nom</td>
      <td><input type="text" name="NomNewAdmins"></td>
    </tr>
    <tr align="center">
      <td>Mot de passe</td>
      <td><input type="password" name="PasswordNewAdmins"></td>
    </tr>
    <tr align="center">
      <td colspan="2"><input type="submit" name="NewAdmins" value="Enregistrer"></td>
    </tr>
  </table>
</form>
			<p>Modifier un administrateur</p>
			<select name="admins" size="1">
			<?php $recup_users=mysqli_query($bdd,"SELECT Id FROM users") OR DIE ("ERREUR RECUP_USERS");
							while($data = mysqli_fetch_assoc($recup_users)) { 
								echo '<option name="users">'.utf8_encode($data['Id']).'</option>'; 
							}
					?>
			</select>
			<input type="submit" name="ModifNewAdmins" value="Valider">
			<p>Supprimer un administrateur</p>
			<?php
			//requête SQL:
				$recup_admins=mysqli_query($bdd,"SELECT Id FROM users") OR DIE ("ERREUR RECUP_USERS");
	
			//affichage des données:
				while( $result = mysqli_fetch_object( $recup_admins ) )
				{
					echo("<div align=\"center\">".utf8_encode($result->Id)." <a href=\"#\" onClick=\"confirme('".$result->Id."')\" >Supprimer</a><br>\n") ;
				}
			?>
		</div>
	</body>
</html>

<?php mysqli_close($bdd); ?>