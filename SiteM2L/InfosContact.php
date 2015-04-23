<?php 
require_once("Connect_bdd.php"); 
require_once("Onglets.php");


$ligues=$_POST['Ligues'];
$prenom=$_POST['Prenom'];
$nom=$_POST['Nom'];
$mail=$_POST['Mail'];
$object=$_POST['Titre'];
$message=$_POST['Message'];
?>

<div>
<?php echo '<p>Vos coordonnés</p><p>' .$prenom .' '.$nom .'</br>'.$mail .'</p>';
echo '<p>Object</p><p>' .$object .'</p><p>Message</p><p>'.$message.'</p>';
?>
</div>

<p style="font-weight:bold; font-size:20px;">Votre message n'a pas été envoyé, veuillez nous excuser pour la gène occasionnée. 
</br>La fonction contact sera bientôt disponible.</p>

<!--<?php
$sujet = $object;
$message = $message;
$destinataire = $ligues;
$headers = "From:".$mail."\n";
$headers .= "Reply-To: ".$mail."\n";
$headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"";
mail($destinataire,$sujet,$message,$headers);
/*{
        echo "L'email a bien été envoyé à " .$ligues ;
}
else
{
        echo "Veuillez nous excuser la fonction mail n'est pas encore active.";
}*/
?>-->