<?php
$servername = "localhost";
$username = "root";
$password = "";
$databse  ="singaporejob";
$conn = new mysqli($servername, $username, $password,$databse);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>