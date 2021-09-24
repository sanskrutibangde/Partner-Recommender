<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
</html>
<?php
    $serevername = "localhost";
    $username    = "root";
    $password    = "";
    $dbname      = "id17607845_guesting";

    $conn = new mysqli($serevername,$username,$password,$dbname);

    if($conn->connect_error){
        die("connetion failed" . $conn->connect_error);
    }
$pgem=$_POST['userid'];
  
    
    //echo $id;
   
    
    

       
            $serevername = "localhost";
            $username    = "root";
            $password    = "";
            $dbname      = "id17607845_guesting";

            $conn = new mysqli($serevername,$username,$password,$dbname);
            
            if($conn->connect_error){
                die("connetion failed" . $conn->connect_error);
            }
            $sql = "SELECT * FROM `pgrooms` ";

            $result = $conn->query($sql);
            if($result->num_rows > 0){
                echo '
                <div style="margin:2rem;">
                <table class="table table-striped table-primary">
                  <thead>
                    <tr>
                      <th scope="col">Room Type</th>
                      <th scope="col">Email</th>
                      <th scope="col">Price</th>
                      
                    </tr>
                  </thead>
                  <tbody>';
                while($row = $result->fetch_assoc()){
                    
                    //echo "<br>";
                    echo '
                        <tr>
                          <th scope="row">'.$row['roomtype'].'</th>
                          <td>'.$row['Email'].'</td>
                          <td>'.$row['Price'].'</td>
                          
                        </tr>
                            ';
                
                }echo "</tbody>
                        </table>
                        </div>";
            }
            else{
                echo "<h1> No result for you</h1>";
            }
        
        
    $conn->close();
?>

