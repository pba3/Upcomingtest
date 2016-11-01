<?php
 function foo() {

 	$args = func_get_args();

	foreach ($args as $k => $v) {
	  echo "arg".($k+1).": $v\n";
        }

 }

 foo();//nothing is printed

 foo('hello');
 //arg1 prints hello

 foo('hello', 'world', 'again','yes');
//prints out arg continously even thos arg number was not given. It  already
//knows to print out the arg whenever a value is assigned.


?>
