<?php
	//connects to mongodb hosted at mlabs
	$uri = "mongodb://sirmiq:door5454@ds048319.mlab.com:48319/sports";
	$client = new MongoClient($uri);
	$db = $client->selectDB("sports");
	$teams = $db->team;
	$teamName = $_POST['teamEdit'];
	$edTeam = $teams->find(array('name' => $teamName));	
	echo $teamName . ' with find ' . $edTeam["name"] . ' ' .  $_POST['teamEdit'];
?>
