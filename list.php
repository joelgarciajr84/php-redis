<?php

require "connection.php";

echo "<h1>Redis - List Example - </h1>";

function setList($list, $value) {

	global $RedisJoel;

	$RedisJoel->lpush($list, $value);

}

$langs = array("php", "java", "c", "javascript", "python", "ruby");

foreach ($langs as $lang) {

	setList("Langs", $lang);
}

$Languages = $RedisJoel->lrange("Langs", 0, count($langs));

echo "Languages in list ";

print_r($Languages);

echo "<h2>Script Running now: </h2>";
highlight_file("list.php");
?>
<ul>

	<li><a href="hashes.php">Strings</a></li>
	<li><a href="hashes.php">Lists</a></li>
	<li><a href="hashes.php">Sets</a></li>
	<li><a href="hashes.php">Sorted Sets</a></li>
	<li><a href="hashes.php">Hashes</a></li>
	<li><a href="hashes.php">Keys</a></li>

</ul>