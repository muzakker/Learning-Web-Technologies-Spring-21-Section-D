<!DOCTYPE html>
<html>

<head>
	<title>Registration</title>
</head>

<body>
	<table border="1" width="100%">
		<tr>
			<td>
				<img src="logo.png" alt="logo" width="100px" height="50px">
			</td>
			
			<td align="right">
				<a href="#">Home</a> | <a href="login.php">Login</a> | <a href="registration.php">Registration</a>
			</td>
		</tr>
		
		<tr style="height:500px;">
			<td colspan="2" align="center">
					<form method="POST" action="#">
					<fieldset style="width:400px;">
					<legend><b>REGISTRATION</b></legend>
					<table>
						<tr>
							<td>
								Name
							</td>
							<td>
								<input type="text" name="name" value="">
							</td>
						</tr>
						
						<tr>
							<td colspan="3">
								<hr>
							</td>
						</tr>
						
						<tr>
							<td>
								Email
							</td>
							<td>
								<input type="email" name="email" value=""> 
								<button title="hint: sample@example.com" style="color: blue; font-size: 14px;"><b>i</b></button>
							</td>
						</tr>
						
						<tr>
							<td colspan="3">
								<hr>
							</td>
						</tr>
						
						<tr>
							<td>
								User Name 
							</td>
							<td><input type="text" name="username" value=""></td>
						</tr>
						
						<tr>
							<td colspan="3">
								<hr>
							</td>
						</tr>
						
						<tr>
							<td>
								Password
							</td>
							<td><input type="password" name="password" value=""></td>
						</tr>	
						
						<tr>
							<td colspan="3">
								<hr>
							</td>
						</tr>
						
						<tr>
							<td>
								Confirm Password
							</td>
							<td><input type="password" name="confirmPass" value=""</td>
						</tr>
						
						<tr>
							<td colspan="3">
								<hr>
							</td>
						</tr>
						
						<tr>
							<td colspan="3">
								<fieldset style="width:400px;">
								<legend>Gender</legend>
									<input type="radio" name="gender" value="male"> Male
									<input type="radio" name="gender" value="female"> Female
									<input type="radio" name="gender" value="other"> Other
								</fieldset>
							</td>
						</tr>
						
						<tr>
							<td colspan="3">
								<hr>
							</td>
						</tr>
						
						<tr>
							<td colspan="3">
								<fieldset style="width:400px;">
								<legend>Date of Birth</legend>
								<input type="number" name="dd" style="width:40px;" value=""> / <input type="number" name="mm" style="width:40px;" value="">	/ <input type="number" name="yyyy" style="width:60px;" value=""> <i>(dd/mm/yyyy)</i>
							</td>
						</tr>
						
						<tr>
							<td colspan="3">
								<hr>
							</td>
						</tr>
						
						<tr>
							<td colspan="3">
								<input type="submit" name="submit" value="Submit">
								<input type="reset" value="Reset">
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