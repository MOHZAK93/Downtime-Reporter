<?php
$servername = "localhost";
$username = "id12085211_poripori";
$password = "#PoriPori93";
$dbname = "id12085211_second";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_POST['del_id'];
// sql to delete a record
$sql = "DELETE FROM records WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
 