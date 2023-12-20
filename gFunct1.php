<?php

$x = 75;
$y = 25;
function addition()
{
	//$z1=$x + $y;
    $GLOBALS['z']=$GLOBALS['x'] + $GLOBALS['y'];
}
addition();
//echo $z1."<br>";
echo $z;

?>