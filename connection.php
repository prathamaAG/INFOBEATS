<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "connection sucssesfully";
}
?>
