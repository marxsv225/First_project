<?php
include "securite.php";
$id=$_SESSION['id'];
include "menu.php";
include "connect.php";

//AFFICHAGE DES COMMANDES DE L'UTILISATEUR
$com = "SELECT * FROM commandes WHERE id = '$id'";
$querycom = mysqli_query($con, $com) or die ('Erreur SQL !'.$com.'<br/>'.mysqli_error($con));

//AFFICHAGE DES INFOS PERSONNELLES DE L'UTILISATEUR
$user="SELECT * FROM users WHERE id ='$id'";
$userquery = mysqli_query($con, $user) or die ('Erreur SQL !'.$user.'<br/>'.mysqli_error($con));
$usersinfo = mysqli_fetch_array($userquery);

// AFFICHAGE DES INFORMATIONS DE LA CARTE BANCAIRE
$card = "SELECT * FROM usercc WHERE id = '$id' GROUP BY id";
$querycard = mysqli_query($con, $card) or die ('Erreur SQL !'.$card.'<br/>'.mysqli_error($con));
$affcard = mysqli_fetch_array($querycard);

//AFFICHAGE DES UTILISATEURS DANS LA LISTE DEROULANTE DU CHAMP DESTINATAIRE
$dest="SELECT * FROM users WHERE role ='admin'";
$destquery = mysqli_query($con, $dest) or die ('Erreur SQL !'.$dest.'<br/>'.mysqli_error($con));
$users = mysqli_fetch_array($destquery);

//ENVOIE DU MESSAGE
if (isset($_POST['validmessage'])) {
    $exp = $_SESSION['id'];
    $dest = $_POST['destinataire'];
    $date = date("Y-m-d H:i:s");
    $titre = $_POST['titre'];
    $message = $_POST['message'];
    $statut = "no";

    $mes = "INSERT INTO messages (id_expediteur, id_destinataire, date, titre, message, statut) VALUES ('$exp', '$dest', '$date', '$titre', '$message', '$statut')";
    $mesquery = mysqli_query($con, $mes) or die ('Erreur SQL !'.$mes.'<br/>'.mysqli_error($con));
}

//AFFICHER LES MESSAGES NON LUS
$exp = "SELECT * FROM users WHERE role = 'admin'";
$expquery = mysqli_query($con, $exp) or die ('Erreur SQL !'.$exp.'<br/>'.mysqli_error($con));
$expediteur= mysqli_fetch_array($expquery);
$idespe = $expediteur['id'];

$mesnl = "SELECT * FROM messages WHERE id_destinataire = '$id' AND statut = 'no' AND id_expediteur = '$idespe'";
$mesnlquery = mysqli_query($con, $mesnl) or die ('Erreur SQL !'.$mesnl.'<br/>'.mysqli_error($con));


// $exp = "SELECT * FROM users WHERE id = '$idespe' AND role = 'admin'";
// $expquery = mysqli_query($con, $exp) or die ('Erreur SQL !'.$exp.'<br/>'.mysqli_error($con));
// $expediteur= mysqli_fetch_array($expquery);

//LE NOMBRE TOTAL DE MESSAGES NON LUS
$smsnltotal= "SELECT COUNT(*) AS nbresms FROM messages WHERE statut = 'no' AND id_destinataire = '$id' AND id_expediteur = '$idespe'";
$querysmsnltotal = mysqli_query($con, $smsnltotal) or die ('Erreur SQL !'.$smsnltotal.'<br/>'.mysqli_error($con));
$totalsmsnl= mysqli_fetch_array($querysmsnltotal);

// MISE A JOUR DES INFOS PERSONNELLES DE L'UTILISATEUR
if (isset($_POST['validerinfo'])) {
    $nom = mysqli_real_escape_string($con, $_POST['nom']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, md5($_POST['password']));
    $photo = mysqli_real_escape_string($con, $_FILES['photo']['name']);
    $date = date("Y-m-d H:i:s");
    $role = "visiteur";

    // SI L'IMAGE N'EST PAS MODIFIE
     if ($photo == "") {
        $updatequery="UPDATE users SET nom_prenoms='$nom', email='$email', password='$password', date='$date', role='$role' WHERE id='$id'";
        $update=mysqli_query($con, $updatequery) or die ('Erreur SQL !'.$updatequery.'<br/>'.mysqli_error($con));
		if ($update==1) {
			echo '<div class="alert alert-success"><strong>Modification effectuée avec succès !</strong></div>';
        }	
     }
     // SI L'IMAGE EST MODIFIE
     else {
        $fichierTemporaire=$_FILES['photo']['tmp_name'];
        move_uploaded_file($fichierTemporaire,'../admin/images/'.$photo);
        $updatequery="UPDATE users SET nom_prenoms='$nom', email='$email', photo='$photo', password='$password', date='$date', role='$role' WHERE id='$id'";
        $update=mysqli_query($con, $updatequery) or die ('Erreur SQL !'.$updatequery.'<br/>'.mysqli_error($con));
        if ($update==1) {
           echo '<div class="alert alert-success"><strong>Modification effectuée avec succès !</strong></div>';
       }
     }
}

// MODIFICATION DES INFORMATIONS DE LA CARTE
if (isset($_POST['soumettre'])) {

    $type = $_POST['type'];
    $numero = $_POST['numero'];
    $cvc = $_POST['cvc'];
    $dateexpire = $_POST['dateexpire'];

    $updatecc = "UPDATE usercc SET type = '$type', cnumber = '$numero', cvc = '$cvc', date_expire = '$dateexpire' WHERE id = '$id'";
    $updatccquery = mysqli_query($con, $updatecc) or die ('ERREUR SQL !'.$updatecc. '<br>'.mysqli_error($con));
    if ($updatccquery==1) {
        echo '<div class="alert alert-success"><strong>Modification effectuée avec succès !</strong></div>';
    }
}

include "views/info_user_view.php";
include "footer.php";
?>