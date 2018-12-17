<html>
<?php
session_start();
require_once('connection.php');
unset($a);
unset($b);
unset($c);
if(isset($_FILES['pic']))
{
	$image = $_FILES['pic']['tmp_name'];
	for($i = 0; $i <count($image); $i++)
    {$imgContent[$i] = addslashes(file_get_contents($image[$i]));
     }
    $sql1 = "UPDATE cseedb SET doc1='".$imgContent[0]."' WHERE sysid = '".$_SESSION['use']."'";
    $sql2 = "UPDATE cseedb SET doc2='".$imgContent[1]."' WHERE sysid = '".$_SESSION['use']."'";
    $sql3 = "UPDATE cseedb SET doc3='".$imgContent[2]."' WHERE sysid = '".$_SESSION['use']."'";
    $result1 = $conn->query($sql1);
    $result2 = $conn->query($sql2);
    $result3 = $conn->query($sql3);
    if($result1)
    {   
         $a=1;
     }
     else
     {
       echo '<script type="text/javascript">',
'alert("File 3 Upload Failed");',
'</script>';


    }
        if($result2)
    {
          $b=1;
     }
     else
     {
           echo '<script type="text/javascript">',
'alert("File 2 Upload Failed");',
'</script>';

        } 
        if($result3)
    {
          $c=1;
     }
     else
     {
           echo '<script type="text/javascript">',
'alert("File 1 Upload Failed");',
'</script>';

        }  
    }
    if($a==1 && $b==1 && $c==1)
    {
       $a=$b=$c=0;
header('location:stu3.php');
}
      
      
          ?>

</html>