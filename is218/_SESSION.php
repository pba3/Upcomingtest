<?php
session_start();
$logged_in=TRUE;

if($logged_in){
   
   $SESSION['logged_in']=true;
   $SESSION['name']="richoco";
}
else{
  die();

}



?>
