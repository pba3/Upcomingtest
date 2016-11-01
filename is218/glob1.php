<?php

//gets all php files and txt files
 $files = glob('*.{php,txt}', GLOB_BRACE);

 print_r($files);




?>
