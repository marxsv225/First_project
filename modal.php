
<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content btn-vaka">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h3 class="modal-title">
                <strong>
                  <span class="glyphicon glyphicon-shopping-cart"></span> Achat de l'article
                </strong>
              </h3>
            </div>
            <div class="modal-body">
              <p class="monmodal">
                <FORM NAME="form5">
                  <label for="list">Veuillez choisir votre article :</label>
                  <select NAME="list" id="coutarticle" class="form-control" required>
                    <option  selected disabled >Selectionnez votre article</option>
                    <option value="600" >Comment utiliser les réseaux sociaux ? (600 FCFA) </option>
                    <option value="700" >Le refont : La réussite du site web ! (700 FCFA) </option>
                    <option value="1200">3 indispensables formations de Marketing Digital (1200 FCFA) </option>
                    <option value="800" >Dev web : 5 langages à connaître absolument (800 FCFA) </option>
                    <option value="2000">A la découverte de l'autre côté de l'internet (2000 FCFA) </option>
                    <option value="900">L'éclosion des web designeurs en Côte d'Ivoire (900 FCFA) </option>
                  </select><br>
                  <label for="sel1">Combien en voulez-vous ?</label>
                  <input type="text" class="form-control" name="entree" value="" id="nombreArticle" placeholder="Le nombre d'exemplaire" required="required"/> <br/>

                   <!-- <INPUT TYPE="button"NAME="b" VALUE="Quel est l'élément retenu?" onClick="liste(form5)"> -->
                  <label for="sel1">Le montatnt total à régler est :</label>
                  <input type="text" name="" value="" id="prix" class="form-control well well-lg tailleecrit" disabled/><br/>
                  <div class="col-md-6">
                    <input type="button" value="MONTANT A REGLER" id="go" class="form-control btn-vaka">
                  </div>
                  <div class="col-md-6">
                    <input type="reset" value="ANNULER"  class="form-control btn-vaka-reset">
                  </div>
              </p>
            </div><br/>
            <div class="modal-footer">
              <input type="submit" value="VALIDER L'ACHAT"  class="form-control btn-vaka-valide" onclick="validation()">
              <!-- <button type="button" class="btn btn-vaka btn-lg data-dismiss="modal">Close</button> -->
            </div>
          </FORM>
          </div>

        </div>
      </div>