<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		
		if($username == "" || $password == ""){
			echo "Null submission";
			
		}else{

			//$user = $_SESSION['abc'];
			
			$myfile = fopen('../model/users.json', 'r');
			$data = fread($myfile, filesize('../model/users.json'));
			
			$json = json_decode($data, true);
			fclose($myfile);
			
			if($username == $json['username'] && $password == $json['password']){
				
				$_SESSION['status'] = true;
				header('location: ../view/home.php');

			}else{
				echo "invalid user...";
			}
			
		}
	}
?>