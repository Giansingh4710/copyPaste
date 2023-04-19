<?php
header("Access-Control-Allow-Origin: *");

ini_set('display_errors', 1);
error_reporting(E_ALL);

$fileName = "theText.txt";

$myfile = fopen($fileName, "r");
if (filesize($fileName) == 0 ){
  fclose($myfile);
  die();
}
echo fread($myfile,filesize($fileName));
fclose($myfile);
?>
