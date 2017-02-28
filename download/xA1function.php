<?php
//echo "<br>Hello from functions file.";
//return "Just a stub.";
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	ini_set('display_erros', 1);

function get_case($type, $name, $pass, $amount) {
if ($type != 'A'and $type !='D' and $type !=='W'){
	exit ("Select either Admin, Deposit, or Withdraw. ");
}
else if ($name=='' or $pass == ''){
	exit("Enter your username and/or password ");
}
else if ($type=='A' and $amount !=''){
	exit("Admin use other account when making deposites ");
}
else if ($type !='A' and $amount != ''){
	exit ("Enter an amount");
}
else if ($type !='A' and $amount != (is_numeric($amount))){
	exit("Enter a number into amount ");
}
else if ($type !='A' and $amount <=0){
	exit("Enter a positive number into amount ");
}
//else{
	//return $type;
}


function admin ($name, $pass){
	if ($name =='admin' && $pass =='007'){
	print 'hello there admin<br>';	
	}
	else{
		exit("Not allowed");
	}
}
//if ($name !='admin' || $pass !='magic')exit with msg...



//function user
function user ( $type, $name, $pass, $amount  ){
	$s="select * from account where user ='$name' && pass ='$pass'";
	$t = mysql_query($s);
	if (mysql_num_rows($t) ==0){
		exit("username or password is not valid");
	}
	if ($type =='W'){
		$r=mysql_fetch_array($t);
		$balance =$r["current_balance"];
		if ($amount > $balance){
			exit("not enough funds to withdraw");
		}
	}
}
//if it's W check if cureent_balance < $amount : exit
// exit ( "stop overdraw" );

function update ($type, $name, $amount){
//insert to T(Transacion)W. SQL is:
$t = "insert into transaction values ('$name' ,'$type', '$amount', NOW() )";
if ($type =="W"){
	$s= "update account Set current_balance = current_balance - $amount where user = '$name' ";

} else if ($type =="D"){
//update A(Account) is current_balance for D. SQL is:
	$s= "update account Set current_balance = current_balance + $amount where user = '$name' ";
}
	print("<br><br> SQL s for update is:<br>");
	print("$s<br><br>");
	print "Entered sql function. Just stub";
	mysql_query($s);
	($t=mysql_query($t)) or die(mysql_error());//return results
	//($t=mysql_query($t)) or die (mysql_error());


return;
}



?>