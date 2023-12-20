<html>
<body>

<form action="instPHsql.php" method="post">

<label for="rollno">ROLLNO:</label>
<input type="number" name="rollno" placeholder="enter rollno"/><br><br>
<label for="name">Name:</label>
<input type="text" name="name" placeholder="enter name"><br><br>
<label for="class">CLASS:</label>
<input type="number" name="class" placeholder="enter class"/><br><br>

<input type="reset">
<input type="submit" name="submit" value="insert"><br><br>


</form>

</body>
</html >

	<html>
	<body>
	<form action="deleteFrm.php" method="post">
	<label for="rollno">enter rollno you want to delete:</label>
	<input type="number" name="rollno" placeholder="enter rollno"/>
	

	<input type="submit" name="delete" value="Delete"><br><br>
	
	</form>
	</body>	
	</html>

<html>
	<body>
	<form action="UpdateSql.php" method="post">
	<label for="up">for update click on this button:</label>
	<input type="submit" name="up" value="UPDATE"/>
	
	</form>
	</body>
<html>

	<html>
	<body>
	<form action="showTsql.php" method="post">

	<input type="submit" name="submit" value="show rows">
	
	</form>
	</body>	
	</html>
