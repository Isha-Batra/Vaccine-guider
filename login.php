<?php
include("loginserv.php"); 
?>
 
<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="login.css" class="css">
<meta charset="UTF-8">
<title>Login</title>
</head>
<body>
<div class="login">
<h1 align="center">Administration Login</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
<input type="submit" value="Login" name="submit">
</div>
<span><?php echo $error; ?></span>
</body>
</html>