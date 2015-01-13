<?php
require "connection.php";
//String Example

echo "<h1>Redis -String Example - </h1>";

$RedisJoel->set("Nome", "Joel Quenede Garcia de Assis");

echo "Name: " . $RedisJoel->get("Nome");

echo "<h2>Script Running now: </h2>";
highlight_file("string.php");
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
