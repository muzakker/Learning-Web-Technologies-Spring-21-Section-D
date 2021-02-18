<?php
	
	if(isset($_POST['submit'])){

		$name = $_POST['myname'];

		if($name == ""){
			echo "null submission...";
		}else{
			echo "<b>Name: </b>".$name;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>HTML form using PHP</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset style="width:300px;">
			<legend><b>NAME</b></legend>
			<input type="text" name="myname" value=""> <hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>