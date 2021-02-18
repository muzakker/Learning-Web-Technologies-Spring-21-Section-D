<?php

if (isset($_POST['submit'])) {

	$name = $_POST['myname'];

	if ($name == "") {
		echo "null submission...";
	} else {
		echo "<b>Name: </b>".$name;
	}
} else {
	echo "invalid request...";
}

?>