<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "12345";
$db="studentdb";

$conn = mysqli_connect($servername, $username, $password,$db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "SELECT * FROM cseedb WHERE sysid = '".$_SESSION['use']."'";
$result =  mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result))
{
	echo "<br>".$row['sysid'] ."<br>". $row['sname']."<br>". $row['rollno']."<br>". $row['semail'];

  echo "<br>";
}
?>