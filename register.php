
<html>

<head><link rel="stylesheet" href="register.css">

<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	$('#feedback').load('check.php').show();

	$('#username_input').keyup(function() {
	  $.post('check.php', { username: form.username.value },
	  function(result)  {
	  	$('#feedback').html(result).show();
	  	});
	});
});
</script>

</head>

<body>

<?php
$current_page = "register";
require_once("header.php");

$nameErr = $usernameErr = $passwordErr = $emailErr = "";
$name = $username = $password = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
   }

    if (empty($_POST["username"])) {
     $usernameErr = "Name is required";
   } else {
     $username = test_input($_POST["username"]);
   }

   if (empty($_POST["password"])) {
     $passwordErr = "Password is required";
   } else {
     $password = test_input($_POST["website"]);
   }
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
   }

}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
	<div>

	<div class ="register">

		<h1> Register To Create An Account </h1>

	<form name="form" method="post" action="insert.php" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return checkForm(this);">

	<p class="error">* required field.</p>

		Full Name:

		<input type="text" name="name" required>

		<span class="error">* <?php echo $nameErr;?></span>

		<br>

  		Desired username:

  		<input type="text" id="username_input" name="username" required>

  		<span class="error">* <?php echo $usernameErr;?></span>
  		<div id="feedback"></div>

  		<br>

  		Password:

  		<input type ="password" name="password1" required>

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
