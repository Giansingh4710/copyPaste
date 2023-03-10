<?php
//header("Access-Control-Allow-Origin: *");

echo "<h1>Hello</h1>";
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<pre>";
var_dump($_POST);
echo "</pre>";

/* $fp = fopen("data.csv", "a"); */
/* fputcsv($fp, $line); # $line is an array of strings (array|string[]) */
/* fclose($fp); */
echo "The Data has been added to the database";

?>
