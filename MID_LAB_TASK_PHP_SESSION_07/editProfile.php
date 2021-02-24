<?php
	session_start();

	if(isset($_POST['submit'])){
		
		$name 			= $_POST['name'];
		$email 			= $_POST['email'];
		$gender 		= $_POST['gender'];
		$day 			= $_POST['dd'];
		$month 			= $_POST['mm'];
		$year 			= $_POST['yyyy'];

		if($name == "" || $email == "" || $gender == "" 
		|| $day == "" || $month == "" || $year == ""){
			
			echo "invalid information...please try again!";
			
		}else{
				//store user information
				$user = [
							'name'		=>$name, 
							'email'		=>$email, 
							'gender'	=>$gender,
							'day'		=>$day,
							'month'		=>$month,
							'year'		=>$year
						];

				$_SESSION['user'] = $user;

				header('location: viewProfile.php');
				
			}
		}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Edit Profile</title>
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
		
		<tr style="height:400px;">
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
			
			<td align="center">
				<form method="POST" action="#">
					<fieldset style="width:400px;">
						<legend><b>EDIT PROFILE</b></legend>
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
									<td colspan="2">
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
									<td colspan="2">
										<hr>
									</td>
								</tr>
								
								<tr>
									<td colspan="2">
										<fieldset style="width:400px;">
										<legend>Gender</legend>
											<input type="radio" name="gender" value="male"> Male
											<input type="radio" name="gender" value="female"> Female
											<input type="radio" name="gender" value="other"> Other
										</fieldset>
									</td>
								</tr>
								
								<tr>
									<td colspan="2">
										<hr>
									</td>
								</tr>
								
								<tr>
									<td colspan="2">
										<fieldset style="width:400px;">
										<legend>Date of Birth</legend>
										<input type="number" name="dd" style="width:40px;" value=""> / <input type="number" name="mm" style="width:40px;" value="">	/ <input type="number" name="yyyy" style="width:60px;" value=""> <i>(dd/mm/yyyy)</i>
									</td>
								</tr>
								
								<tr>
									<td colspan="2">
										<hr>
									</td>
								</tr>
								
								<tr>
									<td colspan="2">
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