<?php
require_once("Connect_bdd.php");
require_once("OngletsAdministration.php"); 
 
  //récupération des valeurs des champs:
  //nom:
  $Nom=$_POST["NomNewSports"] ;
  //prenom:
  $Description = $_POST["DescriptionNewSports"] ;
  
  //création de la requête SQL:
 $insert_sports=mysqli_query($bdd,"INSERT INTO sports(Nom, Description) VALUES ('$Nom','$Description')") OR DIE ("erreur insertion sports");
 
  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($insert_sports)
  {
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
?>