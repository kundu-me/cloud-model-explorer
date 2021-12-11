<?php

	function getConnectionURI($db) {
		$host = "labspdbg00ah.mathworks.com";
		$port = "27017";
		$username = "u123";
		$password = "u123";
		$connectionURI = "mongodb://". $username . ":" . $password . "@" . $host . ":" . $port . "/" . $db;
		return $connectionURI;
	}

	function getConnection($db) {
		
		$connection = new MongoDB\Driver\Manager(getConnectionURI($db));
		return $connection;
	}	
?>