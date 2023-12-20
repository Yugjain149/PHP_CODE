

<?php
extract($_POST);

$R = $_POST["rollno"];

 if(isset($_POST['delete']))
{
	$servername = "localhost";
	$username = "root";
	$password = "1234";
	$dbname = "yug";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn)
	{
    	die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "delete from std where rollno = $R";
	if (mysqli_query($conn, $sql))
	{
    	echo "record deleted successfully";
	} 
	else
	 {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	 }
mysqli_close($conn);
}
?><br><br><br>
	
	<html>
	<body>
	<form action="showTsql.php" method="post">

	<input type="submit" name="submit" value="show rows">
	
	</form>
	</body>
	<html>

	<html>
	<body>
	<form action="htmlSqlFrm.php" method="post">

	<input type="submit" name="back" value="Back to menu">
	
	</form>
	</body>
	<html>