<?php session_start();
require_once("Connect_bdd.php"); 
require_once("Onglets.php");
echo $_GET['Id'];

// $Id=$_POST['activites'];
 

$recup_descriptionActivites=mysqli_query($bdd,"SELECT Nom, Description FROM activites WHERE Id='$Id'") OR DIE ("ERREUR RECUP_DESCRIPTIONACTIVITES") ;
$data = mysqli_fetch_assoc($recup_descriptionActivites);
echo '<p>'.$data['Nom'].'</p><p>'.$data['Description'].'</p>'; 
?>

