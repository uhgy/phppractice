<?php

	//视图类
	class View{
		//属性
		private $data;
		
		//加载模板
		//@param1 string $template，要加载的模板文件
		public function display($template){
			//include_once VIEW_DIR . "/$template";
			 
			 //echo VIEW_DIR .  '/' . MODULE ."/$template";exit;
			//var_dump($this->data);exit;
			//1.加载整个文件到字符串
			$str = file_get_contents(VIEW_DIR .  '/' . MODULE ."/$template");

			//2.进行数据替换
			foreach($this->data as $key => $value){
				//key = url ,value = 'index.php?moduel'
				$str = str_replace('{' . $key . '}',$value,$str);
			}

			//3.	输出
			echo $str;
			exit;
		}

		//用来保存数据，把数据放到data属性
		//@param1 string $key，要保存的数据（变量）的名字
		//@param2 string $value，要保存的数据的值
		public function assign($key,$value){
			$this->data[$key] = $value;
		}
	}
