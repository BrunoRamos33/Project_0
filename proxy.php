<?php
// Set the CORS headers to allow cross-origin requests
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Retrieve the remote JSON data
// $jsonData = file_get_contents("https://rest.anube.es/rallyrest/default/api/participants/5007.json?rally=rally5007&port=auto");
$jsonData = file_get_contents("debugdata_2.json");

// Save the JSON data to a file
// $file = fopen("debugdata_2.json", "w");
// fwrite($file, $jsonData);
// fclose($file);

// Serve the JSON data
echo $jsonData;
?>
