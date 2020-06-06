<?php
$servername = "localhost";
$databasename = "db_ark_pos";
$username = "";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $databasename);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>