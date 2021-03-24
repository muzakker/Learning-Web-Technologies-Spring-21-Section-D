<?php
	
	require_once('db.php');


	function insertProduct($product){
		$conn = getConnection();
		$sql = "insert into product values('{$product['name']}', '{$product['buying_price']}', '{$product['selling_price']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getProduct($name){
		$conn = getConnection();
		$sql = "select * from product where name='{$name}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllProduct(){
		$conn = getConnection();
		$sql = "select * from product";
		$result = mysqli_query($conn, $sql);
		$products = [];
		//$profit = [];
		//$value = 0;
		//$count = 1;
		
		while ($row = mysqli_fetch_assoc($result)) {
			
			/*if($row[$count]['buying_price'] >= $row[$count]['selling_price']){
				$value = $row[$count]['buying_price'] - $row[$count]['selling_price'];
			} else{
				$value = $row[$count]['selling_price'] - $row[$count]['buying_price'];
			}*/
			//$count++;
			
			//$value = $row[$count]['selling_price'] - $row[$count]['buying_price'];
			array_push($products, $row);
			//array_push($profit, $value);
		}
		
		return $products;
	}

	function updateProduct($product){
		$conn = getConnection();
		$sql = "update product set name='{$product['name']}', buying_price='{$product['buying_price']}', selling_price='{$product['selling_price']}' where name={$product['name']}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteProduct($name){
		$conn = getConnection();
		$sql = "delete from product where name={$name}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>