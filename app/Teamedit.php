<?php
	//connects to mongodb hosted at mlabs
	$uri = "mongodb://sirmiq:door5454@ds048319.mlab.com:48319/sports";
	$client = new MongoClient($uri);
	$db = $client->selectDB("sports");
	$teams = $db->team;
	$teamName = $_POST['teamEdit'];
	$query = array('name' => $teamName);
	$edTeam = $teams->find($query);	
	var_dump($teamName);
	var_dump($query);
	var_dump($edTeam);
	
		
?>
	
