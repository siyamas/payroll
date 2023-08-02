<?php
	$conn = new mysqli('localhost', 'root', '0yHOspaDxrhaOLdM', 'blinx_payroll');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>