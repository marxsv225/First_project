<?php 
//connexion à la base de données
include "db_connect.php";

$login= $_POST['login'];
$email=$_POST['email'];
$password=$_POST['password'];
$conf_password=$_POST['conf_password'];
 if ($password != $conf_password) {
     echo 'Les deux mots de passe sont différents !';
 }
else {
    $requet = "INSERT INTO utilisateurs (pseudo, email, password_u) VALUES ('$login', '$email', '$password')";
    $inserer = mysqli_query($conn, $requet);
    if (isset($inserer)) {
echo 'Votre enregistrement a été effectué avec succès ! <br><a href="#">Se connecter</a>';
    }
    else {
        echo 'Votre enregistrement a échoué !';
    }

}



?>