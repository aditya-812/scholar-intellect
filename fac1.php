<!DOCTYPE html>
<html>
<body>
	<head>
		<link rel="stylesheet" type="text/css" href="css/fac1-style.css">
    <link href="css/font.css" rel='stylesheet' type='text/css'>
    <title>Select Preference</title>
		<!--<div class="tit"><h1 style="font-size:40px;">Select Preference</h1></div>-->
 <?php
include('menubar.php');
?>

  <!--<progress value="25" max="100">
</progress> -->
		<h1 style="font-size:40px;">Select Preference</h1>
	</head>
<div class="overlay">
  <br>
  <form action="fac2.php" method="POST">
<select name="course">
<option disabled="" selected="" value="Course">Course</option>
  <option value="B.Tech">B.Tech</option>
</select><pre></pre>

<select name="branch">
	<option disabled="" selected="" value="Branch" >Branch</option>
  <option value="CSE">CSE</option>
  <option value="ME">ME</option>
  <option value="ECE">ECE</option>
  <option value="CE">CE</option>
</select><pre></pre>

<select name="section">
  <option disabled="" selected="" value="Section">Section</option>
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
  <option value="E">E-IBM</option>
</select><pre></pre>

<select name="semester">
  <option disabled="" selected="">Semester</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
</select><pre></pre>

<select name="year">
  <option disabled="" selected="">Year</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select><pre></pre>

<select name="category">
  <option disabled="" selected="">Category</option>
  <option value="NO">Regular</option>
  <option value="YES">FI/FR</option>
</select><pre></pre>
<br>

<button type="submit"><font size="5">Submit</font></button>
<pre></pre>
<br>
</div>
</body>
</html>
