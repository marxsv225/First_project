<?php
// include "connect.php";
// $requete= 'SELECT * FROM articles ORDER BY id_art DESC';
// $que = mysqli_query($con, $requete) or die ('Erreur SQL !'.$requete.'<br/>'.mysql_error());
// $data=mysqli_fetch_array($que);
include "securite.php";
include "menu.php";
?>

    <div class="row row1">
        <div class="col-md-2 col-xs-2 col-lg-4">
          <!-- Espace gauche -->
        </div>
        <?php include "citation.php"?>
        <div class="col-md-2 col-xs-2 col-lg-4">
            <a onclick="$('#myModal').modal('show');">
               <button class="btn-achat" id="scroler">J'ACHETE <br> UN <br> ARTICLE</button>
            </a>
        </div>
    </div>
    <?php include "modal.php"; ?>
<div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <center>
          <p class="grandtitre text-center">Notre catalogue</p>
          <hr>
          </center>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="our-team-main">
            <div class="team-front">
              <a href="achat.php" class="overimage">
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
              <a href="achat.php" class="overimage">
                <button type="button" name="button" class="btn btn-vaka centrer">Lire l'article</button>
              </a>
            </div>
	         </div>
	       </div>
        </div>
        <div class="col-md-4">
          <div class="our-team-main">
            <div class="team-front">
              <a href="achat.php" class="overimage">
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
              <a href="achat.php" class="overimage">
                <button type="button" name="button" class="btn btn-vaka centrer">Lire l'article</button>
              </a>
            </div>
	         </div>
	       </div>
        </div>
        <div class="col-md-4">
          <div class="our-team-main">
            <div class="team-front">
              <a href="achat.php" class="overimage">
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
              <a href="achat.php" class="overimage">
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
              <a href="achat.php" class="overimage">
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
              <a href="achat.php" class="overimage">
                <button type="button" name="button" class="btn btn-vaka centrer">Lire l'article</button>
              </a>
            </div>
	         </div>
	       </div>
        </div>
        <div class="col-md-4">
          <div class="our-team-main">
            <div class="team-front">
              <a href="achat.php" class="overimage">
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
              <a href="achat.php" class="overimage">
                <button type="button" name="button" class="btn btn-vaka centrer">Lire l'article</button>
              </a>
            </div>
	         </div>
	       </div>
        </div>
        <div class="col-md-4">
          <div class="our-team-main">
            <div class="team-front">
              <a href="achat.php" class="overimage">
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
              <a href="achat.php" class="overimage">
                <button type="button" name="button" class="btn btn-vaka centrer">Lire l'article</button>
              </a>
            </div>
	         </div>
	       </div>
        </div>
      </div>
    
<?php include "footer.php"; ?>