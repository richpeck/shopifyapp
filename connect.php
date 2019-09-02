<?php
$servername = "localhost";
$username = "membler_testuser";
$password = "1i7*d0UN-qsr";
$db = "membler_shopify";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Connection Error: " . mysqli_connect_error());
}