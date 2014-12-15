<?php
require "connection.php";

echo "<h1>Redis - Keys Example - </h1>";

$listaChaves = $RedisJoel->keys("*");

echo "Chaves no Redis <br/>";

foreach ($listaChaves as $chave) {

	echo "Chave: " . $chave . "<br/>";
}

?>