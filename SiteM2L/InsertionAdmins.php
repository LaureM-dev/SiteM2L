<?php
require_once("Connect_bdd.php"); 
require_once("OngletsAdministration.php"); 
 
  //récupération des valeurs des champs:
  $Nom=$_POST["NomNewAdmins"] ;
  $Password = $_POST["PasswordNewAdmins"] ;
  
  //création de la requête SQL:
 $insert_admins=mysqli_query($bdd,"INSERT INTO users(Id, Password) VALUES ('$Nom','$Password')") OR DIE ("erreur insertion admins");
 
  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($insert_admins)
  {
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
?>