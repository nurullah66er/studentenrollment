<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css.css" type="text/css" />
	<title></title>
</head>
<body>
	
<form class="" action="index.php" method="POST">
		<div class="form">
			<h1>Add student enrollment</h1>
		
			<input type="text" name="name" placeholder="name" value="" required=""><br>
			<input type="text" name="surname" placeholder="surname" value="" required=""><br>
			<input type="text" name="age"  placeholder="age" value="" required=""><br>
			<input type="text" name="lesson"  placeholder="lesson" value=""><br>
			<br>
			<input type="submit" class="btn" name="btn" value="Add"><br>
		</div>
	</form>

	<form name="liste" action="listele.php">
	<div class="form2">
		<button type="submit" name="show" class="btn2">Show All Students</button>
	</div>
	</form>

	<form name="dersekle" action="VeriUptade.php">
	<div class="form2">
		
	</div>	

	</form>

	<form name="kayıtara" action="kayıtara.php">
	<div class="form2">
		<button type="submit" name="search" class="btn2">Search</button>
	</div>	

	</form>
</body>
</html>