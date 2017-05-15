<?php
session_start();

function MyAdmin($name, $pass){


if ($name == "richi" && $pass =="888")
echo "hey admin logged in as richi";


elseif ($name!="richi" && $pass!="888")
echo"Wrong credentials";
}
echo MyAdmin("richi", "888");

?>


<!DOCTYPE html>
<html>
<p>simple admin form</p>
<form action="y.php" onsubmit "return MyAdmin()"><br>
admin name<input type="text" name ="admin" id="A" placeholder=name><br><br>
passa requ<input type="text" name ="pass"  id="P" placeholder=pass><br><br>

<input type=submit onclick= "MyAdmin()">
</form>



</html>
