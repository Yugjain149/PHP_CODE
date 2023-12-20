<html>
<body>
<form method="POST">
Enter first Number:
<input type="number" name="number1"/><br><br>
Enter Second Number:
<input type="number" name="number2"/><br><br>

<input type="submit" name="submit" value="Add" /><br><br>

</form>
<?php 
extract($_POST);
$sum="";
	if(isset($_POST["sumbit"]))
	{
		$number1=$_POST["number1"];
		$number2=$_POST["number2"];
		$sum=$number1+$number2;
		echo "The Sum of $number1 and $number2 is: ".$sum;
	}
?>
<br/>
Result:<input type="text" value="<?php echo $sum; ?>"/>
</body>
</html>