<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$repass 	= $_POST['repass'];

		if($username == "" || $name == "" || $email == "" || $password == ""){
			echo "incomplete information...please try again!";
		}else{

			if($password == $repass){
				
				$user = [
							'username'	=>$username,
							'name'		=>$name, 
							'password'	=>$password,
							'email'		=>$email
						];

				$status = insertUser($user);

				if($status){
					header('location: ../view/user_list.php');
				}else{
					echo "Db error";
				}

			}else{
				echo "password & re-type password mismatch...";
			}
		}
	}
?>