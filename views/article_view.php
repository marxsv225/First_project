
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
            <h3 class="petittitre"><?php echo ($articles['titre_art']);?></h3>
              <img src="../admin/images/<?php echo ($articles['image_art']);?>" alt="DEVELOPPEMENT WEB" class="img-responsive thumbnail">
              <!-- Trigger the modal with a button -->
                <!-- <a onclick="$('#myModal').modal('show');"> -->
                <a href="achat.php?id=<?php echo ($articles['id_art']);?>">
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
                          <?php echo ($articles['titre_art']);?>
                        </div>
                        <p>Le coût est :</p>
                        <div class="well well-lg monform">
                          <?php echo ($articles['prix_art']);?>
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
              <?php echo ($articles['contenu_art']);?>
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
              <p class="grandtitre margehaut">Commentaires</p>
              <hr>
              <?php while ($comments = mysqli_fetch_array($showcmtquery)) {?>
              <div style ="border-left : 5px solid #a1a9bb; background-color : rgba(200, 200, 255, 0.5)">
                <section id="carousel">
                  <div class="container"> 
                    <?php 
                      $time1 = time();
                      $time2 = strtotime($comments['date_cmt']);
                      $diff = abs($time1 - $time2);
                      $tempsecond = $diff % 60;

                      $tempminutee = floor(($diff - $tempsecond)/60);
                      $tempminute = $tempminutee % 60;

                      $tempheuree = floor(($tempminute - $tempminute)/60);
                      $tempheure = $tempheuree % 24;
                      echo($comments['user']);
                      echo('<span style = "font-size:10px; color : blue"> - '.substr($comments['date_cmt'], 0, 16).'</span>');
                    ?>
                		<div class="row">
                			<div class="col-md-8">
                        <div class="media">
                          <?php 
                            if ($comments['statut'] == 1 ) {
                              echo '
                                <div class="media-left">
                                  <img src="../admin/images/'.$comments['image_user'].'" class="media-object" style="width:40px;">
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"></h4>
                                  '.$comments['comment'].'
                                </div>
                              ';
                            }else {
                              echo '
                                <div class="media-left">
                                  <img src="../admin/images/avatar.png" class="media-object" style="width:40px;">
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"></h4>
                                  '.$comments['comment'].'
                                </div>
                              ';
                            }
                          ?>
                        </div>  
                    	</div>
                    </div>
                  </div>
                </section>
              </div><br>
              <?php }?>
              <!-- fin carousel -->

              <!-- CONTACT_FORM -->

              <?php //include 'contact_form.php'; ?>
              <div class="contactform">
                <div class="avis">
                    <h3>Merci de nous laisser votre avis</h3>
                </div>
                <?php 
                  if (isset($_SESSION['nom_prenoms'])) 
                  {
                    echo '<form class="form-horizontal" action="" method="post">
                      <div class="form-group">
                        <div class="col-sm-12"><br>
                          <textarea class="form-control contacted" id="comment" placeholder="Participez à la discussion" name="comment" required></textarea>
                        </div>
                        <div class="col-sm-offset-1 col-sm-10"><br>
                          <input type="submit" class="btn btn-vaka" value="Envoyer" name="envoyer">
                        </div>
                      </div>
                    </form>';
                  } else 
                  {
                    echo '<form class="form-horizontal" action="" method="post">
                      <div class="form-group">
                        <div class="col-sm-12">
                          <input type="text" class="form-control contacted" id="name" placeholder="Entrez un nom" name="name" required>
                        </div>
                        <div class="col-sm-12"><br>
                          <textarea class="form-control contacted" id="comment" placeholder="Participez à la discussion" name="comment" required></textarea>
                        </div>
                        <div class="col-sm-offset-1 col-sm-10"><br>
                          <input type="submit" class="btn btn-vaka" value="Envoyer" name="envoyer">
                        </div>
                      </div>
                    </form>';
                  } 
                ?>
                
              </div>
              <!-- END CONTACT_FORM -->
            </div>
          </div>
        <!-- <div class="col-md-1">

        </div> -->
        <div class="col-md-4">
          <div class="colonne colonne2">
            <p class="grandtitre">Catégories</p>
            <hr>
            <ul class="maliste">
            <?php while ($categ=mysqli_fetch_array($categorie)) {?>
                <li><a href="#"><?php echo ($categ['categorie_art']);?></a></li>
              <?php } ?>
            </ul>
          </div>
          <div class="colonne colonne2">
            <p class="grandtitre">Articles récents</p>
            <hr>
            <ul class="maliste">
              <?php while ($donart=mysqli_fetch_array($querart)) {?>
                <li><a href="article.php?id=<?php echo($donart['id_art']); ?>"><?php echo ($donart['titre_art']);?></a></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
      <?php include "footer.php"; ?>