<?php

	function getConnectionURI($db) {
		$host = "127.0.0.1";
		$port = "27017";
		$username = "admin";
		$password = "adminUser123";
		$connectionURI = "mongodb://". $username . ":" . $password . "@" . $host . ":" . $port . "/" . $db;
		return $connectionURI;
	}

	function getConnection($db) {
		
		$connection = new MongoDB\Driver\Manager(getConnectionURI($db));
		return $connection;
	}	
?>