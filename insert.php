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
		
		$r1 = $_REQUEST['recommed'];
		$r2 = $_REQUEST['Cleanliness'];
		$r3 = $_REQUEST['comfort'];
		$r4 = $_REQUEST['Location'];
		$r5 = $_REQUEST['Room-facilities'];
		$r6=$_REQUEST['Staff'];
		$r7=$_REQUEST['hs'];
		$r8=$_REQUEST['tel'];
		$r9=$_REQUEST['comment'];
 $sql2 = "SELECT * FROM pg where name=$name ";
			$result1 = $conn->query($sql2);
			if($result1)
		{	if ($result1->num_rows > 0) {
 
  while($row = $result1->fetch_assoc()) { 
                    $pg_email=$row['email'];
} 
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO pgreview VALUES ('$name','$pg_email','$email','$r1','$r2','$r3','$r4','$r5','$r6','$r7','$r8','$r9')";   
        if(mysqli_query($conn, $sql)){
            header("Location:/Partner Recommender/pgreviewshow.php");
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