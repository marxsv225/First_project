<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conjugaison</title>
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="mystyle2.css">
</head>
<body>
    <!------ Include the above in your HEAD tag ---------->
    <img src="VAKA MARCEL.png" alt="Blog de VAKA" class="img-responsive monlogo" width="120" height="60">
<div class="container h-80">
<div class="row align-items-center h-100">
    <div class="col-3 mx-auto">
        <div class="text-center">
        <center> <h1>Conjugaison des verbes du 1er groupe</h1></center>
            <div class="s003">
            <form method="post" action="">
                <div class="inner-form">
                    <div class="input-field first-wrap">
                        <div class="input-select">
                            <select data-trigger="" name="temps">
                                <option placeholder="">Choisir un temps</option>
                                <option value="present">Présent</option>
                                <option value="futur">Futur Simple</option>
                                <option value="passe">Passé Simple</option>
                            </select>
                        </div>
                    </div>
                <div class="input-field second-wrap">
                    <input id="search" name="verbe" type="text" placeholder="Entrer le verbe du 1er groupe à conjuger " />
                </div>
                <div class="input-field third-wrap">
                    <input type="submit" class="btn-search" type="button" value="conjuguer" name="conjuger" style="padding-left:20px;">
                    
                </div>
                </div>
            </form><!-- /form -->
        </div>
    </div>
</div>
</div>
<script src="myjs.js"></script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: true,
        itemSelectText: ''
      });
    </script>
</body>
</html>