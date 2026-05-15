<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: m_login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: m_login.php");
  }
?>
<?php
require_once __DIR__ . '/includes/site.php';
$fbp_page_title = 'Home';
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/m_head.php'; ?>
<body>
<?php include __DIR__ . '/m_header.php'; ?>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<p><strong></strong></p>
    <?php endif ?>
</div>
<footer class="label">
    <?php  if (isset($_SESSION['username'])) : ?>
    <p> <a href="m_index.php?logout=1" style="color: red;"><strong>logout</strong></a> </p>
    <?php endif ?>
</footer>
		
</body>
</html>
