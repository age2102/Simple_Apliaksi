<?php
$con = mysqli_connect("localhost", "root", "", "db_imas");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Test connection
echo "Connected successfully";
?>
