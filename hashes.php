<?php
require "connection.php";

echo "<h1>Redis - Hashes - </h1>";

$gerente = array("Nome" => "Fulano de Tal", "Cargo" => "Gerente de T.I");
$developer = array("Nome" => "Beltrano de Tal", "Cargo" => "Developer");

$RedisJoel->HMSET("Funcionario: 10", $gerente);
$RedisJoel->HMSET("Funcionario: 20", $developer);

$gerente = $RedisJoel->HGETall("Funcionario: 10");
$developer = $RedisJoel->HGETall("Funcionario: 10");

print_r($gerente);

print_r($developer);

echo "<h2>Script Running now: </h2>";
highlight_file("hashes.php");
?>
<ul>

	<li><a href="strings.php">Strings</a></li>
	<li><a href="lists.php">Lists</a></li>
	<li><a href="sets.php">Sets</a></li>
	<li><a href="sorted-sets.php">Sorted Sets</a></li>
	<li><a href="hashes.php">Hashes</a></li>
	<li><a href="keys.php">Keys</a></li>

</ul>
