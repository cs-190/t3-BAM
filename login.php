<?php
  	$current_page = "login";
  	require_once("header.php");
	if(isset($_SESSION['login_user'])) {
    header( "Location: index.php" );
  }
?>

<html>
<body>
<br>
<div class ="container">
<div class="col-md-6">
<div class="panel panel-default">
<div class="panel-body">
	<h1>Login</h1>
	<div>
	<form id="login" method="post" action="loginHandle.php">
		<div class="form-group">
		<label>Username:</label>
		<input type="text" class="form-control" name="username" placeholder='Username' id="username">
		</div>
		<div class="form-group">
		<label>Password: </label>
		<input type="password" class="form-control" name="password" placeholder='Password' id="password">
		</div>
		<button class='btn btn-default' value='Login'>Login</button><br>
		<a href='forgot.html'>Forgot password?</a>

	</form>
	</div>
</div>
</div>
</div>

<div class="col-md-6">
<div class="panel panel-default">
<div class="panel-body">
	<h1>Register To Create An Account</h1>
	<form method="post" action="insert.php" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return checkForm(this);">
	<p class="error">* required field.</p>
	<div class="form-group">
		<label>Full Name: <span class="error">* <?php echo $nameErr;?></span></label>
		<input type="text" class="form-control" name="name" required>
	</div>
	<div class="form-group">
		<label>Desired username: <span class="error">* <?php echo $usernameErr;?></span></label>
		<input type="text" class="form-control" name="username" required>
	</div>
	<div class="form-group">
	<label>Password: <span class="error">* <?php echo $passwordErr;?></span><br>
	<span class ="match"> Passwords must contain at least six characters, and include an uppercase, and lowercase letter and a number </span>
	</label>
	<input type="password" class="form-control" name="password1" required><br>
	<label>Re-Enter Password: <span class="error">* <?php echo $passwordErr;?></span></label>
	<input type="password" class="form-control" name="password2" required>
  	<script type="text/javascript">
  		function checkPassword(str){
    	var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
   		return re.test(str);
  		}

  		function checkForm(form){
    		if(form.username.value == "") {
      		alert("Error: Username cannot be blank!");
      		form.username.focus();
      		return false;
    	}
    		re = /^\w+$/;
    		if(!re.test(form.username.value)) {
      		alert("Error: Username must contain only letters, numbers and underscores!");
      		form.username.focus();
      		return false;
    	}
    		if(form.password1.value != "" && form.password1.value == form.password2.value) {
      		if(!checkPassword(form.password1.value)) {
        	alert("The password you have entered is not valid!");
        	form.password1.focus();
        	return false;
      	}
    	} else {
      		alert("Error: Please check that you've entered and confirmed your password!");
      		form.password1.focus();
      		return false;
    	}
    return true;
  		}
	</script>
	</div>
	<div class="form-group">
	<label>Email: <span class="error">* <?php echo $emailErr;?></span></label>
	<input type="text" class="form-control" name="email" required>
	</div>
	<button class="btn btn-default" value="Submit">Submit</button>
	<br>
	</form>
</div>
</div>
</div>
</div>
</body>
</html>
