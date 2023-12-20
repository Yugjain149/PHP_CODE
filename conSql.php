<?php

$con=mysqli_connect("localhost","root","1234","yug");
if(mysqli_connect_errno())
{
	echo"Failed to connect to MYSQL:".mysqli_connect_error();
}
$result=mysqli_query($con,"SELECT * FROM school");

?>

<table border=1 width="100%">
<tr>
<td>Roll_NO</TD>
<td>NAME</td>
<td>M1</td>
<td>M2</td>
</tr>

<?php 

while($row=mysqli_fetch_array($result))
{
?>
	<tr>
	<td><?php echo $row["rollno"]; ?></td>
	<td><?php echo $row["name"]; ?></td>
	<td><?php echo $row["m1"]; ?></td>
	<td><?php echo $row["m2"]; ?></td>	</tr>
	<?php
}
mysqli_close($con);
?>