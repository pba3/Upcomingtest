<?php
//An associative array of variables passed to the current script via the URL
//parameters
echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';
?>
