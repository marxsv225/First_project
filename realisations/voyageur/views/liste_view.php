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
            </tr>
        <?php while ($vclient=mysqli_fetch_array($reqclient)) { ?>
            <tr>
                <td><?php echo($vclient['id_client']); ?></td>
                <td><?php echo($vclient['nom_prenoms']); ?></td>
                <td><?php echo($vclient['compagnie']); ?></td>
                <td><?php echo($vclient['ville_depart']); ?></td>
                <td><?php echo($vclient['ville_arrivee']); ?></td>
                <td><?php echo($vclient['date_v']." / ". $vclient['heure_v']); ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    </div>
    <CEnter>
    <a href="index.php">ACCUEIL</a> - 
    <a href="registration.php">NOUVEL ENREGISTREMENT</a>
    </CEnter>
</body>
</html>