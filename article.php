<?php

// Reccuperation de l'id de l'article dont le titre a été selectionné par un clic
$id=$_GET['id'];

//appel du fichier de securité (l'utilisateur doit se connecter avant d'éffectuer une eventuelle opération)
include "securite.php";

include "menu.php";
 //var_dump($code); 

 //appel du fichier de connexion a la base de données
include "connect.php";

//Requete de Recuperation et d'affichage de l'article dont le titre a été selectionné (par un clic) sur la page index du blog
$req= "SELECT * FROM articles WHERE id_art = '$id'";
$que = mysqli_query($con, $req) or die ('Erreur SQL !'.$req.'<br/>'.mysqli_error($con));
$articles=mysqli_fetch_array($que);

// Requete d'Affichage des titres des 10 derniers articles dans la partie droite de la page article
$queryart= 'SELECT * FROM articles ORDER BY id_art DESC LIMIT 10';
$querart = mysqli_query($con, $queryart) or die ('Erreur SQL !'.$queryart.'<br/>'.mysqli_error($con));

//Requete d'affichage des categories des articles dans la partie droite de la page article
$querycat= 'SELECT * FROM articles GROUP BY categorie_art';
$categorie = mysqli_query($con, $querycat) or die ('Erreur SQL !'.$querycat.'<br/>'.mysqli_error($con));

include "article_view.php";
 ?>