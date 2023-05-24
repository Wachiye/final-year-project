<?php
	// Database configuration 
	$dbHost     = "localhost"; 
	$dbUsername = "root"; 
	$dbPassword = "4Sirah@123"; 
	$dbName     = "regestration"; 
	 
	// Create database connection 
	$con =  new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
	 
	// Check connection 
	if ($con->connect_error) { 
	    die("Connection failed: " . $con->connect_error); 
	}
