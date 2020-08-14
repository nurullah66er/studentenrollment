<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css.css">
	<title>Show</title>
</head>

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

	<form name="ÖğrenciSil" action="<?=$SERVER['PHP_SELF']?>" method="post">
	<div class="form2">
		<br>
			<input type="text" name="number" placeholder="Student No" value=""><br>
		<button type="submit" name="btnsil" class="btn2">Delete Student</button>
	</div>	

	</form>
	<?php
include 'db.php';

if (isset($_POST["btnsil"]))
 {
$number=$_POST["number"];
 
 

$sql="delete from ogrenciler where number='$number'";
 $kontrol=mysqli_query($connect,$sql);

if ($kontrol)
{
	echo "process successful.";
}
else
{
	echo "process failed";
}

} 


?>
<form action="<?=$SERVER['PHP_SELF']?>" method="POST">
		<div class="form2">
			<input type="text" name="number" placeholder="Student No" value=""><br>
		<br>
			<input type="text" name="lesson" placeholder="Lesson" value=""><br>
			<br>
		
			<button type="submit" name="btnguncelle" class="btn2">Update</button>
		</div>
	</form>
	<?php
include 'db.php';

if (!$connect) {
      die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST["btnguncelle"]))
{
	$number=$_POST["number"];
	$name=$_POST["name"];
	$surname=$_POST["surname"];
	$age=$_POST["age"];
	$lesson=$_POST["lesson"];

$sql="update ogrenciler set lesson='$lesson' where number='$number'";
	$kontrol=mysqli_query($connect,$sql);
if($kontrol)
{
echo "Course updated!";
}
else
{
echo "Unsuccessful";
}

}
	?>

<tbody>
	<?php
	include 'db.php';
	
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



	?>



</table>
</tbody>
</html>