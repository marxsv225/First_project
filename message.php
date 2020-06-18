<?php 
include "securite.php";
$id = $_SESSION['id'];
$code = $_GET['id'];
// $code = $_GET['id'];
include "menu.php";
include "connect.php";

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

// REQUETE POUR RECUPERER L'IDENTIFIANT DE L'ADMIN DANS LA TABLE users
$expe = "SELECT * FROM users WHERE role = 'admin'";
$expequery = mysqli_query($con, $expe) or die ('Erreur SQL !'.$expe.'<br/>'.mysqli_error($con));
$expedit= mysqli_fetch_array($expequery);
$idexped = $expedit['id'];

//AFFICHAGE DU MESSAGE ENVOYE PAR L'ADMIN
$mesnl = "SELECT * FROM messages WHERE id_destinataire = '$id' AND id_expediteur = '$idexped'  ORDER BY id_mes DESC";
$mesnlquery = mysqli_query($con, $mesnl) or die ('Erreur SQL !'.$mesnl.'<br/>'.mysqli_error($con));

//AFFICHAGE DE LA REPONSE AU MESSAGE ENVOYE PAR L'ADMIN INBOX
$messlu = "SELECT * FROM messages WHERE id_expediteur = '$id' AND id_destinataire = '$idexped'";
$messluquery = mysqli_query($con, $messlu) or die ('Erreur SQL !'.$messlu.'<br/>'.mysqli_error($con));

include "views/message_view.php";

//LECTURE DU MESSAGE
$update="UPDATE messages SET statut = 'yes' WHERE id_mes='$code'";
$updatequery=mysqli_query($con, $update) or die ('Erreur SQL !'.$update.'<br/>'.mysqli_error($con));

include "footer.php";
?>