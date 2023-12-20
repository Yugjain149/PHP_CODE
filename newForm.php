<html>
<body>
<form action="newForm1.php" method="post">
<label for="name">Name:</label><br>
<input type="text" name="name" placeholder="enter your name"><br>
<label for="name">FATHER'S Name:</label><br>
<input type="text" name="fname" placeholder="enter your father's name"><br>

CHOOSE GENDER:<br>
<input type="radio" name="gender" value="male">Male<br>
<input type="radio" name="gender" value="female">Female<br>


GAMES YOU LIKE:<br>
<input type="checkbox" name="check_list[]" value="FOOTBALL">
<label>FOOTBALL</label><br>
<input type="checkbox" name="check_list[]" value="HOCKEY">
<label>HOCKEY</label><br>
<input type="checkbox" name="check_list[]" value="TABLETENNIS">
<label>TABLETENNIS</label><br>
<input type="checkbox" name="check_list[]" value="BASKETBALL">
<label>BASKETBALL</label><br>
<input type="checkbox" name="check_list[]" value="VOLLEYBALL">
<label>VOLLEYBALL</label><br><br>

<input type="submit" name="submit" value="submit">

</form>
</body>
</html>
