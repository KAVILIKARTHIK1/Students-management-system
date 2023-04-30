<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "studentinfo";
$conn =mysqli_connect($servername, $username, $password, $database_name);
if(!$conn){
  die("Connection Failed:".mysqli_connect_error());
}
if(isset($_POST['submit']))
{
	$sname=$_POST['student_name'];
	$roll=$_POST['RollNo'];
	$sphone=$_POST['mobile_number'];
	$fname=$_POST['father_name'];
	$fphone=$_POST['father_mobile_number'];
	$mname=$_POST['mother_name'];
	$sql_query="INSERT INTO studentdetails (Student_Name, Roll_No, Student_Mobile_Number, Father_Name, Father_Mobile_Number, Mother_Name)
	VALUES ('$sname','$roll','$sphone','$fname','$fphone','$mname')";
	if(mysqli_query($conn,$sql_query)){
		echo "New Deatils Entry Inserted Successfully!";
	}
	else{
		echo "Error: ".$sql."".mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>

