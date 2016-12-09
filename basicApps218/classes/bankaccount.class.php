<?php

class Bankaccount {
  
   protected $_type='Checkings';

   public function getBankaccountType(){
   	return $this->_type;
   
   }
   public function setBankaccountType($newBankaccountType){
   	$this->_type=$newBankaccountType;

 	}
}
