
  <?php session_start(); ?>
  <?php
  // Connecting to the Database
include "connect.php";

//The 6 Items displaying
$requete= 'SELECT * FROM articles WHERE statut="non publié" ORDER BY id_art DESC LIMIT 6';
$don = mysqli_query($con, $requete) or die ('Erreur SQL !'.$requete.'<br/>'.mysqli_error($con));


//Request for display the articles titles
$query= 'SELECT * FROM articles ORDER BY id_art DESC LIMIT 10';
$queri = mysqli_query($con, $query) or die ('Erreur SQL !'.$query.'<br/>'.mysqli_error($con));

//Request for display the articles categories
$querycat= 'SELECT * FROM articles GROUP BY categorie_art';
$categorie = mysqli_query($con, $querycat) or die ('Erreur SQL !'.$querycat.'<br/>'.mysqli_error($con));

//Request to display the most recent article
$newart='SELECT * FROM articles ORDER BY id_art DESC LIMIT 1';
$newarticle= mysqli_query($con, $newart) or die ('Erreur SQL !'.$newart.'<br/>'.mysqli_error($con));
$querynew=mysqli_fetch_array($newarticle);
?>  
    <?php include("menu.php"); ?>
      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-wrap="true" data-pause="false" data-interval="7000">
        <!-- Indicators-->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides-->
        <div class="carousel-inner">

          <div class="item active">
            <img src="images/slides/3.jpg" alt="Los Angeles" style="width:100%;">
            <div class="carousel-caption titreslide">
              <h2>BIENVENUE DANS MON MONDE, CELUI DE L'INFORMATIQUE</h2>
              <p>Vous serez servi à votre goût et même au délà de vos attentes !</p>
            </div>
          </div>

          <div class="item">
            <img src="images/slides/2.jpg" alt="Chicago" style="width:100%;">
            <div class="carousel-caption titreslide">
              <h2>UNE VUE GLOBALE DE CE MONDE PASSIONNANT</h2>
              <p>Et c'est pourquoi nous l'aimons tant au point d'en faire notre métier</p>
            </div>
          </div>

          <div class="item">
            <img src="images/slides/1.jpg" alt="New York" style="width:100%;">
            <div class="carousel-caption titreslide">
              <h2>LE DEVELOPPEMENT WEB,</h2>
              <p>Le point commun entre les idées et le code !</p>
            </div>
          </div>

          <div class="item">
            <img src="images/slides/4.jpg" alt="New York" style="width:100%">
            <div class="carousel-caption titreslide">
              <h2>UN MONDE DANS LEQUEL ON SE FREQUENTE SANS VRAIMENT SE CONNAITRE</h2>
              <p>Raison pour laquelle nous devont le maîtriser afin d'en être les acteurs</p>
            </div>
          </div>
        </div>

        <!-- Left and right controls-->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
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
      

      <!-- Modal -->
      <?php include "modal.php"; ?>
      <!-- END MODAL -->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <center>
          <p class="grandtitre text-center">Les articles récents</p>
          <hr>
          </center>
        </div>
      </div>
      <div class="row">
      <?php while ($article=mysqli_fetch_array($don)) {?>
        <div class="col-md-4">
          <div class="our-team-main">
            <div class="team-front">
              <a href="achat.php" class="overimage">
            	  <img src="../admin/images/<?php echo ($article['image_art']);?>" alt="Lights" style="width:100%" class="img-responsive" />
                <span class="titrearticle"><strong><?php echo ($article['titre_art']);?></strong></span>
              </a>
            </div>
            <div class="team-back">
            	<span>
            	  <?php echo ($article['contenu_art']);?>
              </span>
            <div class="centrer">
              <a href="article.php?id=<?php echo ($article['id_art']); ?>" class="overimage">
                <button type="button" name="button" class="btn btn-vaka centrer">Lire l'article</button>
              </a>
            </div>
	         </div>
	       </div>
        </div>
        <?php } ?>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="colonne">
            <h3 class="petittitre"><?php echo ($querynew['titre_art']); ?></h3>
              <p>
              <?php echo ($querynew['contenu_art']); ?>
              </p>
              <img src="../admin/images/<?php echo ($querynew['image_art']); ?>" alt="Article pic" class="img-responsive thumbnail">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
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
              <?php while ($donnee=mysqli_fetch_array($queri)) {?>
              <li><a href="article/<?php echo($donnee['id_art']); ?>"><?php echo ($donnee['titre_art']);?></a></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
      <?php include("footer.php"); ?>
      