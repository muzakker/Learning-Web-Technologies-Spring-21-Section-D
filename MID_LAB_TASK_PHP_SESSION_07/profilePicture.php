<!DOCTYPE html>
<html>
<head>
	<title>Change Profile Picture</title>
</head>
<body>
	<table border="1" width="100%">
		<tr>
			<td>
				<img src="logo.png" alt="logo" width="100px" height="50px">
			</td>
			
			<td align="right">
				Logged in as <a href="#"><?php ?></a> | <a href="logout.php">Logout</a>
			</td>
		</tr>
		
		<tr style="height:200px;">
			<td>
				<br>
				<b>Account</b>
				<hr>
				<ul>
					<li><a href="home.php">Dashboard</a></li>
					<li><a href="viewProfile.php">View Profile</a></li>
					<li><a href="editProfile.php">Edit Profile</a></li>
					<li><a href="profilePicture.php">Change Profile Picture</a></li>
					<li><a href="changePass.php">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</td>
			
			<td>
				<form method="POST" action="#">
					<fieldset style="width:200px;">
						<legend><b>PROFILE PICTURE</b></legend>
							<table>
							<tr>
								<td><img src="user.png" alt="Profile Picture" width="100px" height="100px"></td>
							</tr>
							<tr>
								<td><input type="file" name="image" value=""></td>
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