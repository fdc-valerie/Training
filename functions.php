<?php 
include('phpact.php');

// $pdo = PracticeOOP::dbConnect();

$pdo = new PracticeOOP();

if($pdo){
echo 'Connect Successfull <br>';
	
	$pdo->createDB();
	$pdo->createTable();
	$pdo->insertRow();
	$pdo->viewRow();
	$pdo->updateData();
	$pdo->deleteData();

}else{
	echo 'error';
}
	// $sql = "CREATE DATABASE IF NOT EXISTS Facuadsadlty";
 //    $pdo->exec($sql);
 //     echo "DB created successfully";
 //     echo "<br>";
    
?>
