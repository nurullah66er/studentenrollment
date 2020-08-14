<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="text" name="ara" placeholder="Search Number">
		<input type="submit" name="btnara" Value="Search">
	</form>

	<table border="5" width="100%" cellpadding="10">
		<h1>Students</h1>
	<tr>
		<td>Student Number</td>
		<td>Name</td>
		<td>Surname</td>
		<td>Age</td>
		<td>Registration Date</td>
		<td>Courses</td>
	</tr>


</body>
</html>

<?php 
	include 'db.php';
	if(!isset($_POST["btnara"]))
{
	$sql="select * from ogrenciler";
	$kontrol=mysqli_query($connect,$sql);
	while ($row=mysqli_fetch_assoc($kontrol)) 
	{
	echo "<tr>";
	echo "<td>".$row["number"]."</td>";
	echo "<td>".$row["name"]."</td>";
	echo "<td>".$row["surname"]."</td>";
	echo "<td>".$row["age"]."</td>";
	echo "<td>".$row["date"]."</td>";
	echo "<td>".$row["lesson"]."</td>";
	echo "</tr>";
	}
}
	else if (isset($_POST["btnara"]))
{
	$ara=$_POST["ara"];
	$sql="select * from ogrenciler where number='$ara' ";
	$kontrol=mysqli_query($connect,$sql);
	while ($row=mysqli_fetch_assoc($kontrol)) 
	{
	echo "<tr>";
	echo "<td>".$row["number"]."</td>";
	echo "<td>".$row["name"]."</td>";
	echo "<td>".$row["surname"]."</td>";
	echo "<td>".$row["age"]."</td>";
	echo "<td>".$row["date"]."</td>";
	echo "<td>".$row["lesson"]."</td>";
	echo "</tr>";
	}
}
?>