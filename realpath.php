<?php
	$arr = array("realpath.php", "./realpath.php", "/tmp/realpath.php");
	foreach ($arr as $p)
	{
		print sprintf("%s => %s\n", $p, realpath($p));
	}
