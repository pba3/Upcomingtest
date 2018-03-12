<?php

$username ='';
$password='';

if(isset($_POST['username']) && isset($_POST['password'])){
  echo "Welcome ". $_POST['username']. "<br />";
  echo "Password: ".$_POST['password'];
  echo "somehthing";
  exit();// will exit out the login page immediately
  }
  echo "hi";

?>