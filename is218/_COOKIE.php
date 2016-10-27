<?php

//An associative array of variables passed to the current script via HTTP
//Cookies.
//echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';
setcookie("color", "red");
//As long as you have your cookie set to any value $_COOKIE outputs whatever
//you set as the cookie
//Also it outputs previous entry as new color

echo $_COOKIE["color"];//color is red

setcookie("color","green<br>");//new color now becomes blue
echo $_COOKIE["color"];
?>
