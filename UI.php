
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/bootsrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"  />
  </head>
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
        <a class="nav-link" href="#">Form <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
        </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form role="form" method="post">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Teacher Information</h3>
    				<div class="form-group">
						<input type="text" class="form-control"  name="first_name" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="last_name" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control"  name="mobile" placeholder="Mobile Number" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control"  name="subject" placeholder="Subject" required>
					</div>
                    
            
        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Add</button>
        </form>
    </div>
</div>
</div>
  
</div>
</body>
</html>

