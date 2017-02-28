<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	ini_set('display_erros', 1);
	
echo"Results from xA1.php with data from xA1.html";
echo"<br>";

include("xA1function.php");
include ("account.php");
($dbh = mysql_connect ( $hostname, $username, $password))
	or die ( "Unable to connect to MySQL database" );

mysql_select_db($project);
print "Successfully connected to mySQL.<br><br><br>";

//INPUT
$name=  $_GET["user"];
$pass=  $_GET["pass"];
$amount=$_GET["amount"];
$type=  $_GET["type"];

print("user"."$name "."pass "."$pass"."amount "."$amount "."type "."$type ");
echo"<br><br>";

//protection
//get_case($type, $name, $pass, $amount);//calling function


if ($type == 'A') {admin($name, $pass);};
if ($type != 'A') {user($type, $name, $pass, $amount);};

print "<br><br>Entered user function.  ";

admin('admin', 007);
user ( $type, $name, $pass, $amount  );

print "<br><br>Passed user credentials and overwithdraw test.  Just a stub";
print "<br>Entered admin function.";

//if ($type == 'A') {admin($name, $pass);};
//if ($type != 'A') {user($type, $name, $pass, $amount);};

//update
if($case != 'A'){update($type,$name,$amount);};
print "<br> <br>This interaction is completed";

//mymail( $type, $name, $results1);
//$results1 = "hello";

//$results1= get_A($type, $s1);
//echo $results1;

//$mail = mymail($to, $subject, $result1 , $headers);


?>

