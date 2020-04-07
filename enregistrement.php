<?php
include "connect.php";
if (isset($_POST['valider'])) {

$login=$_POST['login'];
$email=$_POST['email'];
$nomphoto=$_FILES['photo']['name'];
$fichierTemporaire=$_FILES['photo']['tmp_name'];
move_uploaded_file($fichierTemporaire,'./images/'.$nomphoto);
$password= md5($_POST['password']);
$conf_password= md5($_POST['conf_password']);
$trn_date = date("Y-m-d H:i:s");
if ( $_POST['conf_password'] != $_POST['password'] ) {
     
       $errreur = '<span style="color:red; font-weight:normal;">Les 2 mots de passe sont différents! </span>';
       
    }
    else {
    
$inserer = "INSERT INTO users (nom_prenoms, email, photo, password, date) 
    VALUES ('$login', '$email','$nomphoto', '$password', '$trn_date')";

    mysqli_query ($con, $inserer) or die ('Erreur SQL !'.$inserer.'<br/>'.mysql_error());

    echo ' <div style="padding-left:240px; margin-top: 10px; margin-bottom:-10px">Votre inscription a bien été pris en compte. <a class="underlineHover" href="index.php">Accueil</a>
    <a class="underlineHover" href="connexion.php">Se connecter</a></div>';

    header('location: connexion.php');
}
}
include "enregistrement_form.php";

?>