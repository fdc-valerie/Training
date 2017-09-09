<?php 
include('phpact.php');
	$pdo = new PracticeOOP();
	$id= $_GET['id'];
	if($pdo){
		$pdo->deleteData($id);
		echo 'Data has been delete from the database';
	}else{
		echo 'error';
	}
	
?>