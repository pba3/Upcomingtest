<?php

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
else{
	return $type;
}
}

function admin ($name, $pass){
	if ($name =='admin' && $pass =='007'){
	print 'hello there admin<br>';	
	}
	else{
		return("Not allowed");
	}
}

function get_A($type, $s1 ) {
$s1="select * from account where user ='greg'";
$out = "<br> \$s is: $s1<br>" ;
($t=mysql_query($t)) or die(mysql_error());
while ($r=mysql_fetch_array($t)) {
	$user =$r["user"];
	$mail =$r["email"];
	$out  .="<br>user is $user";
	$out  .="<br>mail is $email";
 }
 return $out;
}

//function user
function user ( $type, $name, $pass, $amount  ){
	$s="select * from account where user ='$name' && pass ='$pass'";
	$b = mysql_query($s);
	if (mysql_num_rows($b) ==0){
		die("username or password is not valid");
	}
	if ($type =='W'){
		$r=mysql_fetch_array($b);
		$balance =$r["current_balance"];
		if ($amount > $balance){
			die("not enough funds to withdraw");
		}
	}
}

function update ($type, $name, $amount){
//insert to T(Transacion). SQL is:
	$t = "insert into transaction values ('$name' ,'$type', '$amount', NOW() )";
	if ($type =="W"){
		$s= "update account Set current_balance = current_balance - $amount where user = '$name' ";
	} else if ($type =="D"){
		$s= "update account Set current_balance = current_balance + $amount where user = '$name' ";
	}
	
	print("<br><br> SQL s for update is:<br>");
	print("$s<br><br>");
	print "Entered sql function. Just stub";
	mysql_query($s);
	($t=mysql_query($t)) or die(mysql_error());//return results
	//return;

}

function mymail($type, $name, $results1){
  if(isset($_GET["mailrequest"]) && !empty($_GET["mailrequest"])){
	echo "Mail is sent";
}
	else{
	echo "failed to send mail";
}

$to = 'pba3@mailinator.com';
$subject = 'hey there! how are you? ';
$results1 = 'result <br> How are you?';
$headers = "From:abc@somebody.com \r\n";
$result1 = "Hello<br> Phin";
$headers .='MIME-Version: 1.0';
$headers .='Content-type: text/html; charset=iso-8859-1';
//mail
}

?>