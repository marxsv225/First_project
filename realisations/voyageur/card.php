<?php
//recupération de l'id de l'enregistrement à afficher
$code = $_GET['code'];
//var_dump($code); 
//Appel au fichier de la connexion 
include "config/connexion.php";

//requete d'affichage des données de la table clients
$cardquery="SELECT * FROM clients WHERE id_client='$code'";

//execution de la requete de selection des données de la table clients
$querycard = mysqli_query($connect, $cardquery) or die ('Erreur SQL !'.$cardquery.'<br/>'.mysqli_error($connet));
$card=mysqli_fetch_array($querycard);

//script pour afficher le nom de la compagnie dont l'id se trouve dans la table client
$compagnyid = $card['compagnie'];
$compagny = '';
$getcompagny = mysqli_query($connect, "SELECT * FROM compagnies WHERE id='$compagnyid'");
while ($comp=mysqli_fetch_array($getcompagny)) {
    $compagny = $comp['nom'];
}

//script pour afficher le nom de la ville de depart dont l'id se trouve dans la table client
$villedepid = $card['ville_depart'];
$getvilledep = mysqli_query($connect, "SELECT * FROM ville WHERE id_ville = '$villedepid'");
while ($ville=mysqli_fetch_array($getvilledep)) {
    $villed = $ville['ville'];
}

//script pour afficher le nom de la ville d'arrivée dont l'id se trouve dans la table client
$villearrivid = $card['ville_arrivee'];
$getvillearr = mysqli_query($connect, "SELECT * FROM ville WHERE id_ville = '$villearrivid'");
while ($villear=mysqli_fetch_array($getvillearr)) {
    $villeari = $villear['ville'];
}

//requete pour avoir le nombre total d'enregistrement de la table clients
$nbre = "SELECT COUNT(*) AS nbre FROM clients";
$nbreto = mysqli_query($connect, $nbre);
$nbretotal= mysqli_fetch_array($nbreto);
include "views/card_view.php";
?>