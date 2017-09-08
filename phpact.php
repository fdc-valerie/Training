<?php 
class PracticeOOP{
	private static $servername = "localhost";
	private static $username = "root";
	private static  $password = "admin123";
	private static $dbname = "Faculty";
	private static $conn = null;

	public function __construct(){
		$this->pdo = $this->dbConnect();
	}

	public function dbConnect(){
		if(null == self::$conn){
			try{
	   			self::$conn = new PDO("mysql:host=".self::$servername.";dbname=".self::$dbname.";", self::$username, self::$password);
	   		// self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    }
			catch(PDOException $e){
		    	echo "Connection failed: " . $e->getMessage();
		    }	
		}
		return self::$conn;

	
	}

	public function createDB(){


	$sql = "CREATE DATABASE IF NOT EXISTS Faculty";
    $this->pdo->exec($sql);
     echo "DB created successfully";
     echo "<br>";
     createTable();
}

}


	
		





 ?>

 