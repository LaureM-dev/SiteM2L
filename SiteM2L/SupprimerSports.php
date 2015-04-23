<?php
 require_once("Connect_bdd.php");
 
//récupération de la variable Id,
//qui va nous permettre de savoir quel enregistrement supprimer:
 $Id=$_GET["Id"];
 
//requête SQL:
$suppr_sports=mysqli_query($bdd,"DELETE * FROM sports WHERE Id='.$Id'") OR DIE ("ERREUR SUPPRESSION_SPORTS");
echo $suppr_sports ;	    
 
//affichage le résultat, pour savoir si la suppression a marché
  if($suppr_sports)
  {
    echo("La suppression à été correctement effectuée") ;
  }
  else
  {
    echo("La suppression à échouée") ;
  }
?>