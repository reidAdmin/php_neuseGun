<?php session_start(); //start session
 
//destroy session
session_destroy();
 
//unset cookies
setcookie("email", $emailPAH, time()-7600, "/", ".neusesportshop.com");
 
header ("Location: ../../index.php");
?>