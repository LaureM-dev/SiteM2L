<?php
require_once("Connect_bdd.php"); 
require_once("OngletsAdministration.php"); 
 
  //récupération des valeurs des champs:
  $Nom=$_POST["NomNewLigues"] ;
  $President = $_POST["PresidentNewLigues"] ;
  $Adresse = $_POST["AdresseNewLigues"];
  $Site = $_POST["SiteNewLigues"];
  $Email = $_POST["EmailNewLigues"];
  //création de la requête SQL:
 $insert_ligues=mysqli_query($bdd,"INSERT INTO ligues(Nom, President, Adresse, Site, Email) VALUES ('$Nom','$President','$Adresse','$Site','$Email')") OR DIE ("erreur insertion ligues");
 
  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($insert_ligues)
  {
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
?>