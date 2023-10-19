<?php
	$conn = mysqli_connect('localhost', 'root', '', 'gallery',3307);
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>