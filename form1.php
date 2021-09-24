<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
</html>
<?php
$servername = "localhost";
$username = "root";
$dbname = "id17607845_guesting";

// Create connection
$conn = mysqli_connect($servername, $username,"", $dbname);
// Check connection

$interests=$sql="";
if(isset($_POST['submit']))


{
   $sql2 = "SELECT name FROM student ";
$result = $conn->query($sql2);
    //echo "pass";
 if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {   
$comm = $_POST['Communication'];
$clean = $_POST['Cleanliness'];
$tol = $_POST['Tolerance'];

$interests=$_POST['interest'];
$qua1=$_POST['qua'];
$qua2=$_POST['qua2'];
$name=$row["name"];
$sql = "INSERT INTO recommender VALUES('$name','$comm','$clean','$tol','$interests[0]','$interests[1]','$interests[2]','$qua1[0]','$qua1[1]','$qua1[2]','$qua2[0]','$qua2[1]','$qua2[2]');";}
$run=$conn->query($sql);
}
}
$sql1 = "SELECT * FROM recommender where `communication` in('$comm') or `cleanliness` in('$clean') or `Tolerance` in ('$tol') or interest1 in ('$interests[0]')or interest2 in ('$interests[1]')or interest3 in ('$interests[2]')";

$result = $conn->query($sql1);


if($result->num_rows > 0){
                echo '
                <div style="margin:2rem;">
                <table class="table table-striped table-primary">
                  <thead>
                    <tr>
                      <th scope="col"> Name</th>
                   
                      
                    </tr>
                  </thead>
                  <tbody>';
                while($row = $result->fetch_assoc()){
                    
                    //echo "<br>";
                    echo '
                        <tr>
                          <th scope="row">'.$row['Name'].'</th>
                          
                          
                        </tr>
                            ';
                
                }echo "</tbody>
                        </table>
                        </div>";
            }echo "</tbody>
                        </table>
                        </div>";

 

 




?>