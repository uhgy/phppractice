<?php

	//定义一个常量，用于其他文件的判断
	//入口文件常量
	define('ACCESS','ACC');

	//加载初始化类Application.class.php
	include_once 'Core/Application.class.php';

	//调用系统初始化方法
	//调用Application类的静态方法
	Application::run();