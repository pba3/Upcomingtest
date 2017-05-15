<?php

//constants
define("TITLE", "Associative Array");

//custom variable
$my_name = "Ricihie pee";
$lesson_num = 7;

//Moustache Associative Array
$handlebar = array(
		   name            =>"Handlebar",
		   crep_factor     =>"High",
		   avg_growth_days => 14
		
	       	  );

?>

<!DOCTYPE html>
<html>
<head>
<title>PHP <?php echo TITLE ?></title>
<link href="styles.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
<a href="/"title="Back to directory" id="logo">
</a>

<h1>Tutorial <?php echo $lesson_num;?>: <small><?php echo TITLE ?></small></h1>
<hr>
<h2>My example</h2>
<div class="sandbox">
<h2><?php echo $handlebar[name]; ?>Moustahce</h2>
<p>This moustahce is quite the dirt squirrel! It boasts a crep factor of
<strong><?php echo $handlebar[crep_factor];?></strong> and takes <strong><?php
echo $handlebar[avg_growth_days];?> days</strong> to grow on average.</p>

</div>
<a href="example2.php" class="button">Back to the lecture</a>
<hr>

<small>&copy;<?php echo date('Y');?> - <?php echo $my_name;?></small>
</div>
</body>
</html>


