<?php include "menu.php" ?>
<div class="container men-admin">
  <h2 style="text-align:center">Mon tableau de bord</h2>
  <p></p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Accueil</a></li>
    <li><a data-toggle="tab" href="#menu1">Articles</a></li>
    <li><a data-toggle="tab" href="#menu2">Visiteurs</a></li>
    <li><a data-toggle="tab" href="#menu3">Autres...</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <div class="row">
      <div class="col-xs-6 col-md-6">
         <!-- con -->
      </div>
    </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div>
       1
        <ul class="list-group">
          <a href="#" class="list-group-item active">
            <br/><br/><i class="glyphicon glyphicon-home"></i> Home<br/><br/>
          </a>
          <a href="#" class="list-group-item ">
            <br/><br/><i class="glyphicon glyphicon-road"></i> Train<br/><br/>
          </a>
          <a href="#" class="list-group-item">
            <br/><br/><h4 class="glyphicon glyphicon-transfer"></h4> Trip<br/><br/>
          </a>
        </ul>

        <div class="bhoechie-tab-content active">
          <center>
            <h1 class="glyphicon glyphicon-wrench" style="font-size:14em;color:#00001a"></h1>
            <h2 style="margin-top: 0;color:#00001a">Welcome</h2>
            <h3 style="margin-top: 0;color:#00001a">Administrator HomePage</h3>
          </center>
        </div>
                <!-- train section -->
        <div class="bhoechie-tab-content">
          <center>
            <h1 class="glyphicon glyphicon-road" style="font-size:12em;color:#00001a"></h1>
            <h2 style="margin-top: 0;color:#00001a"><a href="" class="btn btn-sm btn-primary btn-block" role="button">Trains</a></h2>
            <h3 style="margin-top: 0;color:#00001a">Train Settings</h3>
          </center>
        </div>
    
                <!-- hotel search -->
        <div class="bhoechie-tab-content">
          <center>
            <h1 class="glyphicon glyphicon-transfer" style="font-size:12em;color:#00001a"></h1>
            <h2 style="margin-top: 0;color:#00001a"><a href="" class="btn btn-sm btn-primary btn-block" role="button">Trips</a></h2>
            <h3 style="margin-top: 0;color:#00001a">Trip Settings</h3>
           </center>
        </div>

      </div>
    </div>
    <div id="menu2" class="tab-pane fade">
      2
    </div>
    <div id="menu3" class="tab-pane fade">
      3
    </div>
  </div>
</div>
<?php include "footer.php" ?>