<?php

//Database Operations with PHP (From w3schools):
/*
Ensure that php.ini file is enabled and correct path to php in environment variables
before starting database operations.
XAMPP Control Panel was used to start Apache Web Server and MySQL Server
*/

// Create connection
$conn = new mysqli("localhost","root","");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>