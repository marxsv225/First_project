<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/css/mystyle.css">
    <title>Document</title>
</head>
<body>
<img src="VAKA MARCEL.png" alt="VAKA" class="img-responsive monlogo" width="130" height="60">
    <center>
        <h1>LE TICKET DU CLIENT</h1>
    </center>
<div class="ticket">
  <div class="stub">
    <div class="top">
      <span class="admit"><?php echo ($compagny) ?><br></span>
      <span class="line"></span>
      <span class="num">
        Nbre places : 
        <span><?php echo ($nbretotal['nbre']) ?></span>
      </span>
    </div>
    <div class="number"><?php echo ($card['id_client']) ?></div>
    <div class="invite">
        <?php echo ($card['nom_prenoms']) ?>
    </div>
  </div>
  <div class="check">
      <div class="bon"> 
          La direction de <?php echo ($compagny) ?> souhaite un bon voyage à
      </div> 
    <div class="big">
        <?php echo ($card['nom_prenoms']) ?>
    </div>
    <div class="number">#<?php echo ($card['id_client']) ?></div>
    <div class="info">
      <section>
        <div class="title">Date</div>
        <div><?php echo ($card['date_voyage']) ?></div>
      </section>
      <section>
        <div class="title">V. Départ</div>
        <div><?php echo ($villed) ?></div>
      </section>
      <section>
        <div class="title">V. Arrivée</div>
        <div><?php echo ($villeari) ?></div>
      </section>
    </div>
  </div>
</div>
<!-- <form>
  <input id="impression" name="impression" type="button" onclick="imprimer_page()" value="Imprimer cette page" />
</form> -->
    <CEnter>
        <br>
        <a href="index.php" style="color:rgb(145, 142, 142)">Accueil</a> - 
        <a href="liste.php" style="color:rgb(145, 142, 142)">Liste des clients</a>
    </CEnter>

    <script type="text/javascript">
function imprimer_page(){
  window.print();
}
</script>
</body>
</html>