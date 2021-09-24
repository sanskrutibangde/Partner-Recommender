<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
  
       
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "punit sharma";

// Create connection
$conn = new mysqli($servername,
	$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}
   
        
        $name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$r1 = $_REQUEST['recommed'];
		$r2 = $_REQUEST['comment'];
		$r3 = $_REQUEST['valuess'];
		$r4 = $_REQUEST['fs'];
		
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO messreview VALUES ('$name','$email','$r1','$r2','$r3','$r4')";   
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>