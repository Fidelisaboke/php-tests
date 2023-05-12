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
echo "Connected successfully.\n";

// Create database
/*
if ($conn->query("CREATE DATABASE db_drug_dispense") === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
*/

// Create table tbl_patients in db_drug_dispense
/*
$sql = "CREATE TABLE db_drug_dispense.tbl_patients (
  patient_ssn INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  patient_firstname VARCHAR(30) NOT NULL,
  patient_surname VARCHAR(30) NOT NULL,
  patient_address VARCHAR(60) NOT NULL,
  patient_email VARCHAR(50) NOT NULL,
  patient_phone VARCHAR(13) NOT NULL,
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  
  if ($conn->query($sql) === TRUE) {
    echo "Table tbl_patients created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
  */

  // Inserting data into the table
  /*
  $sql = "INSERT INTO db_drug_dispense.tbl_patients 
  (patient_firstname, patient_surname, patient_address, patient_email, patient_phone)
  VALUES ('Doe', 'Dawson', '00200-Nairobi, Kenya', 'doe002@gmail.com', '+2547123456789')";

  if ($conn->query($sql) === TRUE) {
    echo "Row inserted into tbl_patients";
  } else {
    echo "Error inserting record into the table: ".$conn->error;
  }
  */

// Close the database connection
$conn->close();
?>