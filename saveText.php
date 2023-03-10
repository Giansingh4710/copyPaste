<?php
header("Access-Control-Allow-Origin: *");

ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<pre>";
var_dump($_POST);
echo "</pre>";

$fp = fopen("theText.txt", "w"); 
fwrite($fp,$_POST["theText"]);
fclose($fp); 
header("Location: ./index.html");
?>
