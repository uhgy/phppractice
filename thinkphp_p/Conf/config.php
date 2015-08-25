<?php
return array(
		//'配置项'=>'配置值'
		'APP_GROUP_LIST' => 'Home,Admin',
			'DEFAULT_GROUP'=>'Home',
	
			    /* 数据库设置 */
	    'DB_TYPE'               => 'mysql',     // 数据库类型
		'DB_HOST'               => 'localhost', // 服务器地址
		'DB_NAME'               => 'thinkphp_p',          // 数据库名
		'DB_USER'               => 'root',      // 用户名
		'DB_PWD'                => 'root',          // 密码
		'DB_PORT'               => '3306',        // 端口
		'DB_PREFIX'             => '',    // 数据库表前缀
	    'DB_CHARSET'            => 'utf8',      // 数据库编码默认采用utf8
		//'APP_DEBUG'				=> true,    
		'DB_FIELDS_CACHE'		=> false,
		'SHOW_PAGE_TRACE' 		=> true,
		'SESSION_AUTO_START'    => true,    // 是否自动开启Session
		//'LOAD_EXT_FILE'			=> 'user'
		
		
);
?>