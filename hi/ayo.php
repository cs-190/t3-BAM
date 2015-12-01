<?php
	$current_page = "post";
	require_once("../header.php");
	if(!isset($_SESSION['login_user'])) {
		header("Location: https://users.cs.duke.edu/~ays7/t3-BAM/login.php");
	}
?>

<body>
	<div class="container">
	<h1>Post New Item</h1>
	<form id="post" role="form" action="wowzers.php" method="post">
		<div class="form-group">
  		<label>Post Title:</label>
  		<input type="text" class="form-control" name="title" required>
  		</div>
		<div class="form-group">
  		<label>Item Description:</label>
  		<textarea type="text" class="form-control" name="desc" id="description" required></textarea>
  		</div>
      <div class="form-group">
        Upload Profile Picture
        <label class="sr-only" for="form-email">Upload Profile Picture</label>
        <input type="file" name="image" />
      </div>
		<div class="form-group">
  		<label>Price:</label>
  		<input type="number" class="form-control" name="price" required>
  		</div>
		<div class="form-group">
		<label>Suggested gender:</label>
		<label class="radio-inline">
		   <input type="radio" name="sex" value="male">Male
		</label>
		<label class="radio-inline">
		  <input type="radio" name="sex" value="female">Female
		</label>
		<label class="radio-inline">
		  <input type="radio" name="sex" value="either">Either
		</label>
		</div>
		<div class="form-group">
		<label>Contact email:</label>
		<input type="text" class="form-control" name="email" required>
		</div>
		<button class='btn btn-default' value="Submit">Submit</button>
		<br>
	</form>
	</div>
</body>
