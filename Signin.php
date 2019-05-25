<?php 
session_start();
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno()) 
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// escape variables for security
	$id = mysqli_real_escape_string($con, $_POST['id']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	
	$hr = "HR";
	
	$result = mysqli_query($con,"SELECT * FROM staff WHERE staffId LIKE '$id'");
	
	$count=$result->num_rows;
	if ((empty($count))) 
	{
		header("Location: http://localhost/HRPJ/ErrorSignin.html");
	}
	echo SESSION_id();
	while ($row = mysqli_fetch_array($result))
	{
		echo $row['staffID'] . " " . $row['password'] . " " .$row['positionID'];
		echo "<br>";

		if ($password == $row['password'])
		{
			if(strpos($row['positionID'],$hr)!==false)
			{
				header("Location: http://localhost/HRPJ/HR/WelcomeSignoutForHR.php");
			}
			else
			{
			header("Location: http://localhost/HRPJ/Staff/WelcomeSignoutForStaff.php");
			}
		}
		else
		{
			header("Location: http://localhost/HRPJ/ErrorSignin.html");
		}
	}
	
	$_SESSION['ID'] = $row['staffID'];
	echo $_SESSION['ID'];
	
	session_write_close();
	mysqli_close($con);
?>