<?php


include('index.php');
    $file= file("sample.csv");

      foreach($file as $K)
	    $csv[]=explode(',', $K);
	      echo array2table($csv);
//test the code	       
if (!file_exists("tmp/sample.csv")){
 die("File no where to be found");
}else{
$file=fopen("/tmp/sample.csv","r");
print"Open file sucessfully";
}





	      $file=files; 
	       try{
	       if ($file==file){
	       echo "OK ";
	       }
	       else{
	       echo'</br>';
	       throw new Exception ('Not the right file name. ');
	       }
	       }
	       catch( Exception $er){
		echo 'Erros:'.$er->getMessage();
}


?>

