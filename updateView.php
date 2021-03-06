<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"  />
  <script src="jquery-3.2.1.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
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
<script>
    $(document).ready(function(){
     load_data();
     function load_data(query)
     {
      $.ajax({
       url:"search.php",
       method:"POST",
       data:{query:query},
       success:function(data)
       {
        $('#display').html(data);
       }
      });
     }
     $('#search').keyup(function(){
      var search = $(this).val();
      if(search != '')
      {
       load_data(search);
      }
      else
      {
       load_data();
      }
     });
    });
</script> 
              
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
    <form class="form-inline my-2 my-lg-0" name="search" action="search.php" method="post">
      <input class="form-control mr-sm-2" type="text" placeholder="Search Data Here" aria-label="Search" name="search" id="#search">

      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

      <div id="display"></div>

    </form>
  </div>
</nav>
<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form method="post" action="update.php" name ="add">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Update Teacher Information</h3>
    		  <?php 
					include('phpact.php');
					$id= $_GET['id'];
					$pdo = new PracticeOOP();
					if($pdo){
						$result = $pdo->viewOneData($id); 
          }else{
						echo 'Error';
					}
					?>
    				<div class="form-group">    
             <input type="hidden" name="ID" value="<?php echo $result['ID']; ?>" ><h4>ID: <?php echo $result['ID']; ?></h4><br>

						<input type="text" class="form-control"  name="first_name" placeholder="First Name" value="<?php echo $result['first_name']; ?>">
					</div>
					
          <div class="form-group">
						<input type="text" class="form-control" name="last_name" placeholder="Last Name" value="<?php echo $result['last_name']; ?>" >
          </div>

					<fieldset class="form-group">
						 <div class="form-check">
                	<label class="form-check-label">
                    	<input type="radio" class="form-check-input" name="type" value="Full-Time" <?php if($result['type']=='Full-Time') echo 'checked' ?> >  Full-Time
                	</label>
             
                	<label class="form-check-label">
                    	<input type="radio" class="form-check-input" name="type" value="Part-Time" <?php if($result['type'] =='Part-Time') echo 'checked'?> >  Part-Time
                	</label>
             </div>
					</fieldset>
					<div class="form-group">
						  <input type="text" class="form-control"  name="subject" placeholder="Subject" value="<?php echo $result['subject']; ?>" >
					</div>  
          <input class="btn btn-success" name="submit" type="submit" value="update"> 
          
           </form>
    </div>
</div>
</div>
   
   
</div>
              
</body>
</html>
  
