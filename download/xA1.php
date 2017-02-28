<?php
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

print("name"."$name "."pass "."$pass"."amount "."$amount "."type "."$type ");
echo"<br><br>";


//protection
$case=get_case($type, $name, $pass, $amount);//calling function
print "$case";
if ($case == 'A') {admin($name, $pass);};
if ($case != 'A') {user($type, $name, $pass, $amount);};

//print "$type";
//print "<br><br>Entered user function.  ";

//admin($name,$pass);
$usr = user($type,$name,$pass,$amount);
print "$usr";
print "<br><br>Passed user credentials and overwithdraw test.  Just a stub";
print "<br>Entered admin function.";

//print " $admin";

//$user = user($type,$name,$pass,$amount);
//if ($type == 'A') {admin($name, $pass);};
//if ($type != 'A') {user($type, $name, $pass, $amount);};


//update
if($case != 'A'){update($type,$name,$amount);};
print "<br> <br>This interaction is completed";

mymail( $type, $name, $results1);
//$results1 = "hello";

$results1= get_A($type, $s1);
echo $results1;

//$mail = mymail($to, $subject, $result1 , $headers);


?>

