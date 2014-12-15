<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require "predis-1.0/autoload.php";
PredisAutoloader::register();

$redis = new PredisClient();

?>