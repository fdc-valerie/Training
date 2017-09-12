<?php 
include('phpact.php');
	$pdo = new PracticeOOP();
	$id = $_POST['ID'];
	$data = array("first_name" => $_POST['first_name'],
		"last_name" => $_POST['last_name'],
		"type" => $_POST['type'],
		"subject" => $_POST['subject']);
	if($pdo){
 		$pdo->updateData($id,$data);
		// print_r($_GET);
 	}else{
 		echo 'Error';
 	}
 ?>