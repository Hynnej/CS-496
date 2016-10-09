<?php
	//connects to mongodb hosted at mlabs
	$uri = "mongodb://sirmiq:door5454@ds048319.mlab.com:48319/sports";
	$client = new MongoClient($uri);
	$db = $client->selectDB("sports");
	$teams = $db->team;
	$nam = $_POST['teamEdit'];
	$results = $teams->findOne(array('name' => $nam));

	foreach($results as $doc)
	{	
		echo $results['name'];
	}
		
?>
