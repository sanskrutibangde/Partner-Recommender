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
        $messphone = $_POST['messphone'];
        $mess = $_POST['mess'];
        $add   = $_POST['addr'];
        $pass  = $_POST['pass'];
        $file1 = basename($_FILES['img']['name']);
        $filetype = pathinfo($file1, PATHINFO_EXTENSION);
        $image = $_FILES['img']['tmp_name'];
        $imagecon = addslashes(file_get_contents($image));
        $image2 = $_FILES['food']['tmp_name'];
        $imagecon2 = addslashes(file_get_contents($image2));
   // echo $name;

    $sql = "INSERT INTO `mess1`(`Mess Phone`, `Owner Name`, `Email`, `Address`, `Mess Name`, `Password`,`Aadhar`, `Food license`) VALUES ('$messphone','$name','$email','$add','$mess','$pass','$imagecon','$imagecon2')";
    if($conn->query($sql) === TRUE){
        echo "submitted";
        header("Location:/Partner Recommender/Login_v18/messlogin.html");
    }

        
    
    else
    {
        echo $conn->error;
    }
    
    $conn->close();

?>