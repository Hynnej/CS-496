<!--Displays table-->

<?php
	//connects to mongodb hosted at mlabs
	$uri = "mongodb://sirmiq:door5454@ds048319.mlab.com:48319/sports";
	$client = new MongoClient($uri);
	$db = $client->selectDB("sports");
		$teams = $db->team;
?>

<!DOCTYPE html>
<html>

<head>
  <title>Sports Tracker</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>

<body>
<div class="container">
	<!--nav bar-->
	<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
		<a class="navbar-brand">Sports Tracker</a>
		<ul class="nav navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Add Teams</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="viewData.php">Teams</a>
			</li>
			<li>
			<form method="post" class="form-inline" action="Teamedit.php">
				<div class="form-group">
					<select class="c-select" name="teamEdit">
							<option selected>Edit Team</option>						
							<?php
								$collection = $teams->find();
								foreach($collection as $doc)
								{	
									echo '<option value=" '. $doc["name"] . ' "> ' . $doc["name"] . '</option>\n';
								}
							?>
						</select>
					</div>
					<input type="submit" class="btn btn-primary" name="editTeam" value="EditTeam"/>
				</form>
			</li>
		</ul>	
	</nav>

	<!--displays table-->
		<div class="row">
			<div class="col-md-12 text-center">	
				<h2 class="text-center">Teams</h2>
				<table class="table">
					<thead class="thead-inverse">
					<tr>
						<th>League</th>
						<th>Division</th>
						<th>Name</th>
						<th>Website</th>
						<th>Follow</th>
					</tr>
					</thead>

					<?php
					//Displays recipe table
					$collection = $teams->find();
					foreach($collection as $doc)
					{

					echo "<tr><td>" . $doc['league'] . "</td><td>" . $doc['division'] . "</td><td>" . $doc['name'] . "</td><td><a href=" . $doc['website']. "></a></td>" . "</td><td>" . $doc['follows'] .  "</td></tr>";
					}
					$client->close();
					?>

				</table>			
			</div>
		</div>
</div>
</body>
</html>
