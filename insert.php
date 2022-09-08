<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "aag");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$date = $_REQUEST['date'];
		$department = $_REQUEST['department'];
        $doctor = $_REQUEST['doctor'];
        $message = $_REQUEST['message'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO appointment VALUES (DEFAULT,'$name',
			'$email','$phone','$date','$department',' $doctor','$message')";
		
		if(mysqli_query($conn, $sql)){
			 echo "<h3>Appointment taken.";
			// 	. " Please browse your localhost php my admin"
			// 	. " to view the updated data</h3>";

			// echo nl2br("\n$name\n $email\n "
			// 	. "$phone\n $date\n $department\n$doctor \n $doctor\n $message");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
