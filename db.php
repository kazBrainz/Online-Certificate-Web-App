<?php
	$servername = 'localhost';
	$username = 'tedprime_mybotu';
	$password = 'uytR13142sA@#';
	$dbname = "tedprime_botuana";
	$conn = mysqli_connect($servername, $username, $password, "$dbname");
	 if(!$conn){
	 	die('could not connect MySql server:' .mysql_error());
	 }
?>