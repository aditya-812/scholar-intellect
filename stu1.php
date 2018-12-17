<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>YOUR CREDENTIALS</title>
	
	<link rel="stylesheet" href="css/stu1-style.css">
	<link href="css/font.css" rel='stylesheet' type='text/css'>


</head>
<body>
<div class="overlay">
 <?php
include('menubar.php');
?>



	<?php
session_start();
require_once('connection.php');
$sql = "SELECT * FROM cseedb WHERE sysid = '".$_SESSION['use']."'";
$result =  mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result))
{
	//echo "<br>".$row['sysid'] ."<br>". $row['sname']."<br>". $row['rollno']."<br>". $row['semail'];

  echo "<br>";
  $_SESSION['sysid']=$row['sysid'];
  $_SESSION['sname']=$row['sname'];
  $_SESSION['rollno']=$row['rollno'];
  $_SESSION['cgpa']=$row['cgpa'];
  $_SESSION['pphno']=$row['pphno'];
  $_SESSION['semail']=$row['semail'];
  $_SESSION['address']=$row['address'];
  $_SESSION['sphno']=$row['sphno'];
}
?>
    <h1>YOUR CREDENTIALS</h1>

	<div class=form>
	<form action="stu2.php"  method="POST"> 
	  
	  	<b>Name</b>:<pre></pre><input type="text" name="name" value="<?= $_SESSION['sname'] ?>" readonly><br />
		<br />
		
        <b>System ID</b>:<pre></pre><input type="text" name="sysid" value="<?= $_SESSION['sysid'] ?>" readonly><br />
		<br />
	    

		<b>Roll no</b>:<pre></pre><input type="text" name="rollno" value="<?= $_SESSION['rollno'] ?>" readonly><br />
		<br />

		<b>CGPA</b>:<pre></pre><input type="text" name="cgpa" value="<?= $_SESSION['cgpa'] ?>" readonly><br />
		<br />

		<b>Student's Phone</b>:<pre></pre><input type="text" name="sphno" value="<?= $_SESSION['sphno'] ?>" readonly><br />
		<br />

		<b>Parent's Phone</b>:<pre></pre><input type="text" name="pphno" value="<?= $_SESSION['pphno'] ?>" readonly><br />
		<br />

        <b>E-mail</b>:<pre></pre><input type="text" name="email" value="<?= $_SESSION['semail'] ?>" readonly><br />
        <br />

        
        <b>Address</b>:<pre></pre><textarea readonly name="address" rows="5" cols="40"><?= $_SESSION['address'] ?>

         </textarea> <pre></pre>
         <caption>CHECK YOUR DETAILS AND CONFIRM</caption><pre></pre>
         <br /><br /><button type="submit" name="confirm" value="Confirm">Confirm</button>
       


		
	</form>

</div>
</body>
</html>




