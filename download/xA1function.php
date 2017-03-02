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
else if ($type !='A' and $amount == ''){
	exit ("Enter an amount");
}
else if ($type !='A' and $amount != (is_numeric($amount))){
	exit("Enter a number into amount ");
}
else if ($type !='A' and $amount <=0){
	exit("Enter a positive number into amount ");
}
//else{
	return $type;
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
	$s= "UPDATE account SET current_balance = current_balance - $amount where user = '$name' ";

} else if ($type =="D"){
//update A(Account) is current_balance for D. SQL is:
	$s= "UPDATE account SET current_balance = current_balance + $amount where user = '$name' ";
}
	print("<br><br> SQL s for update is:<br>");
	print("$s<br><br>");
	//print "Entered sql function. Just stub";
	mysql_query($s);
	($t=mysql_query($t)) or die(mysql_error());//return results
	//($t=mysql_query($t)) or die (mysql_error());


return;
}
function sql($type, $name, &$s1, &$s2){
	if ( $type=='A') { $s1 = "select * from account  "; } ; 
    if ( $type!='A') { $s1 = "select * from account where user = '$name' "; }; 
    if ( $type=='A') { $s2 = "select * from transaction  "; } ; 
    if ( $type!='A') { $s2 = "select * from transaction where user = '$name' "; }; 
	print "$s2";
}	
	//$returnthis ="Accounts info: <br><br> $result1 <br><br><br> Transaction info: <br><br> $result2";
	//return $returnthis;


function get_A ($s1) {
	$out =  "<br> \$s1 is:    $s1 <br>";
	($t=mysql_query($s1)) or die(mysql_error());
	while ($r=mysql_fetch_array($t)) {
	$user =$r["user"];
	$mail =$r["email"];
	$fullname  = $r["full name"];
	$address  = $r["address"];
	$initial_balance  = $r["initial_balance"];
	$current_balance  = $r["current_balance"];
	$out  .="<br>user is $user";
	$out  .="<br>mail is $email";
	$out  .= "<br> User fullname is $fullname";
	$out  .= "<br>Address is $address";
	$out  .= "<br>Initial balance is $initial_balance";
	$out  .= "<br>current is $current_balance";
	
	echo  "<br><br>Account info is: $result1";
	return $out;
	}
}
function get_T($s2) {
	$out =  "<br> \$s2 is:    $s2 <br>";
	($t=mysql_query($s2)) or die(mysql_error());
	while ($r=mysql_fetch_array($t)) {
	$user  =$r["user"];
	$type  =$r["type"];
	$amount=$r["amount"];
	$data  =$r["data"];
	if($type=='D'){
		$out  .="<br>user deposited \$$amount on $data". ".";
	} elseif ($type =='W'){
		$out .="<br>user withdrew \$$amount on $data". ".";
		}
	}
	//$out .="data is $data";
	
	//$out  .="<br>user is $user";
	//echo  "<br><br>Transaction info is: $result2";
	return $out;
}
function get_mail_address($type, $name){
        if ($type == 'A'){
            return 'greg1111@mailinator.com';
        }
        elseif ($type != 'A'){ 
            $fetch_email = "select email from account WHERE user = '$name'";
            ($fetch_email_query = mysql_query($fetch_email) or die(mysql_error()));
            $row = mysql_fetch_array($fetch_email_query);
            $emailing = $row["email"];
			echo $emailing;
            return $emailing;
        }
    }

function mymail($type, $name, $message){
	$to = 'greg1111@mailinator.com';
	$subject = 'account & transaction table? ';
	//$headers = "From:abc@somebody.com \r\n";
	//$message = "Hello how are you<br> Phin";
	$headers ='MIME-Version: 1.0';
	$headers .='Content-type: text/html; charset=iso-8859-1';
	echo('<br>	Mail is sent<br><br>');
	mail($to, $subject, $message, $headers);

}


?>