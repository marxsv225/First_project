<section id="breadcrumb">
    <div class="container">
      <ol class="breadcrumb">
        <li class="active">Dashboard / Users</li>
      </ol>
    </div>
  </section>
<div class ="libelle">
<ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#menu1">Liste des utilisateurs</a></li>
    <li><a data-toggle="tab" href="#menu2">Mise à jour</a></li>
  </ul>
</div>
  <div class="tab-content">

 <!-- ZONE DE LISTING DES USERS -->
 
    <div id="menu1" class="tab-pane fade">
    <div class="panel panel-default">
  <div class="panel-heading"style="background-color: #0f2f5b; color:#fff">
    <h3 class="panel-title">Liste des utilisateurs</h3>
  </div>
  <div class="panel-body">
    <table class="table table-striped table-hover">
        <tr>
            <th>N°</th>
            <th>NOM & PRENOMS</th>
            <th>EMAIL</th>
            <th>PHOTO</th>
            <th>DATE INSC</th>
            <th>ROLE</th>
        </tr>
    <?php while ($datauser=mysqli_fetch_array($userek)) { ?>
        <tr>
            <td><?php echo($datauser['id']); ?></td>
            <td><?php echo($datauser['nom_prenoms']); ?></td>
            <td><?php echo($datauser['email']); ?></td>
            <td><img src="../images/<?php echo ($datauser['photo'])?>" width="100" height="100"></td>
            <td><?php echo($datauser['date']); ?></td>
            <td><?php echo($datauser['role']); ?></td>
            <td><a onclick="return confirm('Etes vous sur...?')"; href="delete.php?code=<?php echo($datauser['id']); ?>">Supprimer</a></td>
        </tr>
        <?php } ?>
    </table>

  </div>
</div>
	</div>
	<!-- FIN ZONE LISTING DES USERS -->

	 <!-- MODIFICATION D'UN USER -->

    <div id="menu2" class="tab-pane fade">
		
		<form action="" method="post">
			<input type="text" name="code">
			<input type="submit" name="recherche" value="Rechercher">
		</form>
		<?php
			include '../connect.php';
				//---------- DISPLAY UPDATE FORM----------------------
			if(isset($_POST['recherche'])){
				$code = $_POST['code'];
				$query = mysqli_query($con, "SELECT * FROM users WHERE id = '$code'");
				$rows = mysqli_num_rows($query);
				if($rows!=0){
				while($users = mysqli_fetch_assoc($query)) {
			?>
    <div class="panel panel-default">
        <div class="panel-heading">
			<h3 class="panel-title">MODIFICATION DE L'UTILISATEUR N°<?php echo ($users['id']); ?> <span class="glyphicon glyphicon-pencil"></span></h3>
		</div>
		<div class="panel-body">
		<form role="form" method="post" action="" enctype="multipart/form-data">
			<input type = "hidden" name = "code" value = "<?php echo $code; ?>">		
			    <div class="row">
			    	<div class="col-xs-6 col-sm-6 col-md-6">
			    		<div class="form-group">
							<label for="">NOM PRENOMS</label>
							<input type="text" name="nompre" value="<?php echo ($users['nom_prenoms']); ?>" id="nom" class="form-control input-sm">
			    		</div>
			    	</div>
			    	<div class="col-xs-6 col-sm-6 col-md-6">
			    		<div class="form-group">
							<label for="">EMAIL</label>
			    			<input type="text" name="emailo" value="<?php echo ($users['email']); ?>" id="email" class="form-control input-sm" >
			    		</div>
			    	</div>
			    </div>
			    <div class="row">
			    	<div class="col-xs-6 col-sm-6 col-md-6">
			    		<div class="form-group">
							<label for="">Image</label>
							<input type="file" value="" name="photoo" id="image" class="form-control input-sm" >
							<img src="../images/<?php echo ($users['photo']); ?>" width="50" height="50">
			    		</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
			    		<div class="form-group">
						<label for="">MOT DE PASSE</label>
						<input type="password" name="passwordd" value="<?php echo ($users['password']); ?>" id="mdp" class="form-control input-sm">
			    		</div>
			        </div>
                </div>
                <div class="row">
			    	<div class="col-xs-6 col-sm-6 col-md-6">
			    		<div class="form-group">
						<label for="">DATE</label>
						<input type="text" name="dateo" value="<?php echo ($users['date']); ?>" id="date" class="form-control input-sm"  required>
			    		</div>
			    	</div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
			    		<div class="form-group">
						<label for="">ROLE</label>
						<input type="text" name="roleo" value="<?php echo ($users['role']); ?>" id="role" class="form-control input-sm"  required>
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
	$code = $_POST['code'];
	$login=$_POST['nompre'];
    $email=$_POST['emailo'];
    $nomphoto=$_FILES['photoo']['name'];
    $password= md5($_POST['passwordd']); //sha1() pour cripter
    $date = $_POST['dateo'];
	$role = $_POST['roleo'];
	
	if ($nomphoto=="") {
		$updatequery="UPDATE users SET nom_prenoms='$login', email='$email', password='$password', date='$date', role='$role' WHERE id='$code'";
		$update=mysqli_query($con, $updatequery) or die ('Erreur SQL !'.$updatequery.'<br/>'.mysqli_error($con));
		if ($update==1) {
			echo '<div class="alert alert-success"><strong>Modification effectuée avec succès !</strong></div>';
		}	
	}
	else {
		$fichierTemporaire=$_FILES['photoo']['tmp_name'];
		 move_uploaded_file($fichierTemporaire,'./images/'.$nomphoto);
		 $updatequery="UPDATE users SET nom_prenoms='$login', email='$email', photo='$nomphoto', password='$password', date='$date', role='$role' WHERE id='$code'";
		 $update=mysqli_query($con, $updatequery) or die ('Erreur SQL !'.$updatequery.'<br/>'.mysqli_error($con));
		 if ($update==1) {
			echo '<div class="alert alert-success"><strong>Modification effectuée avec succès !</strong></div>';
		}	
	}
}
  ?>
  </div>