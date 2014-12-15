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
?>