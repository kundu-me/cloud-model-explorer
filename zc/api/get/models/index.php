<?php

	include "../../../db/dbAccess.php";
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

	$result = getModels();
	echo ($result);
?>