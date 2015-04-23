<?php
/**
 * Code qui sera appelé par un objet XHR et qui
 * retournera la liste déroulante des descriptions
 * correspondant à l'activité sélectionnée.
 */
/* Paramètres de connexion */
require_once("Connect_bdd.php");

/* On récupère le num de l'activité choisie. */

$Id = isset($_GET['Id']) ? $_GET['Id'] : false;
$RequetePresident=mysqli_fetch_assoc(mysqli_query($bdd,("SELECT President FROM ligues WHERE Id='$Id'")));


 /*Si on a une description, on procède à la requête */
if(false !== $Id)
{ 
?>
<input name="President" value="<?php echo $RequetePresident['President'];?>">
<?php }
/* Sinon on retourne un message d'erreur */
else
{
    echo("<p>Une erreur s'est produite. Veuillez recommencer.</p>\n");
}
?>
<?php
	mysqli_close($bdd);
?>