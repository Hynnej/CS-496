<?php 

	$uri = "mongodb://sirmiq:door5454@ds048319.mlab.com:48319/sports";
	//phpinfo();
	$client = new MongoClient($uri);
	$db = $client->selectDB("sports");
	
	$teams = $db->team;
	$collection = $teams->find();
	foreach($collection as $doc)
	{
		echo 'Sport ' .$doc['sport'] . "\n";
	}
?>
