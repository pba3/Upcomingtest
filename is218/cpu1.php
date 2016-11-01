<?php

//sleep for 3 seconds as prescribed
 sleep(3);

 $data = getrusage();
 echo "User time: ".
 	($data['ru_utime.tv_sec'] +
	$data['ru_utime.tv_usec'] / 1000000);

 echo "System time: ".
 	($data['ru_stime.tv_sec'] +
	$data['ru_stime.tv_usec'] / 1000000);

?>
