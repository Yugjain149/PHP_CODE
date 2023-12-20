<html>
<body>
--1st Way--<br><br>

Welcome,<br><?php echo $_POST["name"];?><br>
Your email address is:<?php echo $_POST["email"];?><br>
Your password is:<?php echo $_POST["pwd"];?><br>
Your age is:<?php echo $_POST["age"];?><br>
TIME is:<?php echo $_POST["time"];?><br>
Your gender is:<?php echo $_POST["gender"] ?><br>
VEHICLE=<?php print_r(implode(",",$_POST["vehicle"]))  ?><BR>
date you have chosen=<?php echo $_POST["date"]; ?><br><br>



--2nd way(values will show in array format)--<br><br>
<?php
print_r($_POST);
?>
</body>
</html>