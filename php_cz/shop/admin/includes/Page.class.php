<?php

	class Page{


		public static function show($basename, $counts, $page = 1){
			$pagesize = $GLOBALS['config']['admin_goods_pagecounts'];
			$pageCounts = ceil($counts / $GLOBALS['config']['admin_goods_pagecounts']);
			

			$prev = ($page == 1) ? $page : ($page - 1);
			$next = ($page == $pageCounts) ? $page : ($page + 1);

			$str = <<<ENDF
				总共有{$counts}条记录，每页显示{$pagesize},当前是第{$page}页&nbsp;&nbsp;
				<a href="{$basename}&page=1">首页</a>
				<a href="{$basename}&page={$prev}">上一页</a>
				<a href="{$basename}&page={$next}">下一页</a>
				<a href="{$basename}&page={$pageCounts}">末页</a>
ENDF;
			
			$click = '';
			for($i = 1;$i <= $pageCounts;$i++){
				$click .= "&nbsp;&nbsp;<a href='{$basename}?page={$i}'>{$i}</a>";
			}

			return $str .= $click;
		}


	}