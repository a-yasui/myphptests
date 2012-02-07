<?php
// via http://php.net/manual/ja/function.debug-backtrace.php
class A {
        function something() {
                $s = debug_backtrace();
				print_r($s);
        }

}

class B {
      var $jip; 
        function execute() {
                $a = new A();
                $this->jip = "jippii";  
                $a->something(); 
        }
}

class C extends B {
	function execute () {
		parent::execute();
	}
}

class D {
	function A() {
		$c = new C();
		$c->execute();
	}
}

$control = new D();
$control->A();
