<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="form_connect.php" method="post">
    <div>
        <label for="pseudo">Pseudo :</label>
        <input type="text" name="login">
    </div><br>
    <div>
        <label for="email">Email :</label>
        <input type="email" name="email">
    </div><br>
    <div>
        <label for="password">Password :</label>
        <input type="password" name="password">
    </div><br>
    <div>
        <label for="conf_password">Confirmation password :</label>
        <input type="password" name="conf_password">
    </div><br>
    <input type="submit" name="valider" value="ENREGISTRER">
   </form>
</body>
</html>