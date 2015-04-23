<?php 	session_start();
require_once("Connect_bdd.php"); 
require_once("Onglets.php");
?>
	<body>
		<article>
		<p>Bienvenue !</p>
		</article>
		<aside>
				<h2>Recherche</h2>
			<form method="POST" action="Recherche.php">
				<p>Sports</p>
				<select name="sports" size="1">
					<?php $recup_sports=mysqli_query($bdd,"SELECT Nom, Id FROM sports") OR DIE ("ERREUR RECUP_SPORTS");
							while($data = mysqli_fetch_assoc($recup_sports)) { 
							$Id=$data['Id'];
								echo '<option name="sports" value="'.$Id.'">' .$data['Nom'] .'</option>'; 
							}
					?>
				</select>
				
				<p>Départements</p>
				<select name="departements" size="1">
					<?php $recup_departements=mysqli_query($bdd,"SELECT Nom, Cp FROM departements") OR DIE ("ERREUR RECUP_DEPARTEMENTS");
							while($data = mysqli_fetch_assoc($recup_departements)) { 
								echo '<option name="departements" value="'.$data['Cp'].'">' .$data['Nom'] .'</option>'; 
							}
					?>
				</select>

				<p><input type="submit" id="search" name="recherche" value="rechercher"/></p>
			</form>
		</aside>
	</body>
<?php mysqli_close($bdd); ?>