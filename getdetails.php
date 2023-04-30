<html>
<head>
<title>Get Details</title>
<style>
body {
background-color: lightaqua;
}
table {
border-collapse: collapse;
width: 100%;
}
th, td {
text-align: left;
padding: 8px;
border-bottom: 1px solid #ddd;
}
th {
background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
}

tr:hover {
background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
}
</style>
</head>
<body>
<?php
include("db_connection.php");
$query="select * from studentdetails";
$connect=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($connect);
$num=mysqli_num_rows($connect);
?>
<table border="1px">
		<tr>
			<th>Student Name</th>
			<th>Roll No.</th>
			<th>Mobile Number</th>
			<th>Father Name</th>
			<th>Father Mobile Number</th>
			<th>Mother Name</th>
		</tr>

<?php
	if($num>0) {
		while($data=mysqli_fetch_assoc($connect)){
			echo "
				<tr>
					<td>".$data['Student_Name']."</td>
					<td>".$data['Roll_No']."</td>
					<td>".$data['Student_Mobile_Number']."</td>
					<td>".$data['Father_Name']."</td>
					<td>".$data['Father_Mobile_Number']."</td>
					<td>".$data['Mother_Name']."</td>
				</tr>
			";
		}
	}
?>
</table>
</body>
</html>