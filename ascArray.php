<?php
$cars=array(10,24,33,12,9);
$n=$cars[0];

  for($i=0;$i<sizeof($cars);$i++)
 {
     for($j=$i+1;$j<sizeof($cars);$j++)
		 
		 {
			if($cars[$i]>$cars[$j])
			{
               $n=$cars[$i];
			   $cars[$i]=$cars[$j];
			   $cars[$j]=$n;
			}				
		 }
 }
 for($i=0;$i<sizeof($cars);$i++)
 {
		 echo $cars[$i];
		 echo "<br/>";
 }

?>