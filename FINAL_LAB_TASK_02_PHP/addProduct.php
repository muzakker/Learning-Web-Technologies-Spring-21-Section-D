<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
</head>
<body>
	
	<form method="POST" action="productCheck.php">
	
		<fieldset style="width:250px">
				<legend>ADD PRODUCT</legend>
				Name
				<br>
				<input type="text" name="name" value=""><br>
				Buying Price
				<br>
				<input type="number" name="buying_price" value=""><br>
				Selling Price
				<br>
				<input type="number" name="selling_price" value="">
				<hr>
				<input type="checkbox" name="display">
				Display
				<hr>
				<input type="submit" name="submit" value="Save">
		</fieldset>
		
	</form>
	
</body>
</html>