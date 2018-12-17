<?php
session_start();
require_once('connection.php');
$sql = "SELECT * FROM cseedb WHERE sysid = '".$_SESSION['use']."'";
$result =  mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result))
{if($row['dues']=="YES" || $row['fifr']=="YES")
	echo "Failed";
else
    echo "Proceed";
}
?>