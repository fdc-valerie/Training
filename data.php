
<!DOCTYPE html>
<html>
<head>
	<title>View All the Data</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"  />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <a class="navbar-brand" href="#">Sample</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="UI.php">Form <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="data.php">View All Data</a>
      </li>
        </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
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

		if($pdo){
		$result = $pdo->viewRow();
		}else{
			echo 'error';
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
	} ?>
	</tbody>
	</div>
	</div>
</table>
</body>
</html>