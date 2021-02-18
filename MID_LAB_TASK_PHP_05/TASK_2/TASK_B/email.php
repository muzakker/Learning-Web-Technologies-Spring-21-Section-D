<?php

	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		
		if($email == ""){
			echo "null submission...";
		}else{
			echo "<b>Email: </b>".$email;
		}
	}

?>

<!DOCTYPE html>
<html>

<head>
	<title>HTML Form using PHP</title>
</head>

<body>	
	<form method="POST" action="#">
		<fieldset style="width:300px">
				<legend><b>Email</b></legend>
				<input type="email" name="email" value=""> 
				<button title="hint: sample@example.com" style="color: blue; font-size: 14px;"><b>i</b></button>
				<hr>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>	
</body>

</html>