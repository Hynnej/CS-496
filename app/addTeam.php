
<?php
	//connects to mongodb hosted at mlabs
	$uri = "mongodb://sirmiq:door5454@ds048319.mlab.com:48319/sports";
	$client = new MongoClient($uri);
	$db = $client->selectDB("sports");
	$teams = $db->team;

	$lg = $_POST['leagues'];
	$div = $_POST['divisional'];
	$nam = $_POST['names'];
	$webs = $_POST['web'];
	
	if($nam && $div && $webs)
	{
       		$nam = ltrim($nam, ' ');
       		$nam = rtrim($nam, ' ');
		$query = array('name' => $nam);
		$unique = $teams->findOne($query);
		
		if($unique)		
		{
			echo "Team is already added.";
		}
		
		else
		{
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
		}
	}
	else
		echo "Document not saved.  Be sure you have entered league, division name and website.";
		
	$client->close();
?>
