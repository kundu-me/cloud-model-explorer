<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

	$name = isset($_GET["name"]) ? $_GET["name"] : null;
	$type = isset($_GET["type"]) ? $_GET["type"] : null;

	$command = escapeshellcmd("python3 ../../../db/getModel.py " . $name . " " . $type);
	$result = shell_exec($command);
  	echo $result;
?>
