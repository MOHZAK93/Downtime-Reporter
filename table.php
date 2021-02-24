<?php
$servername = "localhost";
$username = "id14673974_poripori";
$password = ")]iRRwMWF({1EuVS";
$dbname = "id14673974_zipsim";
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE records (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name TEXT(100) NOT NULL,
role TEXT(100) NOT NULL,
nest TEXT(100) NOT NULL,
comments TEXT(500) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>