<!DOCTYPE html>
<head><title>Soundtrackistanbul</title></head>
	<style>
	html, body {
		margin: 1px;
		border: 0;
	}
	</style>
<body>
	<div align="center">
		<div style=" border: solid 1px #079B96; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:18px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#313131; color:#FFFFFF; padding:10px;"><b>Soundtrackistanbul Product Download</b></div>
			<div style="margin: 15px">
				You Should Login / Register to See this Page!
				<br>
				<a href="login.php">Login</a> <br>
				<a href="register.php">Register</a> <br>
				<a href="forgot.php">Forgot Password</a><br>
                <a href="index.html">Home Page</a>
			</div>
		</div>
	</div>
</body>
</html>
