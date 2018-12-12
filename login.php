
<?php
include 'functions.php';  //include the functions.php 
 
if ($_POST['SUBMIT']) //check if the submit button is pressed
{
//get data
$EMAIL_PAH = $_POST['EMAIL_PAH'];
$PSWD_PAH = $_POST['PSWD_PAH'];
$REMEMBER = $_POST['REMEMBER'];
 
if ($EMAIL_PAH&&$PSWD_PAH) //check if the field email and password have values
{
$SUBMIT = mysql_query("SELECT * FROM users WHERE EMAIL='$EMAIL'"); //select from the table users on the database, where the email is equal to the email on the table users.
 
if (mysql_num_rows($LOGIN)) {
while ($row = mysql_fetch_assoc($LOGIN)) // this method will prevent SQL Injections. This will gather the password on the same row as the email.
{
$db_password = $row['password']; //this will store that password on a variable
if ($passwordPAH==$db_password) {   //this will check if the password inputted by the user is the same as the one stored on the database.
$LOGINOK = TRUE;
} else {
header("Location: ../index.php?failed=1");
exit();
}
 
if ($LOGIN==TRUE) //if it is the same password, script will continue.
{
if ($REMEMBER == "yes") //if the Remember me is checked, it will create a cookie.
{
setcookie("EMAIL", $EMAIL_PAH, time()+7600, "/", ".neusesportshop.com"); //here we are setting a cookie named email, with the email on the database that will last 48 hours and will be set on the neusesportshop.com domain. **optional parameter.
 
header("Location: ../memberLoggedIn.php");
exit();
}
else if ($REMEMBER=="") //if the Remember me isn't checked, it will create a session.
{
$_SESSION['EMAIL_PAH']=$EMAIL_PAH;
 
header("Location: ../memberLoggedIn.php");
exit();
}
}
}
} else {
header("Location: ../index.php?failed=1");
}
}
else
die("Please enter a email and password");
}

?>
 