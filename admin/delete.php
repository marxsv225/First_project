<?php 
$code=$_GET['code'];
include "../connect.php";
$deletequery="DELETE FROM articles  WHERE id_art='$code'";
mysqli_query($con, $deletequery) or die ('Erreur SQL !'.$deletequery.'<br/>'.mysqli_error($con));
header("location: article.php");
?>