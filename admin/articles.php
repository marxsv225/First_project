<?php include "partials/_menu.php" ?>


<?php 

include "../connect.php" ;

if (isset($_POST['valider'])) {
    $categorie=mysqli_real_escape_string($con, $_POST['categorie']);
    $titre=mysqli_real_escape_string($con, $_POST['titre']);
    $contenu=mysqli_real_escape_string($con, $_POST['contenu']);
     $nomphoto=mysqli_real_escape_string($con, $_FILES['photo']['name']);
     $fichierTemporaire=$_FILES['photo']['tmp_name'];
     move_uploaded_file($fichierTemporaire,'./images/'.$nomphoto);
    $prix=mysqli_real_escape_string($con, $_POST['prix']);
    $auteur=mysqli_real_escape_string($con, $_POST['auteur']);
    $date = mysqli_real_escape_string($con, date("Y-m-d H:i:s"));
    $statut = mysqli_real_escape_string($con, $_POST['statut']);

    $ps="INSERT INTO articles (categorie_art, titre_art, contenu_art, image_art, prix_art, auteur_art, date_pub_art, statut) VALUES('$categorie','$titre','$contenu', '$nomphoto', '$prix', '$auteur', '$date', '$statut')";
    $reket = mysqli_query($con, $ps) or die ('Erreur SQL !'.$ps.'<br/>'.mysqli_error($con));
    if ($reket==1) {
        echo '<div class="alert alert-success"><strong>Enregistrement effectué avec succès !</strong></div>';
       
    }
   
}

?>

<?php
$requete= 'SELECT * FROM articles ORDER BY id_art ASC';
$que = mysqli_query($con, $requete) or die ('Erreur SQL !'.$requete.'<br/>'.mysqli_error($con));
 ?>
 <?php include "views/articles_view.php"; ?>
<?php include "partials/_footer.php"; ?>