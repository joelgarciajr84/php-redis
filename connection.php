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
<ul>
	<li><a href="hashes.php">Strings</a></li>
	<li><a href="hashes.php">Lists</a></li>
	<li><a href="hashes.php">Sets</a></li>
	<li><a href="hashes.php">Sorted Sets</a></li>
	<li><a href="hashes.php">Hashes</a></li>
	<li><a href="hashes.php">Keys</a></li>

</ul>
