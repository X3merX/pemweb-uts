<?php
$servername = "localhost";
$username = "ziaq";
$password = "nolepngoding";
$database = "daffa";

// Create connection
$koneksi =  mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
// echo "Connected successfully";
