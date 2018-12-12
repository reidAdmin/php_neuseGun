<?php session_start();
include "connect.php"; //connects to the database
if (isset($_POST['username'])){
	$username = $_POST['username'];
	$query="select * from confirm where username='$username'";
	$result   = mysql_query($query);
	$count=mysql_num_rows($result);
	// If the count is equal to one, we will send message other wise display an error message.
	if($count==1)
	{
		$rows=mysql_fetch_array($result);
		$pass  =  $rows['password'];//FETCHING PASS
		//echo "your pass is ::".($pass)."";
		$to = $rows['email'];
		//echo "your email is ::".$email;
		//Details for sending E-mail
		$from = "NEUSE Sport Shop";
		$url = "http://www.neusesportshop.com/";
		$body  =  "NEUSE password recovery Script
		-----------------------------------------------
		Url : $url;
		Your NEUSE email is : $to;
		Here is your NEUSE password  : $pass;
		Sincerely,
		NEUSE Sport Shop member";
		$from = "Your-email-address@domaindotcom";
		$subject = "NEUSE Sport Shop password recovered";
		$headers1 = "From: $from\n";
		$headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n";
		$headers1 .= "X-Priority: 1\r\n";
		$headers1 .= "X-MSMail-Priority: High\r\n";
		$headers1 .= "X-Mailer: Just My Server\r\n";
		$sentmail = mail ( $to, $subject, $body, $headers1 );
	} else {
	if ($_POST ['email'] != "") {
	echo "<span style="color: #ff0000;"> Sorry, your email cannot be found </span>";
		}
		}
	//If the message is sent successfully, display sucess message otherwise display an error message.
	if($sentmail==1)
	{
		echo "<span style='color: #ff0000;'> Your Password Has Been Sent To Your Email Address.</span>";
	}
		else
		{
		if($_POST['email']!="")
		echo "<span style='color: #ff0000;'> Cannot send password to your e-mail address.Problem with sending mail...</span>";
	}
}
?>

