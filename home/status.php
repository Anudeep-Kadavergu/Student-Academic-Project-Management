<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
include '../db/dbconnect.php';

$id = $_POST['id'];


$sql="select project_id,project_name,project_team_lead,project_status from project_details";
$result = mysqli_query($connection, $sql);
$count = mysqli_num_rows($result);

echo 
'<div class="w3-container" style="display: block;margin-top:10px;">
<table class="w3-table-all w3-centered">
    <tr>
      <th>PROJECT ID</th>
      <th>PROJECT NAME</th>
      <th>PROJECT TEAM LEADER</th>
      <th>PROJECT STATUS</th>
      </tr>';
    while($row = $result->fetch_assoc())
    {
        if($row["project_id"] == $id){
        echo '<tr>';
      echo "<td> ".$row["project_id"]." </td>";
      echo "<td> ".$row["project_name"]." </td>";
      echo "<td> ".$row["project_team_lead"]." </td>";
      echo "<td> ".$row["project_status"]." </td>";
        echo '</tr>';
        }
    }
    echo'
  </table>
  </div>';
?>