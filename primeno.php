<?php
$no=20;
$z=0;
for($a=1;$a<=$no;$a++)
{
	if($no % $a==0)
	{
	$z++;
	}
}
if ($z==2)
{
	echo "$no is prime number";
}
else
{
	echo "$no is not a prime number";
}


?>