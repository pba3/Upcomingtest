<?php
  function my_autoloader($html){
   include 'classes/'.$html.'.class.php';
   }

   spl_autoload_register('my_autoloader');

   $signup = new signup;




?>
