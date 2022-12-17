<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/

// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("localhost","root","root","allphptricks");
	if (mysqli_connect_errno()){
		echo "Neuspesno povezaivanje sa bazom: " . mysqli_connect_error();
		die();
		}
?>