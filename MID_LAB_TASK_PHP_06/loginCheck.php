<?php
	
	if(isset(_POST['submit'])){
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if($username == "" || $password == ""){
			
			echo "Null Submission";
			
		}else{
			
			for($itr = 0; $itr < strlen($username); $itr++){
				if(($username[$itr] >= 'A' && $username[$itr] <= 'Z')
				|| ($username[$itr] >= 'a' && $username[$itr] <= 'z')
				|| ($username[$itr] >= 0 && $username[$itr] <= 9)
				|| ($username[$itr] === '.')
				|| ($username[$itr] === '-')
				|| ($username[$itr] === '_')){
					continue;
				}
				else{
					echo "User Name can contain alpha numeric characters, period, dash or underscore only!";
					break;
				}
			}
			if(strlen($username) < 2){
				echo "User Name must contain at least two (2) characters!";
			}
			if(strlen($password) < 8){
				echo "Password must not be less than eight (8) characters!";
			}
			$flag = false;
			for($itr = 0; $itr < strlen($password); $itr++){
				if(($password[$itr] === '@')
				|| ($username[$itr] === '#')
				|| ($username[$itr] === '$')
				|| ($username[$itr] === '%')){
					$flag = true;
					break;
				}
			}
			if($flag == false){
				echo "Password must contain at least one of the special characters (@, #, $, %)";
			}
		}
	}
	
?>