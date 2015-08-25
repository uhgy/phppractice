<?php

	class View{

		private $data;

		public function display($template){
			//include_once VIEW_DIR . "/$template";
			//echo VIEW_DIR . '/' . MODULE . "/$template"; exit;
			//var_dump($this->data); exit;
			$str = file_get_contents(VIEW_DIR . '/' . MODULE . "/$template");
			foreach($this->data as $key => $value){
				$str = str_replace('{' . $key . '}', $value, $str);
			}
			echo $str;
			exit;
		}

		public function assign($key, $value){
			$this->data[$key] = $value;
		}




	}