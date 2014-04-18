<?php 

class test{

	function __construct($arg){
		date_default_timezone_set($arg);
	}
}



$today = new test('America/Chihuahua');


phpinfo();

 ?>