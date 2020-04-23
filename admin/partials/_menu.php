<?php include "../securite.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mon Blog</title>
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../dist/css/bootstrap.css">
    <link rel="stylesheet" href="adminstyle.css">
    
    <!-- start favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="../images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--end favicon  -->
  <script type="text/javascript" src="../../dist/js/jquery2.js"></script>
	</head>
  <body>
  <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="../images/vaka marcel.png" alt="VAKA MARCEL" width="130" height="60"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="index.php">Dashboard</a></li>
            <li><a href="articles.php">Articles</a></li>
            <li><a href="#">Visiteurs</a></li>
            <li><a href="#">Autres</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Welcome, [<?php echo ((isset($_SESSION['PROFILE']))?($_SESSION['nom_prenoms']):"");?>]</a></li>
            <li><a href="../logout.php">Logout</a></li>
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
          <center><h1> Tableau de bord <small>Gestionnaire du blog</small></h1></center>
          </div>
          <div class="col-md-2">
           <div class="dropdown">
            <a href="../index.php" target="_blank"><button class="btn btn-primary dropdown-toggle" type="button">Le site</button></a>
            <!-- <span class="caret"></span></button> </a>-->
            <!-- <ul class="dropdown-menu">
                <li><a href="#">Add Pages</a></li>
                <li><a href="#">Add Posts</a></li>
                <li><a href="#">Add Users</a></li>
            </ul> -->
            </div> 
          </div>
        </div>
      </div>
    </header>