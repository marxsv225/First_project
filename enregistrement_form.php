<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mon Blog</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <link rel="stylesheet" href="dist/css/mystyle.css">
    <link rel="stylesheet" href="dist/css/calculate.css">
    <!-- start favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--end favicon  -->

  <script type="text/javascript" src="dist/js/jquery2.js"></script>
  <script  src="dist/js/myjs.js"></script>
    <title>Document</title>
</head>
<body> 
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="images/VAKA MARCEL.png" id="icon" alt="User Icon" />
    </div>

    <!-- register Form -->
    <?php if (!empty($errreur)) { ?>
        <p class="errorMessage"><?php echo $errreur; ?></p>
      <?php } ?>
    <form action="" method="post" enctype="multipart/form-data">
     <center>
      <div class=" row">        
        <div class="col-md-12">
            <input type="Text" class="fadeIn second" name="login" placeholder="votre nom complet" required>
        </div>
      </div>
      <span id="login"> 
        <?php
          if (isset($erreur2)) {
            echo '<div class="alert alert-danger">';
            echo '<strong>'.$erreur2.'</strong>';
            echo '</div>';
          }
        ?>
      </span>
        
    <div class="row">
      <div class="col-md-12">
        <input type="email" class="fadeIn second" name="email" placeholder="Votre email" id="mail" required><br>
        <span id="aidemail"></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <input type="file" class="fadeIn second" name="photo" placeholder="Selectionner votre photo">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <input type="password" class="fadeIn second" name="password" placeholder="votre mot de passe" id="mdp" required><br>
        <span id="aidemdp"></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <input type="password"  class="fadeIn second" name="conf_password" placeholder="Veuillez confirmer le mot de passe" id="confmdp" required><br>
        <span id="aideconfmdp"></span>
      </div>
    </div>
    <div class="row">
    <div class="col-md-3 col-sm-3"></div>
      <div class="col-md-6 col-sm-6">
        <input class="" name="valider"  type="submit" value="S'ENREGISTRER">
      </div>
      <div class="col-md-3 col-sm-3"></div>
    </div>
    </center> 
    </form>
    
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="index.php">Accueil</a>
      <a class="underlineHover" href="connexion.php">Se connecter</a>
    </div>

  </div>
</div>

<script>
  // Vérification de la longueur du mot de passe saisi
document.getElementById("mdp").addEventListener("input", function (e) {
    var mdp = e.target.value; // Valeur saisie dans le champ mdp
    var longueurMdp = "faible";
    var couleurMsg = "red"; // Longueur faible => couleur rouge
    if (mdp.length >= 8) {
        longueurMdp = "Excellente";
        couleurMsg = "green"; // Longueur suffisante => couleur verte
    } else if (mdp.length >= 4) {
        longueurMdp = "moyenne";
        couleurMsg = "orange"; // Longueur moyenne => couleur orange
    }
    var aideMdpElt = document.getElementById("aidemdp");
    aideMdpElt.textContent = "La longueur du mot de passe est " + longueurMdp; // Texte de l'aide
    aideMdpElt.style.color = couleurMsg; // Couleur du texte de l'aide
});

    /*
Exercice : vérification de mots de passe
*/

// var form = document.querySelector("form");
// form.addEventListener("submit", function (e) {
//     var mdp1 = form.elements.mdp1.value;
//     var mdp2 = form.elements.mdp2.value;
//     var message = "Mots de passe OK";
//     if (mdp1 === mdp2) {
//         if (mdp1.length >= 6) {
//             var regexMdp = /\d+/;
//             if (!regexMdp.test(mdp1)) {
//                 message = "Erreur : le mot de passe ne contient aucun chiffre";
//             }
//         } else {
//             message = "Erreur : la longueur minimale du mot de passe est de 6 caractères";
//         }
//     } else {
//         message = "Erreur : les mots de passe saisis sont différents";
//     }
//     document.getElementById("infoMdp").textContent = message;
//     e.preventDefault();
// });

//FIN EXO

// Contrôle du courriel en fin de saisie
document.getElementById("mail").addEventListener("blur", function (e) {
    var validiteCourriel = "";
    var couleurmail="red";
    if (e.target.value.indexOf("@") === -1) {
        // Le courriel saisi ne contient pas le caractère @
        validiteCourriel = "Adresse invalide";
    }
    document.getElementById("aidemail").textContent = validiteCourriel;
    document.getElementById("aidemail").style.color = couleurmail;
});

//griser le bouton de validation tant que les champs ne sont pas correctement renseignés
var testinputs = function() {
  var t=true;
  
  $('input[required]').each(function(i){
    if ( $(this).val()=="" ) {
      t=false;
      return false;
    }
  })
  
  if (t) $(':submit').prop( "disabled", false )
  else      $(':submit').prop( "disabled", true )
}

$(document).ready(function () {
	testinputs()
  
  $(':input').on("change keyup", function(e){
    testinputs()
  })
})
//END DISABLED BUTTON SCRIPT
</script>

</body>
</html>