<?php
require "connection.php";
//String Example

echo "<h1>Redis -String Example - </h1>";

$RedisJoel->set("Nome", "Joel Quenede Garcia de Assis");

echo "Name: " . $RedisJoel->get("Nome");

?>