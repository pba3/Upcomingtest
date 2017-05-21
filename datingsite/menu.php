
<?php
include("account.php");

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_erros', 1);
include ("account.php");


($dbh = mysql_connect ( $hostname, $username, $password))
	or die ( "Unable to connect to MySQL database" );

mysql_select_db($project);
print "Successfully connected to mySQL.<br><br><br>";
($t  = mysql_query("select * from State")) or die (  mysql_error() );

	
print "<select name =\"State\"  >";	
	while  (   $r  =   mysql_fetch_array ( $t )  ) //Loop over the rows $r of results $t
{
	echo "<br>";
	$st     = $r [ "country"]; 
    $abb      = $r [ "state"]; 
    


    print   "<option  value =\"$abb\">";		//Define value for menu choice
	print   $st;	                        //Define visible menu choice
    print 	",";
	print	$abb;

	print   "</option>"  ;				    //End option tag
	print"<br>";

}



?>