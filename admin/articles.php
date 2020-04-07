<?php include "partials/_menu.php" ?>


<?php 

include "../connect.php" ;

if (isset($_POST['valider'])) {
    $categorie=$_POST['categorie'];
    $titre=$_POST['titre'];
    $contenu=$_POST['contenu'];
     $nomphoto=$_FILES['photo']['name'];
     $fichierTemporaire=$_FILES['photo']['tmp_name'];
     move_uploaded_file($fichierTemporaire,'./images/'.$nomphoto);
    $prix=$_POST['prix'];
    $auteur=$_POST['auteur'];
    $date = date("Y-m-d H:i:s");

    $ps="INSERT INTO articles (categorie_art, titre_art, contenu_art, image_art, prix_art, auteur_art, date_pub_art) VALUES('$categorie','$titre','$contenu', '$nomphoto', '$prix', '$auteur', '$date')";
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