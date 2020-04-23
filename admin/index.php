<?php include "partials/_menu.php" ?>
<?php
include "../connect.php";
$requete= 'SELECT * FROM articles ORDER BY id_art ASC';
$que = mysqli_query($con, $requete) or die ('Erreur SQL !'.$requete.'<br/>'.mysql_error());
 ?>
<br>

  <section id="breadcrumb">
    <div class="container">
      <ol class="breadcrumb">
        <li class="active">Dashboard</li>
      </ol>
    </div>
  </section>


<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
      <a href="index.html" class="list-group-item vaka-or main-color-bg"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        Dashboard <span class="badge">12</span>
      </a>
      <a href="pages.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages<span class="badge">25</span></a>
      <a href="posts.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> articles<span class="badge">126</span></a>
      <a href="users.html" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Utilisateurs <span class="badge">12</span></a>
    </div>

      </div>
      <div class="col-md-9">
          <div class="panel panel-default">
  <div class="panel-heading" style="background-color: #0f2f5b; color:#fff">
    <h3 class="panel-title">Resumé</h3>
  </div>
  <div class="panel-body">
   <div class="col-md-3">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 12</h2>
       <h4>Utilisateurs</h4>
     </div>
   </div>
   <div class="col-md-3">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 25</h2>
       <h4>Pages</h4>
     </div>
   </div>
   <div class="col-md-3">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>126</h2>
       <h4>Articles</h4>
     </div>
   </div>
   <div class="col-md-3">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 2129</h2>
       <h4>Visiteurs</h4>
     </div>
   </div>
  </div>
</div>
<!--Latest User-->
<div class="panel panel-default">
  <div class="panel-heading"style="background-color: #0f2f5b; color:#fff">
    <h3 class="panel-title">Articles récents</h3>
  </div>
  <div class="panel-body">
    <table class="table table-striped table-hover">
        <tr>
            <th>N°</th>
            <th>Catégorie</th>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Image</th>
            <th>Prix</th>
            <th>Auteur</th>
            <th>Date</th>
        </tr>
    <?php while ($data=mysqli_fetch_array($que)) { ?>
        <tr>
            <td><?php echo($data['id_art']); ?></td>
            <td><?php echo($data['categorie_art']); ?></td>
            <td><?php echo($data['titre_art']); ?></td>
            <td><?php echo($data['contenu_art']); ?></td>
            <td><img src="images/<?php echo ($data['image_art'])?>" width="100" height="100"></td>
            <td><?php echo($data['prix_art']); ?></td>
            <td><?php echo($data['auteur_art']); ?></td>
            <td><?php echo($data['date_pub_art']); ?></td>
        </tr>
        <?php } ?>
    </table>

  </div>
</div>

      </div>
    </div>
  </div>
</section>

<?php include "partials/_footer.php" ?>