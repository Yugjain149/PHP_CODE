<?php
    $cars = array(50,20,30,10);
	$no=15;
    $z=0;
	for($i=0;$i<sizeof($cars);$i++)
	{
		if($no==$cars[$i])
		{
		  $z++;
		}
	}
	if ($z==1)
{
	echo "$no is there";
}
else
{
	echo "$no is not there";
}

?>
