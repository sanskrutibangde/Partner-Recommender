<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title>PG table</title>
    <title>PG Table</title>
</head>
<body>
    <nav class="navbar navbar-light bg-secondary">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1  text-light ps-4">Registered PG</span>
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
    $id=$food=$desc=$type=$price="";
    if($conn->connect_error){
        die("connetion failed" . $conn->connect_error);
    }

    if( isset($_POST['roomregister'])){
        $name=$_POST['pg_name'];
        $room_capacity = $_POST['room'];
        $type = $_POST['roomtype'];
        $price = $_POST['price'];
   /* $messem = $_COOKIE['userid'];

    $sql = "SELECT * FROM `pg` WHERE `Email`= '$messem'";
    $rs = $conn->query($sql);
    if($rs->num_rows > 0){
        while ($row = $rs->fetch_assoc()) {
            $id = $row["pg_id"];
        }*/
    }
    $messem = $_COOKIE['userid'];

    $sql = "SELECT * FROM `pg` WHERE `Email`= '$messem'";
    $rs = $conn->query($sql);
    if($rs->num_rows > 0){
        while ($row = $rs->fetch_assoc()) {
            $id = $row["pg_id"];
   
}
$sql1 = "INSERT INTO `pgrooms`(`pg_name`, `capacity`,`room_type`, `pg_id`, `price`) VALUES ('$pg_name','$room_capacity','$type','$id','$price')";
    if($conn->query($sql1) === TRUE){
        echo "<script>alert('Registered')</script>";
        //header("refresh:0.5;url=pgtable.php");
}

    
        


    }
    else
    {
        echo "error";
        header("refresh:0.5; url=registerroom.php");
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
            $sql2 = "SELECT * FROM `pgrooms` WHERE `pg_id` = '$id'";

            $result = $conn->query($sql2);
            if($result->num_rows > 0){
                echo '
                <div style="margin:2rem;">
                <table class="table table-striped table-primary">
                  <thead>
                    <tr>
                      <th scope="col">PG Name</th>
                      <th scope="col">Room Capacity</th>
                      <th scope="col">Room type</th>
                      <th scope="col">Price</th>
                    </tr>
                  </thead>
                  <tbody>';
                while($row = $result->fetch_assoc()){
                    
                    //echo "<br>";
                    echo '
                        <tr>
                          <th scope="row">'.$row['pg_name'].'</th>
                          <td>'.$row['capacity'].'</td>
                          <td>'.$row['roomtype'].'</td>
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
        
      /* else 
            echo "<h1>Session expired</h1>"; */
    $conn->close();
}
?>

