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
	
	$x=100;
	$y='ram';
	$z=12;
	
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