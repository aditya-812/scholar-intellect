<?php
require_once('connection.php');
$sql ="SELECT * FROM cseedb WHERE course = '".$_POST['course']."' AND branch = '".$_POST['branch']."' AND section = '".$_POST['section']."' AND semester = '".$_POST['semester']."' AND year = '".$_POST['year']."' AND fifr = '".$_POST['category']."' ORDER by sno";
		
$query = mysqli_query($conn, $sql);
if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
	}
?>
<html>
<head>
<pre></pre>
	<title>Student Details</title>
		<link rel="stylesheet" type="text/css" href="css/fac2-style.css">
    <link href="css/font.css" rel='stylesheet' type='text/css'>
	
</head>
<body>
	<div class="overlay">
	 <?php
include('menubar.php');
?>
	<h1>STUDENT DETAILS</h1>
	<br>

	<table class="data-table">
	
		<thead>
			<tr>
				<th>SNO</th>

				<th>SYSTEM ID</th>
				<th>NAME</th>
				<th>ROLL NO</th>
				<th>CGPA</th>
				<th>STUDENT'S PHONE</th>
				<th>PARENT'S PHONE</th>
				<th>EMAIL</th>
				<th>ADDRESS</th>
				<th>DUES</th>
				<th>DOCUMENT PENDING</th>
				<th>FI/FR</th>
				<th>COURSE</th>
				<th>BRANCH</th>
				<th>SECTION</th>
				<th>ACKNOWLEDGEMENT</th>
				<th>S-UNDERTAKING</th>
				<th>P-UNDERTAKING</th>

	
			</tr>
			
		</thead>
		<tbody>
		<?php
		
		while ($row = mysqli_fetch_array($query))
		{
			
			
			echo '<tr>
					<td>'.$row['sno'].'</td>
					<td><a href="fac3.php?use='.$row['sysid'].'" target="_blank">'.$row['sysid'].'</td>
					<td>'.$row['sname'].'</td>
					<td>'.$row['rollno'] . '</td>
					<td>'.$row['cgpa'].'</td>
					<td>'.$row['sphno'].'</td>
					<td>'.$row['pphno'].'</td>
					<td>'.$row['semail'] . '</td>
					<td>'.$row['address'].'</td>
					<td>'.$row['dues'].'</td>
					<td>'.$row['docp'] . '</td>
					<td>'.$row['fifr'].'</td>
					<td>'.$row['Course'].'</td>
					<td>'.$row['Branch'] . '</td>
					<td>'.$row['Section'].'</td>
					
				';
				if($row['doc1'])
					{
						echo '
						<td> <img src="../registration/images/Green-Tick-PNG-Picture.png" style="width:50px;height:50px;"></td>
						';
					}
					else
						echo '
						<td> <img src="../registration/images/Red_cross_tick.png" style="width:50px;height:50px;"> </td>
					
					';
					if($row['doc2'])
					{
						echo '
						<td> <img src="../registration/images/Green-Tick-PNG-Picture.png" style="width:50px;height:50px;"></td>
						';
					}
					else
						echo '
						<td> <img src="../registration/images/Red_cross_tick.png" style="width:50px;height:50px;"> </td>
					
					';
					if($row['doc3'])
					{
						echo '
						<td> <img src="../registration/images/Green-Tick-PNG-Picture.png" style="width:50px;height:50px;"></td>
						';
					}
					else
						echo '
						<td> <img src="../registration/images/Red_cross_tick.png" style="width:50px;height:50px;"> </td>
					
					';
		}
		?>
		</tbody>
		
	</table>

</div>
</body>
</html>