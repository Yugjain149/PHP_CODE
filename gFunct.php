<body>
<?php
	$a=10;
	echo $a."<br>";
	test();
	function test()
	{
		global $a;
		echo $a."<br>";
	}
?>
</body>	