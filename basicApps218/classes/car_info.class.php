<?php
	require_once 'car.class.php';

	$car =new Car();

	echo $car->getCarType();

	echo'</br>';
	$car->setCarType('Ferrari');
	echo $car->getCarType();


?>
