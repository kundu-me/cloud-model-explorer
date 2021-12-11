<?php
	
	include "../../../db/connectionMgr.php";
	
	function getDB() {
		$db = (object) [];
		$db->name = "test1";
		$db->collectionName = "sampleCollection4";
		$db->collection = "test1.sampleCollection4";
		return $db;
	}
	
	function setModel($name, $data) {
		
		$db = getDB();

		$result = (object)[];
		$result->success = true;
		$result->data = [];
		$result->status = (object)[];
		
		if($name == null || $data == null) {
			$result->success = false;
			return json_encode($result);
		}
		
		$mongo = getConnection($db->name);

		$document = (object)[];
		$document->title = $name;
		$document->data = $data;

		$bulk = new MongoDB\Driver\BulkWrite;
		$_id = $bulk->insert($document);
		array_push($result->data, $_id);
		$result->status = $mongo->executeBulkWrite($db->collection, $bulk);
		
		return json_encode($result);
	}
	
	function getModels() {
		
		$db = getDB();

		$result = (object)[];
		$result->success = true;
		$result->data = [];

		$mongo = getConnection($db->name);
		$filter = [];
		$options = [];
		$query = new \MongoDB\Driver\Query($filter, $options);
		$rows = $mongo->executeQuery($db->collection, $query);

		$data = [];
		foreach ($rows as $document) {
		  array_push($data, $document->title);
		}
		
		$result->data = $data;
		return json_encode($result);
	}
	
	function getModel($name, $type) {
		
		$db = getDB();

		$result = (object)[];
		$result->success = true;
		$result->data = [];
		
		if($name == null) {
			$result->success = false;
			return json_encode($result);
		}
		
		$mongo = getConnection($db->name);
		$filter = ["title" => $name];
		$options = [];
		$query = new \MongoDB\Driver\Query($filter, $options);
		$rows = $mongo->executeQuery($db->collection, $query);

		$data = [];
		foreach ($rows as $document) {
			$documentData = json_decode($document->data, true);
			if($type == null) {
				array_push($data, $documentData);
			}
			else if(array_key_exists ($type, $documentData)) {
				array_push($data, $documentData[$type]);
			}
		}
		
		$result->data = $data[0];
		return json_encode($result);
	}
?>