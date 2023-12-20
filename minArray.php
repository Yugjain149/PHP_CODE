<?php
$cars=array(10,24,33,12,9);
$n=$cars[0];

for($i=0;$i<sizeof($cars);$i++)
{
   if($n>=$cars[$i])
		{
		  $n=$cars[$i];
		}
}
echo "$n is min";
?>