<?php
	//connects to mongodb hosted at mlabs
	$uri = "mongodb://sirmiq:door5454@ds048319.mlab.com:48319/sports";
	$client = new MongoClient($uri);
	$db = $client->selectDB("sports");
	$teams = $db->team;
	$teamName = $_POST['teamEdit'];
	$collection = $teams->find();	
	foreach($edTeam as $doc)
	{
		if($doc["name"] == $teamName)
			$edTeam = $doc;
	}

	echo $edTeam["name"];
		
?>
	
