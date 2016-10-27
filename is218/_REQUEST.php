<?php


$_GET['foo'] = 'a';
$_POST['bar'] = 'b';
var_dump($_GET); // Element 'foo' is string(1) "a"
var_dump($_POST); // Element 'bar' is string(1) "b"
//array that by default contains the contents of $_GET, $_POST and $_COOKIE.
var_dump($_REQUEST); // Does not contain elements 'foo' or 'bar'

?>
