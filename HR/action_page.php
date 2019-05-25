<?php
session_start();
$con = mysqli_connect("localhost","root","","iwm");
//Check Connection
if (mysqli_connect_errno()){
	echo "Failed to connect to Server: " .mysqli_connect_errno();
}

$UserID = mysqli_real_escape_string($con,$_POST['uname']);
$PWD = mysqli_real_escape_string($con,$_POST['pwd']);

$query = "SELECT * FROM users WHERE UserID = '$UserID' AND Password = '$PWD'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);

if($count == 0)
{
	echo "Username or Password Incorrect";
	echo "<br>";
	echo "Redirect back to Login Page.....";
	header("refresh:2; url=http://localhost/Form/Login.html");
}
else
{
	$row = mysqli_fetch_array($result);
	$_SESSION["ID"] = $row['ID'];
	$_SESSION["FirstName"] = $row['FirstName'];
	$_SESSION["LastName"] = $row['LastName'];
	$_SESSION["AccessLevel"] = $row['AccessLevel'];
	$_SESSION["CSID"] = $row['CSID'];
	$_SESSION["BranchID"] = $row['BranchID'];

	if($row['AccessLevel'] == 4)
	{
		header('Location: Level3&4.php');
	}
	else if($row['AccessLevel'] == 3)
	{
		header('Location: Level3&4.php');
	}
	else if($row['AccessLevel'] == 2)
	{
		header('Location: Level2.php');
	}
	else if($row['AccessLevel'] == 1)
	{
		header('Location: View1.php');
	}
}
session_write_close();
?>
<html>
<head><title>Logging In...</title></head>
</html>
