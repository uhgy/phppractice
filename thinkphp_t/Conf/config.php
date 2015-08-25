<?php
return array(
		//'配置项'=>'配置值'
		'DEFAULT_MODULE'        => 'Index', // 默认模块名称
		'DEFAULT_ACTION'        => 'index', // 默认操作名称
		'URL_MODEL'             => 2,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
		// 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式，提供最好的用户体验和SEO支持
		'URL_PATHINFO_DEPR'     => '/',	// PATHINFO模式下，各参数之间的分割符号
		'APP_GROUP_LIST'        => 'Home,Admin',      // 项目分组设定,多个组之间用逗号分隔,例如'Home,Admin'
		'DEFAULT_GROUP'         => 'Admin',  // 默认分组
		'URL_CASE_INSENSITIVE'  => false,   // 默认false 表示URL区分大小写 true则表示不区分大小写
		'TMPL_ACTION_ERROR'     => THINK_PATH.'Tpl/dispatch_jump.tpl', // 默认错误跳转对应的模板文件
		'TMPL_ACTION_SUCCESS'   => THINK_PATH.'Tpl/dispatch_jump.tpl', // 默认成功跳转对应的模板文件
		'TMPL_TEMPLATE_SUFFIX'  => '.html',     // 默认模板文件后缀
		
		'TMPL_L_DELIM' => '{',
		'TMPL_R_DELIM' => '}',
		'TMPL_PARSE_STRING' => array (
			
				'__CSS__' => '/Public/Css',
				'__JS__' => '/Public/Js',
				'__UPLOADS__' => '/Public/Uploads'
		),
		
		

		
);
?>