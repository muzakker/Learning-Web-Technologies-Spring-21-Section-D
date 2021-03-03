<?php
	session_start();

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$repass 	= $_POST['repass'];
		$id 		= NULL;

		if($username == "" || $name == "" || $email == "" || $password == ""){
			echo "invalid information...please try again!";
			
		}else{

			if($password == $repass){
				
				//store user information via json
				
				//getting the contents from the JSON file to set id value
				//$json_contents = file_get_contents('../model/users.json');
				//$json = json_decode($json_contents, true);
				
				$myfile = fopen('../model/users.json', 'r');
				$data = fread($myfile, filesize('../model/users.json'));
				
						
				/*if(!empty($json)){
					$id = $json['id'] + 1;
					
				}else{
					$id = 1;
				}*/
				
				$user = '{
							"id" 			:1,
							"name"			:strval($name), 
							"username"		:strval($username), 
							"email"			:strval($email), 
							"password"		:strval($password)
						}';
				
				$json = json_decode($user, true);
				
				//array_push($json, $user);
				//print_r($json);
				
				$json = json_encode($user);
				
				$myfile = fopen('../model/users.json', 'w');
				fwrite($myfile, $json);
				fclose($myfile);

				header('location: ../view/login.html');
				
			}else{
				echo "password & re-type password mismatch...";
			}
		}
	}
?>