<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mon Blog</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <link rel="stylesheet" href="dist/css/mystyle.css">
    <link rel="stylesheet" href="dist/css/default.css">
    <link rel="stylesheet" href="dist/css/component.css">
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="stylesheet" href="dist/css/style2.css">
    <link rel="stylesheet" href="dist/css/demo.css">
    <link rel="stylesheet" href="dist/css/pushbar.css">
    
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
    <SCript>
      window.onload=function() {
  document.forms[0].onsubmit=function() { // first form on page
    var prix = this.elements[0].value; // first field in form
    if (prix == "") {
      alert("Please enter a country");
      return false;
    }
    var coutarticle = this.elements[1].selectedIndex; // second field
    if (coutarticle < 1) { // your first option does not have a value 
      alert("Please select a state");
      return false;
    }
    return true; // allow submission
  }
}
    </SCript>

  <script type="text/javascript" src="dist/js/jquery2.js"></script>
	</head>
  <body>
    <div class=" moncontainer">
<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
        <div class="container-fluid monmenu">
          <div class="navbar-header">
            <a href="index.html" class="navbar-brand">
              <img src="images/VAKA MARCEL.png" alt="Blog de VAKA" class="img-responsive monlogo" width="150" height="100">
            </a>
            <!-- POUR LE MENU EN MODE MOBILE -->
          <header class="main-header">
            <nav>
              <div class="masthead active-element">
                <h6><a href=""></a></h6>
                <div id="menu-toggle" class="menu-toggle active-element navbar-toggle">
                  <div class="one"></div>
                  <div class="two"></div>
                  <div class="three"></div>
                </div>
              </div>
              <div class="main-nav-list active-element">
                <ul>
                  <li><a href="#"><img src="images/VAKA MARCEL.png" alt="Blog de VAKA" class="img-responsive monlogo" width="120" height="100"></a></li>
                  <li><a href="#">ACCUEIL</a></li>
                  <li><a href="#">QUI SUIS-JE</a></li>
                  <li><a href="#" class="mobile-hide">Blog</a></li>
                  <li><a href="#" class="active-link">MES REALISATIONS</a></li>
                  <li><a href="#">SERVICE</a></li>
                  <li><a href="#">BLOG</a></li>
                  <li><a href="#">FORUM</a></li>
                  <li><a href="#">CONTACT</a></li>
                  <li>
                    <a href="index.html">
                      <form class="navbar-form navbar-right" action="/action_page.php">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search" name="search">
                          <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                              <i class="glyphicon glyphicon-search"></i>
                            </button>
                          </div>
                        </div>
                        <a onclick="$('#myModal').modal('show');" class="point">
                          <span class="glyphicon glyphicon-shopping-cart" title="Achat"></span>
                        </a>
                      </form>
                    </a>
                  </li>
                </ul>
              </div>
            </nav>
          </header>
        <!-- FIN DU MENU EN MODE MOBILE -->
        
          
          <a class="navbar-brand" href="#"></a>
          </div>
          <div class="collapse navbar-collapse" id="example-navbar">
          <form class="navbar-form navbar-right" action="/action_page.php">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" name="search">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                </button>
              </div>
            </div>
            <div class="socioicone">

              <!-- icones des réseaux sociaux à mettre ici -->
              <!-- <img src="images/facebook.png" alt="" width="20" height="20">
              <img src="images/twitter.png" alt="" width="20" height="20"> -->

              <a onclick="$('#myModal').modal('show');" class="point">
                <span class="glyphicon glyphicon-shopping-cart" title="Achat"></span> Achat
              </a>
              <a href="enregistrement.php" class="connect" title="S'enregistrer">
                <span class="glyphicon glyphicon-lock"></span> 
              </a>
              <a href="connexion.php" class="connect" title="Se connecter">
                <span class="glyphicon glyphicon-user"></span> 
              </a>
            </div>
          </form>
          
          <!-- DEBUT DU MENU -->

          <aside data-pushbar-id="left" data-pushbar-direction="left" class="aside">
            <div class="title">
              <span data-pushbar-close class="close push_right"></span>
              <img src="images/VAKA MARCEL.png" alt="Blog de VAKA" class="img-responsive monlogo" width="130" height="100">
            </div>
            <ul class="menu">
              <li><a href="realisations/calculate.php"> REALISATIONS </a></li>
              <li><a href=""> BLOG </a></li>
              <li><a href=""> FORUM </a></li>
              <li><a href=""> CONTACT </a></li>
              <li> 
                <a href=""><img src="images/facebook.png" alt="" width="20" height="20"></a>
                <a href=""><img src="images/twitter.png" alt="" width="20" height="20"> </a>
              </li>
            </ul>
          </aside>
          <main class="pushbar_main_content">
            <div class="">
              <div class="card">
                <div class="card_content">
                  <div>
                    <button  class="btn btn-vaka-m">ACCUEIL</button>
                    <button  class="btn btn-vaka-m">QUI SUIS-JE</button>
                    <button  class="btn btn-vaka-m">MES SERVICES</button>
                    <button data-pushbar-target="left" class="btn btn-vaka-ma">
                      <span class="glyphicon glyphicon-menu-hamburger"></span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </main>

          <!-- FIN DU MENU -->

          </div>
        </div>
        
      </nav>