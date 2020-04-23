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
				
					<form class="" method="post" action="modifville.php">
			
						<div class="form-group">
							<label for="username">VILLE </label>
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-road " aria-hidden="true"></span></span>
									<select name="ville" id="" class="form-control" required>
                                        <option selected disabled>Choisir la ville de départ</option>
                                        <?php while ($dville=mysqli_fetch_array($detailville)) {?>
                                            <option value="<?php echo ($dville['id_ville']); ?>"><?php echo ($dville['ville']); ?></option>
                                        <?php } ?>
                                    </select>
								</div>
						</div>
                        <input type="submit" value="MISE A JOUR" class="btn btn-info btn-large" name="update">
                    </form>
                 <?php  if($rows!=0){
                    while($user = mysqli_fetch_assoc($query)) {
                    $description = $user['description'];
                ?>                           
                    <form class="" method="post" action="">
						<div class="form-group">
							<label for="confirm">DATE DE VOYAGE</label>
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-pencil " aria-hidden="true"></span></span>
									<input type="text" class="form-control" name="ville" value="<?php echo  $description; ?>" required/>
								</div>
						</div>

                        <input type="submit" value="ENREGISTRER" class="btn btn-success btn-large" name="valider">
						
                    </form>
                    <?php
                        }
                            }
                    ?>   
    
				</div><!--main-center"-->
        </div><!--"-->
    </div><!---->
</body>
</html>