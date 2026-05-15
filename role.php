<?php require_once __DIR__ . '/includes/site.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pehle Fan Banna Padega</title>
      <link rel="stylesheet" href="<?php echo fbp_h(fbp_asset_url('main.css')); ?>">
	<style>
.center1 {
    text-align: left;
    color: red;
	}
.center2 {
    text-align: left;
    color: violet;
	}
.center3 {
    text-align: left;
    color: orange;
	}
.center4 {
    text-align: left;
    color: gray;
	}
.center5 {
    text-align: left;
    color: LightGray;
	}
	</style>
	
	</head>
	
	<body style="min-height: 100vh; margin: 0; background: url('<?php echo fbp_h(fbp_img('Paulo.png')); ?>') center/cover no-repeat fixed;">

		<header>
		<h1 class="center4">Pehle Fan Banna Padega!!! </h1>
			<div class="text-center">


			<p class="center1"><strong>Football Manager Click Here</strong></p>
			<nav>
				<ul style="text-align:center">
					<li><a href="m_register.php"><strong>Manager</strong></a></li>
				</ul>
			</nav>

			<p class="center2"><strong>Football Player Click Here</strong></p>
			<nav>
				<ul style="text-align:center">
					<li><a href="player_registration/p_register.php"><strong>Player</strong></a></li>
				</ul>
			</nav>
			 <p class="center3"><strong>Football Fan? Click Here</strong></p>
			<nav>
				<ul style="text-align:center">
					<li><a href="fan_registration/f_register.php"><strong>Fan!!</strong></a></li>
				</ul>
			</nav>
            </div>
		</header>
		 <footer>
		 <div style="position: relative">
		<p class="center5" style="position: fixed; bottom: 0; width:100%; text-align: left"><strong>A Project by Sughosh P Dixit</br>Contact information:</br>Mail:sughoshpdixit@gmail.com </br>Ph:91-8310080859</strong></p>
		</div>
	</footer> 
	</body>
</html>
