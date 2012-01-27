<?php
	function load ($file)
	{
		require($file);
		print $var;
	}
	load("test1.php");
	load("test2.php");
