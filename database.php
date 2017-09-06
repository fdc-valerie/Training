<?php 

 $server = "localhost";
 $username = "root";
 $password = "admin123";
 $dbname = "my_db";

 $conn= new PDO ("mysql:host=$server;$dbname", $username, $password);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

createDb();   

function createDB(){

	global $conn;

	$sql = "CREATE DATABASE IF NOT EXISTS Faculty";
    $conn->exec($sql);
     echo "DB created successfully";
     echo "<br>";
     createTable();
}

function createTable(){
	global $conn;
	$sql = "USE Faculty";
    $conn->exec($sql);
    $sql = "CREATE TABLE IF NOT EXISTS TEACHER (
              	ID int(11) AUTO_INCREMENT PRIMARY KEY,
              	first_name varchar(30)NOT NULL,
                last_name varchar(30) NOT NULL,
                time_in TIMESTAMP,
                type enum('FULL-TIME','PART-TIME'))";
    $conn->exec($sql);
    echo "Table created succesfully";
    echo "<br>";
    ;
    insertRow();
}
 
function insertRow(){
	global $conn;

	$sql = "SELECT * from TEACHER   ";
	$stmt = $conn->prepare($sql);
	$sql= "INSERT INTO TEACHER (ID, first_name, last_name, time_in, type)
	VALUES (NULL, 'Doesssaa', 'jsfasfas', now(), 'FULL-TIME')";
	$conn->exec($sql);
	echo "New data added succesfully";
	echo "<br>";
	viewRow();
}

function viewRow(){
	global $conn;

	$sql = "SELECT * from TEACHER   ";
	$stmt = $conn->prepare($sql);
	$stmt->execute(array());
	$result = $stmt -> fetchAll();

	echo'<h3> LIST ALL THE ROWS OF A TABLE
 </h3>';
	echo "<table>
	<thead>
	<tr>
	<th>ID</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Time In </th>
	<th> Type </th>
	</tr>"; 

foreach( $result as $row ) {
	echo "<tr>";
	echo "<td>" .$row['ID']. "</td>";
    echo "<td>" .$row['first_name']. "</td>";
    echo "<td>" .$row['last_name']. "</td>" ;
    echo "<td>" .$row['time_in']. "</td>" ;
	echo "<td>" .$row['type']. "</td>" ;
}
echo "</table>";
viewOneData();
}


function viewOneData(){
global $conn;
 	$sql = "SELECT * from TEACHER LIMIT 1";
	$stmt = $conn->prepare($sql);
	$stmt->execute(array());
	$result = $stmt ->fetch(PDO::FETCH_ASSOC);
	echo'<br/>';
echo'<h3> LIST 1 Row of table </h3>';
echo '<p>' . $result["ID"] . ' ' . $result["first_name"]  . '   ' . $result["last_name"]  .  '    ' . $result["time_in"]  .  '    ' .  $result["type"] .  '</p>';   

echo '<br/>';

updateData();
}


function updateData(){
	global $conn;

	echo 'Update ID #3 Information to Valerie Lomocso';	
	$sql ="UPDATE TEACHER SET first_name='Doesssaa',last_name='jsfasfas' WHERE ID=3";
	$conn->exec($sql);
	echo '<br>';
	echo "Data has been updated";
	echo '<br><br>';
deleteData();
}

function deleteData()
{
	global $conn;

	echo'Delete ID #10';
	$sql ="DELETE FROM TEACHER WHERE ID=10";
	$conn->exec($sql);

	echo "  Data has been deleted";
	echo '<br';

}


?>