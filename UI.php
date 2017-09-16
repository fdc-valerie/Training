
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"  />
  <script src="jquery-3.2.1.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
  <script >
               $(function() {
                   $("form[name='add']").validate({

                      errorClass: "error",
                      errorElement: "span",
                  rules:{
                    first_name: "required",
                    last_name: "required",
                    subject: "required",
                    type: {
                      required: true
                          },
                    
                  },
                    messages:{
                      first_name: "First name is required",
                      last_name: "Last name is required",
                      subject: "Subject is required",
                      type:{
                        required: "Select a type"
                  },
                },
                   submitHandler: function(form) {
                       form.submit();
                 }
                 });
});
              </script>

    <style>
     .error {
        border: .15px solid #f00;
    </style>



    
    
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
        <a class="nav-link" href="UI.php">Form <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="data.php">View All Data</a>
      </li>
        </ul>
    <form class="form-inline my-2 my-lg-0" name="search" action="search.php" method="get">
      <input class="form-control mr-sm-2" type="text" placeholder="Search Data Here" aria-label="Search" name="search" id="#search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

      <div id="display"></div>

    </form>
  </div>
</nav>
<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form method="post" action="functions.php" name ="add">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Teacher Information</h3>
    				<div class="form-group">
						<input type="text" class="form-control"  name="first_name" placeholder="First Name" >
           
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="last_name" placeholder="Last Name" >
            
					</div>


					<fieldset class="form-group">
						 <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="type" value="Full-Time">  Full-Time
                </label>
             
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="type" value="Part-Time">  Part-Time
                    
                </label>
             </div>
					</fieldset>

					<div class="form-group">
						  <input type="text" class="form-control"  name="subject" placeholder="Subject" >
					</div>  
          <input class="btn btn-primary pull-right" name="submit" type="submit" value="Submit">  
           </form>
    </div>
</div>
</div>
  
</div>
              
</body>
</html>




