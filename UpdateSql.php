<?php

extract($_POST);

if(isset($_POST['update']))
{
	$servername = "localhost";
	$username = "root";
	$password = "1234";
	$dbname = "yug";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if(!$conn)
	{
    		die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "update std set name='$name',class='$class' where rollno=$rollno";
	if (mysqli_query($conn, $sql))
	{
		echo "record updated successfully";
	} 
	else
	 {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	 }
mysqli_close($conn);
}


?>

<html>
<head>
<title>show the data</title>
</head>
<body>
<form method="post">
<br><br>
rollno: <input type="text" name="rollno" value="<?php echo @$rollno;?>"/>
<br><br>
name: <input type="text" name="name" value="<?php echo @$name;?>"/>
<br><br>
class: <input type="text" name="class" value="<?php echo @$class;?>"/><br><br>

<input type="submit" name="update" value="update">

</form>
</body>
</html>

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
	
