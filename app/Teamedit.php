<!--Displays table-->

<?php
	//connects to mongodb hosted at mlabs
	$uri = "mongodb://sirmiq:door5454@ds048319.mlab.com:48319/sports";
	$client = new MongoClient($uri);
	$db = $client->selectDB("sports");
	$teams = $db->team;
	$teamName = $_POST['editTeam'];
	$edTeam = $teams->findOne(array('name' => $teamName));	
	echo $edTeam["name"];
?>

<!DOCTYPE html>
<html>

<head>
  <title>Sports Tracker</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>

<body>
	<!--nav bar-->
	<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
		<a class="navbar-brand">Sports Tracker</a>
		<ul class="nav navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Edit Team</a>
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
					<input type="submit" class="btn btn-primary" name="editTeam" value="Edit Team"/>
				</form>
			</li>
		</ul>	
	</nav>
	
		<!--Form to add team-->
	
		<div class="row">
			<div class="col-md-12 text-center">	
				<h2>Add Team</h2>
				<form method="post" action="addTeam.php">
					<fieldset class="form-group">
						<p><input type="hidden" name="col" value="team"/></p>
					<div class="row">
					<div class="col-md-2 text-center">		
						<legend>League</legend>
						<div class="form-check">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="leagues" value="NFL" <?php if($edTeam["league"] == "NFL") echo 'checked="checked"'; ?>>NFL</label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
							<input class="form-check-input" type="radio" name="leagues" value="MLB" <?php if($edTeam["league"] == "MLB") echo 'checked="checked"'; ?>>MLB</label>
						</div>
					</div>	
					<div class="col-md-3 text-center">	
						<legend>Division</legend>
						<p><input type="text" name="divisional" value="<?php echo $edTeam["division"];?>"/></p>
						
					</div>	
					<div class="col-md-3 text-center">	
						<legend>Team Name</legend>
						<p><input type="text" name="names" value="<?php echo $edTeam["name"];?>"/></p>						
					</div>

					<div class="col-md-3 text-center">						
						<legend>Team Website</legend>
						<p><input type="url" name="web" value="<?php echo $edTeam["website"];?>"/></p>	
					</div>	
					<div class="col-md-1 text-center">
						<legend>Follows</legend>
						<label class="form-check-inline">
							</legend> <input class="form-check-input" type="checkbox" name="follows" value="yes" <?php if($edTeam["follows"] == "Yes") echo 'checked="checked"'; ?>> Yes
						</label>
					</div>
					</div>


						<p><input type="submit" class="btn btn-success" name="add" value="Add"/></p>


					</fieldset>
				</form>					
				</div>
			</div>

</div>
</body>
</html>	
	
	