<?php
	
	//session_start();
	if(isset($_POST['submit'])){
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if($username == "" || $password == ""){
			
			echo "Null Submission";
			
		}else{
			
			$myfile = fopen('users.json', 'r');
			$data = fread($myfile, filesize('users.json'));
			$json = json_decode($data, true);
			
			if($username == $json['username'] && $password == $json['password']){
				header('location: home.php');
				
			}else{
				echo "Username and Password do not match, try again.";
			}
			fclose($myfile);
		}
	}
	
?>