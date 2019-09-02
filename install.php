<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "6daf26c02ab47a8dd91b0964549daa80";
$scopes = "read_orders,write_products";
$redirect_uri = "https://membler.com/shopifyapp/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();