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
                            <input type="text" class="form-control" name="expediteur" id="exp" value="<?php echo ($_SESSION['nom_prenoms']);?>">
                        </div>
                        <div class="form-group">
                            <label for="dest">Destinataire :</label>
                            <select name="destinataire" class="form-control" id="dest">
                                <option value="<?php echo ($users['id']);?>"><?php echo ($users['nom_prenoms']);?></option>
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
                    <h3>Messages</h3><hr>
                     <!-- Left-aligned media object -->
                     <?php while ($rowmessage = mysqli_fetch_array($mesnlquery)) {?>
                     <h6><?php echo ($rowmessage['date']);?></h6>
                    <div class="media">
                        <div class="" style ="padding: 20px; text-align: left">
                            <div class="media-left">
                                <img src="../admin/images/avatar.png" class="media-object" style="width:60px; border-radius:50px">
                            </div>
                            <div class="media-body" style="background-color: #0f2f5b; color: #fff; border-radius: 20px; padding:20px 20px 0 20px;">
                                <h4 class="media-heading"><?php echo ($rowmessage['titre']);?></h4>
                                <p><?php echo ($rowmessage['message']);?></p>
                            </div>
                        </div>
                    </div>
                    <?php }?> 
                    <!-- Right-aligned media object -->
                    <?php while ($reponse = mysqli_fetch_array($messluquery)) {?>
                    <h6><?php echo ($reponse['date']);?></h6>
                    <div class="media">
                        <div class="" style ="padding: 20px; text-align: right">
                            <div class="media-body oui" style="background-color: #d25807; color: #0f2f5b; border-radius: 20px; padding:20px 20px 0 0;">
                                <h4 class="media-heading"><?php echo ($reponse['titre']);?></h4>
                                <p><?php echo ($reponse['message']);?></p>
                            </div>
                            <div class="media-right">
                                <img src="../admin/images/avatar.png" class="media-object" style="width:60px; border-radius:50px">
                            </div>
                        </div>
                    </div>
                    <?php }?> 

                </div>
            </div>
        </div>
    </div>
</div>