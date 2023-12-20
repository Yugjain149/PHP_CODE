<!DOCTYPE HTML>
<html>
<body>

<?php
$arr1=array(
array("ram",70,80,90),
array("ravi",75,85,95),
array("yug",80,90,100),
);
$arr2=array(
array("ram",65,75,85),
array("ravi",70,80,90),
array("yug",75,85,95),
);
for($row=0;$row<3;$row++)
{
   echo "<p><b>Row number $row</b></p>";
   echo "<li>".$arr1[$row][0]."</li>";
   echo "<ul>";

 for($col=1;$col<4;$col++)
 {
	 echo "<li>".(intval($arr1[$row][$col])+intval($arr2[$row][$col]))."</li>";
 }
    echo "</ul>";
}
?>

</body>
</html>

