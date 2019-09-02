<?php
$servername = "localhost";
$username = "user";
$password = "password";
$db = "database";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Connection Error: " . mysqli_connect_error());
}