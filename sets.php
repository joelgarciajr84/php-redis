<?php
require "connection.php";

echo "<h1>Redis - Sets - </h1>";

$games = array("GTA5", "BF4", "FARCRY");

foreach ($games as $game) {

	$RedisJoel->sadd("Games", $game);
}

$games = $RedisJoel->smembers("Games");

foreach ($games as $output) {

	echo $output . "<br/>";
}
echo "<h2>Script Running now: </h2>";
highlight_file("sets.php");
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
