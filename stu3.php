<!DOCTYPE html>
<html>
<body>
	<head>
		<link rel="stylesheet" type="text/css" href="css/stu3-style.css">
    <link href="css/font.css" rel='stylesheet' type='text/css'>
		<title>Enter Your Subjects</title>
<div class="overlay">
   <?php
include('menubar.php');
?>

  <!--<progress value="25" max="100">
</progress> -->
		<h1 style="font-size:40px;">Enter Your Subjects</h1>
    <h2>*Reference sent to your mail*</h2>
	</head>
  


  <div class=form>
  <form method="POST" action="subject.php"> 
  <br>
<select name="course">
	<b><option disabled="" selected=""  value="Course">Course</option></b>
  <option value="BTech">B.Tech</option>
</select><pre></pre>

<select name="branch">
	<option disabled="" selected=""   value="Branch">Branch</option>
  <option value="CSE">CSE</option>
  <option value="ME">ME</option>
  <option value="ECE">ECE</option>
  <option value="CE">CE</option>
</select><pre></pre>

<select name="section">
  <option disabled="" selected=""   value="Section">Section</option>
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
  <option value="E-IBM">E-IBM</option>
</select><pre></pre>

<select name="semester">
  <option disabled="" selected=""   value="Semester">Semester</option>
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
  <option disabled="" selected=""   value="Year">Year</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select><pre></pre>
<br>

<b>Subject 1 </b>:<input type="text" name="sub1"  placeholder="               *code*"><pre></pre>

<select name="c1">
  <option disabled="" selected=""   value="Credits">Credits</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>

<select name="r1">
  <option value="Regular">Regular</option>
  <option value="FI">FI</option>
  <option value="FR">FR</option>
</select>

<select name="t1">
  <option value="Compulsary">Compulsary</option>
  <option value="Elective">Elective</option>
</select><pre></pre>
<br>
<br>
<b>Subject 2 </b>:<input type="text" name="sub2"  placeholder="               *code*"><pre></pre>

<select name="c2">
  <option disabled="" selected=""   value="Credits">Credits</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>

<select name="r2">
  <option value="Regular">Regular</option>
  <option value="FI">FI</option>
  <option value="FR">FR</option>
</select>

<select name="t2">
  <option value="Compulsary">Compulsary</option>
  <option value="Elective">Elective</option>
</select><pre></pre>

<br>
	  <br>
<b>Subject 3 </b>:<input type="text" name="sub3"  placeholder="               *code*"><pre></pre>

<select name="c3">
  <option disabled="" selected=""   value="Credits">Credits</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>

<select name="r3">
  <option value="Regular">Regular</option>
  <option value="FI">FI</option>
  <option value="FR">FR</option>
</select>

<select name="t3">
  <option value="Compulsary">Compulsary</option>
  <option value="Elective">Elective</option>
</select><pre></pre>

<br>
	  <br>
<b>Subject 4 </b>:<input type="text" name="sub4"  placeholder="               *code*"><pre></pre>

<select name="c4">
  <option disabled="" selected=""   value="Credits">Credits</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>

<select name="r4">
  <option value="Regular">Regular</option>
  <option value="FI">FI</option>
  <option value="FR">FR</option>
</select>

<select name="t4">
  <option value="Compulsary">Compulsary</option>
  <option value="Elective">Elective</option>
</select><pre></pre>
<br>
	  <br>

<b>Subject 5 </b>:<input type="text" name="sub5"  placeholder="               *code*"><pre></pre>

<select name="c5">
  <option disabled="" selected=""   value="Credits">Credits</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>

<select name="r5">
  <option value="Regular">Regular</option>
  <option value="FI">FI</option>
  <option value="FR">FR</option>
</select>

<select name="t5">
  <option value="Compulsary">Compulsary</option>
  <option value="Elective">Elective</option>
</select><pre></pre>

<br>
	  <br>
<b>Subject 6 </b>:<input type="text" name="sub6"  placeholder="               *code*"><pre></pre>

<select name="c6">
  <option disabled="" selected=""   value="Credits">Credits</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>

<select name="r6">
  <option value="Regular">Regular</option>
  <option value="FI">FI</option>
  <option value="FR">FR</option>
</select>

<select name="t6">
  <option value="Compulsary">Compulsary</option>
  <option value="Elective">Elective</option>
</select><pre></pre>

<br>
	  <br>
<b>Subject 7 </b>:<input type="text" name="sub7"  placeholder="               *code*"><pre></pre>

<select name="c7">
  <option disabled="" selected=""   value="Credits">Credits</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>

<select name="r7">
  <option value="Regular">Regular</option>
  <option value="FI">FI</option>
  <option value="FR">FR</option>
</select>

<select name="t7">
  <option value="Compulsary">Compulsary</option>
  <option value="Elective">Elective</option>
</select><pre></pre>
<br>
	  <br>
<b>Subject 8 </b>: <input type="text" name="sub8"  placeholder="               *code*"><pre></pre>

<select name="c8">
  <option disabled="" selected=""   value="Credits">Credits</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>

<select name="r8">
  <option value="Regular">Regular</option>
  <option value="FI">FI</option>
  <option value="FR">FR</option>
</select>

<select name="t8">
  <option value="Compulsary">Compulsary</option>
  <option value="Elective">Elective</option>
</select><pre></pre>

<br>
	  <br>
<b>Subject 9 </b>:<input type="text" name="sub9"  placeholder="               *code*"><pre></pre>

<select name="c9">
  <option disabled="" selected=""   value="Credits">Credits</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>

<select name="r9">
  <option value="Regular">Regular</option>
  <option value="FI">FI</option>
  <option value="FR">FR</option>
</select>

<select name="t9">
  <option value="Compulsary">Compulsary</option>
  <option value="Elective">Elective</option>
</select><pre></pre>

<br>
	  <br>
<b>Subject 10 </b>:<input type="text" name="sub10" placeholder="               *code*"><pre></pre>

<select name="c10">
  <option disabled="" selected=""   value="Credits">Credits</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>

<select name="r10">
  <option value="Regular">Regular</option>
  <option value="FI">FI</option>
  <option value="FR">FR</option>
</select>

<select name="t10">
  <option value="Compulsary">Compulsary</option>
  <option value="Elective">Elective</option>
</select><pre></pre>

<br /><br /><button type="submit" name="submit" placeholdervalue="submit">Submit</button>


</form>
</div>
</div>
</body>
</html>