<?php

	$str="abckjdfaakldsfj北京你好897abd张90";
	//需求是请查询出有多少汉字，多少英文，多少数
	//思路,  汉字的utf-8编码的范围 \x4e00-\x9fa5

	$reg1='/[\x{4e00}-\x{9fa5}]/iu';

	preg_match_all($reg1,$str,$res);

	echo "汉字有".count($res[0])."个";

	echo "<pre>";
	print_r($res);
	echo "</pre>";


	$reg2='/[a-zA-Z]/i';

	preg_match_all($reg2,$str,$res2);

	echo "字母有".count($res2[0])."个";

	echo "<pre>";
	print_r($res2);
	echo "</pre>";

