<?php
$files =glob ('../image/a*.jpg');

//applies the function to each array element 
$files = array_map('realpath',$files);

print_r($files);


?>
