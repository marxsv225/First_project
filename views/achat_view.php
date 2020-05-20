<style>
     /* Style the form */
#regForm {
  background-color: #ffffff;
  margin: auto;
  padding: 20px;
  width: 70%;
  min-width: 300px;
}

/* Style the input fields */
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
} 
.pt{
    margin-left:20px;
}
.pti{
    margin-top:-30px;
}
.btt{
    padding: 5px;
}
</style>
<div id="regForm" >

<h1>Achat d'un article</h1>

<!-- One "tab" for each step in the form: -->
<form action="" method="post" name="form">
<div class="tab">
  <!-- <p><input placeholder="E-mail..." oninput="this.className = ''"></p>
  <p><input placeholder="Phone..." oninput="this.className = ''"></p> -->
  <div class="panel panel-default ">
    <div class="panel-heading display-table">
        <div class="row display-tr" >
            <h3 class="panel-title display-td" >DETAILS DE L'ARTICLE</h3>
        </div>  
    </div>
    <div class="panel-body">
        <div class="form-group">
            <label for="art">L'article :</label>
            <input type="text" class="form-control" id="art" name="article"
             value="<?php echo ($acheter['titre_art']);?>">
        </div>
        <div class="form-group">
            <label for="prix" id="prix">Prix :</label>
            <input type="text" class="form-control" id="prix" name="prix"
             value="<?php echo (substr($acheter['prix_art'], 0, 4));?>">
        </div>
        <div class="form-group">
            <label for="nbre">Nombre d'examplaire :</label>
            <input type="number" class="form-control" id="nbre" name="nombre" onKeyPress="montant()">
        </div>
        <div class="form-group">
            <label for="prixtotal">Montant a payer :</label>
            <input type="text" class="form-control" id="prixtotal" name="prixtotal" value="" disabled>
        </div>
    </div> 
  </div>
</div>
<div class="tab">
<div class="panel panel-default">
                <div class="panel-heading display-table" >
                    <div class="row" >
                        <h3 class="panel-title pt">DETAILS DU PAIEMENT</h3>
                        <div class="pti" >                            
                            <img class="img-responsive pull-right" src="../admin/images/accepted_c22e0.png">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form" method="POST" action="javascript:void(0);">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="couponCode">Type de carte</label>
                                    <select name="card" class="form-control" id="art">
                                        <option selected disabled>Selectionner la carte</option>
                                        <option value="Master Card">Master Card</option>
                                        <option value="Visa">Visa</option>
                                        <option value="American Express">American Express</option>
                                    </select>
                                </div>
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">Numéro de carte</label>
                                    <div class="input-group">
                                        <input 
                                            type="tel"
                                            class="form-control"
                                            name="cardNumber"
                                            placeholder="Valid Card Number"
                                            autocomplete="cc-number"
                                            maxlength="16"
                                            required autofocus 
                                        />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">Date expiration</span><span class="visible-xs-inline">EXP</span></label>
                                    <input 
                                        type="tel" 
                                        class="form-control" 
                                        name="cardExpiry"
                                        placeholder="MM-YY"
                                        autocomplete="cc-exp"
                                        required 
                                    />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CV code</label>
                                    <input 
                                        type="tel" 
                                        class="form-control"
                                        name="cardCVC"
                                        placeholder="CVC"
                                        autocomplete="cc-csc"
                                        maxlength="3"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-12">
                                <input name="valider" class="subscribe btn btn-success btn-lg btn-block" type="submit" value="Valider la commande">
                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div> 
</div>
</form>


<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" class="btt btn-vaka" id="prevBtn" onclick="nextPrev(-1)"> <span class="glyphicon glyphicon-arrow-left"></span> Previous</button>
    <button type="button" name="ajout" class="btt btn-vaka" id="nextBtn" onclick="nextPrev(1)">Next <span class="glyphicon glyphicon-arrow-right"></span></button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
</div>

</div> 

<script>
    function montant() {
        var prixo = document.getElementById("prix").value;
        var nbreo = document.getElementById("nbre").value;
        var nbret = prixo * nbreo;
        document.getElementById("prixtotal").value = nbret; 
    }
 

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
</script>