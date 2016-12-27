<?php

ob_start();
session_start();


$servername="sql1.njit.edu";
$username="pba3";
$password="dHjx5bpPm";

try{
	$DB_con=new PDO('mysql:host=sql1.njit.edu;dbname=pba3', 'pba3',
	'dHjx5bpPm');
	//set the PDO error mode to exception
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 echo"Connection successfull";
	}
catch(PDOException $er)
{
	echo"Connection failed: ".$er->getMessage();
	
}	
	

		include_once'class.user.php';
    $user =new USER($DB_con);

?>
