<!DOCTYPE html>
<html>

<head>
	<title>View Profile</title>
</head>

<body>
	<table border="1" width="100%">
		<tr>
			<td>
				<img src="logo.png" alt="logo" width="100px" height="50px">
			</td>
			
			<td align="right">
				Logged in as <a href="home.php">
				<?php
					session_start();
					$user = $_SESSION['user'];
					echo $user['name'];
				?>
				</a> | <a href="logout.php">Logout</a>
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
				<fieldset>
					<legend><b>PROFILE</b></legend>
					<table>
						<tr>
							<td>
								Name: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<?php
									echo $user['name'];
								?>
								<br>
								Email: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<?php
									echo $user['email'];
								?>
								<br>
								Gender: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<?php
									echo $user['gender'];
								?>
								<br>
								Date of Birth: 
								<?php
									echo $user['day']."/".$user['month']."/".$user['year'];
								?>
							</td>
							
							<td align="center">
								<img src="user.png" alt="<?php echo $user['name'];?>" height="100px" width="100px">
								<br>
								<a href="profilePicture.php">Change</a>
							</td>
						</tr>
					</table>
				</fieldset>
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