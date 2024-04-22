<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" placeholder="Enter username" required="" value="<?php echo $username; ?>">
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" placeholder="Enter mobile no." required="" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" placeholder="Enter password" reqiuired="">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" placeholder="Enter conform password" required="">
  	</div>
	  <div class="input-group">
  	  <label>Mobile no</label>
  	  <input type="text" name="Mobile no" placeholder="Enter mobile no" required="" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="button" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">login</a>
  	</p>
  </form>
</body>
</html>