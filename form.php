<?php 
	$first_name = $last_name = $type=$subject = "";
	$fnameError = $lnameError = $typeError = $subjError= "";


if(isset($_POST['submit'])){
	if(empty($_POST['first_name'])){
		$fnameError= "First Name is Required";
	}else{
		$first_name = test_input($_POST['first_name']);
	}

	if(empty($_POST['last_name'])){
		$lnameError= "Last name is Required";
	}else{
		$last_name = test_input($_POST['first_name']);
	}
	if(empty($_POST['type'])){
		$typeError = "Type is required";
	}else{
		$type = test_input($_POST['type']);
	}
	if(empty($_POST['subject'])){
		$subjError = "Subject is required";
	}else{
		$subject = test_input($_POST['subject']);
		}
	

}
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
	return $data;
}
 ?>