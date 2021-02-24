<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		
		if($username == "" || $password == ""){
			echo "Null submission";
			
		}else{
			
			$user = $_SESSION['user'];

			if($username == $user['username'] && $password == $user['password']){
				
				$_SESSION['status'] = true;
				header('location: home.php');

			}else{
				echo "invalid user...";
			}
		}
	}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
</head>

<body>
	<table border="1" width="100%">
		<tr>
			<td>
				<img src="logo.png" alt="logo" width="100px" height="50px">
			</td>
			
			<td align="right">
				<a href="publicHome.php">Home</a> | <a href="#">Login</a> | <a href="registration.php">Registration</a>
			</td>
		</tr>
		
		<tr style="height:200px;">
			<td colspan="2" align="center">
				<form method="POST" action="#">
					<fieldset style="width:300px;">
						<legend><b>LOGIN</b></legend>
						<table>
							<tr>
								<td>User Name :</td>
								<td><input type="text" name="username" value=""></td>
							</tr>
							<tr>
								<td>Password &nbsp; :</td>
								<td><input type="password" name="password" value=""></td>	
							</tr>
							<tr>
								<td colspan="2">
								<hr>
								<input type="checkbox" name="remember_me" value="YES">Remember Me
								</td>
							</tr>
							<tr>
								<td colspan="2">
								<br>
								<input type="submit" name="submit" value="Submit">
								&nbsp; <a href="forgotPass.php">Forgot Password?</a>
								</td>
							</tr>		
						</table>
					</fieldset>
				</form>
			</td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				Copyright &#169; 2017
			</td>
		</tr>			
	</table>
</body>

</html>