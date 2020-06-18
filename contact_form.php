<?php
include "connect.php";
if (isset($_POST['envoyer'])) {

$nom=$_POST['name'];
$email=$_POST['email'];
$message= $_POST['message'];
$trn_date = date("Y-m-d H:i:s");
$browser = $_SERVER['HTTP_USER_AGENT'];
    
$requete = "INSERT INTO contact_form (nom_contact, email_contact, message_contact, date, browser) 
    VALUES ('$nom', '$email','$message', '$trn_date', '$browser')";

    mysqli_query ($con, $requete) or die ('Erreur SQL !'.$requete.'<br/>'.mysql_error());
    
    if (isset($requete)) { 
       echo  '<div class="alert alert-success"><strong>Votre message a été envoyé avec succès !</strong></div> ';
      
      } 
      else {
          echo '';
      }
      
}
?>

<div class="contactform">
    <div class="avis">
        <h3>Merci de nous laisser votre avis</h3>
    </div>
    
    <form class="form-horizontal" action="" method="post">
        <div class="form-group">
            <div class="col-sm-6">
                <input type="text" class="form-control contacted" id="name" placeholder="Votre nom" name="name" required>
            </div>
            <div class="col-sm-6">
                <input type="email" class="form-control contacted" id="email" placeholder=" Votre e-mail" name="email" required>
            </div>
            <div class="col-sm-12">
                    <br>
                <textarea class="form-control contacted" rows="5" id="comment" placeholder="Votre message" name="message" required></textarea>
            </div>
            <div class="col-sm-offset-1 col-sm-10">
                <br>
                <input type="submit" class="btn btn-default btn-vaka" value="Envoyer" name="envoyer">
            </div>
        </div>
    </form>
</div>