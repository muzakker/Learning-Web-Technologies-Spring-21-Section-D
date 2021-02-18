<!DOCTYPE html>
<html>

<head>
	<title>HTML Form using PHP</title>
</head>
		
<body>
	<form method="POST" action="#">
		<fieldset style="width:300px;">
			<legend><b>DATE OF BIRTH</b></legend>	
				
				&nbsp &nbsp dd &nbsp &nbsp &nbsp &nbsp &nbsp mm &nbsp &nbsp &nbsp &nbsp &nbsp yyyy<br>	
				<input type="number" name="dd" style="width:40px;" value="<?php if(isset($_POST['dd'])){ echo $_POST['dd'];} ?>"> 
				/ <input type="number" name="mm" style="width:45px;" value="<?php if(isset($_POST['mm'])){ echo $_POST['mm'];} ?>">	
				/ <input type="number" name="yyyy" style="width:60px;" value="<?php if(isset($_POST['yyyy'])){ echo $_POST['yyyy'];} ?>">
				<hr>
				<input type="submit" name="submit" value="Submit">	
		</fieldset>		
	</form>	
</body>

</html>