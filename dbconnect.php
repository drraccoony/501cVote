<?php

include 'helpers/console_debug.php';

$server = "localhost";
$username = "501cUser";
$password = "MdXhpWUtluVEHGWK";
$dbname = "501cVote";

// Create connection
$conn = new mysqli($server, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{debug_to_console("Connected to DB!");}
?>