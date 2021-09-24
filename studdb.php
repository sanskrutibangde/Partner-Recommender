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
        $date1 = $_POST['birth_date']."-".$_POST['birth_month']."-".$_POST['birth_year'];
        $gender = $_POST['gender'];
        $college = $_POST['college'];
        $branch = $_POST['branch'];
        $year = $_POST['year'];
        $budget = $_POST['budget'];
        $months = $_POST['months'];
        $partner = $_POST['partner'];
        $pass  = $_POST['pass'];
        $image = $_FILES['img']['tmp_name'];
        $imagecon = addslashes(file_get_contents($image));
     
    
    
    $sql = "INSERT INTO student(`Name`, `Email`, `Phone`, `Birthdate`, `Gender`, `College Name`, `Branch`, `Year`, `Budget`, `Room For Months`, `Partner`, `Password`, `Aadhar`) VALUES ('$name','$email','$phone','$date1','$gender','$college','$branch','$year','$budget','$months','$partner','$pass','$imagecon')";
    if($conn->query($sql) === TRUE){
        //echo "submitted";
        header("Location:../Partner Recommender/Login_v18/studentlogin.html");
    }
    else
    {
        echo "error";
    }
 
    }
    $conn->close();
?>