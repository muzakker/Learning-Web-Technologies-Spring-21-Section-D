<?php
	
	//session_start();
	if(isset($_POST['submit'])){
		
		$username 	= $_POST['username'];
		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$repass 	= $_POST['repass'];
		
		if($username == "" || $name == "" || $email == "" || $password == ""){
			echo "invalid information...please try again!";
			
		}else{
			if($password == $repass){
				
				//echo "registration success...";
				
				//store user information
				$user = [
							'name' 		=> $name, 
							'username' 	=> $username, 
							'email'		=> $email, 
							'password'	=> $password
						];
				
				//$_SESSION['user'] = $user;
				//$_SESSION['username'] = $username; //superglobal
				//$_SESSION['password'] = $password;
				
				$json = json_encode($user);
				
				$myfile = fopen('users.json', 'w');
				fwrite($myfile, $json);
				fclose($myfile);
				
				header('location: login.html'); //will generate a raw http request for login.html page or will redirect to a particular location
				
			}else{
				echo "password & re-type password mismatch...";
			}
		}
	}
	
?>