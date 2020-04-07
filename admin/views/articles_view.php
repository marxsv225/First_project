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
			    		</div>
			    	</div>
			    </div>			
			    <input type="submit" value="ENREGISTRER" class="btn btn-vaka btn-block" name="valider"> 		
			</form>
		</div>
	</div>

    </div>
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
        </tr>
        <?php } ?>
    </table>

  </div>
</div>
    </div>
    <div id="menu2" class="tab-pane fade">
      
    <div class="panel panel-default">
        <div class="panel-heading">
			<h3 class="panel-title">Enregistrement d'un nouvel article <span class="glyphicon glyphicon-pencil"></span></h3>
		</div>
		<div class="panel-body">
			<form role="form">
			    <div class="row">
			    	<div class="col-xs-6 col-sm-6 col-md-6">
			    		<div class="form-group">
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
			    		</div>
			    	</div>
			    	<div class="col-xs-6 col-sm-6 col-md-6">
			    		<div class="form-group">
			    			<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
			    		</div>
			    	</div>
			    </div>
			    		<div class="form-group">
			    			<textarea name="contenu" id="" cols="20" rows="6" class="form-control"></textarea>
			    		</div>
			    <div class="row">
			    	<div class="col-xs-6 col-sm-6 col-md-6">
			    		<div class="form-group">
			    			<input type="file" name="image" id="image" class="form-control input-sm" placeholder="Charger l'image">
			    		</div>
			        </div>
			    	<div class="col-xs-6 col-sm-6 col-md-6">
			    		<div class="form-group">
			    			<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    		</div>
			    	</div>
                </div>
                <div class="row">
			    	<div class="col-xs-6 col-sm-6 col-md-6">
			    		<div class="form-group">
			    			<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    		</div>
			    	</div>
			    	<div class="col-xs-6 col-sm-6 col-md-6">
			    		<div class="form-group">
			    			<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    		</div>
			    	</div>
			    </div>			
			    <input type="submit" value="ENREGISTRER" class="btn btn-vaka btn-block" name="modifier"> 		
			</form>
		</div>
	</div>

    </div>
    <div id="menu3" class="tab-pane fade">
      4
    </div>
  </div>