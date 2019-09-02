<?php

// Get our helper functions
require_once("inc/functions.php");

// Set variables for our request
$shop = "test-app-store55";
$token = "577ef40886af193763e2c78aa6c5a4b6";
$query = array(
	"Content-type" => "application/json" // Tell Shopify that we're expecting a response in JSON format
);


// Create New Smart Collection

$payload = array (            
	"smart_collection" => array(
		"title"  => "Remedies Containing ingredient",
		"handle" => "herbs-supplements",
		"rules"  =>	array(
			array(
				"column" => "title",
				"relation" => "equals",
				"condition" => "test" 
			)
		)
	)               
);

// Run API call to modify the product
$new_collection = shopify_call($token, $shop,  "/admin/api/2019-07/smart_collections.json", json_encode($payload), 'POST');

// Storage response
$new_collection_response = $new_collection['response'];

echo $new_collection_response;
