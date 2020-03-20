// function acheter(){
//   var entree = document.getElementById("nombrearticle").value;
//   var prixarticle = 500;
//   var couttotal = entree*prixarticle;
//   document.getElementById("espace").value = couttotal;
// }
// function liste(form5) {
// // var entree = document.getElementById("nombreArticle").value;
// // var sai = form5.list.selectedIndex + 1;
// // document.getElementById('prix').value=sai;
// var contenu = document.getElementById("nombreArticle").value;
//
// var price = document.getElementById("coutarticle").value;
// var totalapayer = contenu*price;
// document.getElementById("prix").value = totalapayer;
// }

function calcul(){

var entree = document.getElementById("nombreArticle").value;
var price = document.getElementById("coutarticle").value;
var totalapayer = entree*price;
document.getElementById("prix").value = totalapayer + " FCFA";

}
document.getElementById('go').addEventListener("click",calcul);

// function prod(){

//     var entre = document.getElementById("nombre").value;
//     console.log(entre);
//     var cout = 600;
//     var totalapaye = entre*cout;
//     document.getElementById("pri").value = totalapaye + " FCFA";
    
//     }
//     document.getElementById('ok').addEventListener("click",prod);
function prod(){
 
    var entre = document.getElementById("nombre").value;
    //console.log(entre);
    var cout = 600;
    var totalapaye = entre*cout;
    document.getElementById("pri").value = totalapaye + " FCFA";
    
    }
    document.getElementById('ok').addEventListener("click",prod);

    function produit(){
 
        var saisir = document.getElementById("nbre").value;
        var somme = 700;
        var paye = saisir*somme;
        document.getElementById("affiche").value = paye + " FCFA";
        
        }
        document.getElementById('valide').addEventListener("click",produit);

        //Button hamberger

        $(function(){

            $(".icon-hamburger").click(function(){
                $(this).toggleClass("active");
            })
        
        });

        function validation(){
            var valeur1 = document.getElementById("coutarticle").value;
            var valeur2 = document.getElementById("nombreArticle").value;
            if (valeur1 == "" || valeur2 == "" && typeof valeur2 != "number" ) {
                alert("SOYET là  renseigne les champs !");
                return false;
            }
            
            else {
                alert("SUPER, votre achat a bien été éffectué !");
                return true;
            }
        }

        
            //Récuperation des deux nombres saisis par l'utilisateur
           
            // Addition des deux nombres
            function addition(){
                const nomb1 = Number(document.getElementById("nomb1").value);
                const nomb2 = Number(document.getElementById("nomb2").value);
                let addi = nomb1 + nomb2;
                document.getElementById("afficher").value = addi;
            }
            // Soustration des deux nombres
            function soustration(){
                const nomb1 = Number(document.getElementById("nomb1").value);
                const nomb2 = Number(document.getElementById("nomb2").value);
                let sous = nomb1 - nomb2;
                document.getElementById("afficher").value = sous;
            }
            // Multiplication des deux nombres
            function multiplicationo(){
                const nomb1 = Number(document.getElementById("nomb1").value);
                const nomb2 = Number(document.getElementById("nomb2").value);
                let multi = nomb1 * nomb2;
                document.getElementById("afficher").value = multi;
            }
            // Division des deux nombres
            function divisiono(){
                const nomb1 = Number(document.getElementById("nomb1").value);
                const nomb2 = Number(document.getElementById("nomb2").value);
                let divise = nomb1 / nomb2;
                document.getElementById("afficher").value = divise;
            }