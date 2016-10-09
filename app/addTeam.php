<?php
	//connects to mongodb hosted at mlabs
	$uri = "mongodb://sirmiq:door5454@ds048319.mlab.com:48319/sports";
	$client = new MongoClient($uri);
	$db = $client->selectDB("sports");
		$teams = $db->team;
	//$location = http://sports-cs496.azurewebsites.net;	
	$lg = $_POST['leagues'];
	echo $lg;
	$div = $_POST['divisional'];
	echo $div;
	$nam = $_POST['names'];
	$webs = $_POST['web'];
	//if($_POST['follows'] == 'yes')
		//$fol = 'Yes';
//	else
	//	$fol = 'No';
	
	//$doc = array(
		//	"league" : $lg,
			//"division" : $div,
			//"name" : $nam,
			//"website" : $webs,
			//"follows" : "Yes");
		
	//$teams->insert($doc);
				/* Redirect browser */
		//header('Location: ' .$location);	
	
?>
