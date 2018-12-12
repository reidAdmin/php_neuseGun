<?php


include "db_edit_Profile.php"; 

 
$order = "UPDATE data_membership 
		SET name='$name',  
			address='$address', 

		WHERE  //specifies which data values or rows will be returned or displayed
		employees_number='$id'; 

mysql_query($order); 
header("location:edit.php"); 

?> 
