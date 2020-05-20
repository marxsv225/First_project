<div class="row">
    <div class="col-md-12">
        <div class="profil">
            <div class="row">
                <div class="col-md-3 bord">
                    <?php echo ('<img src="images/'.$_SESSION['photo'].'" alt="Avatar" width="150" heigt="200" style="margin-top:15px"/>');?>
                    <h3><?php echo ($_SESSION['nom_prenoms']);?></h3><br>
                    <p class="grandtitre">Messagerie</p>
                    <hr>
                    <form action="" method="post" class="myform">
                        <div class="form-group">
                            <label for="exp">Expéditeur :</label>
                            <input type="text" class="form-control" name="expediteur" id="exp" value="<?php echo ($_SESSION['nom_prenoms']);?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="dest">Destinataire :</label>
                            <select name="destinataire" id="" class="form-control">
                                <option value="<?php echo ($users['id']);?>" readonly><?php echo ($users['nom_prenoms']);?></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Titre :</label>
                            <input type="text" class="form-control" id="title" name="titre" value="">
                        </div>
                        <div class="form-group">
                            <label for="message">Message :</label>
                            <textarea class="form-control" name="message" id="message"></textarea>
                        </div>
                        <input type="submit" class="form-control btn btn-vaka" value="Envoyer" name="validmessage">
                    </form>
                </div>
                <div class="col-md-9">
                    <div class="extra">

                    </div>
                    <div class ="libelle">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#info">Mes infos personnelles</a></li>
                            <li><a data-toggle="tab" href="#cmd">Mes commandes</a></li>
                            <li><a data-toggle="tab" href="#infocarte">Infos de la carte</a></li>
                            <li><a data-toggle="tab" href="#histo">Mes SMS <span class="glyphicon glyphicon-envelope"></span><span class="badge" style="background-color: red"><?php echo ($totalsmsnl['nbresms']);?></span></a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="info">
                            <div class="autout" style="text-align:left; margin-bottom:30px">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="nom">Nom et prénoms :</label>
                                        <input type="text" class="form-control" name="nom" id="nom" value="<?php echo ($usersinfo['nom_prenoms']);?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email :</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?php echo ($usersinfo['email']);?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Mot de passe :</label>
                                        <input type="password" class="form-control" id="pwd" name="password" value="<?php echo ($usersinfo['password']);?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="photo">Photo :</label>
                                        <input type="file" class="form-control" id="photo" name="photo">
                                    </div>
                                    <input type="submit" class="form-control btn btn-vaka" value="Enregistrer les modifications" name="validerinfo">
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="cmd">
                            <div class="autout"  style="text-align:left; margin-bottom:30px">
                                <table class="table table-striped table-hover">
                                    <tr>
                                        <th>N°</th>
                                        <th>Article</th>
                                        <th>Prix</th>
                                        <th>Quantité</th>
                                        <th>Prix total</th>
                                        <th>Date commande</th>
                                        <th>Action</th>
                                    </tr>
                                <?php while ($datacom=mysqli_fetch_array($querycom)) { 
                                     $idart = $datacom['id_art'];
                                     $art = "SELECT * FROM articles WHERE id_art='$idart'";
                                     $queryart = mysqli_query($con, $art);
                                     $colart = mysqli_fetch_array($queryart);
                                     $article = $colart['titre_art'];   
                                     $prix = $colart['prix_art'];   
                                     $prixvu = substr($prix, 0, 4);
                                ?>
                                   
                                    <tr>
                                        <td><?php echo ($datacom['id_com']);?></td>
                                        <td><?php echo ($article);?></td>
                                        <td><?php echo ($prixvu);?></td>
                                        <td><?php $quant=$datacom['quantite']; echo ($quant);?></td>
                                        <td><?php echo ($prixvu*$quant);?></td>
                                        <td><?php echo ($datacom['date_com']);?></td>
                                        <td><a href="" class="bouton-vaka"> Détails</a></td>
                                    </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="infocarte">
                            <div class="autout"  style="text-align:left; margin-bottom:30px">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="type">Type :</label>
                                        <input type="text" class="form-control" name="type" id="type" value="<?php echo ($affcard['type']);?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="num"> Numéro :</label>
                                        <input type="text" class="form-control" id="num" name="numero" value="<?php echo ($affcard['cnumber']);?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="cvc">CVC :</label>
                                        <input type="text" class="form-control" id="cvc" name="cvc" value="<?php echo ($affcard['cvc']);?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="dateexpire">Date expiration :</label>
                                        <input type="text" class="form-control" id="dateexpire" name="dateexpire" value="<?php echo ($affcard['date_expire']);?>">
                                    </div>
                                    <input type="submit" class="form-control btn btn-vaka" value="Enregistrer les modifications" name="soumettre">
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="histo">
                            <table class="table table-striped table-hover">
                                <tr>
                                    <th>Expéditeur</th>
                                    <th>Titre</th>
                                    <th>Date et heure d'envoi</th>
                                    <th>Action</th>
                                </tr>
                                <?php while ($sms = mysqli_fetch_array($mesnlquery)) { 
                                     $idexp = $sms['id_expediteur'];
                                     $exped = "SELECT * FROM users WHERE id='$idexp'";
                                     $queryexped = mysqli_query($con, $exped);
                                     $rowexp = mysqli_fetch_array($queryexped);
                                     $nomexp = $rowexp['nom_prenoms'];
                                ?>
                                <tr>
                                    <td><?php echo ($nomexp);?></td>
                                    <td><?php echo ($sms['titre']);?></td>
                                    <td><?php echo ($sms['date']);?></td>
                                    <td><a href="update.php?id=<?php echo ($sms['id_mes']);?>" class=""> <button class="btn btn-vaka" name="lire">Lire</button></a></td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Tutorials
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
    </ul>
  </div>
</div>