// function verifPseudo(champ)
// {
// if(champ.value.length < 2 || champ.value.length > 25)
// {
//  surligne(champ, true);
//  return false;
// }
// else
// {
//  surligne(champ, false);
//  return true;
// }
// }

// function verifMail(champ)
// {
// var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
// if(!regex.test(champ.value))
// {
//  surligne(champ, true);
//  return false;
// }
// else
// {
//  surligne(champ, false);
//  return true;
// }
// }


// function verifAge(champ)
// {
// var age = parseInt(champ.value);
// if(isNaN(age) || age < 5 || age > 111)
// {
//  surligne(champ, true);
//  return false;
// }
// else
// {
//  surligne(champ, false);
//  return true;
// }
// }


// function verifForm(f)
// {
// var pseudoOk = verifPseudo(f.pseudo);
// var mailOk = verifMail(f.email);
// var ageOk = verifAge(f.age);

// if(pseudoOk && mailOk && ageOk)
//  return true;
// else
// {
//  alert("Veuillez remplir correctement tous les champs");
//  return false;
// }
// }

// Vérification de la longueur du mot de passe saisi
document.getElementById("mdp").addEventListener("input", function (e) {
    var mdp = e.target.value; // Valeur saisie dans le champ mdp
    var longueurMdp = "faible";
    var couleurMsg = "red"; // Longueur faible => couleur rouge
    if (mdp.length >= 8) {
        longueurMdp = "suffisante";
        couleurMsg = "green"; // Longueur suffisante => couleur verte
    } else if (mdp.length >= 4) {
        longueurMdp = "moyenne";
        couleurMsg = "orange"; // Longueur moyenne => couleur orange
    }
    var aideMdpElt = document.getElementById("aideMdp");
    aideMdpElt.textContent = "Longueur : " + longueurMdp; // Texte de l'aide
    aideMdpElt.style.color = couleurMsg; // Couleur du texte de l'aide
});

// Contrôle du courriel en fin de saisie
document.getElementById("courriel").addEventListener("blur", function (e) {
    var validiteCourriel = "";
    if (e.target.value.indexOf("@") === -1) {
        // Le courriel saisi ne contient pas le caractère @
        validiteCourriel = "Adresse invalide";
    }
    document.getElementById("aideCourriel").textContent = validiteCourriel;
});