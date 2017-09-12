<?php 
include('phpact.php');
	$pdo = new PracticeOOP();
	$id = $_GET['id'];
	if($pdo){
		$pdo->deleteData($id);
		}else{
		echo 'error';
	}
	
?>