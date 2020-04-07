<?php
// // Enter your Host, username, password, database below.
// // I left password empty because i do not set password on localhost.
// $con = mysqli_connect("localhost","root","","monblog_db");
// // Check connection
// if (mysqli_connect_errno())
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }


// On met en variables les informations de connexion 
$hote = 'localhost'; // Adresse du serveur 
$log = 'vaka'; // Login 
$pass = 'VAKAadmin2020'; // Mot de passe 
$base = 'monblog_db'; // Base de données à utiliser 
 
// On se connecte à la base de données 
$con=mysqli_connect($hote, $log, $pass); 
 
// On selectionne la base de données souhaitée 
mysqli_select_db($con, $base); 
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>

