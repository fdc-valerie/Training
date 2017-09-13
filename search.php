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
	<?php 
		include('phpact.php');
		$search = isset($_POST['search']) ? '%'.$_POST['search'].'%' : '';
		$pdo = new PracticeOOP();
			if($pdo){
				 $result = $pdo->searchData($search);
			}	
			foreach( $result as $row ){
				echo "<tr>";
				echo "<td>" .$row['ID']. "</td>";
			   	echo "<td>" .$row['first_name']. "</td>";
			   	echo "<td>" .$row['last_name']. "</td>" ;
			    echo "<td>" .$row['type']. "</td>" ;
				echo "<td>" .$row['subject']. "</td>" ;
				echo "<td><a class='btn btn-info' href='updateView.php?id=".$row['ID']."'>"."Update"."";
				echo "<a class='btn btn-danger' href='delete.php?id=".$row['ID']."'>"."Delete"."</td>";
				}			
	?>