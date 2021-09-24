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
$dbname = "id17607845_guesting";

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
		
         $sql2 = "SELECT * FROM mess where name=$name ";
			$result1 = $conn->query($sql2);
			if($result1)
		{	if ($result1->num_rows > 0) {
 
  while($row = $result1->fetch_assoc()) { 
                    $mess_email=$row['email'];
} 
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO messreview VALUES ('$name','$mess_email','$r1','$r2','$r3','$r4')";   
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