<?php
require "connection.php";

$listaChaves = $RedisJoel->keys("*");

echo "Chaves no Redis <br/>";

foreach ($listaChaves as $chave) {

	echo "Chave: " . $chave . "<br/>";
}

?>