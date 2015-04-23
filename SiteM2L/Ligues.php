<?php
session_start();
require_once("Connect_bdd.php");
require_once("Onglets.php");

$Id=$_GET['Id'];

$recup_infosLigues=mysqli_query($bdd,"SELECT Nom, President, Adresse, Site, Email FROM ligues WHERE Id='$Id'") OR DIE ("ERREUR RECUP_DESCRIPTIONSPORTS") ;
$data = mysqli_fetch_assoc($recup_infosLigues);
echo '<article><h2>'.utf8_encode($data['Nom']).'</h2><p>'.utf8_encode($data['President']).'</p><p>'.utf8_encode($data['Adresse']).'</p><p>'.utf8_encode($data['Site']).'</p><p>'.utf8_encode($data['Email']).'</p></article>'; 

 ?>

