<?php
	require 'config.php';

	if(isset($_POST['forgotpass'])) {
		$errMsg = '';

		// Getting data from FROM
		$email = $_POST['email'];

		if(empty($email))
			$errMsg = 'Please enter your Email to view your password.';

		if($errMsg == '') {
			try {
				$stmt = $connect->prepare('SELECT password, email FROM pdo WHERE email = :email');
				$stmt->execute(array(
					':email' => $email
					));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);
				if($email == $data['email']) {
					$viewpass = $data['password'];
					$viewpass = md5($viewpass);
					echo 'Please send this code to info@soundtrackistanbul.com
					; ' . $viewpass . '<br><a href=mailto:info@soundtrackistanbul.com"">Send Your Code NOW</a>';
				}
				else {
					$errMsg = 'Email not matched.';
				}
			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}
?>

<!DOCTYPE html>
<head><title>Forgot Password</title></head>
	<style>
	html, body {
		margin: 1px;
		border: 0;
	}
	</style>
<body>
	<div align="center">
		<div style=" border: solid 1px #313131; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#313131; color:#FFFFFF; padding:17px;"><b>Forgot Password</b></div>
			<?php
				if(isset($viewpass)){
					echo '<div style="color:#198E35;text-align:center;font-size:17px;margin-top:5px">'.$viewpass.'</div>';
				}
			?>
			<div style="margin: 15px">
				<form action="" method="post">
					<input type="text" name="email" placeholder="Your Email adress" autocomplete="off" class="box"/><br /><br />
					<input type="submit" name='forgotpass' value="Check" class='submit'/><br />
				</form>
			</div>
		</div>
        <div style="margin: 15px">
            You Should Login / Register to See this Page!
            <br>
            <a href="login.php">Log in</a> <br>
            <a href="register.php">Sign Up</a> <br>
            <a href="forgot.php">Forgot Password</a><br>
            <a href="index.html">Home Page</a>
        </div>
	</div>
</body>
</html>
