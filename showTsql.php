<?php
extract($_POST);
 if(isset($_POST['submit']))
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

?>

<html>
	<body>
	<form action="htmlSqlFrm.php" method="post">

	<input type="submit" name="back" value="Back to menu">
	
	</form>
	</body>
	<html>