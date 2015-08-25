<?php

	$str="ajkfd447a;ls3345555dkjf;alsd8900f66665gfsf23445dasfd;;adgi3834fdsakasd3333gfsdfgjk";
	//find sequent 4 numbers
	//3345 8900 3834
	$reg='/(\d)\1{3}/i';

	$str="111-555-666adgfsd;f888-000-555";
	$reg='/(\d)\1\1-(\d)\2\2-(\d)\3\3/i';




	//add 123.454.899.html after path 
	$str=$_SERVER['PATH_INFO'];
	$reg='/(\d+).(\d+).(\d+)\.html/i';

	$str="aafdoigeofaf北京欢迎呀9003尺子134123aa";
	$reg='/[\x{4e00}-\x{9fa5}]/iu';

	//$reg: rule
	//$str: string
	//$res: result in array
	preg_match_all($reg,$str,$res);

	echo "汉字有".count($res[0]);

	echo '<pre>';
	print_r($res);
	echo '<pre>';
