<html>
<body>

<?php
$name_of_radio_button = $_POST["credit_card"];
echo $name_of_radio_button;
?><br><br>

<?php
if(isset($_POST["credit_card"]))
{
	$name_of_radio_button = $_POST["credit_card"];
}
else
{
	$name_of_radio_button = "no button selected";
}
echo $name_of_radio_button;
?>

</body>
</html>