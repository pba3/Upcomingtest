<!DOCTYPE html>
<html>

<select name  = "state">
<option value = "NJ"> New Jersey </option>
<option value = "NJ"> New Jersey </option>

</select>

<?php

include("account.php");
echo"<br>";
//db connection
($dbh = mysql_connect ( $hostname, $username, $password))
or die ( "Unable to connect to MySQL database" );
mysql_select_db($project);
print "Successfully connected to mySQL.<br><br><br>";




?>

</html>
