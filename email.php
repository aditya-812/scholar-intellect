<!DOCTYPE html>
<html>
<body>
    <head>
        <title>Status</title>
    </head>
    
<?php
include('menubar.php');
?>
<link rel="stylesheet" type="text/css" href="css/email.css">
    <link href="css/font.css" rel='stylesheet' type='text/css'>

<?php

    
if($_POST['email']=="accept")
{	
    

    $to = $_POST['semail'];
    $subject = "Registration for the upcoming semester.";
    $txt = "Your registration request has been accepted by the faculty.";
    $headers = "From: email@online-registration-portal.com";
    mail($to,$subject,$txt,$headers);
    echo '<p> Registration Details Approved!</p><pre></pre>,
     <a href="fac3.php?use='.$_POST['sysid'].'">;<button type="submit" name="email" value="accept">EXIT</button></a>';
    
}
else if ($_POST['email']=="reject")
{	 
	$to = $_POST['semail'];
    $subject = "Registration for the upcoming semester.";
    $txt = "Your registration request has been declined by the faculty. Please check your submissions again.";
    $headers = "From: email@online-registration-portal.com";
    mail($to,$subject,$txt,$headers);
       echo '<p> Registration Details Rejected!</p><pre></pre>,
     <a href="fac3.php?use='.$_POST['sysid'].'">;<button type="submit" name="email" value="accept">EXIT</button></a>';
}
else
	echo "invalid";
/*
$to = "somebody@example.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
*/
?>
</body>
</html>