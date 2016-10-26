<?php
function test(){
// contain references to all variables which are currently defined in the
//global scope of the script. The variable names are the keys of the array.
 	$foo ="local variable";

	echo '$foo in global scope:'.$GLOBALS["foo"]."\n";

	echo'$foo in current scope:'.$foo."\n";

}

 $foo ="Exampl content<BR>";
 test();





?>
