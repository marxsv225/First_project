<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mon Blog</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <link rel="stylesheet" href="dist/css/mystyle.css">
    <link rel="stylesheet" href="dist/css/calculate.css">
    <!-- start favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--end favicon  -->

  <script type="text/javascript" src="dist/js/jquery2.js"></script>
  <script  src="dist/js/myjs.js"></script>
    <title>Document</title>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="images/VAKA MARCEL.png" id="icon" alt="User Icon" />
      <h3></h3>
    </div>

    <!-- Login Form -->
    <?php if (! empty($mesereur)) { ?>
      <div class="alert alert-danger">
        <strong><?php echo $mesereur; ?></strong> 
      </div> 
      <?php } ?>
    <form action="" method="post">
     <center>
      <div class=" row">        
        <div class="col-md-12">
            <input type="text" id="nomb1" class="fadeIn second" name="nom" placeholder="votre login">
        </div>
      </div>
    <div class="row">
      <div class="col-md-12">
        <input type="password" id="nomb1" class="fadeIn second" name="password" placeholder="votre mot de passe">
      </div>
    </div>
    <div class=" row">
    <div class="col-md-3 col-sm-3"></div>
      <div class="col-md-6 col-sm-6">
        <input class="" id="plus" type="submit" value="connexion" name="connexion">
      </div>
      <div class="col-md-3 col-sm-3"></div>
    </div>
    </center> 
    </form>
    
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="index.php">Accueil</a>
      <a class="underlineHover" href="enregistrement.php">Créer un compte</a>
      <a class="underlineHover" href="#">Mode de passe oublié ?</a>
    </div>

  </div>
</div> 



</body>
</html>