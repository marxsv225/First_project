<?php 
include "securite.php";
$id=$_GET['id'];
include "menu.php";
include "connect.php";

//Requete pour afficher les articles dans le menu deroulant de la page achat
$achatquery="SELECT* FROM articles WHERE id_art='$id'";
$achat=mysqli_query($con, $achatquery) or die ('Erreur SQL !'.$achatquery.'<br/>'.mysqli_error($con));
$acheter = mysqli_fetch_array($achat);

//Requete d'insertion des données lors de la commande
if (isset($_POST['valider'])) {
    
    //insertion des informations de l'article dans la table commandes
   $article = $acheter['id_art'];
   $iduser = $_SESSION['id'];
   $quantite = $_POST['nombre'];
   $date = date("Y-m-d H:i:s");

   $insertart = "INSERT INTO commandes (id_art, id, quantite, date_com) VALUES ('$article', '$iduser', '$quantite', '$date')";
   mysqli_query($con, $insertart) or die ('Erreur SQL !'.$insertart.'<br/>'.mysqli_error($con));

    //insertion des informations de la carte de crédit dans la table usercc
    $idusere = $_SESSION['id'];
    $typecard = $_POST['card'];
    $numero = $_POST['cardNumber'];
    $dateexpire = $_POST['cardExpiry'];
    $cvc = $_POST['cardCVC'];

    $insertcard = "INSERT INTO usercc (id, type, cnumber, cvc, date_expire) VALUES ('$idusere', '$typecard', '$numero', '$cvc', '$dateexpire')";
   $querycard = mysqli_query($con, $insertcard) or die ('Erreur SQL !'.$insertcard.'<br/>'.mysqli_error($con));

   if (isset($querycard)) { 
    echo  '<div class="alert alert-success"><strong>Commande effectuée avec succès !</strong></div> ';
   
   } 
   else {
       echo '<div class="alert alert-danger"><strong>Erreur denregistrement !</strong></div> ';
   }

}


include "views/achat_view.php";
include "footer.php";
?>