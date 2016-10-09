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
		<a class="navbar-brand" href="index.php">Sports Tracker</a>
		<ul class="nav navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="pages/viewData.php">Teams</a>
			</li>
		</ul>	
	</nav>

	
		<!--Form to adde team-->
		<div class="row">
			<div class="col-md-12 text-center">	
				<h2>Add Team</h2>
				<form method="post" action="./forms/addTeam.php">
					<fieldset class="form-group">
						<p><input type="hidden" name="col" value="team"/></p>
					<div class="row">
					<div class="col-md-2 text-center">		
						<legend>League</legend>
						<div class="form-check">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="leagues" value="NFL" checked>NFL</label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
							<input class="form-check-input" type="radio" name="leagues" value="NFL" checked>MLB</label>
						</div>
					</div>	
					<div class="col-md-3 text-center">	
						<legend>Division</legend>
						<p><input type="text" name="divisional" placeholder="NFC-West"/></p>
						
					</div>	
					<div class="col-md-3 text-center">	
						<legend>Team Name</legend>
						<p><input type="text" name="names" placeholder="Seattle Seahawks"/></p>						
					</div>

					<div class="col-md-3 text-center">						
						<legend>Team Website</legend>
						<p><input type="url" name="web" placeholder="www.seattleseahawks.com"/></p>	
					</div>	
					<div class="col-md-1 text-center">
						<legend>Follows</legend>
						<label class="form-check-inline">
							</legend> <input class="form-check-input" type="checkbox" name="follows" value="yes"> Yes
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
