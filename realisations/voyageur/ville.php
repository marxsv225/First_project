<?php 
include "config/connexion.php";

//requete pour afficher la donnees de la table ville dans la selection ville de depart du formulaire
$detVille= 'SELECT * FROM ville ORDER BY id_ville ASC';
$detailville = mysqli_query($connect, $detVille) or die ('Erreur SQL !'.$detVille.'<br/>'.mysqli_error($connect));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dist/css/mystyle.css">
    <link rel="stylesheet" href="dist/css/bootstrap.css">
</head>
<body>
<img src="VAKA MARCEL.png" alt="VAKA" class="img-responsive monlogo" width="130" height="100">
    <div class="container fond">
			<div class="main">
            <h5 class="titre">MODIFICATION D'UNE VILLE</h5>
		        <div class="main-center">
				
					<form class="" method="post" action="">
			
						<div class="form-group">
							<label for="username">VILLE </label>
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-road " aria-hidden="true"></span></span>
									<select name="ville" id="" class="form-control" >
                                        <option selected disabled>Choisir la ville de départ</option>
                                        <?php while ($dville=mysqli_fetch_array($detailville)) {?>
                                            <option value="<?php echo ($dville['id_ville']); ?>"><?php echo ($dville['ville']); ?></option>
                                        <?php } ?>
                                    </select>
								</div>
						</div>
                        <input type="submit" value="MISE A JOUR" class="btn btn-info btn-large" name="update">
                    </form>
                    <?php if (! empty($message)) { ?>
                            <div class="alert alert-success">
                                <strong><?php echo $message; ?></strong> 
                            </div> 
                            <?php } ?>
                 <?php  
                 if (isset($_POST['update'])) {
                    $id=$_POST['ville'];
                    $query = mysqli_query($connect, "SELECT * FROM ville WHERE id_ville = '$id'");
                    $rows = mysqli_num_rows($query);
                    if($rows!=0){
                    while($user = mysqli_fetch_assoc($query)) {
                    $description = $user['description'];
                ?>                           
                    <form class="" method="post" action="">
						<div class="form-group">
							<label for="confirm">DESCRIPTION</label>
								<div class="input-group">
                                    <input type = "hidden" name = "id" value = "<?php echo $id; ?>">
									<span class="input-group-addon"><span class="glyphicon glyphicon-pencil " aria-hidden="true"></span></span>
									<input type="text" class="form-control" name="description" value="<?php echo  $description; ?>" required/>
								</div>
						</div>

                        <input type="submit" value="ENREGISTRER" class="btn btn-success btn-large" name="valider">
						
                    </form>
                    <?php
                        }
                            }
                        }

                        //-----------UPDATE ACTION ----------------------------
                        if(isset($_POST['valider'])){
                            $id = $_POST['id'];
                            $description = $_POST['description'];
                            // Check if field doesn't contain only white spaces
                            $UpdateQuery = "UPDATE ville SET description ='$description'  WHERE id_ville='$id'";
                            $miseajour = mysqli_query($connect, $UpdateQuery) or die ('Erreur SQL !'.$UpdateQuery.'<br/>'.mysqli_error($connect));
                            // echo '<script language="Javascript">';
                            // echo 'document.location.replace("./ville.php")'; // -->
                            // echo ' </script>';
                           $message="Modification effectuée avec succès !";
                            mysqli_close($connect);
                        }
                    ?>   
    
				</div><!--main-center"-->
        </div><!--"-->
    </div><!---->
</body>
</html>