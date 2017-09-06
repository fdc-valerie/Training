<?php 

 $server = "localhost";
 $username = "root";
 $password = "admin123";
 $dbname = "my_db";

$conn= new PDO ("mysql:host=$server;$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

createDb();   

function createDB(){

global $server, $username, $password, $dbname,$conn;


try {
    $sql = "CREATE DATABASE IF NOT EXISTS Faculty";
    $conn->exec($sql);
     echo "DB created successfully";
     createTable();
}
catch (PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}
}

function createTable(){
global $conn, $sql;
	$sql = "USE Faculty";
    $conn->exec($sql);
    $sql = "CREATE TABLE IF NOT EXISTS TEACHER (
                ID int(11) AUTO_INCREMENT PRIMARY KEY,
                first_name varchar(30) NOT NULL,
                last_name varchar(30) NOT NULL,
                type enum('Full-Time','Part-Time'))";
    $conn->exec($sql);
    echo "Table created succesfully";

}

function createRow(){
global $conn, $sql;

$sql = "USE TEACHER";
$conn->exec($sql);
$sql = "SELECT * from TEACHER";



}


?>
