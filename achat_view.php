<?php
include "connect.php";
$requete= 'SELECT * FROM articles ORDER BY id_art DESC LIMIT 1';
$que = mysqli_query($con, $requete) or die ('Erreur SQL !'.$requete.'<br/>'.mysql_error());
$data=mysqli_fetch_array($que);
?>
<div class="row">
    <div class="col-md-12">
        <img src="images/imagehote.jpg" alt="Image d'accueil" class="img-responsive imageentete">
    </div>
</div>
    <div class="row row1">
        <div class="col-md-2 col-xs-2 col-lg-4">
          <!-- Espace gauche -->
        </div>
        <?php include "citation.php"?>
        <div class="col-md-2 col-xs-2 col-lg-4">
          <!-- espace droit -->
        </div>
    </div>
<div class="row">
        <div class="col-md-8">
          <div class="colonne">
            <h3 class="petittitre"><?php echo ($data['titre_art'])?></h3>
              <img src="admin/images/<?php echo ($data['image_art'])?>" alt="DEVELOPPEMENT WEB" class="img-responsive thumbnail">
              <!-- Trigger the modal with a button -->
                <a onclick="$('#myModal').modal('show');">
                  <button type="button" class="btn btn-vaka btn-lg">
                    <span class="glyphicon glyphicon-shopping-cart"></span> J'achète
                  </button>
                </a>

                <!-- Modal -->
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
                        <p>L'article que vous avez choisi est :</p>
                        <div class="well well-lg monform">
                          Comment utiliser les réseaux sociaux ?
                        </div>
                        <p>Le coût est :</p>
                        <div class="well well-lg monform">
                          600 FCFA
                        </div>
                          <FORM NAME="form6" class="">
                            <label for="">Combien en voulez-vous ?</label>
                            <input type="text" class="form-control" name="entre" value="" id="nombre" placeholder="Le nombre d'exemplaire"/> <br/>
 
                            <!-- <INPUT TYPE="button"NAME="b" VALUE="Quel est l'élément retenu?" onClick="liste(form5)"> -->
                            <label for="sel1">Le montatnt total à régler est :</label>
                            <input type="text" name="" value="" id="pri" class="form-control well well-lg tailleecrit monform" disabled/><br/>
                              <input type="button" value="MONTANT A REGLER" id="ok" class="form-control btn-vaka">
                          </FORM>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div><br><br>
                <!-- FIN MODAL -->
              <p>
              <?php echo ($data['contenu_art'])?>
              </p>
              <h3 class="petittitre">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
              </p>
              <p class="grandtitre margehaut">Les avis de quelques abonnés</p>
              <hr>
              <div class="espacetemoignage">
                <section id="carousel">
                	<div class="container">
                		<div class="row">
                			<div class="col-md-8">
                        <div class="quote"><span class="glyphicon glyphicon-quote-left glyphicon-4x"></span></div>
                				  <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                				  <!-- Carousel indicators -->
                              <ol class="carousel-indicators">
                        				<li data-target="#fade-quote-carousel" data-slide-to="0"></li>
                        				<li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                        				<li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
                                <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
                                <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
                                <li data-target="#fade-quote-carousel" data-slide-to="5"></li>
                				      </ol>
                				  <!-- Carousel items -->
                				      <div class="carousel-inner">
                				        <div class="item">
                                  <div class="profile-circle" style="background-color: rgba(0,0,0,.2);">
                                    <img src="images/tem1.png" alt="" class="img-responsive img-circle">
                                  </div>
                				    	    <blockquote>
                				    		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                				    	    </blockquote>
                				        </div>
                				        <div class="item">
                                  <div class="profile-circle" style="background-color: rgba(77,5,51,.2);">
                                    <img src="images/tem5.png" alt="" class="img-responsive img-circle">
                                  </div>
                				    	    <blockquote>
                				    		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                				    	    </blockquote>
                				        </div>
                				        <div class="active item">
                                  <div class="profile-circle" style="background-color: rgba(145,169,216,.2);">
                                    <img src="images/tem3.png" alt="" class="img-responsive img-circle">
                                  </div>
                				    	    <blockquote>
                				    		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                				    	    </blockquote>
                				        </div>
                                <div class="item">
                                  <div class="profile-circle" style="background-color: rgba(77,5,51,.2);">
                                    <img src="images/tem4.png" alt="" class="img-responsive img-circle">
                                  </div>
                    			    	  <blockquote>
                				    		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                				    	    </blockquote>
                				        </div>
                                <div class="item">
                                  <div class="profile-circle" style="background-color: rgba(77,5,51,.2);">
                                    <img src="images/tem6.png" alt="" class="img-responsive img-circle">
                                  </div>
                      			    	<blockquote>
                  				    		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                  				    	  </blockquote>
                				        </div>
                                <div class="item">
                                  <div class="profile-circle" style="background-color: rgba(77,5,51,.2);">
                                    <img src="images/tem7.png" alt="" class="img-responsive img-circle">
                                  </div>
                    			    	    <blockquote>
                				    		      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                				    	      </blockquote>
                				        </div>
                    				  </div>
                    				</div>
                    			</div>
                    		</div>
                    	</div>
                    </section>
              </div>
              <!-- fin carousel -->

              <!-- CONTACT_FORM -->
              <?php include 'contact_form.php'; ?>
              <!-- END CONTACT_FORM -->
            </div>
          </div>
        <!-- <div class="col-md-1">

        </div> -->
        <div class="col-md-4">
          <div class="colonne colonne2">
            <p class="grandtitre">Catégories</p>
            <hr>
            <ul>
              <li><a href="#">Web design</a></li>
              <li><a href="#">Infographie</a></li>
              <li><a href="#">Web refont</a></li>
              <li><a href="#">Développement web</a></li>
              <li><a href="#">Développement mobile</a></li>
              <li><a href="#">Le referencement</a></li>
            </ul>
          </div>
          <div class="colonne colonne2">
            <p class="grandtitre">Articles récents</p>
            <hr>
            <ul>
              <li><a href="#">Web design</a></li>
              <li><a href="#">Infographie</a></li>
              <li><a href="#">Web refont</a></li>
              <li><a href="#">Développement web</a></li>
              <li><a href="#">Développement mobile</a></li>
              <li><a href="#">Le referencement</a></li>
            </ul>
          </div>
        </div>
      </div>
      <?php include "footer.php"; ?>