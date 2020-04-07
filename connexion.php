<?php
    // on se connecte à notre base
    include "connect.php";

// $email=$_POST['email'];
// $pass=md5($_POST['password']);
// $ps= "SELECT * FROM users WHERE email=? AND password=?";
// $parametres=array($email, $pass);

// {
//     session_start();
//     $_SESSION['PROFILE']=$user;
//     header("location: liste.php");

// }
// else{
//     header("location: connexion.php");
// }


/*
Page: connexion.php
*/
 // à mettre tout en haut du fichier .php, cette fonction propre à PHP servira à maintenir la $_SESSION
if(isset($_POST['connexion'])) { // si le bouton "Connexion" est appuyé
    // on vérifie que le champ "Pseudo" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
    if(empty($_POST['nom'])) {
        echo "Veuillez renseigner votre Login.";
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['password'])) {
            echo "Veuillez renseigner votre mot de passe.";
        } else {
            // les champs sont bien posté et pas vide, on sécurise les données entrées par le membre:
            $nom = htmlentities($_POST['nom'], ENT_QUOTES, "ISO-8859-1"); // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
            $MotDePasse = htmlentities($_POST['password'], ENT_QUOTES, "ISO-8859-1");
            //on se connecte à la base de données:
            // $mysqli = mysqli_connect("domaine.tld", "nom d'utilisateur", "mot de passe", "base de données");
            //on vérifie que la connexion s'effectue correctement:
            // if(!$mysqli){
            //     echo "Erreur de connexion à la base de données.";
            // } else {
                // on fait maintenant la requête dans la base de données pour rechercher si ces données existe et correspondent:
                $Requete = mysqli_query($con,"SELECT * FROM users WHERE nom_prenoms = '".$nom."' AND password = '".md5($MotDePasse)."'");//si vous avez enregistré le mot de passe en md5() il vous suffira de faire la vérification en mettant mdp = '".md5($MotDePasse)."' au lieu de mdp = '".$MotDePasse."'
                $req = mysqli_fetch_array($Requete);
                // si il y a un résultat, mysqli_num_rows() nous donnera alors 1
                // si mysqli_num_rows() retourne 0 c'est qu'il a trouvé aucun résultat
                if(mysqli_num_rows($Requete) == 0) {
                    $mesereur= 'Le login ou le mot de passe est incorrect, le compte na pas été trouvé.  ';
                } else {
                    // on ouvre la session avec $_SESSION:
                    session_start();
                    $_SESSION['PROFILE']=$Requete;
                    $_SESSION['nom_prenoms'] = $nom; // la session peut être appelée différemment et son contenu aussi peut être autre chose que le LOGIN
                    $_SESSION['photo'] = $req['photo'];
                    header("location: index.php");
                    
                }
            // }
        }
    }
}
include "connexion_form.php";
?>
