<!DOCTYPE html>
<html>

<head>
	<title>Forgot Password</title>
</head>

<body>
	<table border="1" width="100%">
		<tr>
			<td>
				<img src="logo.png" alt="logo" width="100px" height="50px">
			</td>
			
			<td align="right">
				<a href="publicHome.php">Home</a> | <a href="login.php">Login</a> | <a href="registration.php">Registration</a>
			</td>
		</tr>
		
		<tr style="height:150px;">
			<td colspan="2" align="center">
				<form method="POST" action="#">
					<fieldset style="width:300px;">
						<legend><b>FORGOT PASSWORD</b></legend>
						<table>
							<tr>
								<td>Enter Email: </td>
								<td><input type="email" name="email" value=""></td>
							</tr>
							
							<tr>
								<td colspan="2">
									<hr>
									<input type="submit" name="submit" value="Submit">
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