<?php 
$servername = "localhost";
$username = "root";
$password = "YES";  // Use the new password set above
$database = "ajarapura";

global $conn;
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
