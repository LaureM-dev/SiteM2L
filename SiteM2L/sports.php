<?php session_start();
require_once("Connect_bdd.php"); 
require_once("Onglets.php");

$Id=$_GET['Id'];

$recup_descriptionSports=mysqli_query($bdd,"SELECT Nom, Description, Img, Regles FROM sports WHERE Id='$Id'") OR DIE ("ERREUR RECUP_DESCRIPTIONSPORTS") ;
$data = mysqli_fetch_assoc($recup_descriptionSports);
echo '<article><h2>'.utf8_encode($data['Nom']).'</h2>'.$data['Img'].'<p>'.utf8_encode($data['Description']).'</p><h3>Règles du jeux :</h3><p>'.utf8_encode($data['Regles']).'</p></article>'; 

$recup_types=mysqli_query($bdd,"SELECT Id, Nom FROM types INNER JOIN sports ON sports.Id = types.IdSports") OR DIE ("ERREUR RECUP_TYPESSPORTS");
$data = mysqli_fetch_assoc($recup_types);
echo '<article><h2>Type de sport :</h2> '.utf8_encode($data['IdSports']).'</article>'; 

$recup_mat=mysqli_query($bdd,"SELECT Id, Nom FROM materiels INNER JOIN sports ON sports.Id = materiels.IdSport") OR DIE ("ERREUR RECUP_MATERIELSPORTS");
$data = mysqli_fetch_assoc($recup_mat);
echo '<article><h2>Matériels utilisés :</h2> '.utf8_encode($data['IdSport']).'</article>'; 



?>

	<body>
	
<aside>
				<h2>Recherche</h2>
			<form method="POST" action="Recherche.php">
				<!--<p>Sports</p>
				<select name="sports" size="1">
					<?php $recup_sports=mysqli_query($bdd,"SELECT Nom, Id FROM sports") OR DIE ("ERREUR RECUP_SPORTS");
							while($data = mysqli_fetch_assoc($recup_sports)) { 
							$Id=$data['Id'];
								echo '<option name="sports" value="'.$Id.'">' .$data['Nom'] .'</option>'; 
							}
					?>
				</select>-->
				
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