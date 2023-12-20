<HTML>
<BODY>
<form action="sForm2.php" method="post">
<label for="name">Name:</label><br>
<input type="text" name="name" placeholder="enter name"><br>
<label for="email">email:</label><br>
<input type="text" name="email" placeholder="enter email"><br>
<label for="pwd">password:</label><br>
<input type="password" id="pwd" name="pwd" placeholder="enter password"><br>
<label for="age">Age:</label><br>
<input type="number" name="age" placeholder="enter your age"/><br><br>
<input type="time" name="time"/><br><br>

CHOOSE GENDER:<br>
<input type="radio" id="male" name="gender" value="male">
<label for="male">male</label><br>
<input type="radio" id="female" name="gender" value="female">
<label for="female">female</label><br>

<input type="hidden" name="hidden" value="hidden"/>

VEHICLE YOU HAVE:<br>
<input type="checkbox" id="vehicle" name="vehicle[]" value="bike">
I HAVE A BIKE <BR>
<input type="checkbox" id="vehicle" name="vehicle[]" value="car">
I HAVE A CAR <BR>
<input type="checkbox" id="vehicle" name="vehicle[]" value="boat">
I HAVE A BOAT<BR> <BR>
<span>THIS IS A BUTTON</span><br>
<input type="button" onclick="alert("hello world!")" value="click me!"><br><br>
<input type="date" name="date"><br><br>

<input type="reset">
<input type="submit">
</form>
</BODY>
</HTML>