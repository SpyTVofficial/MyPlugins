<?php

$servername = "localhost";
$username = "accounts";
$password = "123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$title = "MyPlugins Shop | "

?>