<?php
	$con=mysqli_connect("localhost","root","","hrmanager");
	// Check connection
	if (mysqli_connect_errno()) 
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	// escape variables for security
	$id = mysqli_real_escape_string($con, $_POST['id']);
	$search = mysqli_real_escape_string($con, $_POST['search']);
	
	$result = mysqli_query($con,"SELECT staffID FROM staff WHERE staffId LIKE '$search'");
	$count=$result->num_rows;
	if ((empty($count))) 
	{
		header("Location: http://localhost/HRPJ/HR/TimeAttendanceSearchForHR-01ERROR.php");
	}
	
	while ($row = mysqli_fetch_array($result))
	{
		echo $row['staffID'];

		if ($result != False )
		{
			header("Location: http://localhost/HRPJ/HR/TimeAttendanceSearchSuccessForHR-02.php?id=$id&search=$search");
		}
		else
		{
			header("Location: http://localhost/HRPJ/HR/TimeAttendanceSearchForHR-01.php?id=$id");
		}
	} 

	mysqli_close($con);
?>