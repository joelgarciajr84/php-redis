<?php

require "connection.php";

echo "<h1>Redis - List Example - </h1>";

function setList($list, $value) {

	global $RedisJoel;

	$RedisJoel->lpush($list, $value);

}

$langs = array("php", "java", "c", "javascript", "python", "ruby", "c#");

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
  <li><a href="index.php">Index</a></li>
  <li><a href="string.php">Strings</a></li>
  <li><a href="list.php">Lists</a></li>
  <li><a href="sets.php">Sets</a></li>
  <li><a href="sorted-sets.php">Sorted Sets</a></li>
  <li><a href="hashes.php">Hashes</a></li>
  <li><a href="keys.php">Keys</a></li>

</ul>
