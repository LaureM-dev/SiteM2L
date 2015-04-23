<?php 
require_once("Connect_bdd.php");
?>

<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="CSS/menu.css" /> 
		<link rel="stylesheet" type="text/css" href="CSS/body.css" /> 
		<title>Maison des ligues de Lorraine</title>
	</head>
	<body>
		<header>
			<div class="ban">
				<img id="logo" src="images/logo-m2l.png"><p>Maison des ligues de Lorraine</p>
			</div>
			<nav>
				<ul>
					<li><a href="Index.php">Accueil</a></li>
					<li><a href="#">Sports</a>
						<ul>
							<?php $recup_sports=mysqli_query($bdd,"SELECT Nom, Id FROM sports") OR DIE ("ERREUR RECUP_SPORTS");
									while($data = mysqli_fetch_assoc($recup_sports)) { 
										echo '<li><a href="sports.php?Id='.$data['Id'].'">' .utf8_encode($data['Nom']) .'</a></li>'; 
									} ?>
						</ul></li>
					<li><a href="#">Ligues</a>
						<ul>
							<?php $recup_ligues=mysqli_query($bdd,"SELECT Nom, Id FROM ligues") OR DIE ("ERREUR RECUP_LIGUES");
									while($data = mysqli_fetch_assoc($recup_ligues)) { 
										echo '<li><a href="ligues.php?Id='.$data['Id'].'">' .utf8_encode($data['Nom']) .'</a></li>'; 
									} ?>
						</ul></li>
					<!--<li><a href="#">Inscription</a></li>-->
					<li><a href="Connexion.php">Connexion</a></li>
					<!--<li><a href="Contact.php">Contact</a></li>-->
				</ul>
			</nav>
		</header>
		</body>
</html>


