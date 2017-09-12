<?php 
include('phpact.php');

// $pdo = PracticeOOP::dbConnect();
	$pdo = new PracticeOOP();
	if($pdo){
	echo 'Connect Successfull <br>';
		$pdo->insertRow();
		// header( "refresh:1;url=data.php" );
		}else{
		echo 'error';
	}
?>
