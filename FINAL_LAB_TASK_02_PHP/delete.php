<?php
	include('header.php');
	require_once('productDB.php');
	$name = $_GET['name'];
	$products = getProduct($name);
?>	
	<form action="deleteCheck.php" method="post">
		<fieldset style="width: 200px;">
			<legend>DELETE PRODUCT</legend>
			Name: &nbsp;<?=$products[0]['name']?>
			Buying Price: &nbsp;<?=$products[0]['buying_price']?>
			Selling Price: &nbsp;<?=$products[0]['selling_price']?>
			<hr>
			<input type="submit" name="submit" value="Delete">
			<a href="deleteCheck.php?name=<?= $name?>"></a>
		</fieldset>
	</form>
	
</body>
</html>
