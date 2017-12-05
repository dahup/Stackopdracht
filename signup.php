<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Signup</h2>
                 
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<input type="text" name="first" placeholder="First name">
			<input type="text" name="last" placeholder="Last name">
			<input type="text" name="email" placeholder="E-mail">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="pwd" placeholder="Password">
                        I BBQ on a?
                        <select name="cars">
                        <option value="volvo">Primo</option>
                        <option value="saab">Kamado Joe</option>
                        <option value="fiat">Sidesmoker</option>
                        <option value="audi">Whatever</option>
                        <option value="volvo">What is a BBQ?</option>
                        <input type="radio" name="Gender" value="Female">I am a Male<br>
                        <input type="radio" name="Gender" value="Male">I am a Female<br>
                        
                        
			<button type="submit" name="submit">Sign up</button>
		</form>
	</div>


</section>

<?php
	include_once 'footer.php';
?>