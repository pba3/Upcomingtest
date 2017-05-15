<?php

//constants
define("TITLE", "Array");

//custom variable
$my_name = "Ricihie pee";
$lesson_num = 6;

//Moustache Array
$moustaches = array("Handler", "Salvador Dali", "Fu Manchu");

?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo TITLE ?></title>
<link href="styles.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
<a href="/"title="Back to directory" id="logo">
</a>

<h1>Tutorial <?php echo $lesson_name;?>: <small><?php echo TITLE ?></small></h1>
<hr>
<h2>My example</h2>
<div class="sandbox">
<h2>Moustache Types</h2>
<ul>
<li><?php echo $moustaches[0] ?> </li>
<li><?php echo $moustaches[1] ?>  </li>
<li><?php echo $moustaches[2] ?>  </li>
</ul>
</div>
<a href="example2.php" class="button">Back to the lecture</a>
<hr>

<small>&copy;<?php echo date('Y');?> - <?php echo $my_name;?></small>
</div>
</body>
</html>


