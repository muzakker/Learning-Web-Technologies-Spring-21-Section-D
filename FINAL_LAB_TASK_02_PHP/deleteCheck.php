<?php
	require_once('productDB.php');
	if(isset($_POST['submit'])){
		$name = $_GET['$name'];
		deleteProduct($name);
		header('location: display.php');
	}
?>	