<?php
	
	$rrr = 'trust';
	$b = 'rrr';
	print 'isset($$b) => ' . isset($$b) . "\n";
	print '$$b => ' . $$b . "\n";

	if (require_once("valiable_val.php"))
	{
		print 'isset($$b) => ' . isset($$b) . "\n";
		print '$$b => ' . $$b . "\n";
	}
