<?php

 function my_autoloader($class){
  include 'classes/'.$class.'.class.php';
  }

  spl_autoload_register('my_autoloader');
  $car_info=new car_info;
 // $hello=new hello;
 // $cycleformview=new cycleformview;
 // $myexample=new myexample();

?>
