<?php

	include "../../../db/dbAccess.php";
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	
	// Takes raw data from the request
	$json_input = file_get_contents('php://input');

	// Converts it into a PHP object
	$json_obj = json_decode($json_input);
	$name = $json_obj->name;
	$data = $json_obj->data;
	
	$result = setModel($name, $data);
	echo ($result);
?>