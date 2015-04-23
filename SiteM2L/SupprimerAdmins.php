<?php
 require_once("Connect_bdd.php");
 
//récupération de la variable Id,
//qui va nous permettre de savoir quel enregistrement supprimer:
 $Id=$_GET["Id"];
 
//requête SQL:
$suppr_admins=mysqli_query($bdd,"DELETE * FROM users WHERE Id='.$Id'") OR DIE ("ERREUR SUPPRESSION_ADMINS");
echo $suppr_admins ;	    
 
//affichage le résultat, pour savoir si la suppression a marché
  if($suppr_admins)
  {
    echo("La suppression à été correctement effectuée") ;
  }
  else
  {
    echo("La suppression à échouée") ;
  }
?>