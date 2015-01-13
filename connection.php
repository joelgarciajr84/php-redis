<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$RedisJoel = new Redis();

//Connection to Redis
if (!$RedisJoel->connect('127.0.0.1', 6379)) {

	echo "Redis Disconnected - Please Verify<br>";
}

echo "<h2>Script Running now: </h2>";
//highlight_file("connection.php");
?>
