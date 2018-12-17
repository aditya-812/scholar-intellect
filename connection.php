<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$db="studentdb";

$conn = mysqli_connect($servername, $username, $password,$db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";


 /*while ($row = $result->fetch_assoc()) 
 	{ if($_POST['use']==$row["sysid"])
 		 {
  			echo "<br> Success";
  			$_SESSION['use']=$_POST['use'];
			echo '<a href="welcome.php"><br> Click here</a>';
		  } 
		else
		{
			echo "<br> Fail";
			break;
		}  
   }*/

  /*	$systemid = $row["systemid"];
   $password = $row["password"];

   echo "<br>$systemid<br>$password<br>";      
*/
/*} else {
    echo "0 results";
}*/


/*if(!empty($_POST["login"])) {
	$result = mysqli_query($conn,"SELECT * FROM users WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
	$_SESSION["user_id"] = $row['user_id'];
	} else {
	$message = "Invalid Username or Password!";
	}
}*/

?>