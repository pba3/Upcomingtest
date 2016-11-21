<?php

$array = array('lastname<br>', 'email<br>', 'phone<br>');
$comma_separated = implode(",", $array);

echo $comma_separated; // lastname,email,phone

// Empty string when using an empty array:
var_dump(implode('hello', array())); // string(0) ""

?>
