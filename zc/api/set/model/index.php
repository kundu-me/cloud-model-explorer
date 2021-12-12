<?php

	include "../../../db/dbAccess.php";
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	
	// Takes raw data from the request
	$json_input = file_get_contents('php://input');

	// Converts it into a PHP object
	$json_obj = json_decode($json_input);
	$name = $json_obj->name;
	$components = json_encode($json_obj->components);
	$ports = json_encode($json_obj->ports);
	$connections = json_encode($json_obj->connections);
	$portInterfaces = json_encode($json_obj->portInterfaces);
	$requirementLinks = json_encode($json_obj->requirementLinks);

	$command = escapeshellcmd("python3 ../../../db/setModel.py " . $name . " " . $components . " " . $ports . " " . $connections . " " . $portInterfaces . " " . $requirementLinks);
	$result = shell_exec($command);
        echo $result;

?>
