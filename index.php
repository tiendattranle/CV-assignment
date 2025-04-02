<?php
include_once("login_db.php");

if(!isset($_SESSION['username'])){
	header("Location:login.php");
}
?>

<!-- after login show this page -->

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="Navigation_bar.css">
	<meta name="viewport" content="width=device-width initial-scale=1">
</head>
<body>
	<form>
		<div id="header">
			<ul id="navbar">
				<li class="lists"><a class="options" href="index.php">Home</a></li>
				<li class="lists"><a class="options" href="demo.php">CV</a>
					<ul id="sub_bar">
						<li class="sub_lists"><a class="sub_options" href="demo.php">My CV</a></li>
						<li class="sub_lists"><a class="sub_options" href="Update_CV.php">Update CV</a></li>
					</ul>
				</li>
				<li class="lists"><a class="options" href="#">About</a></li>
				<li class="lists"><a class="options" href="#">Contact</a></li>
				<li id="log_list"><a id="log_option" href="Login_dbo.php?logout='1'">
					<?php if(isset($_SESSION['username'])) echo $_SESSION['username']." "?>Logout
				</a></li>
			</ul>
		</div>
		<marquee direction="right" bgcolor="green" id="marquee">
			Welcome!!!
		</marquee>
	</form>
</body>
</html>