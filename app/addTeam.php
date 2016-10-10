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
	
	if($nam && $div && $webs)
	{
		/*$query = array('name' => $name);
		$unique = $teams->find($query);	
		
		if(!$Unique)		
		{*/
			if($_POST['follows'] == 'yes')
				$fol = 'Yes';
			else
				$fol = 'No';

			$doc = array(
				'league' => $lg,
				'division' => $div,
				'name' => $nam,
				'website' => $webs,
				'follows' => $fol);
				
			$teams->insert($doc);
			
			header('Location: index.php');	
		//}
	/*}
	else
	{
		echo "Team is already added."
	}*/
	}
	else
		echo "Document not saved.  Be sure you have entered league, division name and website.";
		

	$client->close();
?>
