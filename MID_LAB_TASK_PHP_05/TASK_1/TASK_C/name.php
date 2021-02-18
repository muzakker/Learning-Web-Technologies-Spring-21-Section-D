<!DOCTYPE html>
<html>

<head>
	<title>HTML form using PHP</title>
</head>

<body>
	<form method="POST" action="#">
		<fieldset style="width:300px;">
			<legend><b>NAME</b></legend>
			Name: <input type="text" name="myname" value="<?php if(isset($_POST['myname'])){ echo $_POST['myname'];} ?>"> <hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>

</html>