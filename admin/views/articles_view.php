
<section id="breadcrumb">
    <div class="container">
      <ol class="breadcrumb">
        <li class="active">Dashboard / Articles</li>
      </ol>
    </div>
  </section>
<div class ="libelle">
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Nouvel article</a></li>
    <li><a data-toggle="tab" href="#menu1">Liste des articles</a></li>
    <li><a data-toggle="tab" href="#menu2">Mise à jour</a></li>
    <li><a data-toggle="tab" href="#menu3">Suppression</a></li>
  </ul>
</div>
  <div class="tab-content">

	  <!-- ZONE D'AJOUT D'UN ARTICLE -->
	  
    <div id="home" class="tab-pane fade in active">
    <div class="panel panel-default">
        <div class="panel-heading">
			<h3 class="panel-title">Enregistrement d'un nouvel article <span class="glyphicon glyphicon-pencil"></span></h3>
		</div>
		<div class="panel-body">
			<form role="form" method="post" action="articles.php" enctype="multipart/form-data">
			    <div class="row">
			    	<div class="col-xs-6 col-sm-6 col-md-6">
			    		<div class="form-group">
                            <select name="categorie" id="" class="form-control input-sm" required>
                                <option selected disabled>selectionner la catégorie</option>
                                <option value="Developpement web">Développement web</option>
                                <option value="Marketing digital">Marketing digital</option>
                                <option value="Web design">Web design</option>
                                <option value="Referencement digital">Réferencement digital</option>
                            </select>
			    		</div>
			    	</div>
			    	<div class="col-xs-6 col-sm-6 col-md-6">
			    		<div class="form-group">
			    			<input type="text" name="titre" id="title" class="form-control input-sm" placeholder="Le titre de l'article" required>
			    		</div>
			    	</div>
			    </div>
			    		<div class="form-group">
			    			<textarea name="contenu" id="" cols="20" rows="6" class="form-control" required></textarea>
			    		</div>
			    <div class="row">
			    	<div class="col-xs-12 col-sm-12 col-md-12">
			    		<div class="form-group">
			    			<input type="file" name="photo" id="image" class="form-control input-sm" placeholder="Charger l'image" required>
			    		</div>
			        </div>
                </div>
                <div class="row">
			    	<div class="col-xs-6 col-sm-6 col-md-6">
			    		<div class="form-group">
                            <input type="text" name="prix" id="price" class="form-control input-sm" placeholder="Pris de l'article" required>
			    		</div>
			    	</div>
			    	<div class="col-xs-6 col-sm-6 col-md-6">
			    		<div class="form-group">
                            <input type="text" name="auteur" id="author" class="form-control input-sm" placeholder="L'auteur de l'article" required>
                            <label class="radio-inline">
							<input type="radio" name="statut" value="publié">Publié
							</label>
							<label class="radio-inline">
							<input type="radio" name="statut" value="non publié" checked>Non publié
							</label>
						</div>
						
			    	</div>
			    </div>			
			    <input type="submit" value="ENREGISTRER" class="btn btn-vaka btn-block" name="valider"> 		
			</form>
		</div>
	</div>
</div>

 <!-- FIN ZONE D'AJOUT D'UN ARTICLE' -->

 <!-- ZONE DE LISTING DES ARTICLES -->
 
    <div id="menu1" class="tab-pane fade">
    <div class="panel panel-default">
  <div class="panel-heading"style="background-color: #0f2f5b; color:#fff">
    <h3 class="panel-title">Liste des articles enregistrés</h3>
  </div>
  <div class="panel-body">
    <table class="table table-striped table-hover">
        <tr>
            <th>N°</th>
            <th>Catégorie</th>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Image</th>
            <th>Prix</th>
            <th>Auteur</th>
            <th>Date</th>
            <th>Statut</th>
            <th>Action</th>
        </tr>
    <?php while ($data=mysqli_fetch_array($que)) { ?>
        <tr>
            <td><?php echo($data['id_art']); ?></td>
            <td><?php echo($data['categorie_art']); ?></td>
            <td><?php echo($data['titre_art']); ?></td>
            <td><?php echo($data['contenu_art']); ?></td>
            <td><img src="images/<?php echo ($data['image_art'])?>" width="100" height="100"></td>
            <td><?php echo($data['prix_art']); ?></td>
            <td><?php echo($data['auteur_art']); ?></td>
            <td><?php echo($data['date_pub_art']); ?></td>
            <td><?php echo($data['statut']); ?></td>
            <td><a onclick="return confirm('Etes vous sur...?')"; href="delete.php?code=<?php echo($data['id_art']); ?>">Supprimer</a></td>
        </tr>
        <?php } ?>
    </table>

  </div>
</div>
	</div>
	<!-- FIN ZONE LISTING DES ARTICLES -->

	 <!-- MODIFICATION D'UN ARTICLE -->

    <div id="menu2" class="tab-pane fade">
		
		<form action="" method="post">
			<input type="text" name="id">
			<input type="submit" name="recherche" value="Rechercher">
		</form>
		<?php
			include '../connect.php';
				//---------- DISPLAY UPDATE FORM----------------------
			if(isset($_POST['recherche'])){
				$id = $_POST['id'];
				$query = mysqli_query($con, "SELECT * FROM articles WHERE id_art = '$id'");
				$rows = mysqli_num_rows($query);
				if($rows!=0){
				while($articl = mysqli_fetch_assoc($query)) {
			?>
    <div class="panel panel-default">
        <div class="panel-heading">
			<h3 class="panel-title">MODIFICATION DE L'ARTICLE N°<?php echo ($articl['id_art']); ?> <span class="glyphicon glyphicon-pencil"></span></h3>
		</div>
		<div class="panel-body">
		<form role="form" method="post" action="" enctype="multipart/form-data">
			<input type = "hidden" name = "id" value = "<?php echo $id; ?>">		
			    <div class="row">
			    	<div class="col-xs-6 col-sm-6 col-md-6">
			    		<div class="form-group">
							<label for="">Catégorie</label>
							<input type="text" name="categorie" value="<?php echo ($articl['categorie_art']); ?>" id="title" class="form-control input-sm"  required>
			    		</div>
			    	</div>
			    	<div class="col-xs-6 col-sm-6 col-md-6">
			    		<div class="form-group">
							<label for="">Titre</label>
			    			<input type="text" name="titre" value="<?php echo ($articl['titre_art']); ?>" id="title" class="form-control input-sm"  required>
			    		</div>
			    	</div>
			    </div>
			    		<div class="form-group">
							<label for="">Contenu</label>
			    			<textarea name="contenu" id="" value="" cols="20" rows="6" class="form-control" required><?php echo ($articl['contenu_art']); ?></textarea>
			    		</div>
			    <div class="row">
			    	<div class="col-xs-6 col-sm-6 col-md-6">
			    		<div class="form-group">
							<label for="">Image</label>
							<input type="file" value="" name="photo" id="image" class="form-control input-sm" >
							<img src="images/<?php echo ($articl['image_art']); ?>" width="50" height="50">
			    		</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
			    		<div class="form-group">
						<label for="">Prix</label>
						<input type="text" name="prix" value="<?php echo ($articl['prix_art']); ?>" id="price" class="form-control input-sm"  required>
			    		</div>
			        </div>
                </div>
                <div class="row">
			    	<div class="col-xs-6 col-sm-6 col-md-6">
			    		<div class="form-group">
						<label for="">Auteur</label>
						<input type="text" name="auteur" value="<?php echo ($articl['auteur_art']); ?>" id="author" class="form-control input-sm"  required>
			    		</div>
			    	</div>
			    	<div class="col-xs-4 col-sm-4 col-md-4">
			    		<div class="form-group">
							<label for="">Date</label>
                            <input type="text" name="date_pub" value="<?php echo ($articl['date_pub_art']); ?>" id="date_pub" class="form-control input-sm"  required>
			    		</div>
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2">
			    		<div class="form-group">
							<label for="">Statut</label>
                            <input type="text" name="statut" value="<?php echo ($articl['statut']); ?>" id="statut" class="form-control input-sm"  required>
			    		</div>
			    	</div>
			    </div>			
			    <input type="submit" value="MODIFIER" class="btn btn-vaka btn-block" name="modifier"> 		
			</form>
		</div>
	</div>
</div>
	<!-- FIN DE ZONE DE MODIFICATION D'UN ARTICLE -->
	<?php
  }
}
  }

// script update php
// -----------------------UPDATE ACTION-------------------//

if (isset($_POST['modifier'])) {
	$id = $_POST['id'];
	$categorie=mysqli_real_escape_string($con, $_POST['categorie']);
    $titre=mysqli_real_escape_string($con, $_POST['titre']);
	$contenu=mysqli_real_escape_string($con, $_POST['contenu']);
	$nomphoto=mysqli_real_escape_string($con, $_FILES['photo']['name']);
	$prix=mysqli_real_escape_string($con, $_POST['prix']);
    $auteur=mysqli_real_escape_string($con, $_POST['auteur']);
	$date = mysqli_real_escape_string($con, date("Y-m-d H:i:s"));
	$statut = mysqli_real_escape_string($con, $_POST['statut']);
	if ($nomphoto=="") {
		$updatequery="UPDATE articles SET categorie_art='$categorie', titre_art='$titre', contenu_art='$contenu', prix_art='$prix', auteur_art='$auteur', date_pub_art='$date', statut='$statut' WHERE id_art='$id'";
		$update=mysqli_query($con, $updatequery) or die ('Erreur SQL !'.$updatequery.'<br/>'.mysqli_error($con));
		if ($update==1) {
			echo '<div class="alert alert-success"><strong>Modification effectuée avec succès !</strong></div>';
		}	
	}
	else {
		$fichierTemporaire=$_FILES['photo']['tmp_name'];
		 move_uploaded_file($fichierTemporaire,'./images/'.$nomphoto);
		 $updatequery="UPDATE articles SET categorie_art='$categorie', titre_art='$titre', contenu_art='$contenu', image_art='$nomphoto', prix_art='$prix', auteur_art='$auteur', date_pub_art='$date', statut='$statut' WHERE id_art='$id'";
		 $update=mysqli_query($con, $updatequery) or die ('Erreur SQL !'.$updatequery.'<br/>'.mysqli_error($con));
		 if ($update==1) {
			echo '<div class="alert alert-success"><strong>Modification effectuée avec succès !</strong></div>';
		}	
	}
}
  ?>
    <div id="menu3" class="tab-pane fade">
      4
    </div>
  </div>