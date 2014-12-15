<?php
require "connection.php";

$games = array("GTA5", "BF4", "FARCRY");

foreach ($games as $game) {

	$RedisJoel->sadd("Games", $game);
}

$games = $RedisJoel->smembers("Games");

var_dump($games);

?>