<?php
	
	$title = "Display Product";
	include('header.php');
	require_once('productDB.php');
	$products = getAllProduct();

?>

<body>
	<div id="main_content">
	
		<fieldset style="width:230px">
			<legend>DISPLAY</legend>
			<table border="1">
				<tr>
					<td>NAME</td>
					<td>PROFIT</td>
					<td></td>
				</tr>
				
				<?php for($i=0; $i < count($products); $i++){ ?>
				<tr>
					<td><?=$products[$i]['name']?></td>
					<td><?=($products[$i]['selling_price'] - $products[$i]['buying_price'])?></td>
					<td>
						<a href="edit.php?name=<?= $products[$i]['name']?>"> edit </a> |
						<a href="delete.php?name=<?= $products[$i]['name']?>"> delete </a> 
					</td>
				</tr>

				<?php } ?>
			</table>
		</fieldset>
	</div>

</body>
</html>