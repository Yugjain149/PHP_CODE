<html>
<head>
<title>PHP:GET VALUES of MULTIPLE CHECKED CHECKBOXES</title>
<link rel="stylesheet" href="php_checkbox.css"/>
</head>
<body>
<div class="cointainer">
<div class="main">
<h2> PHP:Get Values of Multiple Checked CHECKBOXES</h2>
<form action="cbForm1.php" method="post">
<label class="heading">Select Your Technical Exposure:</label>
<input type="checkbox" name="check_list[]" value="c/c++">
<label>C/C++</label>
<input type="checkbox" name="check_list[]" value="java">
<label>java</label>
<input type="checkbox" name="check_list[]" value="php">
<label>PHP</label>
<input type="checkbox" name="check_list[]" value="html">
<label>HTML</label>
<input type="checkbox" name="check_list[]" value="unix/linux">
<label>UNIX/LINUX</label>
<input type="submit" name="submit" value="submit">
</form>
</div>
</div>
</body>
</html>