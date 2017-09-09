
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action ="form.php" method="post">
	<input type="text" class="form-control"  name="first_name" placeholder="First Name" >
	<span class="error">* <?php echo $fnameError;?></span>

	 <input type="radio" class="form-check-input" name="type" value="Full-Time"  <?php if (isset($type) && $type=="Full-time") echo "checked";?> >  Full-Time
     <input type="radio" class="form-check-input" name="type" value="Full-Time" <?php if (isset($type) && $gender=="Part-Time") echo "checked";?> >  Part-Time
                    <span class="error">* <?php echo $typeError;?></span>

     <input type="text" class="form-control"  name="subject" placeholder="Subject" > 
     
          <input class="btn btn-primary pull-right" name="submit" type="submit" value="Submit">            
</form>
</body>
</html>
