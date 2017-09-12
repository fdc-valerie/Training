<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
</head>
<body>
<div class="container">
<div class="table table-responsive">
<table class="table">
  <thead>
		<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Type </th>
		<th>Subject </th>
		<th>Action </th>
		</tr> 
	</thead>
	<tbody>
		<?php 
		include('phpact.php');
		
		$pdo = new PracticeOOP();

		$keywords=isset($_POST['keywords']) ? '%'.$_POST['keywords'].'%' : '';

			if($pdo){
				$result = $pdo->searchData($keywords);
				// print_r($_GET);
			}else{
				echo 'Error';
			}
				// print_r($_POST);
				foreach( $result as $row ){
				echo "<tr>";
				echo "<td>" .$row['ID']. "</td>";
			    echo "<td>" .$row['first_name']. "</td>";
			    echo "<td>" .$row['last_name']. "</td>" ;
			    echo "<td>" .$row['type']. "</td>" ;
				echo "<td>" .$row['subject']. "</td>" ;
}
		?>
	</tbody>
	</table>
	</div>
	</div>
</body>
</html>