<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<table class="table table-hover">
 <?php
 $branch = $_POST['branch'];
$semester = $_POST['semester'];
$section = $_POST['section'];

 $result = mysqli_query($connection, "SELECT * from generate where branch='$branch' and semester='$semester' and section='$section' ");
                                        echo "<thead>
                                        <tr>
                                          <th>SNO</th>
                                          <th>Project ID</th>
                                          <th>Branch</th>
                                          <th>Semester</th>
                                          <th>Section</th>
                                          <th>Student1</th>
                                          <th>Student2</th>
                                          <th>Student3</th>
                                          <th>Student4</th>
                                          <th>Faculty Name</th>
                                        </tr>
                                      </thead>";
                                      echo "<tbody>";
                                      $i=0;
                                        while($row = mysqli_fetch_assoc($result)){ 
                                        echo "<tr>
                                                    <td>" . $i++ . "</td>
                                                    <td>" . $row['project_id'] . "</td>
                                                    <td>" . $row['branch'] . "</td>
                                                    <td>" . $row['semester'] . "</td>
                                                    <td>" . $row['section'] . "</td>
                                                    <td>" . $row['student1'] . "</td>
                                                    <td>" . $row['student2'] . "</td>
                                                    <td>" . $row['student3'] . "</td>
                                                    <td>" . $row['student4'] . "</td>
                                                    <td>" . $row['faculty_id'] . "</td>
                                            </tr>";
                                            }
                                     echo "</tbody>";
?>
</table>