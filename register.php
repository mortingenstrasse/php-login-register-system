<?php
	require 'config.php';

	if(isset($_POST['register'])) {
		$errMsg = '';

		// Get data from FROM
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$secretpin = $_POST['secretpin'];


		if($fullname == '')
			$errMsg = 'Enter your fullname';
		if($email == '')
			$errMsg = 'Enter your Email Adress';
		if($username == '')
			$errMsg = 'Enter username';
		if($password == '')
			$errMsg = 'Enter password';
		if($secretpin == '')
			$errMsg = 'Enter a sercret pin number';

		if($errMsg == ''){
			try {
				$stmt = $connect->prepare('INSERT INTO pdo (fullname, email, username, password, secretpin) VALUES (:fullname, :email, :username, :password, :secretpin)');
				$stmt->execute(array(
					':fullname' => $fullname,
					':email' => $email,
					':username' => $username,
					':password' => $password,
					':secretpin' => $secretpin
					));
				header('Location: register.php?action=joined');
				exit;
			}
			catch(PDOException $e) {
				echo $e->getMessage();
			}
		}



	}

	if(isset($_GET['action']) && $_GET['action'] == 'joined') {
		$errMsg = 'Registration successfull. Now you can <a href="login.php">login</a>';
	}

?>


<!DOCTYPE html>
<head><title>Sign Up</title></head>
<script src='https://www.google.com/recaptcha/api.js'></script>
	<style>
	html, body {
		margin: 1px;
		border: 0;
	}
	.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.button:hover{
background-color: #10A93A;

}
.box{
	width: 200px;
	height: 30px;
	padding: auto;
	font-size: 16px;
}

	</style>
<body>
	<div align="center">
		<div style=" border: solid 1px #006D9C; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#313131; color:#FFFFFF; padding:10px;"><b>Sign Up</b></div>
			<div style="margin: 15px">
				<form action="" method="post">
					<h4>Full Name</h4>
					<input type="text" name="fullname" placeholder="Fullname" value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname'] ?>" autocomplete="off" class="box"/><br /><br />
					<h4>Email</h4>
					<input type="email" required  name="email" placeholder="Email Adress" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>" autocomplete="off" class="box"/><br /><br />
					<h4>User Name</h4>
					<input type="text" name="username" placeholder="Username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" autocomplete="off" class="box"/><br /><br />
					<h4>Password</h4>
					<input type="password" name="password" placeholder="Password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" class="box" /><br/><br />
					<h4>Secret Pin</h4>
					<input type="text" name="secretpin" placeholder="Sercter Pin" value="<?php if(isset($_POST['secretpin'])) echo $_POST['secretpin'] ?>" autocomplete="off" class="box"/><br /><br />
					<div class="g-recaptcha" data-sitekey="6Lf5BGcUAAAAAJUCFx8Sh8IfW0GTL5qXQ6qPdAZM"></div>
					<input type="submit" name='register' value="Sign Up" class='button'/><br />


				</form>
			</div>
		</div>
        <div style="background-color:#313131; color:#FFFFFF; padding:10px;"><b>Soundtrackistanbul Product Download</b></div>
        <div style="margin: 15px">
            You Should Log in /Sign up to See this Page!
            <br>
            <a href="login.php">Log in</a> <br>
            <a href="register.php">Sign Up</a> <br>
            <a href="forgot.php">Forgot Password</a><br>
            <a href="index.html">Home Page</a>
        </div>
    </div>
	</div>
</body>
</html>
