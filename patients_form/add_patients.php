<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <center>
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_drug_dispense";

        // Create database connection
        $conn = new mysqli($servername,
            $username, $password, $dbname);

        // Check and confirm the connection
        if ($conn->connect_error) {
            die("Connection failed: "
                . $conn->connect_error);
        } else{
            echo "Connected to ".$dbname." successfully";
        }


        // Preparing a statement to insert the data:
        $sql = "INSERT INTO tbl_patients (patient_ssn, patient_firstname, patient_surname, patient_address, patient_email, patient_phone)
        VALUES (?, ?, ?, ?, ?, ?)"; // The sql parametized statement
        $statement = $conn->prepare($sql); // prepare the sql statement

        // Bind values to parameters:
        $statement->bind_param("isssss", $patient_ssn, $patient_firstname, $patient_surname, $patient_address, $patient_email, $patient_phone);

        // Obtain values from the input fields of the form using $_POST[]:
        $patient_ssn = $_POST['patient_ssn'];
        $patient_firstname = $_POST['patient_firstname'];
        $patient_surname = $_POST['patient_surname'];
        $patient_address = $_POST['patient_address'];
        $patient_email = $_POST['patient_email'];
        $patient_phone = $_POST['patient_phone'];

        // Run the statement:
        if($statement->execute()=== TRUE){
            echo "<h2>Data entered into table successfully!<h2>";

            // Insert HTML line breaks before all newlines in a string
            echo nl2br("\n$patient_ssn\n $patient_firstname\n $patient_surname\n $patient_address\n$patient_email\n $patient_phone");
        } else{
            // Print an error message if data is not inserted
            echo "Error in inserting the data: ".$conn->error;
        }

        ?>
    </center>
</body>
</html>




