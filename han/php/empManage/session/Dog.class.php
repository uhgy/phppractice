<?php
		class Dog{
		private $name;
		private $age;
		private $intro;
		function __construct($name,$age,$intro){
			$this->name=$name;
			$this->age=$age;
			$this->intro=$intro;
		}

		public function getName(){
			return $this->name;
		}
	}
?>