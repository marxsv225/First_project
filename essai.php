<div class="col-md-3 col-sm-5">
    <div class="media">
        <div class="media-body">
            <?php
                $servername = "localhost";
                $username = "vaka";
                $password = "VAKAadmin2020";
                $dbname = "monblog_db";

                // Create connection
                $con = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$con) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM articles";
                $result = $con->query($sql); ?>
            <label for="article">Treatment Type: </label>
            <select name="article" id="article" class="form-control">
                <option value="" <?php if(!isset($_POST['article']) || (isset($_POST['article']) && empty($_POST['article']))) { ?>selected<?php } ?>>--Select--</option>
                <?php 
                while($row = $result->fetch_assoc()) {
                ?>
                <option value="<?php echo $row['id_art']; ?>" <?php if(isset($_POST['article']) && $_POST['article'] == $row['titre_art']) { ?>selected<?php } ?>><?php echo $row['titre_art']; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
</div>
<?php
    // Check connection
    if(mysqli_connect_errno()) 
        echo "Failed to connect to MySQL: " . mysqli_connect_error();

        $fruits =   mysqli_real_escape_string($con, $_POST['id_art']);

        if(!empty($fruits)) {
            $sql1   =   "SELECT * FROM articles WHERE id_art LIKE '%$fruits%'";
            $result =   mysqli_query($con, $sql1);
            $count  =   mysqli_num_rows($result);
        }
        else
            $count  =   0; ?>

        <table class='table table-striped table-bordered responsive'>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Fruits</th>
                </tr>
            </thead>
        <?php
            if ($count > 0)  {
                while($row = mysqli_fetch_assoc($result)) {
        ?>
            <tbody data-link='row' class='rowlink'>
                <tr>
                    <td><a href='#'><?php echo $row['titre_art']; ?></a></td>
                    <td><?php echo $row['categorie_art']; ?></td>
                    <td><?php echo $row['prix_art']; ?></td>
                </tr>
            </tbody>
        <?php
                }
            }
            else
                echo "0 results";
        ?>
        </table>
        <?php mysqli_close($con); ?>

        <div class="form-group">
            <label for="prix" id="prix">Prix :</label>
            <input type="text" class="form-control" id="prix" name="prix"
             value="6">
        </div>
        <div class="form-group">
            <label for="nbre">Nombre d'examplaire :</label>
            <input type="number" class="form-control" id="nbre" name="nombre" onkeyUp="montant()">
        </div>
        <div class="form-group">
            <label for="prixtotal">Montant a payer :</label>
            <input type="text" class="form-control" id="prixtotal" name="prixtotal" value="">
        </div>
        <script>
             function montant(){
        var prix = document.getElementById("prix").value;
        var nbre = document.getElementById("nbre").value;
        var nbret = prix * nbre;
        document.getElementById("prixtotal").value = nbret; 
    }
        </script>