<?php
    $serevername = "localhost";
    $username    = "root";
    $password    = "";
    $dbname      = "id17607845_guesting";

    $conn = new mysqli($serevername,$username,$password,$dbname);

    if($conn->connect_error){
        die("connetion failed" . $conn->connect_error);
    }

    if( isset($_POST['submit'])){
        $name = $_POST['first_name'] ." ". $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $add   = $_POST['addr'];
        $pass  = $_POST['pass'];
        $file1 = basename($_FILES['img']['name']);
        $filetype = pathinfo($file1, PATHINFO_EXTENSION);
        $image = $_FILES['img']['tmp_name'];
        $imagecon = addslashes(file_get_contents($image));
    
    $sql = "INSERT INTO service(`Name`, `Email`, `Phone`, `Address`, `Password`, `Aadhar`) VALUES ('$name','$email','$phone','$add','$pass','$imagecon')";
    
    if($conn->query($sql) === TRUE){
        echo "submitted";
        header("Location:heloo.php");
    }
    else
    {
        echo "error";
    }
    }
    $conn->close();
?>