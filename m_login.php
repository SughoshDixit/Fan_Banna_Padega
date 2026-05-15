<?php include('m_server.php') ?>
<?php require_once __DIR__ . '/includes/site.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
<?php include __DIR__ . '/includes/manager-head-assets.php'; ?>
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="m_login.php">
  	<?php include('m_errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>

Not yet a member? <a href="m_register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
