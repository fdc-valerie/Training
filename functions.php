<?php 
include('phpact.php');

// $pdo = PracticeOOP::dbConnect();

	$pdo = new PracticeOOP();

	if($pdo){
	echo 'Connect Successfull <br>';
		
		// $pdo->createDB();
		// $pdo->createTable();
		$pdo->insertRow();
		// $pdo->updateData();
		// $pdo->deleteData();
	}else{
		echo 'error';
	}
?>
