<?php
include "connect.php";
if (isset($_POST['valider'])) {

$login=$_POST['login'];
$email=$_POST['email'];
$nomphoto=$_FILES['photo']['name'];
$fichierTemporaire=$_FILES['photo']['tmp_name'];
move_uploaded_file($fichierTemporaire,'./images/'.$nomphoto);
$password= md5($_POST['password']); //sha1() pour cripter
$conf_password= md5($_POST['conf_password']);
$trn_date = date("Y-m-d H:i:s");
if ( $_POST['conf_password'] != $_POST['password'] ) {
     
       $errreur = '<span style="color:red; font-weight:normal;">Les 2 mots de passe sont différents! </span>';
       
    }
    else {
        $verification=mysqli_num_rows(mysqli_query($con, 'select id from users where nom_prenoms="'.$login.'"'));
        if ( $verification==0) {
            $inserer = "INSERT INTO users (nom_prenoms, email, photo, password, date) 
            VALUES ('$login', '$email','$nomphoto', '$password', '$trn_date')";

            mysqli_query ($con, $inserer) or die ('Erreur SQL !'.$inserer.'<br/>'.mysql_error());


            header('location: connexion.php');
         }
         else {
             $erreur2="Cet utilisateur existe déjà veuillez changer de Nom !";
         }

    }
}
include "enregistrement_form.php";

?>