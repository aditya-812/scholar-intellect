<?php
require_once('connection.php');

$query= mysqli_query($conn,"SELECT * FROM cseedb");

echo '<table>
        <thead>
            <tr>
                <th>SYSTEM ID</th>
                <th>STUDENT NAME</th>
                <th>ROLL NUMBER</th>
                <th>CGPA</th>
            </tr>
        </thead>
        <tbody>';
         
while ($row = mysqli_fetch_array($query))
{
    echo '<tr>
            <td>'.$row['sysid'].'</td>
            <td>'.$row['sname'].'</td>
            <td>'.$row['rollno'].'</td>
            <td class="right">'.$row['cgpa'].'</td>
        </tr>';
}
echo '
    </tbody>
</table>';
 
// Should we need to run this? read section VII
mysqli_free_result($query);