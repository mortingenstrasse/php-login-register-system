<?php
	require 'config.php';

	if(isset($_POST['login'])) {
		$errMsg = '';

		// Get data from FORM
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == '')
			$errMsg = 'Enter username';
		if($password == '')
			$errMsg = 'Enter password';

		if($errMsg == '') {
			try {
				$stmt = $connect->prepare('SELECT id, fullname, email, username, password, secretpin FROM pdo WHERE username = :username');
				$stmt->execute(array(
					':username' => $username
					));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);

				if($data == false){
					$errMsg = "User $username not found.";
				}
				else {
					if($password == $data['password']) {
						$_SESSION['name'] = $data['fullname'];
						$_SESSION['email'] = $data['email'];
						$_SESSION['username'] = $data['username'];
						$_SESSION['password'] = $data['password'];
						$_SESSION['secretpin'] = $data['secretpin'];

						header('Location: dashboard.php');
						exit;
					}
					else
						$errMsg = 'Password not match.';
				}
			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}
?>

<!DOCTYPE html>
<head><title>Login</title></head>
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
	.button2 {
    background-color: #EF6B28; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.button2:hover{
background-color: #BC5724;

}
.box{
	width: 200px;
	height: 40px;
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
			<div style="background-color:#313131; color:#FFFFFF; padding:10px;"><b>Login</b></div>
			<div style="margin: 15px">
				<form action="" method="post">
					<h4>Username</h4>
					<input type="text" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" autocomplete="off" class="box"/><br /><br />
					<h4>Password</h4>
					<input type="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" autocomplete="off" class="box" /><br/><br />
					<input type="submit" name='login' value="Log in" class='button'/>
					<a href="register.php" class="button2">Sign Up</a>
					<br />
				</form>
			</div>
		</div>
        <div style="background-color:#313131; color:#FFFFFF; padding:10px;"><b>Soundtrackistanbul Product Download</b></div>
        <div style="margin: 15px">
            You Should Log in / Sign up to See this Page!
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
