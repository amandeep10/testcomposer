<?php
namespace vendor;
class autoload {
	public function __construct(){
		 spl_autoload_register(array($this, 'loader'));
	}
	private function loader($className) {
		echo 'Trying to load ', $className, ' via ', __METHOD__, "()\n";
		include $className . '.php';
	}
} 

$autoloader = new ClassAutoloader();
$obj = new Class1();
$obj = new Class2();