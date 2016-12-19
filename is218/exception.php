<?php



include('index.php');
    $file= file("sample.csv");

      foreach($file as $K)
	    $csv[]=explode(',', $K);
	      echo array2table($csv);
//test the code	       
if (!file_exists("sample.csv")){
 die("file not found");
}else{
$file=fopen("sample.csv","w");
print"Open file sucessfully";
}





	       
	       try{
	       if ($file==files){
	       echo "OK ";
	       }
	       else{
	       echo'</br>';
	       throw new Exception ('Not the right file name.Sorry! ');
	       }
	       }
	       catch( Exception $er){
		echo 'Error:'.$er->getMessage();
}


?>

