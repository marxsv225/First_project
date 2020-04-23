<?php
// include "connect.php";
// $requete= 'SELECT * FROM articles ORDER BY id_art DESC LIMIT 1';
// $que = mysqli_query($con, $requete) or die ('Erreur SQL !'.$requete.'<br/>'.mysql_error());
// $data=mysqli_fetch_array($que);
$code=$_GET['code'];
include "securite.php";

include "menu.php";
 //var_dump($code); 
include "connect.php";

$req= "SELECT * FROM articles WHERE id_art = '$code'";
$que = mysqli_query($con, $req) or die ('Erreur SQL !'.$req.'<br/>'.mysqli_error($con));
$articles=mysqli_fetch_array($que);

include "achat_view.php";
 ?>