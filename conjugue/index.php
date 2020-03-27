<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exercice de JavaScript</title>
<link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="mystyle.css">
<script type="text/javascript" src='myjs.js'></script>
</head>
<body>
<div class="container">
<form>
<div id="pge"><fieldset><legend>Conjugaison des verbes du 1er groupe</legend>
    <select name="" id="temps" class="form-control">
        <option selected disabled>veuillez selectionner le temps</option>
        <option value="present">Présent</option>
        <option value="future">Future</option>
        <option value="passe">Passé simple</option>
        <option value="imparfait">Imparfait</option>
    </select>
    <p>
        <label>
            Choix du verbe à conjuger
        </label>
        <input id="npt" type="text" value="" class="form-control" placeholder="Veuillez saisir le verbe à conjuguer">
        <input type="button" class="btn btn-succes" value="AFFICHER LA CONJUGAISON" onclick="conjugue()">
    </p>
     
  <!--  
   <p>Cocher le(s) temps du verbes à conjuguer :<br/>
        <form>
        <input id="present" type="checkbox" value="" name="present"/><label>Présent</label><br/>
        <input id="futur" type="checkbox" value="" name="futur"/><label>Futur</label><br/>
        <input id="passee" type="checkbox" value="" name="passee"/><label>Passée</label><br/>
        <input id="imparfait" type="checkbox" value="" name="imparfait"/><label>Imparfait</label><br/>
        </form>
    </p> -->
    </form>
    <div class="row">
        <div class="col-md-3 cont">
            <p class="conjuguer">PRESENT</p>
            <span id="rsp"></span>
        </div>
        <div class="col-md-3 cont">
            <p class="conjuguer">FUTUR</p>
            <span id="rsap"></span>
        </div>
        <div class="col-md-3 cont">
            <p class="conjuguer">PASSER SIMPLE</p>
            <span id="rsbp"></span>
        </div>
        <div class="col-md-3 cont">
            <p class="conjuguer">IMPARFAIT</p>
            <span id="rscp"></span>
        </div>
    </div>
</fieldset></div>
<script type="text/javascript">
...
</script>
</div>
</body>
</html>