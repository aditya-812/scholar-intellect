<?php
session_start();
require_once('../connection.php');
$sql = "SELECT doc3 FROM cseedb WHERE sysid = '".$_SESSION['use']."'";
$result = $conn->query($sql);
if(mysqli_num_rows($result)>0)
{
    $imgData = $result->fetch_assoc();
    header("Content-type: image/jpg"); 
        echo $imgData['doc3']; }
        else
        {
        	echo "Image Not Found";
        }
        ?>