<?php
$servername = "localhost";
$username = "membler_admin";
$password = "L@T3bz%ql";
$db = "membler_shopify";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Connection Error: " . mysqli_connect_error());
}