<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTE</title>
    <link rel="stylesheet" href="dist/css/mystyle.css">
    <link rel="stylesheet" href="dist/css/bootstrap.css">
</head>
<body>
<img src="VAKA MARCEL.png" alt="VAKA" class="img-responsive monlogo" width="130" height="100">
    <div class="panel panel-default">
    <div class="panel-heading"style="background-color: #0f2f5b; color:#fff">
        <h3 class="panel-title">LISTE DES CLIENTS</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-hover">
            <tr>
                <th>N° D'ORDRE</th>
                <th>NOM ET PRENOMS</th>
                <th>COMPAGNIE DE TRANS</th>
                <th>VILLE DEPART</th>
                <th>VILLE ARRIVEE</th>
                <th>DATE / HEURE DEPART</th>
                <th>ACTION</th>
            </tr>
        <?php while ($vclient=mysqli_fetch_array($reqclient)) {
            //script pour afficher le nom de la compagnie dont l'id se trouve dans la table client
            $compagnyid = $vclient['compagnie'];
            $compagny = '';
            $getcompagny = mysqli_query($connect, "SELECT * FROM compagnies WHERE id='$compagnyid'");
            while ($comp=mysqli_fetch_array($getcompagny)) {
                $compagny = $comp['nom'];
            }

            //script pour afficher le nom de la ville de depart dont l'id se trouve dans la table client
            $villedepid = $vclient['ville_depart'];
            $getvilledep = mysqli_query($connect, "SELECT * FROM ville WHERE id_ville = '$villedepid'");
            while ($ville=mysqli_fetch_array($getvilledep)) {
                $villed=$ville['ville'];
            }

            //script pour afficher le nom de la ville d'arrivée dont l'id se trouve dans la table client
            $villearrivid = $vclient['ville_arrivee'];
            $getvillearr = mysqli_query($connect, "SELECT * FROM ville WHERE id_ville = '$villearrivid'");
            while ($villear=mysqli_fetch_array($getvillearr)) {
                $villeari=$villear['ville'];
            }
             ?>
             
            <tr>
                <td><?php echo($vclient['id_client']); ?></td>
                <td><?php echo($vclient['nom_prenoms']); ?></td>
                <td><?php echo($compagny); ?></td>
                <td><?php echo($villed); ?></td>
                <td><?php echo( $villeari); ?></td>
                <td><?php echo($vclient['date_voyage']." / ". $vclient['heure_voyage']); ?></td>
                <td><a href="card.php?code=<?php echo($vclient['id_client']); ?>">TICKET</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    </div>
    <CEnter>
    <a href="index.php">ACCUEIL</a> - 
    <a href="registration.php">NOUVEL ENREGISTREMENT</a> - 
    <a href="agence.php">NOS GARES</a>
    </CEnter>
</body>
</html>