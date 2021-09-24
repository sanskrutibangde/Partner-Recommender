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
		$r2 = $_REQUEST['Cleanliness'];
		$r3 = $_REQUEST['comfort'];
		$r4 = $_REQUEST['Location'];
		$r5 = $_REQUEST['Room-facilities'];
		$r6=$_REQUEST['Staff'];
		$r7=$_REQUEST['hs'];
		$r8=$_REQUEST['tel'];
		$r9=$_REQUEST['comment'];

          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO pgreview VALUES ('$name','$email','$r1','$r2','$r3','$r4','$r5','$r6','$r7','$r8','$r9')";   
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