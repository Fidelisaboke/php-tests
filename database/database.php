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
echo "Connected successfully.<br>";

/*You can point to a specific database during corrections as follows:
$servername = "localhost";
$username = "";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
*/

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

  // Running multiple queries (use $conn->multi_query($sql)):
  /*
  $sql = "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('John', 'Doe', 'john@example.com');";
  $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Mary', 'Moe', 'mary@example.com');";
  $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Julie', 'Dooley', 'julie@example.com')";
  
  if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  */

  
  /* Prepared statements - They are used to execute queries whereby the program fixed values in parameters
  defined in the sql statement

  // Prepare parameterized statement:
  $statement = $conn->prepare("INSERT INTO db_drug_dispense.tbl_patients 
  (patient_firstname, patient_surname, patient_address, patient_email, patient_phone)
  VALUES (?, ?, ?, ?, ?)");

  // Bind values to parameters
  $statement->bind_param("sssss", $patient_firstname, $patient_surname, $patient_address, 
  $patient_email, $patient_phone);

    // Possible values for the first parameter in $statement->bind_param:
    s - string (one 's' represents one string)
    d - double
    i - integer
    B - BLOB
    

  // Set values to the variables:
  $patient_firstname = "Jane";
  $patient_surname = "Janeson";
  $patient_address = "00100 - Nairobi, Kenya";
  $patient_email = "janeson002@gmail.com";
  $patient_phone = "+254712555555";

  // Execute the statement:
  if($statement->execute() === TRUE){
    echo "Data entered into table successfully";
  }else{
    echo "Error inserting data: "."$conn->error";
  }
  */

// Select rows form a table (check results on a web browser):
  $sql = "SELECT * FROM db_drug_dispense.tbl_patients";
  $result_set = $conn->query($sql);

  if($result_set->num_rows>0){
    $item_no = 1;
    // Fetch the rows of the table (fetched in forms of associative arrays):
      while($row = $result_set->fetch_assoc()){
        echo "Row no: ".$item_no."<br>";
        foreach($row as $key=>$value){
          echo $key."-> ".$value."<br>";
        }
        $item_no++;
      }
  } else{
    echo "No data present";
  }
  

// Close the database connection
$conn->close();
?>