<?php
    $cars = array(15,20,50,10,5);
    $n=0;
	for($i=0;$i<sizeof($cars);$i++)
	{
		if($n<=$cars[$i])
		{
		  $n=$cars[$i];
		}
	}
echo "$n is max";
?>
