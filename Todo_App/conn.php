<?php
	$conn = mysqli_connect("localhost", "root", "Root@123", "todo");
	
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>
