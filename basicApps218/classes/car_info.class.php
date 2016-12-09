<?php
	//require_once 'car.class.php';

	$car =new car();
	echo '</br>';

	echo $car->getCarType();

	echo'</br>';
	$car->setCarType('Ferrari');
	echo $car->getCarType();


?>
