<?php

require "connection.php";

echo "<h1>Redis - Sorted Sets - </h1>";

$consoles = array("Xbox One", "PlayStation 4", "Nintendo Wii");

foreach ($consoles as $console) {

	$RedisJoel->zadd("consoles", 0, $console);
}

$consoleslist = $RedisJoel->ZRANGEBYSCORE("consoles", 0, 1000);

foreach ($consoleslist as $output) {

	echo $output . "<br>";
}
echo "<h2>Script Running now: </h2>";
highlight_file("sorted-sets.php");
?>
<ul>

	<li><a href="strings.php">Strings</a></li>
	<li><a href="lists.php">Lists</a></li>
	<li><a href="sets.php">Sets</a></li>
	<li><a href="sorted-sets.php">Sorted Sets</a></li>
	<li><a href="hashes.php">Hashes</a></li>
	<li><a href="keys.php">Keys</a></li>

</ul>
