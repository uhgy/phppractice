<?php

	class OrderTele {



	public function connect(){
		try {
	    $conn = new PDO("mysql:host=$servername;dbname=yjz", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $conn->exec("SET CHARACTER SET UTF8");
	  }	catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
	}

	public function orderQuery($sql){
		try{
			$stmt = $conn->prepare($sql); 
	    $stmt->execute();
	    // 设置结果集为关联数组
	    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

	    return $stmt->fetchAll();
		}	catch(PDOException $e)
    {
    	echo "Error: " . $e->getMessage();
    }
	}

	public function getOrder($sql){
		connect();
		return orderQuery($sql);
	}

	public function insertOrder($sql){
		try{
			$stmt = $conn->prepare($sql); 
	    $stmt->execute();
		}	catch(PDOException $e)
    {
    	echo "Error: " . $e->getMessage();
    }
	}

	public function updateOrder($sql){
		try{
			$stmt = $conn->prepare($sql); 
	    $stmt->execute();
		}	catch(PDOException $e)
    {
    	echo "Error: " . $e->getMessage();
    }
	}

}


