<?php
include "connect.php";
// If form submitted, insert values into the database.
// if (isset($_REQUEST['submit'])){
//         // removes backslashes
//  $username = stripslashes($_REQUEST['login']);
//         //escapes special characters in a string
//  $username = mysqli_real_escape_string($con,$username); 
//  $email = stripslashes($_REQUEST['email']);
//  $email = mysqli_real_escape_string($con,$email);
//  $password = stripslashes($_REQUEST['password']);
//  $password = mysqli_real_escape_string($con,$password);
//  $confpassword = stripslashes($_REQUEST['conf_password']);
//  $confpassword = mysqli_real_escape_string($con,$confpassword);
//  $trn_date = date("Y-m-d H:i:s");
//       $query = "INSERT into `users` (nom_prenoms, email, password, confirm_password, trn_date)
// VALUES ('$username', '$email', '".md5($password)."', '".md5($confpassword)."', '$trn_date')";
//        $result = mysqli_query($con,$query);
//         if($result){
//             echo "<div class='form'>
// <h3>You are registered successfully.</h3>
// <br/>Click here to <a href='login.php'>Login</a></div>";
//        }
//     }else{
//        }


// if(isset($_POST['valider'])){
//     $champs_vide=array();
         
//     if (empty($_POST['login'])){
//          $champs_vide[]='"login"';
//     }
                         
//     if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {      
//           $champs_vide[] = '"Email"';
//           echo 'Email invalide';
//           $champs_mail[] = array();
//           $champs_mail[] = "invalie";                   
//     }
     
//     if (empty ($_POST['password'])){
//          $champs_vide[]='"mot de passe"';   
//     }
     
//     if (empty ($_POST['conf_password'])){
//          $champs_vide[]='"confirmer mot de passe"';
//     }
     
 
//    if ( $_POST['conf_password'] != $_POST['password'] ) {
     
//       echo '<span style="color:red; font-weight:normal;">Les 2 mots de passe sont différents! </span>';
//       $champs_double = array();
//       $champs_double[] = "doublons";
// }
// if (empty ($champs_vide) && empty($champs_mail)){      
         
//     $login=$_POST['login'];
//     $email=$_POST['email'];
//     $password=$_POST['password'];
//     $conf_password=$_POST['conf_password'];
   
//   echo ' <div style="padding-left:240px; margin-top: 10px; margin-bottom:-10px">Votre inscription a bien été pris en compte.</div>';
   
   
   
   
//      $sql='INSERT INTO users VALUES("","'.$login.'","'.$email.'", "'.$password.'", "'.$conf_password.'",NOW())';
   
//      mysqli_query($sql) or die('Erreur SQL!'.$sql. '<br>' .mysql_error());
   
//      mysql_close();
//                          } //champs_vide
   
// else {
//     if (!empty($champs_vide)){
//       echo '<div style="padding-left:150px; color:red; margin-bottom: -15px"><h4 style="padding-left:90px; padding-bottom:10px;">Merci de remplir le champs suivant:</h4> <span style="text-align:center">' .implode($champs_vide). '</span></div>'; 
//      }
// }
      
// }
$login=$_POST['login'];
$email=$_POST['email'];
$password=$_POST['password'];
$conf_password=$_POST['conf_password'];
$trn_date = date("Y-m-d H:i:s");
if ( $_POST['conf_password'] != $_POST['password'] ) {
     
       echo '<span style="color:red; font-weight:normal;">Les 2 mots de passe sont différents! </span>';
       
    }
    else {
    
$inserer = "INSERT INTO users (nom_prenoms, email, password, date) 
    VALUES ('$login', '$email', 'md5($password)', '$trn_date')";

    mysqli_query ($con, $inserer) or die ('Erreur SQL !'.$inserer.'<br/>'.mysql_error());

    echo ' <div style="padding-left:240px; margin-top: 10px; margin-bottom:-10px">Votre inscription a bien été pris en compte. <a class="underlineHover" href="index.php">Accueil</a>
    <a class="underlineHover" href="connexion.php">Se connecter</a></div>';

    header('location: connexion.php');
}

?>
