<?php

	echo str_repeat("",1024);
	for($i=0;$i<5;$i++){
	echo $i;
	ob_flush();
	flush();
	sleep(1);
	}


?>