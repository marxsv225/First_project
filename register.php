<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php include("connect.php") ?>  
<div class="form">
<h1>Registration</h1>
<form name="registration" action="insert.php" method="post">
 <div>
    <input type="text" name="username" placeholder="Username" required />
</div>
<div>
    <input type="email" name="email" placeholder="Email" required />
</div>
<div>
    <input type="password" name="password" placeholder="Password" required />
</div>
<div>
<input type="submit" name="submit" value="Register" />
</div>
</form>
</div>
</body>
</html>