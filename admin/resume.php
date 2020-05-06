<?php 
include "../connect.php";   
//requete pour avoir le nombre total d'enregistrement de la table users
$usert= "SELECT COUNT(*) AS nbreuser FROM users";
$usertotal = mysqli_query($con, $usert);
$nbretotal= mysqli_fetch_array($usertotal);

//requete pour avoir le nombre total d'enregistrement de la table articles
$article= "SELECT COUNT(*) AS nbreart FROM articles";
$artotal = mysqli_query($con, $article);
$totalart= mysqli_fetch_array($artotal);

//requete pour avoir le nombre total d'enregistrement de la table contact_form
$contact= "SELECT COUNT(*) AS nbrecontact FROM contact_form";
$contactotal = mysqli_query($con, $contact);
$totalcontact= mysqli_fetch_array($contactotal);

//Requete pour afficher les articles
$requete= 'SELECT * FROM articles ORDER BY id_art DESC LIMIT 1';
$que = mysqli_query($con, $requete) or die ('Erreur SQL !'.$requete.'<br/>'.mysql_error());
?>