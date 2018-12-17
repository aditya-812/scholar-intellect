<?php
require_once('connection.php');
session_start();
$sql= "UPDATE cseedb SET sub1='".$_POST['sub1']."',
c1='".$_POST['c1']."',
r1='".$_POST['r1']."',
t1='".$_POST['t1']."',

sub2='".$_POST['sub2']."',
c2='".$_POST['c2']."',
r2='".$_POST['r2']."',
t2='".$_POST['t2']."',

sub3='".$_POST['sub3']."',
c3='".$_POST['c3']."',
r3='".$_POST['r3']."',
t3='".$_POST['t3']."',

sub4='".$_POST['sub4']."',
c4='".$_POST['c4']."',
r4='".$_POST['r4']."',
t4='".$_POST['t4']."',

sub5='".$_POST['sub5']."',
c5='".$_POST['c5']."',
r5='".$_POST['r5']."',
t5='".$_POST['t5']."',

sub6='".$_POST['sub6']."',
c6='".$_POST['c6']."',
r6='".$_POST['r6']."',
t6='".$_POST['t6']."',

sub7='".$_POST['sub7']."',
c7='".$_POST['c7']."',
r7='".$_POST['r7']."',
t7='".$_POST['t7']."',

sub8='".$_POST['sub8']."',
c8='".$_POST['c8']."',
r8='".$_POST['r8']."',
t8='".$_POST['t8']."',

sub9='".$_POST['sub9']."',
c9='".$_POST['c9']."',
r9='".$_POST['r9']."',
t9='".$_POST['t9']."',

sub10='".$_POST['sub10']."',
c10='".$_POST['c10']."',
r10='".$_POST['r10']."',
t10='".$_POST['t10']."'

WHERE sysid = '".$_SESSION['use']."'";
$query = mysqli_query($conn, $sql);
if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
	}
	else
		header('location:stu4.php');
?>