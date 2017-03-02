<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	ini_set('display_erros', 1);
	
echo"Results from xA1.php with data from xA1.html";
echo"<br>";
include ("account.php");
include("xA1function.php");

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
$type= get_case($type, $name, $pass, $amount);//calling function
print "<br>$type";

if ($type == 'A') {admin($name, $pass);};
if ($type != 'A') {user($type, $name, $pass, $amount);};
if ($type !='A')  {update($type, $name, $amount);};

sql( $type, $name, $s1, $s2 );//calling
$result1= get_A($s1);
$result2= get_T($s2);
echo $result1.'<br>'.$result2;
//$result1= get_A( $s1) . $result2=get_T($s2);
if(isset($_GET['mailrequest'])){
	mymail($type, $name, $result1.$result2);};
//return $returnthis;
//print "<br><br>Entered user function .  <br><br>";
get_mail_address($type, $name);
//user ( $type, $name, $pass, $amount  );


//print "<br><br>Passed user credentials and overwithdraw test.  Just a stub";
//print "<br>Entered admin function.";

//update
print "<br> <br>This interaction is completed";


?>

