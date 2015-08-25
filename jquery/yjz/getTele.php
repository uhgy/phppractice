 <?php
	$action = isset($_POST["action"]) ? $_POST["action"] : "findOrder";
	$teleNum = isset($_POST["teleNum"]) ? $_POST["teleNum"] : "";
	$orderNum = isset($_POST["orderNum"]) ? $_POST["orderNum"] : "";
	$orderState = isset($_POST["orderState"]) ? $_POST["orderState"] : "";



	if($action == "findOrder"){
	  if(!empty($teleNum)){
			$sql = "select * from telerecord where teleNum = '{$teleNum}'";
		} else if(!empty($orderNum)){
			$sql = "select * from telerecord where orderNum = '{$orderNum}'";
		} else if(!empty($orderState)){
			$sql = "select * from telerecord where orderState = '{$orderState}'";
		}else{
			$sql = "select * from telerecord order by orderNum desc";		
		}	
		getOrder($sql);
	}

	if($action == "addOrder"){
		if(!empty($teleNum) && (!empty($orderNum)) && (!empty($orderState))){
			$sql = "INSERT INTO telerecord
							VALUES ('{$teleNum}', '{$orderNum}', '{$orderState}')";
			addOrder($sql);		
		}
		$sql2 = "select * from telerecord where orderNum = '{$orderNum}'";
		getOrder($sql2);
	}

	if($action == "updateOrder"){
		if(!empty($teleNum) && (!empty($orderNum)) && (!empty($orderState))){
			$sql = "UPDATE telerecord SET teleNum='{$teleNum}', orderState='{$orderState}'
							WHERE orderNum='{$orderNum}'";
		}
		updateOrder($sql);
		$sql2 = "select * from telerecord where orderNum = '{$orderNum}'";
		getOrder($sql2);
	}

	$conn=null;

	function connectDb(){
		global $conn;
		$servername = "localhost";
		$username = "root";
		$password = "root";

		try {
	    $conn = new PDO("mysql:host=$servername;dbname=yjz", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $conn->exec("SET CHARACTER SET UTF8");
	  }	catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
	}

	function orderQuery($sql){

	}

	function getOrder($sql){
		global $conn;
		connectDb();
		try{
			$stmt = $conn->prepare($sql); 
	    $stmt->execute();
	    // 设置结果集为关联数组
	    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

	    $data = $stmt->fetchAll();
		}	catch(PDOException $e)
    {
    	echo "Error: " . $e->getMessage();
    }
		echo json_encode($data);
	}

	function addOrder($sql){
		global $conn;
		connectDb();
		try{
			$stmt = $conn->prepare($sql); 
	    $stmt->execute();
		}	catch(PDOException $e)
    {
    	echo "Error: " . $e->getMessage();
    }
	}	

	function updateOrder($sql){
		global $conn;
		connectDb();
		try{
			$stmt = $conn->prepare($sql); 
	    $stmt->execute();
		}	catch(PDOException $e)
    {
    	echo "Error: " . $e->getMessage();
    }
	}






