<?php  
error_reporting(0);
include 'db.php';

if (!$connect) {
      die("Connection failed: " . mysqli_connect_error());
  }
 


$name=$_POST["name"];
$surname=$_POST["surname"];
$age=$_POST["age"];
$lesson=$_POST["lesson"];

$sql="INSERT INTO ogrenciler(name,surname,age,lesson) VALUES ('$name','$surname','$age','$lesson')";

if(mysqli_query($connect,$sql))
{
	//header('Location: deneme.php');
	echo "<script> alert('Registration Successful!')
	window.location.replace('deneme.php')
	</script>";
}
else
{
	echo "<script> alert('Registration Failed! Fill in the required information')
	window.location.replace('deneme.php')
	</script>";
}

?>