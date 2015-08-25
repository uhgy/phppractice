<?php

	class Emp{
		private $id;
		private $name;
		private $grade;
		private $email;
		private $salary;

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id=$id;
		}

		public function getName(){
			return $this->name;
		}

		public function setName($name){
			$this->name=$name;
		}

		public function getGrade(){
			return $this->grade;
		}

		public function setGrade($grade){
			$this->grade=$grade;
		}

		public function getEmail(){
			return $this->email;
		}

		public function setEmail($email){
			$this->email=$email;
		}

		public function getSalary(){
			return $this->salary;
		}

		public function setSalary($salary){
			$this->salary=$salary;
		}
	}