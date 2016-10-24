<?php

//include('index.php');
 $file= file("sample.csv");

  foreach($file as $K)
    $csv[]=explode(',', $K);

    print_r($csv);
   


 
?>
