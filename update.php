<?php
include "connect.php";
$code = $_SESSION['id'];
//LECTURE DU MESSAGE
$id = $_GET['id'];

    $update="UPDATE messages SET statut = 'yes' WHERE id_mes='$id'";
    $updatequery=mysqli_query($con, $update) or die ('Erreur SQL !'.$update.'<br/>'.mysqli_error($con));
    header ('location: message.php');



//
?>
