<?php

 class Car{
 	protected $_type='Rolls Royce';

	public function getCarType(){
		return $this->_type;
	}
	public function setCarType($newCarType){
		$this->_type=$newCarType;
	}
	}
?>
