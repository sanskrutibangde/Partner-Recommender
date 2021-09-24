<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title>MESS request Table</title>
    <title>Food Table</title>
</head>
<body>
    <nav class="navbar navbar-light bg-secondary">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1  text-light ps-4">Registered Food</span>
      </div>
    </nav>
    <br><br>
</body>
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

    if( isset($_POST['foodregister'])){
        $food = $_POST['food'];
        $desc = $_POST['fooddesc'];
        $type = $_POST['foodtype'];
        $price = $_POST['price'];
    $messem = $_COOKIE['userid'];

    $sql = "SELECT * FROM `mess` WHERE `Email`= '$messem'";
    $rs = $conn->query($sql);
    if($rs->num_rows > 0){
        while ($row = $rs->fetch_assoc()) {
            $id = $row["Mess_Id"];
        }
    }
    
    //echo $id;
    $sql = "INSERT INTO `foods`(`foodname`, `fooddesc`, `foodtype`, `messid`, `price`) VALUES ('$food','$desc','$type','$id','$price')";
    if($conn->query($sql) === TRUE){
        echo "<script>alert('Registered')</script>";
        //header("refresh:0.5;url=foodtable.php");
        


    }
    else
    {
        echo "error";
        header("refresh:0.5; url=registerfood.php");
    }
    }

        if(isset($_COOKIE["userid"])){
            $serevername = "localhost";
            $username    = "root";
            $password    = "";
            $dbname      = "id17607845_guesting";

            $conn = new mysqli($serevername,$username,$password,$dbname);
            $pgem = $_COOKIE['userid'];
            if($conn->connect_error){
                die("connetion failed" . $conn->connect_error);
            }
            $sql = "SELECT * FROM `foods` WHERE `mess_id` = '$id'";

            $result = $conn->query($sql);
            if($result->num_rows > 0){
                echo '
                <div style="margin:2rem;">
                <table class="table table-striped table-primary">
                  <thead>
                    <tr>
                      <th scope="col">Food Name</th>
                      <th scope="col">Food Description</th>
                      <th scope="col">Food Type</th>
                      <th scope="col">Price</th>
                    </tr>
                  </thead>
                  <tbody>';
                while($row = $result->fetch_assoc()){
                    
                    //echo "<br>";
                    echo '
                        <tr>
                          <th scope="row">'.$row['foodname'].'</th>
                          <td>'.$row['fooddesc'].'</td>
                          <td>'.$row['foodtype'].'</td>
                          <td>'.$row['price'].'</td>
                        </tr>
                            ';
                
                }echo "</tbody>
                        </table>
                        </div>";
            }
            else{
                echo "<h1> No result for you</h1>";
            }
        }
        else 
            echo "<h1>Session expired</h1>"; 
    $conn->close();
?>

