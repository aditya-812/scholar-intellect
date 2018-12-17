<?php
session_start();
require_once('connection.php');
$sql = "SELECT * FROM cseedb WHERE sysid = '".$_POST['use']."' AND rollno = '".$_POST['pass']."'";
$result = $conn->query($sql);
if(mysqli_num_rows($result)>0)
{
	//echo "<br> Success";
  			$_SESSION['use']=$_POST['use'];
  			header("location:stu1.php");
  			exit;
			//echo '<a href="cred.php"><br> Click here</a> <br>';
}
else 
{
	echo "<br> Fail";
}

