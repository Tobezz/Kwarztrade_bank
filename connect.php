<?php
$servername = "localhost";
// Enter your MySQL username below(default=root)
$username = "holberton_user";
// Enter your MySQL password below
$password = "projectcorrection280hbtn";
$dbname = "kwarzbanking_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
    die($conn->connect_error);
}
?>
