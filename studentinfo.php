<!DOCTYPE html>
<html>
<head>
  <title>Retrieve Data</title>
<style>
		body {
			margin: 100;
			padding: 0;
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			background-image: url("std.jpg");
			background-repeat: no-repeat, repeat;
			background-size: 100% 100%;
		}
		.center {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		input[type="number"] {
			padding: 10px;
			border: none;
			border-radius: 20px;
			box-shadow: 0px 5px 20px rgba(0,0,0,0.1);
			background-color: #ffffff;
			font-size: 18px;
			color: #666666;
			outline: none;
			width: 300px;
			transition: all 0.3s ease-in-out;
		}
		input[type="number"]:focus {
			box-shadow: 0px 5px 20px rgba(0,0,0,0.2);
			transform: scale(1.05);
		}
		
	</style>
</head>
<body>
<div id="output">
    <?php
 
    if (isset($_POST['input_number'])) {
      $input_number = $_POST['input_number'];

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "studentinfo";
      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT * FROM studentdetails WHERE Roll_NO = ?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("i", $input_number);

      if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<b>Student Name:</b> " . $row["Student_Name"] . "<br>";
            
            echo "<b>Student Mobile Number:</b> " . $row["Student_Mobile_Number"] . "<br>";
            echo "<b>Father Name:</b> " . $row["Father_Name"] . "<br>";
            echo "<b>Father Mobile Number:</b> " . $row["Father_Mobile_Number"] . "<br>";
            echo "<b>Mother Name:</b> " . $row["Mother_Name"] . "<br>";
          }
        } else {
          echo "No details are fetched";
        }
      } else {
        echo "Error executing SQL query: " . $stmt->error;
      }

      // Close the database connection
      $conn->close();
    }
    ?>
</center>
  </div>
<div class="center">
<center>
  <form method="POST">
    <label for="input_number">Enter Roll Number:</label>
    <input type="number" id="input_number" name="input_number" required>
    <br><br>
    <input type="submit" value="Submit">
  </form>
</center>
<br>
</div>
<center>
  
</body>
</html>