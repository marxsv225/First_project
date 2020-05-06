<?php 
include "partials/_menu.php"; 
include "../connect.php";

//Requete pour afficher les utilisateurs
$requeteuser= 'SELECT * FROM users ORDER BY id ASC';
$userek = mysqli_query($con, $requeteuser) or die ('Erreur SQL !'.$requeteuser.'<br/>'.mysql_error());

include "views/users_view.php";
include "partials/_footer.php";
?>