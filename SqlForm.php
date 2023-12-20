<?php
extract($_POST);
if(isset($_POST['search']))
{
	$con=mysqli_connect("localhost","root","1234","yug");
	if (mysqli_connect_errno())
	{
  		echo "Failed to connect to MySQL:". mysqli_connect_error();
	}
	$results= mysqli_query($con,"select * from std where rollno=$rollno");

	while($row=mysqli_fetch_array($results))
	{
			
		echo $row['rollno'];
		echo "<br>";
		echo "".$row['name'];
		echo "<br>";
		echo"".$row['class'];
		echo "<br>";
	}
mysqli_close($con);
}
else if(isset($_POST['delete']))
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
	$sql = "delete from std where rollno=$rollno";
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
else if(isset($_POST['show']))
{
	$con=mysqli_connect("localhost","root","1234","yug");
	// Check connection
	if (mysqli_connect_errno())
	{
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$result = mysqli_query($con,"select * from std order by rollno");
?>
<table border=1 width="50%">
<tr>
<td>	rollno </td>
<td>	name </td>
<td>	class </td>
</tr>

<?php
while($row = mysqli_fetch_array($result))
{
?>
<tr>
	<td><?php echo $row['rollno'];?> </td>
	<td><?php echo $row['name'];?> </td>
	<td><?php echo $row['class'];?> </td>
</tr>
<?php 
}
mysqli_close($con);
}
else if(isset($_POST['insert']))
{
	echo "$rollno";
	echo "<br>";
	echo "$name";
	echo "<br>";
	echo "$class";
	echo "<br>";
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
	$sql = "INSERT INTO std (rollno, name, class)
		VALUES ($rollno,'$name',$class)";
	if (mysqli_query($conn, $sql))
	{
    	echo "New record created successfully";
	} 
	else
	 {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	 }
mysqli_close($conn);
}
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

<input type="submit" name="show" value="show">
<input type="submit" name="insert" value="insert">
<input type="submit" name="delete" value="delete">
<input type="submit" name="update" value="update">
<input type="submit" name="search" value="search"><br><br>
</form>
</body>
</html>