<?php
	//connects to mongodb hosted at mlabs
	$uri = "mongodb://sirmiq:door5454@ds048319.mlab.com:48319/sports";
	$client = new MongoClient($uri);
	$db = $client->selectDB("sports");
	$teams = $db->team;
	//$location = http://sports-cs496.azurewebsites.net;
	$lg = $_POST['leagues'];
	$div = $_POST['divisional'];
	$nam = $_POST['names'];
	$webs = $_POST['web'];
	if($_POST['follows'] == 'yes')
		$fol = 'Yes';
	else
		$fol = 'No';
	echo $fol;
	
	$teams->update(
		array('name' => $nam),
		array('$set' => array('league' => $lg))
	);	

	$teams->update(
		array('name' => $nam),
		array('$set' => array('division' => $div))
	);	
	
	$teams->update(
		array('name' => $nam),
		array('$set' => array('web' => $webs))
	);	
	
	$teams->update(
		array('name' => $nam),
		array('$set' => array('follows' => $fol))
	);	

	$teams->update(
		array('name' => $nam),
		array('$set' => array('name' => $nam))
	);	
	
		
	$teams->insert($doc);

	header('Location: index.php');	
	$client->close();
?>