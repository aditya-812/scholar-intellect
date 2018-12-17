<?php
session_start();
require_once('connection.php');
$sql = "SELECT * FROM facultydb WHERE id = '".$_POST['id']."' AND password = '".$_POST['password']."'";
$result = $conn->query($sql);
if(mysqli_num_rows($result)>0)
{
	//echo "<br> Success";
  			$_SESSION['id']=$_POST['id'];
  			header("location:fac1.php");
  			exit;
			//echo '<a href="cred.php"><br> Click here</a> <br>';
}
else 
{
	echo "<br> Fail";
}

