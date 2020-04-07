
  <?php session_start(); ?>
      
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
        <div class="col-md-4">
          <div class="our-team-main">
            <div class="team-front">
              <a href="articles/article_1.html" class="overimage">
            	  <img src="images/reso.jpg" alt="Lights" style="width:100%" class="img-responsive" />
                <span class="titrearticle"><strong>Comment utiliser les réseaux sociaux ?</strong></span>
              </a>
            </div>
            <div class="team-back">
            	<span>
            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
            	natoque penatibus et magnis dis parturient montes,
            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
            	natoque.
            </span>
            <div class="centrer">
              <a href="articles/article_1.html" class="overimage">
                <button type="button" name="button" class="btn btn-vaka centrer">Lire l'article</button>
              </a>
            </div>
	         </div>
	       </div>
        </div>
        <div class="col-md-4">
          <div class="our-team-main">
            <div class="team-front">
              <a href="articles/article_2.php" class="overimage">
            	  <img src="images/refont.jpg" alt="Lights" style="width:100%" class="img-responsive" />
                <span class="titrearticle"><strong>Le refont : La réussite du site web !</strong></span>
              </a>
            </div>
            <div class="team-back">
            	<span>
            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
            	natoque penatibus et magnis dis parturient montes,
            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
            	natoque.
            </span>
            <div class="centrer">
              <a href="articles/article_2.php" class="overimage">
                <button type="button" name="button" class="btn btn-vaka centrer">Lire l'article</button>
              </a>
            </div>
	         </div>
	       </div>
        </div>
        <div class="col-md-4">
          <div class="our-team-main">
            <div class="team-front">
              <a href="articles/article_3.html" class="overimage">
            	  <img src="images/digital.jpg" alt="Lights" style="width:100%" class="img-responsive" />
                <span class="titrearticle"><strong>3 indispensables formations de Marketing Digital</strong></span>
              </a>
            </div>
            <div class="team-back">
            	<span>
            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
            	natoque penatibus et magnis dis parturient montes,
            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
            	natoque.
            </span>
            <div class="centrer">
              <a href="articles/article_3.html" class="overimage">
                <button type="button" name="button" class="btn btn-vaka centrer">Lire l'article</button>
              </a>
            </div>
	         </div>
	       </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="our-team-main">
            <div class="team-front">
              <a href="articles/article_4.html" class="overimage">
            	  <img src="images/devweb.jpg" alt="Lights" style="width:100%" class="img-responsive" />
                <span class="titrearticle"><strong>Dev web : 5 langages à connaître absolument</strong></span>
              </a>
            </div>
            <div class="team-back">
            	<span>
            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
            	natoque penatibus et magnis dis parturient montes,
            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
            	natoque.
            </span>
            <div class="centrer">
              <a href="articles/article_4.html" class="overimage">
                <button type="button" name="button" class="btn btn-vaka centrer">Lire l'article</button>
              </a>
            </div>
	         </div>
	       </div>
        </div>
        <div class="col-md-4">
          <div class="our-team-main">
            <div class="team-front">
              <a href="articles/article_5.html" class="overimage">
            	  <img src="images/internet.jpg" alt="Lights" style="width:100%" class="img-responsive" />
                <span class="titrearticle"><strong>A la découverte de l'autre côté de l'internet</strong></span>
              </a>
            </div>
            <div class="team-back">
            	<span>
            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
            	natoque penatibus et magnis dis parturient montes,
            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
            	natoque.
            </span>
            <div class="centrer">
              <a href="articles/article_5.html" class="overimage">
                <button type="button" name="button" class="btn btn-vaka centrer">Lire l'article</button>
              </a>
            </div>
	         </div>
	       </div>
        </div>
        <div class="col-md-4">
          <div class="our-team-main">
            <div class="team-front">
              <a href="articles/article_6.html" class="overimage">
            	  <img src="images/design.jpg" alt="Lights" style="width:100%" class="img-responsive" />
                <span class="titrearticle"><strong>L'éclosion des web designeurs en Côte d'Ivoire</strong></span>
              </a>
            </div>
            <div class="team-back">
            	<span>
            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
            	natoque penatibus et magnis dis parturient montes,
            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
            	natoque.
            </span>
            <div class="centrer">
              <a href="articles/article_6.html" class="overimage">
                <button type="button" name="button" class="btn btn-vaka centrer">Lire l'article</button>
              </a>
            </div>
	         </div>
	       </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="colonne">
            <h3 class="petittitre">Une petite histoire pour tout débutant en Développement web</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <img src="images/devweb.jpg" alt="DEVELOPPEMENT WEB" class="img-responsive thumbnail">
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
      <?php include("footer.php"); ?>
    