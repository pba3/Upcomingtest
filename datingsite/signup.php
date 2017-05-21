<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_erros', 1);
include ("account.php");



//print("user"."$name "."pass "."$pass");
//echo"<br><br>";

//$type= get_case($type, $name, $pass);//calling function
//print "<br>$type";


//if ($type == 'A') {admin($name, $pass);};
?>

<!DOCTYPE html5>
<script>
function f(){

var ptrS = document.getElementById("S")



if (!ptrS.checked ){
alert("Please check the box before signup"); return false;


}

}

</script>

<style>
body {
    background-color: ffffff;
}

fieldset{ margin: auto;
		  width: 50%;
		  background: #FFEFD5;
		  padding: 50px;
		  }
		  


button:hover {
    opacity: 0.8;
}
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}
span.psw{
   float:right;
   padding-top:12px;
   }
</style>

<div class="imgcontainer">
<img src="date.png" alt="Headshot" class="Headshot">
</div>

<form action = "verify.php" onsubmit = "return f()">	
 
<fieldset><h1><legend>Signup Here</h1></legend>




<html>


<br>
<body>
<form>

<br>Username*<br><input        type = text name = "user"      id ="user"><br>
<br>Password<br><input         type = text name = "pass"      id= "pass"><br>
<br>Re-type password<br><input type = text name = "re-pass"   id= "re-pass"><br>
<br>Email*<br><input           type = text name = "email"     id= "email" ><br>

<br>
<input type=radio name = "type" id="S" >Signup<br>
<br><button type="button" onclick="f()">Submit</button>


</form>

</fieldset>
</form>



</body>
</html>



