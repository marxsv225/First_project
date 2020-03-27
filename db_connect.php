<?php 

$host="localhost";
$user="root";
$pass="";
//connexion au serveur
$conn= mysqli_connect($host, $user, $pass);
//selection de la base de données
$select = mysqli_select_db($conn, "test_db");
// test à la connexion
if (isset($select)) {
    echo "Connexion établie avec succès !";
}
else {
    echo "Echec de connexion !";
}


?>