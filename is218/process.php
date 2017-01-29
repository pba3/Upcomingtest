<!DOCTYPE html>
<html>




  <?php


  	$name=$_POST['name'];//thihs is an array
	echo 'Hello, '.$name;
	echo'</br>';

//	$people=array('Alex', 'bob', 'caty');
//	print_r($people);
//	echo $people[2];
	$numbers=array(5,3,7);//this is an array 
	$sum=1;

	foreach($numbers as $number){
		$sum=$sum + $number;

	}
		echo $sum;





  ?>









</html>
