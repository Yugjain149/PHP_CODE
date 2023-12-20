<html>
<body>

Your Name is : <?php echo $_POST["name"];?><br>
Your Father's Name : <?php echo $_POST["fname"];?><br>


<?php
if(isset($_POST["gender"]))
{
	$gen = $_POST["gender"];
}
else
{
	$gen = "no button selected";
}
echo "gender=".$gen;
?><br><br>
<?php
if(isset($_POST["submit"]))
{
if(isset($_POST["check_list"]))
{
	//counting no. of checked checkboxes.
	$checked_count=count($_POST["check_list"]);
	echo "you have selected following".$checked_count."option(s):<br/>";
	//loop to store and display values of indivisual checked checkbox
	foreach($_POST["check_list"] as $selected )
	{
		echo"<p>".$selected."</p>";
	}
}
	else
	{
		echo"<b>Please Select Atleast one Option</b>";
	}
}	
?>
</body>
</html>
