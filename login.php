<?php
  	$current_page = "login";
  	require_once("header.php");
	require_once("register.php");
	if(isset($_SESSION['login_user'])) {header( "Location: https://users.cs.duke.edu/~ays7/t3-BAM/index.php" );}
?>

<html>
<head>
<meta charset="UTF-8">
<link rel='stylesheet' href='style.css'>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

</head>
<body>

<div class ="background">
<div class ="container">
	<div class ="login">
		<h1> Login </h1>
	</div>
	<div>
	<form id="login" class ="login" method="post" action="loginHandle.php">
		<input type='text' name="username" placeholder='Username' id="username"><br>
		<input type='password' name="password" placeholder='Password' id="password"><br>
		<label><input type='checkbox'>Remember me</label><br>
		<button class='btn btn-default' value='Login'>Login</button><br>
		<a href='forgot.html'>Forgot password?</a>
<<<<<<< HEAD

		<br>

		<a href='register.php'>Click here to register</a>

=======
>>>>>>> 6038b2d3666f11629ddb37576a53fe79e242cc2f
	</form>
	</div>
</div>

<div class="container">
	<div class ="register">
		<h1> Register To Create An Account </h1>
	<form method="post" action="insert.php" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return checkForm(this);">
	<p class="error">* required field.</p>
		Full Name:
		<input type="text" name="name" required>
		<span class="error">* <?php echo $nameErr;?></span>
		<br>
  		Desired username:
  		<input type="text" name="username" required>
  		<span class="error">* <?php echo $usernameErr;?></span>
  		<br>
  		Password:
  		<input type ="password" name="password1" required><br>
  		<span class="error">* <?php echo $passwordErr;?></span>
 		<span class ="match"> Passwords must contain at least six characters, and include an uppercase, and lowercase letter and a number </span>
  		<br>
		Re-Enter Password:
  		<input type ="password" name="password2" required>
  		<span class="error">* <?php echo $passwordErr;?></span>
  		<br>
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
		Email:
		<input type="text" name="email" required>
		<span class="error">* <?php echo $emailErr;?></span>
		<br>
		<br>
		<button class="btn btn-default" value="Submit">Submit</button>
		<br>
	</form>
	</div>
	</div>
</body>
</html>

