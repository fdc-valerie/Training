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
	   			$x = new PDO("mysql:host=".self::$servername.";dbname=".self::$dbname.";", self::$username, self::$password);
	   		// self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    }
			catch(PDOException $e){
		    	echo "Connection failed: " . $e->getMessage();
		    }	
		}
		return $x;
	}

	public function createDB(){
		$sql = "CREATE DATABASE IF NOT EXISTS Faculty";
		$this->pdo->exec($sql);
		echo "DB created successfully";
		echo "<br>";
	}

	public function createTable(){
		$sql = "USE Faculty";
    	$this->pdo->exec($sql);
    	$sql = "CREATE TABLE IF NOT EXISTS TEACHER (
              	ID int(11) AUTO_INCREMENT PRIMARY KEY,
              	first_name varchar(30)NOT NULL,
                last_name varchar(30) NOT NULL,
                time_in TIMESTAMP,
                type enum('FULL-TIME','PART-TIME'))";
    	$this->pdo->exec($sql);
    	echo "Table created succesfully";
   	 	echo "<br>";
  
}
	public function insertRow(){
		$sql = "SELECT * from TEACHER ";
		$stmt = $this->pdo->prepare($sql);
		$sql= "INSERT INTO TEACHER (ID, first_name, last_name, subject, type)
		VALUES  (null,'".$_POST["first_name"]."','".$_POST["last_name"]."','".$_POST["subject"]."','".$_POST["type"]."')";

		$this->pdo->exec($sql);
		echo "New data added succesfully";
		echo "<br>";
		// echo json_encode($datas->first_name);
}

	public function viewRow(){
		$sql = "SELECT * from TEACHER where flag=1";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute(array());
		return $stmt -> fetchAll();

	// 	echo'<h3> LIST ALL THE ROWS OF A TABLE
	//  </h3>';
	// 	echo "<table>
	// 	<thead>
	// 	<tr>
	// 	<th>ID</th>
	// 	<th>First Name</th>
	// 	<th>Last Name</th>
	// 	<th>Time In </th>
	// 	<th> Type </th>
	// 	</tr>"; 

	// foreach( $result as $row ) {
	// 	echo "<tr>";
	// 	echo "<td>" .$row['ID']. "</td>";
	//     echo "<td>" .$row['first_name']. "</td>";
	//     echo "<td>" .$row['last_name']. "</td>" ;
	//     echo "<td>" .$row['time_in']. "</td>" ;
	// 	echo "<td>" .$row['type']. "</td>" ;
	// }

	// echo "</table>";

}
	public function viewOneData($id){
 	$sql = "SELECT * from TEACHER WHERE ID=$id";
	$stmt = $this->pdo->prepare($sql);
	$stmt->execute();
	return $stmt ->fetch(PDO::FETCH_ASSOC);


		// $result = $stmt ->fetch(PDO::FETCH_ASSOC); //gamita ni if ari nimo show ang result
		// echo'<br/>';
		// echo'<h3> LIST 1 Row of table </h3>';
		// echo '<p>' . $result["ID"] . ' ' . $result["first_name"]  . '   ' . $result["last_name"]  .  '    ' . $result["time_in"]  .  '    ' .  $result["type"] .  '</p>';   
		// echo '<br/>';
}
	public function updateData($id, $data){
		// echo '<h3> Update ID #3 Information to Valerie Lomocso </h3>';
		$sql ="UPDATE TEACHER SET first_name ='".$data['first_name']."', last_name = '".$data['last_name']."',type = '".$data['type']."',subject = '".$data['subject']."' where ID=$id";
		$this->pdo->exec($sql);
		echo "Data has been updated";
		header("refresh:1;url=data.php");
}

	public function deleteData($id){
	$sql ="UPDATE TEACHER SET flag =0 where ID=$id";
	// $sql ="DELETE FROM TEACHER where ID=$id";
	$this->pdo->exec($sql);
	echo "  Data has been deleted";
	header("refresh:1;url=data.php");
}
	// private function closeConnection() {
	// 	$this->pdo = null;
	// }
	public function searchData($search){

		// $search = isset($_POST['search']) ? '%'.$_POST['search'].'%' : '';
		$sql= "SELECT * FROM TEACHER WHERE (first_name LIKE '%$search%' 
		OR  last_name LIKE '%$search%' 
		OR 	type LIKE '%$search%' 
		OR 	subject LIKE '%$search%') AND flag =1   LIMIT 10 ";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute(array());
		return $stmt->fetchAll();



	}

}
 ?>

 