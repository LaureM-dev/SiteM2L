<?php 	session_start();
require_once("Connect_bdd.php"); 
require_once("Onglets.php");

$Code=$_POST['departements'];
/*$sports=$_POST['sports'];*/

$recup_clubs=mysqli_query($bdd,"SELECT Id, Nom, Adresse, SUBSTRING(Cp,1,2), Ville, NbrAdherents FROM clubs WHERE SUBSTRING(Cp,1,2)='$Code'") OR DIE ("ERREUR RECUP_CLUBS");
							while($data = mysqli_fetch_assoc($recup_clubs)) {
								echo '<article><h2>Clubs :</h2><p> '.utf8_encode($data['Nom']).'</p><h2>Adresse :</h2><p> '.utf8_encode($data['Adresse']).'</p><p> '.$Code.' '.utf8_encode($data['Ville']).'</p><h2>Nombre adhérents :</h2><p> '.$data['NbrAdherents'].'</p></article>'; 
							}
					?>
		
	<body>
	<aside>
				<h2>Recherche</h2>
			<form method="POST" action="Recherche.php">
				<p>Sports</p>
				<select name="sports" size="1">
					<?php $recup_sports=mysqli_query($bdd,"SELECT Nom, Id FROM sports") OR DIE ("ERREUR RECUP_SPORTS");
							while($data = mysqli_fetch_assoc($recup_sports)) { 
							$Id=$data['Id'];
								echo '<option name="sports" value="'.$Id.'">' .utf8_encode($data['Nom']) .'</option>'; 
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
