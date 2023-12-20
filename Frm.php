<?php
extract($_POST);
// store the result in $third

if(isset($_POST['submit']))
{
	
$third=$first+$second;
} 
 
?>
 
<html>
<head>
 <title>add two text boxes and Display the result in 3rd text box with PHP</title>
</head>
<body>
<form method="post">
 <table align="center" border="1">
 <Tr>
 <th>Your Result</th>
 <td><input type="text" readonly="readonly" value="<?php echo @$third;?>"/></td>
 </tr>
 <tr>
 <th>Enter first number</th>
 <td><input type="text" name="first" value="<?php echo @$first;?>"/></td>
 </tr> 
 <tr>
 <th>Enter second number</th>
 <td><input type="text" name="second" value="<?php echo @$second;?>"/></td>
 </tr>
 <tr>
 <td align="center" colspan="2">
  <input type="submit" name="submit" value="Add">
 
 </tr>
 </table> 
</form>
</body>
</html>