<?php
session_start();
// Reccuperation de l'id de l'article dont le titre a été selectionné par un clic
$id=$_GET['id'];

//appel du fichier de securité (l'utilisateur doit se connecter avant d'éffectuer une eventuelle opération)
// include "securite.php";

include "menu.php";
 //var_dump($code); 

 //appel du fichier de connexion a la base de données
include "connect.php";

//Requete de Recuperation et d'affichage de l'article dont le titre a été selectionné (par un clic) sur la page index du blog
$req= "SELECT * FROM articles WHERE id_art = '$id'";
$que = mysqli_query($con, $req) or die ('Erreur SQL !'.$req.'<br/>'.mysqli_error($con));
$articles=mysqli_fetch_array($que);

// Requete d'Affichage des titres des 10 derniers articles dans la partie droite de la page article
$queryart= 'SELECT * FROM articles ORDER BY id_art DESC LIMIT 10';
$querart = mysqli_query($con, $queryart) or die ('Erreur SQL !'.$queryart.'<br/>'.mysqli_error($con));

//Requete d'affichage des categories des articles dans la partie droite de la page article
$querycat= 'SELECT * FROM articles GROUP BY categorie_art';
$categorie = mysqli_query($con, $querycat) or die ('Erreur SQL !'.$querycat.'<br/>'.mysqli_error($con));

//Enregistrement des commentaires
if (isset($_POST['envoyer']) && !empty($_POST['comment'])) {

    //Si l'utilisateur s'est déjà inscrit
        if (isset($_SESSION['nom_prenoms'])) {
            $id_art = $id;
            $user = $_SESSION['nom_prenoms'];
            $image = $_SESSION['photo'];
            $comment = mysqli_real_escape_string($con, $_POST['comment']);
            $date = gmdate("Y-m-d H:i:s");
            $browser = $_SERVER['HTTP_USER_AGENT'];
            $statut  = "1";

            $cmt = "INSERT INTO commentaires (id_art, user, image_user, comment, date_cmt, browser, statut) 
                VALUES ('$id_art', '$user', '$image', '$comment', '$date', '$browser', $statut)";
            
                mysqli_query ($con, $cmt) or die ('Erreur SQL !'.$cmt.'<br/>'.mysql_error());
                
                if (isset($cmt)) { 
                   echo  '<div class="alert alert-success"><strong>Vous avez posté un commentaire !</strong></div> ';
                  
                  }
        }

        // Dans le cas contraire ...
        else {
            $id_art = $id;
            $user = mysqli_real_escape_string($con, $_POST['name']);
            $image = "Pas dimage";
            $comment = mysqli_real_escape_string($con, $_POST['comment']);
            $date = gmdate("Y-m-d H:i:s");
            $browser = $_SERVER['HTTP_USER_AGENT'];
            $statut  = "0";

            //Verification du nom renseigné par l'utilisateur
            $searchuser = mysqli_query($con, "SELECT * FROM commentaires WHERE user ='$user'");
            $searchuserow = mysqli_fetch_array($searchuser);
            $userexist = $searchuserow['user'];

            // Si le nom n'existe pas dans la BDD
            if (mysqli_num_rows($searchuser) == 0) {
                $cmt = "INSERT INTO commentaires (id_art, user, image_user, comment, date_cmt, browser, statut) 
                VALUES ('$id_art', '$user', '$image', '$comment', '$date', '$browser', $statut)";
            
                mysqli_query ($con, $cmt) or die ('Erreur SQL !'.$cmt.'<br/>'.mysql_error());
                
                if (isset($cmt)) { 
                   echo  '<div class="alert alert-success"><strong>Vous avez posté un commentaire !</strong></div> ';
                  
                  } 
            }

            // Dans le cas contraire ...
            else {
                $cmt = "INSERT INTO commentaires (id_art, user, image_user, comment, date_cmt, browser, statut) 
                VALUES ('$id_art', '$userexist', '$image', '$comment', '$date', '$browser', $statut)";
            
                mysqli_query ($con, $cmt) or die ('Erreur SQL !'.$cmt.'<br/>'.mysqli_error($con));
                
                if (isset($cmt)) { 
                   echo  '
                    <div class="alert alert-danger"><strong>Vous avez posté un commentaire avec un nom qui existe déjà !</strong></div> ';
                  
                  }
            }
            
        }
    
          
}

//Affichage des commentaires par article
$showcmt = "SELECT * FROM commentaires WHERE id_art = '$id'";
$showcmtquery = mysqli_query($con, $showcmt) or die(mysqli_error($con));

include "views/article_view.php";
 ?>