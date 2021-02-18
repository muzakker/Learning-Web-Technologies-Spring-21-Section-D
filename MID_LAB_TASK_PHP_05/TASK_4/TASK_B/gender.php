<?php

	if(isset($_POST['submit'])){
		$gender = $_POST['gender'];
		
		if($gender == ""){
			echo "null submission...";
		}else{
			echo "<b>GENDER: </b>".$gender;
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
			<legend><b>GENDER</b></legend>	
					<input type="radio" name="gender" value="Male"> Male
					<input type="radio" name="gender" value="Female"> Female
					<input type="radio" name="gender" value="Other"> Other 
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>	
</body>

</html>