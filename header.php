<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BBQ</title>
	<link rel="stylesheet" type="text/css" href="style.css">
        <head>
        <script src="jquery-3.2.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
</head>
<body>
<header>
    <nav>
	<div class="main-wrapper">
		<ul>
			<li><a href="index.php">Home</a></li>
		</ul>
            <!--		<div class="nav-login">-->
                
                <ul>
                    <li><a href="Events.php">Events</a></li>
		</ul>
        <!--		<div class="nav-login">-->
                <ul>
                    <li><a href="contact.php">Contact</a></li>
		</ul>
		<div class="nav-login">

		<?php 
			if (isset($_SESSION['u_id'])) {
				echo '<form action = "includes/logout.inc.php" method="POST">
				<button type="submit" name="submit">Logout</button>
			</form>';
		} else {
			echo '<form action ="includes/login.inc.php" method="POST">
				<input type="text" name="uid" placeholder="Username/email">
				<input type="password" name="pwd" placeholder="password">
				<button type="submit" name="submit">Login</button>
			</form>
			<a href="signup.php">Sign Up</a>';            
		}
                ?>
                    
		</div>
	</div>

    </nav>
	
</header>