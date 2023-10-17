<?php
$host = "prognet.localnet";
$username = "2205551005";
$password = "2205551005";
$database = "db_2205551005";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>