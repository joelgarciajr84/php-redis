<?php
require "connection.php";

echo "<h1>Redis - Keys Example - </h1>";

$listaChaves = $RedisJoel->keys("*");

echo "Chaves no Redis <br/>";

foreach ($listaChaves as $chave) {

	echo "Chave: " . $chave . "<br/>";
}

echo "<h2>Script Running now: </h2>";
highlight_file("keys.php");
?>
<ul>

	<li><a href="hashes.php">Strings</a></li>
	<li><a href="hashes.php">Lists</a></li>
	<li><a href="hashes.php">Sets</a></li>
	<li><a href="hashes.php">Sorted Sets</a></li>
	<li><a href="hashes.php">Hashes</a></li>
	<li><a href="hashes.php">Keys</a></li>

</ul>