<?php

require "login.class.php";
$login= new Login();
$_POST=$login->sanitize($_GET);

$login->validation_rules(array('username'=>'required|alpha_numeric','password'=>'required|max_len,100|min_len,7'));

$login->filter_rules(array('username'=>'trim|sanitize_string','password'=>'trim'));

$validated_data=$login->run($_POST);

if ($validated_data===false){
 echo $login->get_readable_errors(true);
 }else{
 	print_r($validated_data);
}

?>
