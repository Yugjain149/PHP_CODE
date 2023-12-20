<?php
    $cars = array(50,20,30);
	$sum=0;

	for($i=0;$i<sizeof($cars);$i++)
	{
		$sum=$sum+$cars[$i];
	}
	echo "sum=$sum";
?>
