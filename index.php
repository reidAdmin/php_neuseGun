<?php
include 'functions.php'; 

if (loggedin()) //check if the user is logged in, if it is, it will skip this page and jump to the 'memberLoggedIn.php' page.
{
header ("Location: memberLoggedIn.php");
exit();
}
?>

 <!doctype html> //add Kendalls code here. Code below is a reminder only not final!!
<html>
<head>
<meta charset="utf-8">
<title>Member Log In</title>
</head>
<body>
<form  action="login.php" method="post" enctype="multipart/form-data" name="form-login">
<input required placeholder="email" type="text" name="email"/>
<input required placeholder="password" type="password" name="password"/>
<label for="remember">Remember Me:</label>
<input type="checkbox" name="remember" value="yes">
<input type="submit" name="login" value="LOG IN"/>
</form>
</body>
</html>