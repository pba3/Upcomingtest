<?php
//define constants
define("TITLE","Variable and Constants");

//your variable
$my_name = "Richie";
$fav_color = "Green";
$birth_year = 1993;



date_default_timezone_set('America/New Jersey');
$today = date('F j,  Y');
$this_year = date('Y');

//use php to calculate the differecne btwn your birth year and this year to
//show your age
$my_age = ($this_year - $birth_year);

?>

<!DOCTYPE html>
<head> <title> Get your hands dirty: <?php echo TITLE ?></title>
<link href="/assets/style.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
<a href="/" title="Back to directory" id="logo">

</a>
<h1> Get your hands dirty:<small><?php echo TITLE;?></small>
<hr>
<h2>My example</h2>
<div class="sandbox">

<h3>Today's date:</h3>
<p><?php echo $today;?></p>

<h3>my name:</h3>
<p><?php echo $my_name; ?></p>

<h3>my favorite color:</h3>
<p><?php echo $fav_color ?></p>

<h3>my age:</h3>
<p><?php echo $my_age; ?></p>
</div>


<hr>
<small>&copy;<?php echo $this_year;?> - <?php echo $my_name; ?></small>

</body>
</html>


