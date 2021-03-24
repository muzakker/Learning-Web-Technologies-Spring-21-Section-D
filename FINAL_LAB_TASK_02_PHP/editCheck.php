<?php

	require_once('productDB.php');
	
	if(isset($_POST['submit'])){

		$name 				= $_POST['name'];
		$buying_price 		= $_POST['buying_price'];
		$selling_price 		= $_POST['selling_price'];
		
		if($name == "" || $buying_price == "" || $selling_price == ""){
			echo "incomplete information...please try again!";
			
		}else{

			$product = [
							'name'				=>$name, 
							'buying_price'		=>$buying_price, 
							'selling_price'		=>$selling_price
						];

			updateProduct($product);
			header('location: display.php');
				
		}
	}
?>
