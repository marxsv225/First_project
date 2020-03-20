<?php
    // on se connecte à notre base
    include("connect.php")
    ?>
    <html>
    <head>
    <title>Users</title>
    </head>
    <body>
    <?php
    // lancement de la requête (on impose aucune condition puisque l'on désire obtenir la liste complète des propriétaires
    $mareq = 'SELECT username, email FROM users';

    // on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
    $req = mysqli_query($con, $mareq) or die('Erreur SQL !<br />'.$mareq.'<br />'.mysql_error());

    // on va scanner tous les tuples un par un
    while ($data = mysqli_fetch_array($req)) {
    	// on affiche les résultats
    	echo ''.$data['username'].'<br />';
    	echo ''.$data['email'].'<br /><br />';
    }
    mysqli_free_result ($req);
    ?>
    </body>
    </html>