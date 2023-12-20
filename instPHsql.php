Your rollno is : <?php echo $_POST["rollno"];?><br>
Your Name is : <?php echo $_POST["name"];?><br>
Your class is : <?php echo $_POST["class"];?><br>

<?php

	$servername = "localhost";
	$username ="root";
	$password = "1234";
	$dbName = "yug";
	
	$con = mysqli_connect($servername,$username,$password,$dbName);
	
	if(!$con)
	{
		die("Connection failed:".mysqli_connect_error());
	}
	
	$x=$_POST["rollno"];
	$y=$_POST["name"];
	$z=$_POST["class"];
	
	$sql="INSERT INTO std (rollno,name,class) VALUES ($x,'$y',$z)";
	
	if(mysqli_query($con,$sql))
	{
		echo "new record created successfully";
	}
	else
	{
		echo "Error:".$sql."<br>".mysqli_error($con);
	}
	
	mysqli_close($con);
	?>
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
	
