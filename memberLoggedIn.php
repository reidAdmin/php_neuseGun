<?php
include 'functions.php'; //include function.php - very important
 
if (!loggedin()) // check if the user is logged in, but if it isn't, it will redirect to the Login Form page. 
{
header ("Location: index.php");
exit();
}
?>

 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Member Logged In</title>
</head>
<body>

<div>Welcome - <?php if (isset($_SESSION['email'])){ echo $_SESSION['email'];}else if (isset($_COOKIE['email'])){ echo $_COOKIE['username'];}?></div> // code that will show the member's email on the screen.
<div><a href="logout.php">LOG OUT</a></div> //this is the Logout Button.

</body>
</html>