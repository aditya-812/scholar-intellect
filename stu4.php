<!DOCTYPE html>
<html>
<title>Summary</title>
<body>
	<div class="overlay">
 <?php
include('menubar.php');
?>
<link rel="stylesheet" type="text/css" href="css/stu4-style.css">
    <link href="css/font.css" rel='stylesheet' type='text/css'>
		
<?php
session_start();
require_once('connection.php');
$sql = "SELECT * FROM cseedb WHERE sysid = '".$_SESSION['use']."'";
$result =  mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result))
{

  echo "<br>";
  $_SESSION['sysid']=$row['sysid'];
  $_SESSION['sname']=$row['sname'];
  $_SESSION['rollno']=$row['rollno'];
  $_SESSION['cgpa']=$row['cgpa'];
  $_SESSION['pphno']=$row['pphno'];
  $_SESSION['semail']=$row['semail'];
  $_SESSION['address']=$row['address'];
  $_SESSION['sphno']=$row['sphno'];
  $_SESSION['sub1']=$row['sub1'];
  $_SESSION['sub2']=$row['sub2'];
  $_SESSION['sub3']=$row['sub3'];
  $_SESSION['sub4']=$row['sub4'];
  $_SESSION['sub5']=$row['sub5'];
  $_SESSION['sub6']=$row['sub6'];
  $_SESSION['sub7']=$row['sub7'];
  $_SESSION['sub8']=$row['sub8'];
  $_SESSION['sub9']=$row['sub9'];
  $_SESSION['sub10']=$row['sub10'];
}
?>

   <h1>Details Registered Successfully!</h1><pre></pre>
   <u><h2>SUMMARY</h2></u>
   <div class=form>
	<form action="logout.php" method="POST"> 
	  
	  	<b>Name</b><pre></pre><input type="text" name="name" value="<?= $_SESSION['sname'] ?>" readonly><br />
		<br />
		
        <b>System ID</b><pre></pre><input type="text" name="sysid" value="<?= $_SESSION['sysid'] ?>" readonly><br />
		<br />
	    

		<b>Roll no</b><pre></pre><input type="text" name="rollno" value="<?= $_SESSION['rollno'] ?>" readonly><br />
		<br />

		<b>CGPA</b><pre></pre><input type="text" name="cgpa" value="<?= $_SESSION['cgpa'] ?>" readonly><br />
		<br />

		<b>Student's Phone</b><pre></pre><input type="text" name="sphno" value="<?= $_SESSION['sphno'] ?>" readonly><br />
		<br />

		<b>Parent's Phone</b><pre></pre><input type="text" name="pphno" value="<?= $_SESSION['pphno'] ?>" readonly><br />
		<br />

        <b>E-mail</b><pre></pre><input type="text" name="semail" value="<?= $_SESSION['semail'] ?>" readonly><br />
        <br />

        
        <b>Address</b><pre></pre><textarea readonly name="address" rows="5" cols="40"><?= $_SESSION['address'] ?></textarea>
		<br>

		<b>Subjects</b><pre></pre>
		1. <input type="text" name="sub" value="<?= $_SESSION['sub1'] ?>" readonly><pre></pre>
		2. <input type="text" name="sub" value="<?= $_SESSION['sub2'] ?>" readonly><pre></pre>
		3. <input type="text" name="sub" value="<?= $_SESSION['sub3'] ?>" readonly><pre></pre>
		4. <input type="text" name="sub" value="<?= $_SESSION['sub4'] ?>" readonly><pre></pre>
		5. <input type="text" name="sub" value="<?= $_SESSION['sub5'] ?>" readonly><pre></pre>
		6. <input type="text" name="sub" value="<?= $_SESSION['sub6'] ?>" readonly><pre></pre>
		7. <input type="text" name="sub" value="<?= $_SESSION['sub7'] ?>" readonly><pre></pre>
		8. <input type="text" name="sub" value="<?= $_SESSION['sub8'] ?>" readonly><pre></pre>
		9. <input type="text" name="sub" value="<?= $_SESSION['sub9'] ?>" readonly><pre></pre>
		10. <input type="text" name="sub" value="<?= $_SESSION['sub10'] ?>" readonly><pre></pre>
<button type="submit" name="exit" value="exit">EXIT</button>
       

</form>
</div>
</div>

</body>
</html>
