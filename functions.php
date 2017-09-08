<?php 
include('phpact.php');

$pdo = PracticeOOP::dbConnect();

if($pdo){
echo 'Connect Successfull';
}else{
	echo 'errpr';
}
?>
