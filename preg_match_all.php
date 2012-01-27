<?php
	$regs = array(
			"|/(a\w+)/.*|U",
			"|/(b\w+)/.*|U",
			"|/(a\w+)(\w+)/.*|U",
			"|/\w+/((\w+)(\d+))/(\w+)$|U",
		);
	
	$p = "/aabb/cc001/ddd";
	foreach ($regs as $v)
	{
		$m = array();
		$k = preg_match_all($v, $p, &$m);
		print "result: $k\n";
		print "  pattern: $v\n";
		print "  path: $p\n";
		//var_dump($m);
		if (isset($m[0][0]) && mb_strlen($m[0][0]))
		{
			print_R($m);
			print "  substr path: ". substr_replace($p, "", 0, mb_strlen($m[0][0])) . "\n";
		}
	}
