<?php include('m_server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Manager Registration</title>
  <link rel="stylesheet" type="text/css" href="css/m_style1.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="m_register.php">
  	<?php include('m_errors.php'); ?>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
	<div class="input-group">
  	  <label>Club</label>
  	  <input type="club" name="club">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="m_login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>