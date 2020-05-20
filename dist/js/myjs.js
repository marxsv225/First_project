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

            // ADMIN

            $(document).ready(function() {
                $("div.bhoechie-tab-menu>ul.list-group>a").click(function(e) {
                    e.preventDefault();
                    $(this).siblings('a.active').removeClass("active");
                    $(this).addClass("active");
                    var index = $(this).index();
                    $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
                    $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
                });
            });

            // PAGE ACHAT

            var $form = $('#payment-form');
$form.find('.subscribe').on('click', payWithStripe);

/* If you're using Stripe for payments */
function payWithStripe(e) {
    e.preventDefault();
    
    /* Abort if invalid form data */
    if (!validator.form()) {
        return;
    }

    /* Visual feedback */
    $form.find('.subscribe').html('Validating <i class="fa fa-spinner fa-pulse"></i>').prop('disabled', true);

    var PublishableKey = 'pk_test_6pRNASCoBOKtIshFeQd4XMUh'; // Replace with your API publishable key
    Stripe.setPublishableKey(PublishableKey);
    
    /* Create token */
    var expiry = $form.find('[name=cardExpiry]').payment('cardExpiryVal');
    var ccData = {
        number: $form.find('[name=cardNumber]').val().replace(/\s/g,''),
        cvc: $form.find('[name=cardCVC]').val(),
        exp_month: expiry.month, 
        exp_year: expiry.year
    };
    
    Stripe.card.createToken(ccData, function stripeResponseHandler(status, response) {
        if (response.error) {
            /* Visual feedback */
            $form.find('.subscribe').html('Try again').prop('disabled', false);
            /* Show Stripe errors on the form */
            $form.find('.payment-errors').text(response.error.message);
            $form.find('.payment-errors').closest('.row').show();
        } else {
            /* Visual feedback */
            $form.find('.subscribe').html('Processing <i class="fa fa-spinner fa-pulse"></i>');
            /* Hide Stripe errors on the form */
            $form.find('.payment-errors').closest('.row').hide();
            $form.find('.payment-errors').text("");
            // response contains id and card, which contains additional card details            
            console.log(response.id);
            console.log(response.card);
            var token = response.id;
            // AJAX - you would send 'token' to your server here.
            $.post('/account/stripe_card_token', {
                    token: token
                })
                // Assign handlers immediately after making the request,
                .done(function(data, textStatus, jqXHR) {
                    $form.find('.subscribe').html('Payment successful <i class="fa fa-check"></i>');
                })
                .fail(function(jqXHR, textStatus, errorThrown) {
                    $form.find('.subscribe').html('There was a problem').removeClass('success').addClass('error');
                    /* Show Stripe errors on the form */
                    $form.find('.payment-errors').text('Try refreshing the page and trying again.');
                    $form.find('.payment-errors').closest('.row').show();
                });
        }
    });
}
/* Fancy restrictive input formatting via jQuery.payment library*/
$('input[name=cardNumber]').payment('formatCardNumber');
$('input[name=cardCVC]').payment('formatCardCVC');
$('input[name=cardExpiry').payment('formatCardExpiry');

/* Form validation using Stripe client-side validation helpers */
jQuery.validator.addMethod("cardNumber", function(value, element) {
    return this.optional(element) || Stripe.card.validateCardNumber(value);
}, "Please specify a valid credit card number.");

jQuery.validator.addMethod("cardExpiry", function(value, element) {    
    /* Parsing month/year uses jQuery.payment library */
    value = $.payment.cardExpiryVal(value);
    return this.optional(element) || Stripe.card.validateExpiry(value.month, value.year);
}, "Invalid expiration date.");

jQuery.validator.addMethod("cardCVC", function(value, element) {
    return this.optional(element) || Stripe.card.validateCVC(value);
}, "Invalid CVC.");

validator = $form.validate({
    rules: {
        cardNumber: {
            required: true,
            cardNumber: true            
        },
        cardExpiry: {
            required: true,
            cardExpiry: true
        },
        cardCVC: {
            required: true,
            cardCVC: true
        }
    },
    highlight: function(element) {
        $(element).closest('.form-control').removeClass('success').addClass('error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-control').removeClass('error').addClass('success');
    },
    errorPlacement: function(error, element) {
        $(element).closest('.form-group').append(error);
    }
});

paymentFormReady = function() {
    if ($form.find('[name=cardNumber]').hasClass("success") &&
        $form.find('[name=cardExpiry]').hasClass("success") &&
        $form.find('[name=cardCVC]').val().length > 1) {
        return true;
    } else {
        return false;
    }
}

$form.find('.subscribe').prop('disabled', true);
var readyInterval = setInterval(function() {
    if (paymentFormReady()) {
        $form.find('.subscribe').prop('disabled', false);
        clearInterval(readyInterval);
    }
}, 250);