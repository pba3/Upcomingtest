<?php
session_start();
//An associative array containing session variables available to the current
//tranfers information from one page to the other
script
if($_SESSION['logged_in']){
   echo $_SESSION['name'];
   
  require( '_SESSION.php');
}
?>
