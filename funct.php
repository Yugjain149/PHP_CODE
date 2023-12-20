<?php
function hello()
{
	print"<h1>hello!</h1>";
	print"<p>Welcome to my web site</p>";
}
function printBreak($text)
{
	print"$text</br>";
}
function addNumbers($num1,$num2)
{
	return $num1 + $num2;
}

hello();
printBreak("yug");
$k=addNumbers(4,3);
echo "=".$k;
?>