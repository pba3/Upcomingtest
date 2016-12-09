<?php
  require_once 'bankaccount.class.php';

  $Bankaccount=new Bankaccount();
  //echo '</br>';

  echo $Bankaccount->getBankaccountType();

  echo'</br>';
  $Bankaccount-> setBankaccountType('& Savings');
  echo $Bankaccount->getBankaccountType();

?>
