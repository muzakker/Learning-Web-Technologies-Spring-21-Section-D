<?php
	
	$title = "Edit Page";
	include('header.php');

	//echo $_GET['name'];

?>

	<div id="main_content">
		<form method="post" action="editCheck.php">
			<fieldset style="width:250px">
				<legend>EDIT PRODUCT</legend>
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
	</div>
</body>
</html>