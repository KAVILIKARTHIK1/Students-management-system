<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
<link rel="stylesheet" href="adminstyle.css">
<style>
	border-spacing: 15px;
</style>
</head>
<body>
<center>
<form action="db_connection.php" method="POST">

	<h1>REGISTRATION FORM</h1>
	<table border="1px" >
		<tr>
			<td>Student Name</td>
			<td><input type="text" name="student_name" required></td>
		</tr>
		<tr>
			<td>Roll_No.</td>
			<td><input type="tel" name="RollNo" required></td>
		</tr>
		<tr>
			<td>Mobile Number</td>
			<td><input type="tel" name="mobile_number" required></td>
		</tr>
		<tr>
			<td>Father Name</td>
			<td><input type="text" name="father_name" required></td>
		</tr>
		<tr>
			<td>Father Mobile Number</td>
			<td><input type="tel" name="father_mobile_number" required></td>
		</tr>
		<tr>
			<td>Mother Name</td>
			<td><input type="text" name="mother_name" required></td>
		</tr>
	</table><br><br>
	<input type="submit" value="Submit" name="submit"/>	<br><br>
</form>
<form action="getdetails.php" method="POST">
	<input type="submit" value="Get Details" />
</form>
</center>
</body>
</html>