
 <?php 


/**
* 
*/

class TeacherInfo{

	public $first_name="";
	public $last_name="";
	public $time_in="";
	public $type="";


	public function __construct()
	{	
		session_start();
		echo 'Session ID: ';
		echo session_id();
		echo '<br/>';
	}

	public function setTeacherInfo($new_fn)
	{
		$this->first_name=$new_fn;
		
	}

	public function getTeacherInfo()
	{
		return $this->first_name ."<br";
	
	}



	public function ()
	{
		}

}

	 $teacher= new TeacherInfo();
	 $teacher->setTeacherInfo('Valerie');
	 echo $teacher->getTeacherInfo();


 ?> 

///// Sir Jake Reference


<?php 

class PracticeOOP1{
private static $servername = "localhost";
private static $username = "root";
private static  $password = "admin123";
private static $dbname = "Faculty";

private $pdo = null;

public function __construct(){
	$this->pdo = $this->dbConnect();
}

public function dbConnect(){
	try{
   			$con = new PDO("mysql:host=".self::$servername.";dbname=".self::$dbname.";", self::$username, self::$password);
   		// self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    }
		catch(PDOException $e){
	    	echo "Connection failed: " . $e->getMessage();
	    }	
	}
	return $con;
}

public function insert($array()) {

	$statement = 'insert into table (asdfas, sdaf,sadf ,sad f,as ) Values('
	foreach ($array as $data) {
		$statement .= . '"' .$data . '"';
	}
	$statement .= ')';

	echo $statement;

	$this->pdo->prepare($statement);

	$this->pdo->execute();

} 

// public function createDatabase(){
// 	$this->dbConnect();
	
// 	$sql = "CREATE DATABASE IF NOT EXISTS lol";
//     $conn->exec($sql);
//     echo "DB created successfully";
//     echo "<br>";
// }

// public function __destruct(){
// 	$this->conn = NULL;
// }
}
<!-- <?php 

	$pdo = PracticeOOP::dbConnect();

		function createDatabase($pdo) {
		$statement = "CREATE DATABASE IF NOT EXISTS losfsfsl";
	    $pdo->exec($statement);
	    echo "DB created successfully";
	    echo "<br>";
	}
	 createDatabase($pdo);
	


 ?>
 -->




  ?>










